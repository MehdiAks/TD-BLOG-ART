<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require "datas.php"; ?>
<?php require "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Fantasy World</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- gallery -->
	<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
	<!-- //gallery -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">

	<!-- //font-awesome icons -->
	<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet">
	<link
		href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="team-bottom" id="presentation">
		<div class="container">
			<h3 class="w3l_head w3l_head1">Présentation</h3><br><br>

			<p>Bienvenue sur Fantasy World, votre portail vers un univers où l’imaginaire et l’heroic fantasy prennent
				vie. Ici, vous rencontrerez des héros et des anti-héros issus d’histoires épiques, chacun avec ses
				talents uniques, son passé fascinant, et son propre combat à mener.</p>
			<p>Entrez dans un monde où les légendes s’écrivent et où l’extraordinaire devient réalité.</p>

			<p>Explorez les récits de personnages hors du commun, partez à l’aventure avec eux, et laissez-vous emporter
				par leurs destins entrelacés dans cette épopée fantastique.</p>
		</div>
	</div>

	<!-- characters -->
	<div class="team-bottom" id="characters">
		<div class="container">
			<h3 class="w3l_head w3l_head1">Personnages</h3><br><br>
			<div class="w3layouts_gallery_grids">
				<ul class="w3l_gallery_grid" id="lightGallery">
					<ul class="w3l_gallery_grid" id="lightGallery">
						<?php foreach ($personnages as $id => $personnage): ?>
							<li data-title="<?= htmlspecialchars($personnage['nom']) ?>"
								data-src="<?= htmlspecialchars($personnage['url_image']) ?>">
								<div class="w3layouts_gallery_grid1 box">
									<a href="character.php?id=<?= $id ?>">
										<img src="<?= htmlspecialchars($personnage['url_image']) ?>"
											alt="<?= htmlspecialchars($personnage['nom']) ?>" class="img-responsive" />
										<div class="overbox">
											<h4 class="title overtext">
												<?= htmlspecialchars($personnage['nom']) ?>
											</h4>
										</div>
									</a>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</ul>
			</div>
		</div>
	</div>
	<?php require "includes/footer.php"; ?>
</body>

</html>