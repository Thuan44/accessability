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
                header('Location: ./courses.php?user_id='. $_SESSION['user_id']);
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


function listCourses()
{
    global $connection;
    $select = "SELECT * FROM courses";
    $request = $connection->prepare($select);
    $request->execute();
    return $request->fetchAll();
}

function listCoursesById($id)
{
    global $connection;
    $select = "SELECT * FROM users_courses WHERE user_id=?";
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