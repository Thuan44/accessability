<?php

include_once 'header.php';

// If user is not connected
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

$user_id = $_SESSION['user_id'];

$course_id = $_GET['course_id'];
$course = getSingleCourse($course_id);
updateSessionPreferences($user_id);


//===== CHANGE STYLE ACCORDING TO USER PREFERENCES =====//

// Font-family
if (!is_null($_SESSION['user_fontfamily'])) {
    echo "<style type='text/css'>
        #single_course {
            font-family: " . $_SESSION['user_fontfamily'] . ";  
        }
        </style>";
}

// Font-size
if (!is_null($_SESSION['user_fontsize'])) {
    echo "<style type='text/css'>
        #single_course p {
            font-size: " . $_SESSION['user_fontsize'] . "px;  
        }
        </style>";
}

// Font color
if (!is_null($_SESSION['user_fontcolor'])) {
    echo "<style type='text/css'>
        #single_course p {
            color: " . $_SESSION['user_fontcolor'] . ";  
        }

        #single_course h1, #single_course h3 {
            color: " . $_SESSION['user_fontcolor'] . ";  
        }
        </style>";
}

// Link and title color
if (!is_null($_SESSION['user_eltcolor_1'])) {
    echo "<style type='text/css'>
        #single_course h1, #single_course h3{
            color: " . $_SESSION['user_eltcolor_1'] . ";  
        }
        </style>";
}

// Button color
if (!is_null($_SESSION['user_eltcolor_2'])) {
    echo "<style type='text/css'>
        .btn-retour-cours{
            background: " . $_SESSION['user_eltcolor_2'] . " !important;
        }
        
        .homepage-logo-container a{
            background: none !important;
        }
        </style>";
}

// Error color
if (!is_null($_SESSION['user_eltcolor_3'])) {
    echo "<style type='text/css'>
        #single_course a{
            color: " . $_SESSION['user_eltcolor_3'] . ";
        }
        </style>";
}

// Background color
if (!is_null($_SESSION['user_bgcolor'])) {
    echo "<style type='text/css'>
        #single_course {
            background: " . $_SESSION['user_bgcolor'] . ";
        }
        </style>";
}

// Line height
if (!is_null($_SESSION['user_linespace'])) {
    echo "<style type='text/css'>
        #single_course p {
            line-height: " . $_SESSION['user_linespace'] . "% ;
        }
        </style>";
}

//===== END STYLE CHANGES =====//

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
        <a href="preferences.php?course_id=<?php echo $course_id ?>">
            <i class="fas fa-cogs fa-6x">
            </i>
        </a>
    </div>
</div>

<section id="single_course">
    <div class="homepage-logo-container">
        <a href="/accessability"><img src="src/logo-lookable.png" alt="logo Lookable" class="w-100"></a>
    </div>
    <div class="container">
        <main id="single_course_main_content" class="main-container">
            <div class="btn-retour-cours-container w-100 d-flex justify-content-center mb-5">
                <a href="courses.php" class="btn btn-primary btn-retour-cours btn-action-custom mb-4 shadow-sm">Retour aux cours</a>
            </div>

            <h1 id="course_title_custom" class="text-center mb-4"><?= $course['course_title'] ?></h1>
            <hr>
            <div class="iframe-container mb-4">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <div class="inside-container">
                <div class="audio-text">
                    <div class="audio-icon me-4">
                        <i class="fas fa-volume-up fa-4x "></i>
                    </div>
                    <div class="audio-explain">
                        <p style="font-size: 1.2rem;font-style: italic;line-height : 110%;" class="m-0">
                            Un <em style="font-weight: bold;">lecteur de texte</em> est disponible pour vous assister dans la lecture des paragraphes du cours.<br>
                            <em style="font-weight: bold;">Cliquez</em> sur un paragraphe pour d??marrer sa lecture.
                        </p>
                    </div>
                </div>
                <h3 class="course-subtitle-custom mb-2 mt-4"><?= $course['course_subtitle_1'] ?></h3>

                <hr>
                <p id="para-course-1" class="para-course-1 para-custom">
                    <?= $course['course_text'] ?>
                </p>
                <div class="img-inside-container mt-4">
                    <img id="zoom" data-zoom-image="src/code.jpg" src="src/<?= $course['course_img_inside'] ?>" alt="Image code" class="w-100 mb-4 shadow-sm">
                </div>
                <h3 class="course-subtitle-custom mb-2 mt-4"><?= $course['course_subtitle_2'] ?></h3>
                <hr>
                <p id="para-course-2" class="para-course-2 para-custom">
                    <?= $course['course_text_2'] ?>
                </p>

                <h3 class="course-subtitle-custom mb-2 mt-4"><?= $course['course_subtitle_audio'] ?></h3>
                <hr>
                <div class="podcast w-100">
                    <iframe src="<?= $course['course_audio'] ?>" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" class="w-100"></iframe>
                </div>
            </div>

            <div class="btn-retour-cours-container w-100 d-flex justify-content-center">
                <a href="courses.php" class="btn btn-primary btn-retour-cours btn-action-custom mb-4 shadow-sm">Retour aux cours</a>
            </div>
        </main>
    </div>
</section>


<?php include_once 'footer.php' ?>