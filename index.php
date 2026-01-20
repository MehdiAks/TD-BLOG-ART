<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD PHP — Mehdi Afankous</title>
    <link rel="stylesheet" href="TD_BLOGART26/assets/style.css">
</head>

<body>

    <div class="container">

        <header class="hero">
            <h1>TD PHP — Blogart (MMI)</h1>
            <p>
                Cette page regroupe mes exercices de PHP (TD1 à TD4) réalisés dans le cadre de la formation
                MMI à l’Université de Bordeaux. Chaque TD est résumé avec les compétences travaillées et
                un accès direct à chaque exercice.
            </p>

            <div class="hero-buttons">
                <a class="btn btn-white" href="https://mehdi.afankous.com" target="_blank"
                    rel="noopener noreferrer">Portfolio</a>
                <a class="btn btn-white" href="https://github.com/MehdiAks/" target="_blank"
                    rel="noopener noreferrer">GitHub</a>
                <a class="btn btn-white" href="https://www.instagram.com/afanpeak/" target="_blank"
                    rel="noopener noreferrer">Instagram</a>
            </div>
        </header>

        <!-- ================= TD 1 ================= -->
        <section class="card">
            <div class="td-head">
                <h2>TD 1 — Bases PHP</h2>
                <p class="td-summary">
                    Découverte de PHP : affichage avec echo, variables, concaténation, types, conditions et structures
                    switch.
                </p>
            </div>

            <div class="exo-list">

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex01 — Hello World</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex01.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Premier script PHP : afficher un texte avec <code>echo</code>.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex02 — Variables</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex02.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Déclaration d’une variable et affichage dynamique.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex03 — Concaténation</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex03.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Créer une phrase à partir de plusieurs morceaux (variables + texte).</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex04 — Types (gettype)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex04.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Utiliser <code>gettype()</code> pour connaître le type d’une variable.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex05 — Types de données</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex05.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Manipulation de valeurs numériques et booléennes.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex06 — Conditions (if/else)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex06.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Comparaison de valeurs avec <code>if</code>, <code>else if</code>, <code>else</code>.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex07 — Switch</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex07.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Utiliser <code>switch/case</code> pour gérer plusieurs cas.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex08 — Constantes (optionnel)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_1/Ex08.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Créer une constante avec <code>define()</code>.</p>
                </div>

            </div>
        </section>

        <!-- ================= TD 2 ================= -->
        <section class="card">
            <div class="td-head">
                <h2>TD 2 — Boucles & Tableaux</h2>
                <p class="td-summary">
                    Boucles (for, while, do…while, foreach), tableaux simples/associatifs, tri, tableaux 2D et affichage
                    HTML.
                </p>
            </div>

            <div class="exo-list">

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex01 — Boucles</h3>
                        <a class="btn" href="TD_BLOGART26/TD_2/Ex01.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Parcourir des valeurs avec différentes boucles.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex02 — count()</h3>
                        <a class="btn" href="TD_BLOGART26/TD_2/Ex02.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Utiliser <code>count()</code> pour connaître la taille d’un tableau.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex03 — sort / rsort</h3>
                        <a class="btn" href="TD_BLOGART26/TD_2/Ex03.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Trier un tableau par ordre croissant et décroissant.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex04 — Tableau 2D (matrice)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_2/Ex04.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Parcourir un tableau à 2 dimensions avec deux boucles.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex05 — Tableau HTML</h3>
                        <a class="btn" href="TD_BLOGART26/TD_2/Ex05.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Afficher les données sous forme de tableau HTML.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex06 — Croix “X”</h3>
                        <a class="btn" href="TD_BLOGART26/TD_2/Ex06.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Générer un motif en X de taille variable avec deux boucles.</p>
                </div>

            </div>
        </section>

        <!-- ================= TD 3 ================= -->
        <section class="card">
            <div class="td-head">
                <h2>TD 3 — Fonctions & Exceptions</h2>
                <p class="td-summary">
                    Création de fonctions, paramètres, valeurs par défaut, exceptions (try/catch/throw) et debug avec
                    var_dump.
                </p>
            </div>

            <div class="exo-list">

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex01 — Fonction simple</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex01.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Créer une fonction <code>writeMsg()</code> et l’appeler.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex02 — Fonction avec paramètres</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex02.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Passer des paramètres à une fonction (profil utilisateur).</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex03 — Addition</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex03.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Fonction qui calcule et affiche une addition.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex04 — Multiplication (valeurs par défaut)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex04.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Paramètres avec valeurs par défaut si non fournis.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex05 — Division + Exceptions</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex05.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Gérer la division par zéro avec <code>try/catch</code>.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex06 — finally (approfondissement)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex06.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Utiliser <code>finally</code> pour exécuter un code dans tous les cas.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex07 — var_dump</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex07.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Afficher le contenu et le type de variables pour déboguer.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex08 — Dé aléatoire (optionnel)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex08.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Générer une valeur aléatoire avec <code>random_int()</code>.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex09 — Statistiques (optionnel)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_3/Ex09.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Manipuler un tableau de valeurs et calculer des stats simples.</p>
                </div>

            </div>
        </section>

        <!-- ================= TD 4 ================= -->
        <section class="card">
            <div class="td-head">
                <h2>TD 4 — Include / GET / POST</h2>
                <p class="td-summary">
                    Découpage du code (header/footer), includes, récupération de données via URL (GET) et formulaires
                    (POST).
                </p>
            </div>

            <div class="exo-list">

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex01 — include / require</h3>
                        <a class="btn" href="TD_BLOGART26/TD_4/Ex01.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Créer un header/footer et les appeler avec <code>include</code>/<code>require</code>.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex02 — Bibliothèque utils</h3>
                        <a class="btn" href="TD_BLOGART26/TD_4/Ex02.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Déplacer une fonction dans un fichier et l’inclure.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex03 — GET (prénom)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_4/Ex03.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Récupérer des données dans l’URL avec <code>$_GET</code>.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex04 — GET (nom + prénom)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_4/Ex04.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Construire un message à partir de deux paramètres GET.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex05 — POST (formulaire)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_4/Ex05.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Envoyer et traiter des données via un formulaire POST.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex06 — POST (select/radio/checkbox)</h3>
                        <a class="btn" href="TD_BLOGART26/TD_4/Ex06.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Manipuler plusieurs types de champs de formulaire.</p>
                </div>

                <div class="exo">
                    <div class="exo-top">
                        <h3>Ex07 — X + intval()</h3>
                        <a class="btn" href="TD_BLOGART26/TD_4/Ex07.php" target="_blank"
                            rel="noopener noreferrer">Ouvrir</a>
                    </div>
                    <p>Récupérer une taille, convertir en entier avec <code>intval()</code>, puis afficher le X.</p>
                </div>

            </div>
        </section>

    </div>

    <?php
    // Footer si tu l’as (ne casse pas la page si absent)
    if (file_exists("TD_BLOGART26/includes/footer.php")) {
        include "TD_BLOGART26/includes/footer.php";
    }
    ?>

</body>

</html>