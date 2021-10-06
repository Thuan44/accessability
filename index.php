<?php include_once 'header.php' ?>

<?php var_dump($_SESSION['user_id']); ?>

<section id="homepage">
    <div class="homepage-logo-container">
        <a href="/accessability"><img src="src/logo-lookable.png" alt="logo Lookable" class="w-100"></a>
    </div>
    <main id="home_main_content">
        <div class="row justify-content-around align-items-center mb-5">
            <div class="col-6 main-content-text p-5">
                <h1><span style="color: #fdce37;">L</span>ook<span style="color: #fdce37;">A</span>ble</h1>
                <p class="lead mb-4">La plateforme d'apprentissage conçue pour les personnes malvoyantes</p>
                <p>Notre outil, adaptable selon les besoins de l'utilisateur, apporte une solution numérique
                    personnalisée en fonction des différents profils de personnes malvoyantes, leur conférant une
                    expérience agréable et leur offrant une complète autonomie lors de leur apprentissage.</p>
            </div>
            <div class="col-6 main-content-img p-5">
                <div class="main-content-img-container">
                    <img class="main-content-img w-100" src="src/homepage_img.svg" alt="Image page d'accueil">
                </div>
            </div>
        </div>

        <?php if (!isset($_SESSION['user_id'])) {  ?>
            <div class="btn-authentication-container d-flex justify-content-center align-items-center">
                <a href="login.php" class="btn btn-primary me-3 btn-authentication">Se connecter</a>
                <a href="signup.php" class="btn btn-primary btn-authentication">S'inscrire</a>
            </div>
        <?php } else {  ?>
            <div class="btn-authentication-container d-flex justify-content-center align-items-center">
                <a href="courses.php" class="btn btn-primary btn-logged-user me-3 btn-authentication">Tous les cours</a>
                <a href="logout.php" class="btn btn-primary btn-logged-user me-3 btn-authentication">Se déconnecter</a>
            </div>

        <?php }  ?>
    </main>
</section>

<?php include_once 'footer.php' ?>