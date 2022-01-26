<?php
$etudiants = array(
    'CDA2021-01' =>  ["nom" => "Julien GROSSI", "url" => "https://grossi.needemand.com/"],
    'CDA2021-02' =>  ["nom" => "Jean Bernard BRIOIS", "url" => "https://briois.needemand.com/"],
    'CDA2021-03' =>  ["nom" => "Young Hee KIM", "url" => "https://kim.needemand.com/"],
    'CDA2021-04' =>  ["nom" => "Patrick ARNAUD", "url" => "https://arnaud.needemand.com/"],
    'CDA2021-05' =>  ["nom" => "Laurent COCHONNEAU", "url" => "https://cochonneau.needemand.com/"],
    'CDA2021-06' =>  ["nom" => "Thibault MOURICHON", "url" => "https://mourichon.needemand.com/"],
    'CDA2021-07' =>  ["nom" => "Raul HERNANDEZ", "url" => "https://hernandez.needemand.com/"],
    'CDA2021-08' =>  ["nom" => "Stephan CELESTIN", "url" => "https://razafiasimanana.needemand.com/"],
    'CDA2021-09' =>  ["nom" => "Pierre OLIVIER", "url" => "https://pierre-olivierb.github.io"],
    'CDA2021-10' =>  ["nom" => "Yen Nhi  NGO", "url" => "https://hotongminh.needemand.com/"],
    'CDA2021-11' =>  ["nom" => "Sylvie LINXE", "url" => "https://linxe.needemand.com/"],
);
?>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded" style="background-color:#fff;">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Coming Soon</span>
                        <span class="section-heading-lower">Vos réalisations</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php foreach ($etudiants as $key => $value) : ?>
                            <li class="list-unstyled-item list-hours-item d-flex justify-content-between">
                                <span>
                                    <?= $value["nom"] ?>
                                </span class="ms-auto">
                                <a href="<?= $value["url"] ?>">Portfolio</a>
                            </li>
                            <!-- fin du foreach -->
                        <?php endforeach ?>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Promo 2021-2022</strong>
                            <br>
                            Concepteurs & développeurs d'application
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>Needemand</em>
                        </small>
                        <br>
                        contact@needemand.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/delai.jpg" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Projet Fil Rouge</span>
                            <span class="section-heading-lower">Contexte</span>
                        </h2>

                        <p class="mb-0">Projet réalisé dans le cadre d'une formation.
                            En partie en groupe et
                            en partie individuellement,
                            ce projet est le résultat d'un
                            apprentissage lors d'une formation
                        </p>
                        <p>Temps de réalisation du projet <em>5 mois environ</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>