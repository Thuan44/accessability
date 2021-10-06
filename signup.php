<?php include_once 'header.php' ?>

<?php
if (isset($_POST['submit_signup'])) {
    if ($_POST['user_password'] !== $_POST['password_confirmation']) {
        echo "Vos mots de passe ne correspondent pas";
    } else {
        signUp($_POST['user_email'], $_POST['user_password']);
    }
}
?>

<div class="container-fluid w-100 p-0 login-page-container">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="login-logo-container">
                <a href="/accessability"><img src="src/logo-epsi.png" alt="logo EPSI" class="w-100"></a>
            </div>
            <div class="login-left d-flex justify-content-center align-items-center">
                <img src="src/welcome.svg" alt="login image" class="w-50 login-img">
            </div>
        </div>
        <div class="col-md-6 col-xs-12 px-0">
            <div class="login-right">
                <div class="login-form d-flex justify-content-center align-items-center h-100 flex-column">
                    <h3 class="login-title text-center mb-2">Access<span class="text-uppercase">A</span>bility</h3>
                    <p class="signup-subtitle text-center mb-4">La plateforme d'apprentissage conçue pour les personnes
                        malvoyantes</p>
                    <div class="form-container rounded p-5">
                        <form class="form" action="#" method="POST">
                            <h4 class="text-center mb-3 signup-title">Créer un compte</h4>

                            <?php session_destroy(); ?>

                            <input type="email" class="form-control mb-2" placeholder="Email" name="user_email" value=""
                                required>
                            <input type="password" class="form-control mb-2" placeholder="Mot de passe"
                                name="user_password" value="" required>
                            <input type="password" class="form-control mb-2" placeholder="Confirmer mot de passe"
                                name="password_confirmation" value="" required>
                            <button type="submit" name="submit_signup"
                                class="btn w-100 login-btn rounded text-white mb-3">Créer compte</button>
                        </form>
                        <div class="signup-group mx-auto text-center">
                            <a href="/accessability/login.php" class="text-decoration-none"><i
                                    class="fas fa-arrow-left"></i> Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php' ?>