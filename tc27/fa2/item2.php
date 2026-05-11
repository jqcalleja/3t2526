<?php include("header.php"); ?>
<?php 
    function get_rank($grade = 100) {
        if(isset($_GET['grade'])) {
            $grade = $_GET['grade'];
        }

        if ($grade >= 93) {
            return "A";
        } else if ($grade >= 90) {
            return "A-";
        } else if ($grade >= 87) {
            return "B+";
        } else if ($grade >= 83) {
            return "B";
        } else if ($grade >= 80) {
            return "B-";
        } else if ($grade >= 77) {
            return "C+";
        } else if ($grade >= 73) {
            return "C";
        } else if ($grade >= 70) {
            return "C-";
        } else if ($grade >= 67) {
            return "D+";
        } else if ($grade >= 63) {
            return "D";
        } else if ($grade >= 60) {
            return "D-";
        } else {
            return "F";
        }
    }

    function get_image($grade = 100) {
        if(isset($_GET['grade'])) {
            $grade = $_GET['grade'];
        }

        if ($grade >= 90) {
            return "5.png";
        } else if ($grade >= 80) {
            return "4.png";
        } else if ($grade >= 73) {
            return "3.png";
        } else if ($grade >= 67) {
            return "2.png";
        } else {
            return "1.png";
        }
    }
?>
<div class="grade-container">
    <div class="grade-card">
        <div class="name">
            <h3>
                <?= isset($_GET['name'])?$_GET['name']:"Student Name"; ?>
            </h3>
        </div>
        
        <div class="grade-data">
            <div class="data">
                <h4>Rank</h4>
                <div class="value">
                    <p><?= get_rank(); ?></p>
                </div>
            </div>
            <div class="data">
                <h4>Grade</h4>
                <div class="value">
                    <p><?= isset($_GET['grade'])?$_GET['grade']: 100; ?></p>
                </div>
            </div>
            <div class="data">
                <div class="image">
                    <img src="images\<?= get_image(); ?>" alt="Grade emoji...">
                </div>
            </div>
        </div>
    </div>
    <a href="index.php"><div class="back">Go Back</div></a>
</div>

<?php include("footer.php"); ?>