<?php if(isset($_SESSION)){
    session_destroy();
} ?>

<?php include_once 'header.php' ?>

<?php
if (isset($_POST['submit_login'])) {
    login($_POST['user_email'], $_POST['user_password']);
}
?>


<div class="container-fluid w-100 p-0 login-page-container">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="login-logo-container">
                <a href="/accessability"><img src="src/logo-epsi.png" alt="logo EPSI" class="w-100"></a>
            </div>
            <div class="login-left d-flex justify-content-center align-items-center">
                <img src="src/login_img.svg" alt="login image" class="w-50 login-img">
            </div>
        </div>
        <div class="col-md-6 col-xs-12 px-0">
            <div class="login-right">
                <div class="login-form d-flex justify-content-center align-items-center h-100 flex-column">
                    <h3 class="login-title text-center mb-2">Access<span class="text-uppercase">A</span>bility</h3>
                    <p class="login-subtitle text-center mb-4">La plateforme d'apprentissage conçue pour les personnes malvoyantes</p>
                    <div class="form-container rounded p-5">
                        <form class="form" action="#" method="POST">

                            <input type="email" class="form-control mb-2" placeholder="Email" name="user_email" value="">
                            <input type="password" class="form-control mb-2" placeholder="Mot de passe" name="user_password" value="">
                            <button type="submit" name="submit_login" class="btn w-100 login-btn rounded text-white mb-3">Se connecter</button>
                        </form>
                        <div class="signup-group mx-auto text-center">
                            <p class="d-inline-block mb-0">Pas encore inscrit ?</p>
                            <a href="/accessability/signup.php" class="text-decoration-none">Créer un compte</a>
                            <div class="small-divider"></div>
                            <a href="#" class="text-decoration-none"><small>Mot de passe oublié ?</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php' ?>