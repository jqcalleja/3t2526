<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - SAMPLE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Resume data
        $name = "Joseph Ryan Q. Calleja";
        $title = "Full Stack Developer";
        $summary = "Experienced web developer with 5+ years of expertise in PHP, JavaScript, and modern web frameworks.";

        $experience = [
            [
                "company" => "Tech Corp",
                "position" => "Senior Developer",
                "duration" => "2021 - Present",
                "description" => "Led development of scalable web applications"
            ],
            [
                "company" => "Web Solutions Inc",
                "position" => "Developer",
                "duration" => "2019 - 2021",
                "description" => "Built and maintained client websites"
            ]
        ];

        $skills = ["PHP", "JavaScript", "React", "MySQL", "CSS", "HTML", "Git"];

        $education = [
            "Bachelor of Science in Information Technology - Cagayan State University (2012)",
            "Full Stack Web Development Bootcamp (2018)"
        ];

        $phone = "+63-912-345678";
        $email = "jqcalleja@feutech.edu.ph";
        $location = "Manila, Philippines";
        $website = "mywebsite.web.ph";
    ?>
    <div class="resume-container">
        <!-- Header Row -->
        <div class="header">
            <h1><?php echo $name; ?></h1>
            <p><?php echo $title; ?></p>
        </div>

        <!-- Content Row - Three Columns -->
        <div class="content">
            <!-- Experience Column -->
            <div class="column">
                <h2>Experience</h2>
                <?php foreach ($experience as $job): ?>
                    <h3 class="position-title"><?php echo $job['position']; ?></h3>
                    <p><?php echo $job['company']; ?></p>
                    <p class="duration"><?php echo $job['duration']; ?></p>
                    <p><?php echo $job['description']; ?></p>
                <?php endforeach; ?>
            </div>

            <!-- Skills Column -->
            <div class="column">
                <h2>Skills</h2>
                <div>
                    <?php foreach ($skills as $skill): ?>
                        <span class="skill-tag"><?php echo $skill; ?></span>
                    <?php endforeach; ?>
                </div>
                <h2 style="margin-top: 25px;">Education</h2>
                <?php foreach ($education as $edu): ?>
                    <p><?php echo $edu; ?></p>
                <?php endforeach; ?>
            </div>

            <!-- Summary Column -->
            <div class="column">
                <h2>Summary</h2>
                <p><?php echo $summary; ?></p>
            </div>
        </div>

        <!-- Footer Row - Contact Details -->
        <div class="footer">
            <span class="contact-item"><strong>Phone:</strong> <?php echo $phone; ?></span>
            <span class="contact-item"><strong>Email:</strong> <?php echo $email; ?></span>
            <span class="contact-item"><strong>Location:</strong> <?php echo $location; ?></span>
            <span class="contact-item"><strong>Website:</strong> <?php echo $website; ?></span>
        </div>
    </div>
</body>
</html>