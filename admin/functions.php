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
                header('Location: ./index.php');
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
function updateDB()
{
    global $connection;

    $user_id = $_SESSION['user_id'];
    //'".$user_id."'
    $query = "UPDATE users SET user_fontsize = '".$_POST['fontsize']."',
                                user_fontcolor = '".$_POST['fontcolor']."'
     WHERE user_id = '".$user_id."' ";
    $result = $connection->query($query);

    header('Location: settings.php');
}