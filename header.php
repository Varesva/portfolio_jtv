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

		<!-- menu de navigation -->
		<nav class="header_nav">
			<!-- liste de navigation -->
			<ul class="header_nav_list">

				<!-- lien : a propos : dropdown -->
				<li class="nav-item dropdown">
					<button id="dropdownMenu2" class="dropdown-toggle btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						A propos
					</button>
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

			<!-- telechargez mon CV -->
			<div class="text-center">
				<button href="./images/CV(2).pdf" download="CV dev web junior - Justine TAVARS VAZ" class="btn btn_download">
					Téléchargez mon C.V. (.pdf)
				</button>
			</div>
		</nav>

		<!-- fin menu de navigation -->

		<!-- liste d'icones : reseaux sociaux  -->
		<!-- <div> -->
		<ul class="header_icon_socials">
			<li>
				<a href="">
					<i class="fa-brands fa-instagram"></i>
				</a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/justine-tvz">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
			<li>
				<a href="https://github.com/Varesva">
					<i class=" fa-brands fa-github"></i>
				</a>
			</li>
		</ul>
		<!-- </div> -->

		<!-- menu burger -->
		<nav class="nav_header_burger">
			<!-- icone du burger et bouton -->
			<div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa-solid fa-bars"></i>
				</button>
			</div>
	</div>
	<!-- fin du header_container -->
	<!-- navigation du menu burger : collapse -->
	<div class="collapse" id="navbarToggleExternalContent">
		<div class="nav_collapse_container ">

			<ul class="nav_collapse_list">

				<!-- lien : a propos : dropdown -->
				<li class="dropdown">

					<button id="dropdownMenu2" class="dropdown-toggle btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						A propos
					</button>
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
			<!-- telechargez mon CV -->
			<div class="text-center">
				<button href="./images/CV(2).pdf" download="CV dev web junior - Justine TAVARS VAZ" class="btn btn_download text-white">
					Téléchargez mon C.V. (.pdf)
				</button>
			</div>
			<!-- fin menu de navigation -->

			<!-- liste d'icones : reseaux sociaux  -->
			<ul class="header_icon_socials">
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
	</nav>
</header>