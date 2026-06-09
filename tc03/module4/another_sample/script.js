/* ══════════════════════════════════════════
   THEME SWITCHING
   JS reads the clicked button's data-theme,
   sets it on <html>, updates ARIA + active class.
══════════════════════════════════════════ */
const html = document.documentElement;
const themeBtns = document.querySelectorAll('.theme-btn');

themeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const theme = btn.dataset.theme;
        html.setAttribute('data-theme', theme);       // 1. swap CSS variables
        themeBtns.forEach(b => {
            b.classList.toggle('active', b === btn);    // 2. highlight active btn
            b.setAttribute('aria-pressed', b === btn);  // 3. accessibility
        });
    });
});


/* ══════════════════════════════════════════
   HELPERS — set field state
══════════════════════════════════════════ */
const CHECK_SVG = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--success)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>`;
const CROSS_SVG = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--error)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>`;

function setFieldState(inputEl, iconEl, msgEl, state, message) {
    // state: 'idle' | 'valid' | 'invalid'
    inputEl.className = state === 'idle' ? '' : state;
    msgEl.className = 'helper ' + (state === 'valid' ? 'success' : state === 'invalid' ? 'error' : '');
    msgEl.textContent = message;
    if (iconEl) {
        iconEl.innerHTML = state === 'valid' ? CHECK_SVG : state === 'invalid' ? CROSS_SVG : '';
        iconEl.classList.toggle('visible', state !== 'idle');
    }
}


/* ══════════════════════════════════════════
   VALIDATION STATE MAP
══════════════════════════════════════════ */
const valid = { name: false, email: false, phone: false, password: false, confirm: false };

function checkAllValid() {
    document.getElementById('submit-btn').disabled = !Object.values(valid).every(Boolean);
}


/* ══════════════════════════════════════════
   NAME VALIDATION
══════════════════════════════════════════ */
const nameInput = document.getElementById('name');
nameInput.addEventListener('input', () => {
    const v = nameInput.value.trim();
    if (!v) {
        setFieldState(nameInput, document.getElementById('name-icon'), document.getElementById('name-msg'), 'idle', '');
        valid.name = false;
    } else if (v.length < 2) {
        setFieldState(nameInput, document.getElementById('name-icon'), document.getElementById('name-msg'), 'invalid', 'Name is too short.');
        valid.name = false;
    } else {
        setFieldState(nameInput, document.getElementById('name-icon'), document.getElementById('name-msg'), 'valid', 'Looks good!');
        valid.name = true;
    }
    checkAllValid();
});


/* ══════════════════════════════════════════
   EMAIL VALIDATION  (regex)
══════════════════════════════════════════ */
const emailInput = document.getElementById('email');
const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

emailInput.addEventListener('input', () => {
    const v = emailInput.value.trim();
    if (!v) {
        setFieldState(emailInput, document.getElementById('email-icon'), document.getElementById('email-msg'), 'idle', '');
        valid.email = false;
    } else if (!EMAIL_RE.test(v)) {
        setFieldState(emailInput, document.getElementById('email-icon'), document.getElementById('email-msg'), 'invalid', 'Enter a valid email address.');
        valid.email = false;
    } else {
        setFieldState(emailInput, document.getElementById('email-icon'), document.getElementById('email-msg'), 'valid', 'Email looks valid!');
        valid.email = true;
    }
    checkAllValid();
});


