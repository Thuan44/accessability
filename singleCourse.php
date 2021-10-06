<?php 

include_once 'header.php';
$user_id = $_GET['user_id'];

?>


<section id="single_course">
    <div class="container">
        <main id="single_course_main_content" class="main-container">
            <a href="courses.php" class="btn btn-primary w-100 btn-action-custom mb-4">RETOUR AUX COURS</a>

            <h1 id="course_title_custom" class="text-center mb-2">Utilisez une API en toute sécurité</h1>
            <div class="iframe-container mb-4">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                    <!-- <video width="100%" height="500" controls>
                        <source src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        Your browser does not support the video tag.
                    </video> -->
            </div>
            <h3 class="course-subtitle-custom">Vérifiez la provenance de l’API pour éviter les mauvaises surprises</h3>
            <p>
                Vous souhaitez créer une boutique en ligne ? Vous avez trouvé une super API qui permet de gérer le paiement en ligne, mais avez-vous pensé à vérifier sa fiabilité ?
            </p>

            <p>
                En effet, il est possible qu'une API, bien que très alléchante, soit une arnaque ! :diable: Dans le cas de votre boutique en ligne, cela peut avoir des conséquences catastrophiques si les données bancaires de vos utilisateurs sont copiées au moment du paiement ! Vous serez tenu pour responsable !

                Préférez des API certifiées ou sécurisées. Au besoin, achetez une API si vous n'avez pas le temps d'en créer une !

                Par exemple, la société CDiscount met à disposition une API pour s'inscrire sur sa marketplace. Cette API est fiable et sécurisée, car elle est utilisée par l'entreprise elle-même.
            </p>
        </main>
    </div>
</section>


<?php include_once 'footer.php' ?>