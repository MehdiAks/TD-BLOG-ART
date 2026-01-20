<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TD PHP — Mehdi Afankous</title>

    <!-- Style principal (recommandé : ton styletd.css) -->
    <link rel="stylesheet" href="TD_BLOGART26/assets/styletd.css">

    <!-- Petit complément uniquement pour la page d’accueil (optionnel mais propre) -->
    <style>
        .hero {
            margin: 22px 0 26px;
        }

        .hero-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 18px;
            flex-wrap: wrap;
        }

        .hero h1 {
            margin: 0;
        }

        .hero p {
            margin: 10px 0 0;
        }

        .pill-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 12px;
        }

        .pill {
            padding: 6px 10px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, .15);
            font-size: 13px;
        }

        .quick-nav {
            margin: 18px 0 26px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .quick-nav a {
            text-decoration: none;
        }

        .td-card {
            margin: 18px 0;
        }

        .td-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 18px;
            flex-wrap: wrap;
        }

        .td-title {
            margin: 0;
        }

        .td-meta {
            opacity: .85;
            font-size: 14px;
            margin-top: 6px;
        }

        .skills {
            margin: 12px 0 0;
            padding-left: 18px;
        }

        .skills li {
            margin: 6px 0;
        }

        .exo-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 12px;
            margin-top: 14px;
        }

        .exo {
            grid-column: span 6;
            border: 1px solid rgba(255, 255, 255, .10);
            border-radius: 14px;
            padding: 12px;
        }

        @media (max-width: 820px) {
            .exo {
                grid-column: span 12;
            }
        }

        .exo-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .exo h3 {
            margin: 0;
            font-size: 16px;
        }

        .exo p {
            margin: 8px 0 0;
            opacity: .9;
            font-size: 14px;
            line-height: 1.35;
        }

        .btn-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* Si tu utilises .btn-footer pour les boutons blancs/noirs */
        .btn-footer {
            background: #fff;
            color: #000;
            border: 1px solid #fff;
        }

        .btn-footer:hover {
            background: #000;
            color: #fff;
            border: 1px solid #fff;
        }
    </style>
</head>

<body>
    <?php
    // ===========================
