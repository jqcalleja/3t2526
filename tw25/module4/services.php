<?php
$title = "Using Predefined Functions - Services";
$data = array(
    "Repairs" => 12323.45213,
    "Sales" => 0.000000,
    "Quotations/Estimates" => 0.000000,
    "Trades" => 350.9822
);
// unset($data);
require('include/header.php')
?>
        <main class="main-content">
            <section>
                <h2>Services</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium eos maxime quod, facere quam fugit recusandae velit minus qui blanditiis eaque similique quos modi amet dolore sunt sed! Reprehenderit, fuga.</p>
                <p>
                    <ul>
                        <?php foreach($data as $key => $value): ?>
                        <li><?= $key . " - Php. ".  number_format($value,2) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium eos maxime quod, facere quam fugit recusandae velit minus qui blanditiis eaque similique quos modi amet dolore sunt sed! Reprehenderit, fuga.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non amet excepturi itaque nemo, quibusdam similique aut quas labore ea et, saepe inventore quaerat iusto sint. Error delectus aut sequi aliquid!</p>
            </section>
        </main>
<?php
require('include/footer.php')
?>