<?php

include_once 'header.php';
$user_id = $_SESSION['user_id'];
$course_id = $_GET['id'];

$course = getSingleCourse($course_id);

?>


<section id="single_course">
    <div class="container">
        <main id="single_course_main_content" class="main-container">
            <a href="courses.php" class="btn btn-primary btn-retour-cours w-100 btn-action-custom mb-4 shadow-sm">RETOUR AUX COURS</a>

            <h1 id="course_title_custom" class="text-center mb-4"><?= $course['course_title'] ?></h1>
            <hr>
            <div class="iframe-container mb-4">
                <iframe width="100%" height="500" src="<?= $course['course_video'] ?>">
                </iframe>
                <!-- <video width="100%" height="500" controls>
                        <source src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        Your browser does not support the video tag.
                    </video> -->
            </div>
            <div class="inside-container">
                <h3 class="course-subtitle-custom mb-2 mt-4"><?= $course['course_subtitle_1'] ?></h3>
                <hr>
                <p class="para-course-1 para-custom">
                    <?= $course['course_text'] ?>
                </p>
                <div class="img-inside-container">
                    <img src="src/<?= $course['course_img_inside'] ?>" alt="Image code" class="w-100 mb-4 shadow-sm">
                </div>
                <h3 class="course-subtitle-custom mb-2 mt-4"><?= $course['course_subtitle_2'] ?></h3>
                <hr>
                <p class="para-course-2 para-custom">
                <?= $course['course_text_2'] ?>
                </p>

                <h3 class="course-subtitle-custom mb-2 mt-4"><?= $course['course_subtitle_audio'] ?></h3>
                <hr>
                <div class="podcast w-100">
                    <iframe src="<?= $course['course_audio'] ?>" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" class="w-100"></iframe>
                </div>
            </div>
        </main>
    </div>
</section>


<?php include_once 'footer.php' ?>