<!-- fichier qui contient le head et meta -->
<?php require_once('./base.php'); ?>
<!-- header -->
<header>
	<!-- contenant du header -->
	<div class="header_container">
		<!-- lien : accueil et logo  -->
		<figure>
			<!-- a et img sont des elements de type inline donc il faut les entourer d'un type block -->
			<a href="./index.php">
				<img src="images/logo/logobis(2).png" alt="Logo du site" />
			</a>
		</figure>
		<div>
			<i class="fa-solid fa-2xl fa-bars"></i>
		</div>

		<!-- menu de navigation -->
		<nav>
			<!-- liste de navigation -->
			<ul class="menu_header_site">

				<!-- lien : a propos : dropdown -->
				<li class="nav-item dropdown">
					<a href="#about" id="dropdownMenu2" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						A propos
					</a>
					<!-- menu dropdown -->
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<li>
							<a class="dropdown-item text-dark" type="button" href="/history.php">Mon parcours</a>
						</li>
					</ul>
					<!-- fin dropdown -->
				</li>

				<!-- lien: compétences -->
				<li class="nav-item">
					<a href="contenushtml\cv.html"> Compétences </a>
				</li>

				<!-- lien: portfolio -->
				<li class="nav-item">
					<a href="#portfolio"> Portfolio </a>
				</li>

				<!-- lien: contact -->
				<li class="nav-item">
					<a href="#contact"> Contact </a>
				</li>
			</ul>
			<!-- fin liste de navigation -->

			<!-- telecharger mon CV -->
			<a type="button" href="./images/CV(2).pdf" download="CV dev web junior - Justine TAVARS VAZ" class="btn text-white">
				Télécharger mon CV (.pdf)
			</a>

		</nav>
		<!-- fin menu de navigation -->

		<!-- liste d'icones : reseaux sociaux  -->
<div>
	<ul class="icon_header_site container-fluid">
		<li>
			<a href="">
				<i class="fa-brands fa-instagram"></i>
			</a>
		</li>
		<li>
			<a href="">
				<i class="fab fa-linkedin"></i>
			</a>
		</li>
		<li>
			<a href="">
				<i class=" fa-brands fa-github"></i>
			</a>
		</li>
	</ul>
</div>

	</div>
</header>