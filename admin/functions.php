<?php
session_start();

// Login
function login($userEmail, $userPassword)
{
    global $connection;

    $query = "SELECT * FROM users WHERE user_email = '$userEmail' LIMIT 1";
    $result = $connection->prepare($query);
    $result->execute();
    $data = $result->fetch();

    if ($data) {
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['user_lastname'] = $data['user_lastname'];
        $_SESSION['user_firstname'] = $data['user_firstname'];
        $_SESSION['user_email'] = $data['user_email'];
        $_SESSION['user_password'] = $data['user_password'];
        $_SESSION['user_role'] = $data['user_role'];

        // Verify password
        if (password_verify($userPassword, $data['user_password'])) {
            // Admin
            if ($_SESSION['user_role'] == 5) {
                header('Location: admin/index.php');
            }
            // Visitor
            if ($_SESSION['user_role'] == 1) {
                header('Location: ./courses.php?user_id=' . $_SESSION['user_id']);
            }
        } else {
            echo "Connexion echouée";
        }
    } else {
        session_destroy();
    }
}

// Create account
function signUp($userEmail, $userPassword)
{
    global $connection;

    // Encrypt password
    $encrypted_password = password_hash($userPassword, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (user_email, user_password) VALUES ( ?, ?)";
    $result = $connection->prepare($query);
    $result->execute(array(
        $userEmail,
        $encrypted_password
    ));

    header('Location: login.php');
}

//Update Database
function updateDB($fontname, $fontsize, $fontcolor, $eltcolor1, $eltcolor2, $eltcolor3, $bgcolor, $linespace)
{
    
    global $connection;
    
    $user_id = $_SESSION['user_id'];
    
    $query = "UPDATE users SET user_fontfamily = '".$fontname."',
                                user_fontsize = '".$fontsize."',
                                user_fontcolor = '".$fontcolor."',
                                user_eltcolor_1	= '".$eltcolor1."',
                                user_eltcolor_2	= '".$eltcolor2."',
                                user_eltcolor_3	= '".$eltcolor3."',
                                user_bgcolor = '".$bgcolor."',
                                user_linespace = '".$linespace."'
     WHERE user_id = '".$user_id."' ";
    $result = $connection->query($query);
    
    header('Location: preferences.php');
}

//List Courses
function listCourses()
{
    global $connection;
    $select = "SELECT * FROM courses";
    $request = $connection->prepare($select);
    $request->execute();
    return $request->fetchAll();
}

//Set Course in DB
function setCourseinDb($user_id, $course_id)
{
    global $connection;

    $select = "SELECT * FROM users_courses WHERE user_id = ? AND course_id = ?";
    $request = $connection->prepare($select);
    $request->execute(array($user_id, $course_id));
    $data = $request->fetchAll();

    if (!$data) {

        $insert = "INSERT INTO users_courses(user_id,course_id ) VALUES (?,?)";
        $request = $connection->prepare($insert);
        $request->execute(array($user_id, $course_id));

        header('Location: singlecourse.php?course_id=' . $course_id);
    } else {

        $delete="DELETE FROM users_courses WHERE user_id = ? AND course_id = ?";
        $request = $connection->prepare($delete);
        $request->execute(array($user_id, $course_id));

        $insert = "INSERT INTO users_courses(user_id,course_id ) VALUES (?,?)";
        $request = $connection->prepare($insert);
        $request->execute(array($user_id, $course_id));

        header('Location: singlecourse.php?course_id=' . $course_id);
    }
}

//List Courses By Id
function listCoursesById($id)
{
    global $connection;
    $select = "SELECT * 
                FROM users_courses 
                INNER JOIN courses
                ON users_courses.course_id = courses.course_id 
                WHERE user_id=?
                ORDER BY user_course_id DESC LIMIT 6";
    $request = $connection->prepare($select);
    $request->execute(
        array(
            $id
        )
    );
    return $request->fetchAll();
}

// Get single course
function getSingleCourse($course_id)
{
    global $connection;
    $select = "SELECT * FROM courses WHERE course_id=?";
    $request = $connection->prepare($select);
    $request->execute(
        array(
            $course_id
        )
    );
    return $request->fetch();
}