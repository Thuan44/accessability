<?php
include_once 'header.php';
$user_id = @$_SESSION['user_id'];
$course_id = @$_POST['course_id'];

if (@$_POST['add']) {
    setCourseInDb($user_id, $course_id);
}

$listCourses = listCourses();
$listCoursesById = listCoursesById($user_id);

?>

<!-- Btn Logout and Preferences -->
<div class="course-bar">
    <div class="course-bar-left">
        <a href="logout.php">
            <i class="fas fa-power-off fa-6x"></i>
            </i>
        </a>
    </div>

    <div class="course-bar-right">
        <a href="preferences.php">
            <i class="fas fa-cogs fa-6x">
            </i>
        </a>
    </div>
</div>

<div class="container ">



    <!-- List of Follows Courses -->
    <div class="follow-courses my-3">
        <div class="course-title">Cours suivis
        </div>

        <div class="row course-list">
            <?php foreach ($listCoursesById as $row) { ?>
            <div class="col-6 col-md-3 col-lg-2 my-2">
                <div class="card mt-3 px-2 py-2 align-items-center ">
                    <div class="card_img">
                        <img src="src/<?php echo $row['course_img_principal']; ?>" class="follow-card-img-top" alt="">
                    </div>
                    <div class="follow-card-body justify-content-center my-2">
                        <?php echo $row['course_title']; ?>
                    </div>
                    <form action="" method="post">
                        <input type="submit" class="btn btn-primary follow-course_items my-2" name="add"" value=" Aller
                            au cours">
                        <input type="hidden" name="course_id" value="<?= $row["course_id"] ?>">
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>


    <!-- List of Available Courses -->
    <div class="available-courses mt-5">
        <div class="course-title">Cours disponibles
        </div>

        <div class="row">
            <?php foreach ($listCourses as $row) { ?>
            <div class="col-6 col-md-3 my-3">
                <div class="card px-2 py-2 align-items-center ">
                    <div class="card_img">
                        <img src="src/<?php echo $row['course_img_principal']; ?>" class="card-img-top" alt="">
                    </div>
                    <div class="card-body justify-content-center">
                        <?php echo $row['course_title']; ?>
                    </div>
                    <div class="card_button">
                        <input type="submit" class="btn btn-primary course_items" name="add"" value=" Aller au cours">
                        <input type="hidden" name="course_id" value="<?= $row["course_id"] ?>">
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>

    </div>

    <?php include_once 'footer.php'; ?>