/* ══════════════════════════════════════════
   PHONE VALIDATION  (flexible international)
══════════════════════════════════════════ */
const phoneInput = document.getElementById('phone');
const PHONE_RE = /^[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[(]?[0-9]{1,3}[)]?[-\s\.]?[0-9]{3,4}[-\s\.]?[0-9]{3,4}$/;

phoneInput.addEventListener('input', () => {
    const v = phoneInput.value.trim();
    if (!v) {
        setFieldState(phoneInput, document.getElementById('phone-icon'), document.getElementById('phone-msg'), 'idle', '');
        valid.phone = false;
    } else if (!PHONE_RE.test(v.replace(/\s/g, ''))) {
        setFieldState(phoneInput, document.getElementById('phone-icon'), document.getElementById('phone-msg'), 'invalid', 'Enter a valid phone number.');
        valid.phone = false;
    } else {
        setFieldState(phoneInput, document.getElementById('phone-icon'), document.getElementById('phone-msg'), 'valid', 'Phone number accepted.');
        valid.phone = true;
    }
    checkAllValid();
});


/* ══════════════════════════════════════════
   PASSWORD — STRENGTH METER + VALIDATION
══════════════════════════════════════════ */
const passwordInput = document.getElementById('password');
const strengthWrap = document.getElementById('strength-wrap');
const strengthLabel = document.getElementById('strength-label');
const bars = [1, 2, 3, 4].map(n => document.getElementById('bar' + n));

const LEVELS = [
    { label: 'Weak', cls: 'weak' },
    { label: 'Fair', cls: 'fair' },
    { label: 'Good', cls: 'good' },
    { label: 'Strong', cls: 'strong' },
];

function scorePassword(pw) {
    let s = 0;
    if (pw.length >= 8) s++;
    if (pw.length >= 12) s++;
    if (/[A-Z]/.test(pw) && /[a-z]/.test(pw)) s++;
    if (/[0-9]/.test(pw)) s++;
    if (/[^A-Za-z0-9]/.test(pw)) s++;
    return Math.min(3, Math.floor(s / 1.3));  // maps 0-5 → 0-3
}

passwordInput.addEventListener('input', () => {
    const pw = passwordInput.value;

    if (!pw) {
        strengthWrap.style.display = 'none';
        setFieldState(passwordInput, null, document.getElementById('password-msg'), 'idle', '');
        valid.password = false;
        checkAllValid();
        revalidateConfirm();
        return;
    }

    strengthWrap.style.display = 'block';
    const idx = scorePassword(pw);
    const level = LEVELS[idx];
    bars.forEach((b, i) => {
        b.className = 'bar ' + (i <= idx ? level.cls : '');
    });
    strengthLabel.textContent = level.label;

    if (pw.length < 8) {
        setFieldState(passwordInput, null, document.getElementById('password-msg'), 'invalid', 'Password must be at least 8 characters.');
        valid.password = false;
    } else {
        setFieldState(passwordInput, null, document.getElementById('password-msg'), 'valid', 'Password length OK.');
        valid.password = true;
    }
    checkAllValid();
    revalidateConfirm();
});


/* ══════════════════════════════════════════
   CONFIRM PASSWORD
══════════════════════════════════════════ */
const confirmInput = document.getElementById('confirm');

function revalidateConfirm() {
    const c = confirmInput.value;
    if (!c) return;
    if (c === passwordInput.value) {
        setFieldState(confirmInput, null, document.getElementById('confirm-msg'), 'valid', 'Passwords match!');
        valid.confirm = true;
    } else {
        setFieldState(confirmInput, null, document.getElementById('confirm-msg'), 'invalid', 'Passwords do not match.');
        valid.confirm = false;
    }
    checkAllValid();
}

confirmInput.addEventListener('input', revalidateConfirm);


/* ══════════════════════════════════════════
   SHOW / HIDE PASSWORD (toggle)
══════════════════════════════════════════ */
function makeToggle(btnId, inputId, openId, closedId) {
    const btn = document.getElementById(btnId);
    const input = document.getElementById(inputId);
    const eyeOn = document.getElementById(openId);
    const eyeOff = document.getElementById(closedId);
    let visible = false;

    btn.addEventListener('click', () => {
        visible = !visible;
        input.type = visible ? 'text' : 'password';
        eyeOn.style.display = visible ? 'none' : 'block';
        eyeOff.style.display = visible ? 'block' : 'none';
        btn.setAttribute('aria-label', visible ? 'Hide password' : 'Show password');
    });
}

makeToggle('toggle-pw', 'password', 'eye-open', 'eye-closed');
makeToggle('toggle-confirm', 'confirm', 'eye-open2', 'eye-closed2');


/* ══════════════════════════════════════════
   RIPPLE EFFECT on button click
══════════════════════════════════════════ */
document.getElementById('submit-btn').addEventListener('click', function (e) {
    if (this.disabled) return;
    const r = document.createElement('span');
    const d = Math.max(this.clientWidth, this.clientHeight);
    const rect = this.getBoundingClientRect();
    r.className = 'ripple';
    r.style.cssText = `width:${d}px;height:${d}px;left:${e.clientX - rect.left - d / 2}px;top:${e.clientY - rect.top - d / 2}px`;
    this.appendChild(r);
    r.addEventListener('animationend', () => r.remove());
    setTimeout(showSuccess, 300);
});


/* ══════════════════════════════════════════
   SUCCESS STATE
══════════════════════════════════════════ */
function showSuccess() {
    document.getElementById('form-view').style.display = 'none';
    const sv = document.getElementById('success-view');
    sv.classList.add('show');
    document.getElementById('success-name').textContent = '👤 ' + document.getElementById('name').value.trim();
    document.getElementById('success-email').textContent = '✉️ ' + document.getElementById('email').value.trim();
}

document.getElementById('reset-btn').addEventListener('click', () => {
    ['name', 'email', 'phone', 'password', 'confirm'].forEach(id => {
        const el = document.getElementById(id);
        el.value = '';
        el.className = '';
    });
    ['name', 'email', 'phone', 'password', 'confirm'].forEach(id => {
        const msg = document.getElementById(id + '-msg');
        if (msg) { msg.textContent = ''; msg.className = 'helper'; }
    });
    ['name', 'email', 'phone'].forEach(id => {
        const ico = document.getElementById(id + '-icon');
        if (ico) { ico.innerHTML = ''; ico.classList.remove('visible'); }
    });
    strengthWrap.style.display = 'none';
    Object.keys(valid).forEach(k => valid[k] = false);
    document.getElementById('submit-btn').disabled = true;
    document.getElementById('success-view').classList.remove('show');
    document.getElementById('form-view').style.display = 'block';
});