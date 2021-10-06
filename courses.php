<?php
include_once 'header.php';
$user_id = $_SESSION['user_id'];

// if (@$_POST['add']) {
//     setCourseInDB($course_id);
// }

$listCourses = listCourses();
$listCoursesById = listCoursesById($user_id);

?>

<div class="course-bar">

    <i class="fas fa-cogs"></i>

</div>

<div class="container ">
    <div class="follow-courses my-3">
        <div class="course-title">Cours suivis
            <div class="row">
                <?php foreach ($listCoursesById as $row) {?>
                <div class="col-6 col-md-3 col-lg-2 my-5">
                    <div class="card mx-10">
                        <div class="card_img">
                            <img src="src/" class="card-img-top" alt="<?php echo $row['course_title']; ?>">
                        </div>
                        <div class="card-body justify-content-center">
                            <?php echo $row['course_title']; ?>
                        </div>
                        <form action="" method="POST">
                            <a href="singlecourse.php?id=<?php echo $row['course_id'] ?>" class="btn btn-primary"
                                name="add" value="<?php echo $row['course_id']; ?>">Allez au cours</a>
                        </form>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="available-courses">
        <div class="course-title">Cours disponibles
            <div class="row">
                <?php foreach ($listCourses as $row) {?>
                <div class="col-6 col-md-3 my-5">
                    <div class="card px-2 py-2">
                        <div class="card_img">
                            <img src="src/<?php echo $row['course_img_principal']; ?>" class="card-img-top" alt="">
                        </div>
                        <div class="card-body justify-content-center">
                            <?php echo $row['course_title']; ?>
                        </div>
                        <div class="card_button">
                            <a href="singlecourse.php?id=<?php echo $row['course_id'] ?>" class="btn btn-primary"
                                name="add">Allez au cours</a>
                        </div>
                    </div>
                </div>

                <?php }?>
            </div>
        </div>
    </div>

</div>

<?php include_once 'footer.php';?>