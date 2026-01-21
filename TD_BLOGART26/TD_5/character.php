<?php
// Inclusion des données et du header
require "datas.php";
require "includes/header.php";

// Récupération de l'id depuis l'URL
if (isset($_GET['id']) && array_key_exists($_GET['id'], $personnages)) {
    $id = $_GET['id'];
} else {
    $id = 0; // valeur par défaut si id absent ou invalide
}

// Récupération du personnage
$personnage = $personnages[$id];
?>

<!-- Contenu principal -->
<div class="team-bottom">
    <div class="container">

        <h3 class="w3l_head w3l_head1">
            <?= htmlspecialchars($personnage['nom']) ?>
        </h3>
        <br><br>

        <div class="row">
            <div class="col-md-5">
                <img src="<?= htmlspecialchars($personnage['url_image']) ?>"
                     alt="<?= htmlspecialchars($personnage['nom']) ?>"
                     class="img-responsive">
            </div>

            <div class="col-md-7">
                <p>
                    <?= htmlspecialchars($personnage['presentation']) ?>
                </p>
                <br>
                <p>
                    <?= htmlspecialchars($personnage['histoire']) ?>
                </p>
            </div>
        </div>

    </div>
</div>

<?php
// Inclusion du footer
require "includes/footer.php";
?>