// CONFIG : liens + textes
// ===========================
    $tds = [
        [
            "id" => "td1",
            "title" => "TD 1 — Bases PHP",
            "summary" => "Variables, echo, concaténation, types, conditions et switch.",
            "skills" => [
                "Afficher du texte et des variables avec echo",
                "Concaténer des chaînes et inspecter le type (gettype)",
                "Conditions if / else if / else et switch case",
            ],
            "exercises" => [
                ["label" => "Ex01", "href" => "TD_BLOGART26/TD_1/Ex01.php", "desc" => "Hello world avec echo."],
                ["label" => "Ex02", "href" => "TD_BLOGART26/TD_1/Ex02.php", "desc" => "Variable + echo."],
                ["label" => "Ex03", "href" => "TD_BLOGART26/TD_1/Ex03.php", "desc" => "Concaténation (Bonjour …!)."],
                ["label" => "Ex04", "href" => "TD_BLOGART26/TD_1/Ex04.php", "desc" => "gettype() sur une variable."],
                ["label" => "Ex05", "href" => "TD_BLOGART26/TD_1/Ex05.php", "desc" => "Types : int, float, bool."],
                ["label" => "Ex06", "href" => "TD_BLOGART26/TD_1/Ex06.php", "desc" => "if/else : comparer deux valeurs."],
                ["label" => "Ex07", "href" => "TD_BLOGART26/TD_1/Ex07.php", "desc" => "switch : jours de la semaine."],
                ["label" => "Ex08", "href" => "TD_BLOGART26/TD_1/Ex08.php", "desc" => "Constante define() (facultatif)."],
            ]
        ],
        [
            "id" => "td2",
            "title" => "TD 2 — Boucles & Tableaux",
            "summary" => "for/while/do…while/foreach, tableaux (scalaire/associatif), tri, matrice 2D et rendu HTML.",
            "skills" => [
                "Boucles for, while, do…while, foreach",
                "Tableaux scalaires et associatifs + count()",
                "Tri sort() / rsort() et tableaux 2D (matrice)",
                "Générer un tableau HTML et un motif en X",
            ],
            "exercises" => [
                ["label" => "Ex01", "href" => "TD_BLOGART26/TD_2/Ex01.php", "desc" => "Boucles + tableaux (for/foreach/while/do…while)."],
                ["label" => "Ex02", "href" => "TD_BLOGART26/TD_2/Ex02.php", "desc" => "count() : taille d’un tableau."],
                ["label" => "Ex03", "href" => "TD_BLOGART26/TD_2/Ex03.php", "desc" => "sort() / rsort() : tri croissant/décroissant."],
                ["label" => "Ex04", "href" => "TD_BLOGART26/TD_2/Ex04.php", "desc" => "Matrice 2D : parcourir avec 2 boucles."],
                ["label" => "Ex05", "href" => "TD_BLOGART26/TD_2/Ex05.php", "desc" => "Afficher la matrice dans un tableau HTML."],
                ["label" => "Ex06", "href" => "TD_BLOGART26/TD_2/Ex06.php", "desc" => "Dessiner un X en ASCII (taille variable)."],
            ]
        ],
        [
            "id" => "td3",
            "title" => "TD 3 — Fonctions & Exceptions",
            "summary" => "Créer des fonctions (avec paramètres), valeurs par défaut, try/catch, debug avec var_dump.",
            "skills" => [
                "Fonctions sans paramètres / avec paramètres",
                "Paramètres par défaut",
                "Exceptions : try / catch / throw (+ finally)",
                "Debug : var_dump()",
            ],
            "exercises" => [
                ["label" => "Ex01", "href" => "TD_BLOGART26/TD_3/Ex01.php", "desc" => "Fonction writeMsg() (sans paramètre)."],
                ["label" => "Ex02", "href" => "TD_BLOGART26/TD_3/Ex02.php", "desc" => "Fonction userProfile() (3 paramètres)."],
                ["label" => "Ex03", "href" => "TD_BLOGART26/TD_3/Ex03.php", "desc" => "addition(a,b) : affichage du calcul."],
                ["label" => "Ex04", "href" => "TD_BLOGART26/TD_3/Ex04.php", "desc" => "multiplication(a=5,b=10) : valeurs par défaut."],
                ["label" => "Ex05", "href" => "TD_BLOGART26/TD_3/Ex05.php", "desc" => "division() + exception si diviseur = 0."],
                ["label" => "Ex06", "href" => "TD_BLOGART26/TD_3/Ex06.php", "desc" => "catch détaillé + finally."],
                ["label" => "Ex07", "href" => "TD_BLOGART26/TD_3/Ex07.php", "desc" => "var_dump() : inspection de variables."],
                ["label" => "Ex08", "href" => "TD_BLOGART26/TD_3/Ex08.php", "desc" => "random_int() : lancer de dé (facultatif)."],
                ["label" => "Ex09", "href" => "TD_BLOGART26/TD_3/Ex09.php", "desc" => "Stats sur tableau aléatoire (facultatif)."],
            ]
        ],
        [
            "id" => "td4",
            "title" => "TD 4 — Include / GET / POST",
            "summary" => "Découper le code (include/require), lire $_GET et $_POST, formulaires, intval().",
            "skills" => [
                "include / require (+ include_once / require_once)",
                "Récupérer des données avec $_GET et isset()",
                "Formulaires POST + contrôles sur champs",
                "Convertir une chaîne en entier : intval()",
            ],
            "exercises" => [
                // ⚠️ Chemins : adapte si tu as mis TD_4/Ex01/main.php etc.
                ["label" => "Ex01", "href" => "TD_BLOGART26/TD_4/Ex01.php", "desc" => "header/footer séparés + include/require."],
                ["label" => "Ex02", "href" => "TD_BLOGART26/TD_4/Ex02.php", "desc" => "Fonction oppose(x) dans lib + include."],
                ["label" => "Ex03", "href" => "TD_BLOGART26/TD_4/Ex03.php", "desc" => "Bonjour prénom via $_GET + isset()."],
                ["label" => "Ex04", "href" => "TD_BLOGART26/TD_4/Ex04.php", "desc" => "Bonjour prénom+nom via $_GET."],
                ["label" => "Ex05", "href" => "TD_BLOGART26/TD_4/Ex05.php", "desc" => "Formulaire POST : nom/prénom/téléphone."],
                ["label" => "Ex06", "href" => "TD_BLOGART26/TD_4/Ex06.php", "desc" => "Formulaire POST : select/radio/checkbox."],
                ["label" => "Ex07", "href" => "TD_BLOGART26/TD_4/Ex07.php", "desc" => "Taille du X via POST + intval()."],
            ]
        ],
    ];

    // Liens portfolio (haut de page)
    $links = [
        ["label" => "Portfolio", "href" => "https://mehdiafankous.com"],
        ["label" => "GitHub", "href" => "https://github.com/MehdiAks/"],
        ["label" => "Instagram", "href" => "https://www.instagram.com/afanpeak/"],
    ];
    ?>

    <div class="container">

        <!-- HERO -->
        <section class="hero card">
            <div class="hero-top">
                <div>
                    <h1>TD PHP — Blogart (MMI)</h1>
                    <p class="small">
                        Une page d’index pensée comme une mini vitrine : chaque TD + les compétences travaillées + accès
                        direct aux exercices.
                    </p>
                    <div class="pill-row">
                        <span class="pill">PHP</span>
                        <span class="pill">Boucles</span>
                        <span class="pill">Tableaux</span>
                        <span class="pill">Fonctions</span>
                        <span class="pill">Exceptions</span>
                        <span class="pill">GET / POST</span>
                    </div>
                </div>

                <div class="btn-row">
                    <?php foreach ($links as $l): ?>
                        <a class="btn btn-sm btn-footer" href="<?= htmlspecialchars($l["href"]) ?>" target="_blank"
                            rel="noopener noreferrer">
                            <?= htmlspecialchars($l["label"]) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- NAV RAPIDE -->
        <nav class="quick-nav">
            <?php foreach ($tds as $td): ?>
                <a class="btn btn-sm" href="#<?= htmlspecialchars($td["id"]) ?>">
                    <?= htmlspecialchars(str_replace(" — ", " · ", $td["title"])) ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <!-- SECTIONS TD -->
        <?php foreach ($tds as $td): ?>
            <section id="<?= htmlspecialchars($td["id"]) ?>" class="td-card card">
                <div class="td-head">
                    <div>
                        <h2 class="td-title"><?= htmlspecialchars($td["title"]) ?></h2>
                        <div class="td-meta"><?= htmlspecialchars($td["summary"]) ?></div>
                    </div>

                    <div class="btn-row">
                        <a class="btn btn-sm" href="#top">Haut de page</a>
                    </div>
                </div>

                <ul class="skills">
                    <?php foreach ($td["skills"] as $s): ?>
                        <li><?= htmlspecialchars($s) ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="exo-grid">
                    <?php foreach ($td["exercises"] as $exo): ?>
                        <article class="exo">
                            <div class="exo-top">
                                <h3><?= htmlspecialchars($exo["label"]) ?></h3>
                                <a class="btn btn-sm" href="<?= htmlspecialchars($exo["href"]) ?>" target="_blank"
                                    rel="noopener noreferrer">
                                    Ouvrir
                                </a>
                            </div>
                            <p><?= htmlspecialchars($exo["desc"]) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>

    </div>

    <?php include "TD_BLOGART26/includes/footer.php"; ?>

</body>

</html>