<?php

include_once 'header.php';
$user_id = $_GET["id"];

$listCourses = listCourses();
$listCoursesById = listCoursesById($user_id);

?>

<div class="course-bar">


    <div class="mx-auto"> Bonjour <?= @$_SESSION["user_firstname"] ?></div>

</div>

<div class="follow-courses">
    <div class="course-title">Cours suivis
        <div class="row">
            <?php foreach ($listCoursesById as $row) { ?>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card mx-10">
                        <div class="card_img">
                            <img src="src/" class="card-img-top" alt="">
                        </div>
                        <div class="card-body justify-content-center">
                            <?= $row["course_title"] ?>
                        </div>
                        <div class="card_button">
                            <a href="singlecourse.php?id=<?= $row['course_id'] ?>" class="btn btn-primary">Allez au cours</a>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="available-courses">
    <div class="course-title">Cours disponibles
        <div class="row">
            <?php foreach ($listCourses as $row) { ?>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card px-2 py-2">
                        <div class="card_img">
                            <img src="src/<?= $row['course_img'] ?>" class="card-img-top" alt="">
                        </div>
                        <div class="card-body justify-content-center">
                            <?= $row["course_title"] ?>
                        </div>
                        <div class="card_button">
                            <a href="singlecourse.php?id=<?= $row['course_id'] ?>" class="btn btn-primary">Allez au cours</a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>



<?php include_once 'footer.php' ?>