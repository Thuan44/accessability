<?php include_once 'header.php' ?>

<a name="#"></a>

<section id="homepage">
    <div class="homepage-logo-container">
        <a href="/accessability"><img src="src/logo-lookable.png" alt="logo Lookable" class="w-100"></a>
    </div>
    <main id="home_main_content">
        <div class="row justify-content-around align-items-center mb-5">
            <div class="col-6 main-content-text p-5">
                <h1 class="mb-4"><span style="color: #fdce37;">L</span>ook<span style="color: #fdce37;">A</span>ble</h1>
                <p class="lead mb-4 slogan"> accessible à toutes les personnes malvoyantes</p>
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

    <a href="#accessibility" id="anchor-accessibility"><i class="fas fa-universal-access"></i> Accessibilité</a>
    <a href="#partnership" id="anchor-partnership"><i class="far fa-handshake"></i> Nos partenaires</a>
</section>

<section id="accessibility" class="mt-5 mb-5">
    <div class="container">
        <h2 class="text-center accessibility-title">ccessibilité</h2>

        <h4>Qu'est-ce l'accessibilité numérique ?</h4>
        <div class="big-divider"></div>

        <p>
            Le site lookable.fr a été conçu afin d'être accessible à l'ensemble des personne malvoyantes. Ainsi, tout internaute doit pouvoir accéder à l'ensemble des contenus du site sans que son éventuel handicap ne constitue un obstacle.

            Afin d'être utilisable par les personnes en situation de handicap utilisant différents moyens de navigation (navigation sans souris, sans clavier), logiciels ou matériels spécialisés (lecteur vocal, plage Braille) ou nécessitant la personnalisation de l'affichage du site (grossissement des caractères, qualité des contrastes), le site se conforme aux préconisations du <a target="_blank" href="https://www.numerique.gouv.fr/publications/rgaa-accessibilite/">RGAA</a>.

            Afin de maintenir ce haut niveau de qualité, les équipes responsables du site handicap.loire-atlantique.fr suivent continuellement les normes d'accessibilité lors de la mise à jour du site.
        </p>

        <h4 class="mt-5">Accessibilité des contenus et respect des standards web</h4>
        <div class="big-divider"></div>

        <p>
        <ul>
            <li>Les contrastes de couleurs sont suffisamment contrastés</li>
            <li>Les pages sont correctement structurées et uniformes, tant sur le graphisme que sur la ligne éditoriale ;</li>
            <li>Les tailles des polices de caractère peuvent être agrandies et réduites</li>
            <li>Le code HTML utilisé pour construire ce site est conforme aux recommandations du W3C et a été testé à l'aide du validateur HTML de ce consortium.</li>
        </ul>
        </p>
    </div>
</section>

<section id="partnership" class="mt-5">
    <div class="container pb-5">
        <h2 class="text-center partnership-title"> nous font confiance</h2>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="partner-img-container d-flex justify-content-center">
                    <img src="src/poleemploi.png" alt="Logo Pôle emploi" class="w-25">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="haut-de-page d-flex justify-content-center">
    <a href="#" class="text-center" id="haut-de-page"><i class="far fa-arrow-alt-circle-up"></i></a>
</div>


<script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js" data-message="Nous utilisons des cookies pour améliorer votre expérience d'utilisation. En continuant de naviguer sur notre site, vous acceptez que des cookies soient placés dans votre navigateur." data-moreinfo="privacyPolicy.php" data-linkmsg="Notre politique de confidentialité">
</script>


<?php include_once 'footer.php' ?>