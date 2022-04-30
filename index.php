<!DOCTYPE html>
<html lang="fr">
<!-- base -->
<head>
	<meta charset="UTF-8" />
	<!-- compatibilité navigateur -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- title -->
	<title>Portfolio - Tavares Vaz Justine</title>
	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Kit icones fontawesome -->
	<script src="https://kit.fontawesome.com/10342158be.js" crossorigin="anonymous"></script> <!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- style CSS -->
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/font.css" />
	<link rel="stylesheet" href="./css/header.css" />
	<link rel="stylesheet" href="./css/home.css" />
	<link rel="stylesheet" href="./css/footer.css" />
	<!-- bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<!-- script JS -->
	<script src="js/script.js" defer></script>
	<!-- bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<!-- corps -->
<body>
	<?php require_once('./header.php'); ?>
	<!-- site container -->
	<main>

		<section id="home">
			<?php require_once('./home.php'); ?>
		</section>

		<section id="about">
			<?php require_once('./about.php'); ?>
		</section>

		<section id="skills">
			<?php require_once('./skills.php'); ?>
		</section>

		<section id="book">
			<?php require_once('./portfolio.php'); ?>
		</section>

	</main>

	<?php require_once('./footer.php'); ?>
</body>

</html>