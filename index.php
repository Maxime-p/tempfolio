<?php
	$configBDD = [
		'host' => 'localhost',
		'dbname' => 'pro',
		'user' => 'root',
		'pass' => ''
	];
	$bdd = new PDO('mysql:host='.$configBDD['host'].';dbname='.$configBDD['dbname'].';charset=utf8', $configBDD['user'], $configBDD['pass']);


	$fullname = $bdd->query("SELECT content FROM static where name = 'fullname'")->fetchAll(PDO::FETCH_ASSOC)[0]['content'];
	$description = $bdd->query("SELECT content FROM static where name = 'description'")->fetchAll(PDO::FETCH_ASSOC)[0]['content'];
	$aboutme = $bdd->query("SELECT content FROM static where name = 'qui-suis-je'")->fetchAll(PDO::FETCH_ASSOC)[0]['content'];
	$footer = $bdd->query("SELECT content FROM static where name = 'footer'")->fetchAll(PDO::FETCH_ASSOC)[0]['content'];

	$projects =  $bdd->query("SELECT * FROM projects")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Portfolio</title>

	<link rel="stylesheet" href="asset/framework/bootstrap.min.css">

	<link rel="stylesheet" href="asset/css/style.css">

	<script src="asset/js/scroll.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 d-flex flex-column justify-content-between">
				<div>
					<h1 class="display-4"><?php echo $fullname; ?></h1>
					<p class="lead"><?php echo $description; ?></p>
				</div>
				<div class="mb-3">
					<button class="btn btn-success btn-lg actionscroll" href="#projets">Mes projets</button>
					<button class="btn btn-info btn-lg actionscroll" href="#contact">Me contacter</button>
				</div>
			</div>
			<div class="col-lg-4">
				<img class="profilpicture" src="https://ressources.maxime-p.fr/portfolio/img/profil.jpg" alt="Photo de profil">
			</div>
		</div>

		<hr class="my-4">
		<h3>Qui suis-je ?</h3>
		<p><?php echo $aboutme; ?></p>

		<hr class="my-4">

		<h3>Experience professionelle</h3>

		<div class="media row">
			<img src="https://ressources.maxime-p.fr/portfolio/img/la-gi.png" class="col-12 col-md-4 mr-3" alt="Logo la gestion intégral">
			<div class="media-body col-12 col-md-8">
				<h3 class="mt-0">Opérateur - La Gestion Intégral</h3>
				<p class="text-muted my-0">Juin 2019</p>
				<p>Mise sous pli seul ou en équipe</p>
			</div>
		</div>

		<hr class="my-4">

		<h3>Formation</h3>
		<div class="media row">
			<img src="https://ressources.maxime-p.fr/portfolio/img/supinternet.jpg" class="col-12 col-md-4 mr-3" alt="SUP'Internet logo">
			<div class="media-body col-12 col-md-8">
				<h3 class="mt-0">Bachelor - Managment de projet Web - SUP'Internet</h3>
				<p class="text-muted my-0">2019 - 2022</p>
				<p>Cursus concentré sur les différentes technologies web. La formation propose 3 spécialités :<br>
				- WEB MARKETING<br>
				- WEB DESIGN<br>
				- WEB DEVELOPMENT<br>
				Je me suis personellemnt orienté vers la filéère WEB DEVELOPMENT. De nombreux projets sont organisés tout aux long de l'année afin de abituer au travail d'équipe</p>
			</div>
		</div>
		<div class="media mt-5 row">
			<img src="https://ressources.maxime-p.fr/portfolio/img/epita.png" class="col-12 col-md-4 mr-3" alt="Epita logo">
			<div class="media-body col-12 col-md-8">
				<h3 class="mt-0">Année de prépa intégré - Ecole d'ingénieur en informatique - Epita</h3>
				<p class="text-muted  my-0">2018 - 2019</p>
				<p>Formation sur 5 ans qui propose un diplome d'ingénieur en informatique. C'est une formation qui donne a la fois un bagae technologique mais aussi scientifique</p>
			</div>
		</div>

		<hr class="my-4">

		<div class="row" id="projets">
			<div class="col-12">
				<h3>Mes projets</h3>
			</div>
			<?php foreach ($projects as $project){ ?>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<img src="<?php echo $project["img-path"]; ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-capitalize"><?php echo $project["title"]; ?></h5>
						<h6 class="card-subtitle mb-2 text-muted text-uppercase"><?php echo $project["post"]; ?></h6>
						<p class="card-text"><?php echo $project["description"]; ?></p>
						<!--<a href="#" data-project="<?php echo $project["id"]; ?>" class="card-link">Go somewhere</a>-->
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<hr class="my-4">

		<div class="row">
			<div class="col-12 col-md-5">
				<h3 class="text-center">Compétences</h3>
				<ul class="list-group">
					<li class="list-group-item active">Front-end :</li>
					<li class="list-group-item">- HTML5/CSS3</li>
					<li class="list-group-item">- JavaScipt</li>
					<li class="list-group-item">- TypeScript</li>
					<li class="list-group-item">- VueJS</li>
					<li class="list-group-item active">Back-end :</li>
					<li class="list-group-item">- PHP</li>
					<li class="list-group-item">- MySQL</li>
					<li class="list-group-item">- Python/Goland</li>
					<li class="list-group-item active">Outils/Logiciels :</li>
					<li class="list-group-item">- PHPMyAdmin</li>
					<li class="list-group-item">- Trello</li>
					<li class="list-group-item">- Office 365</li>
					<li class="list-group-item">- Adobe XD</li>
					<li class="list-group-item">- Git</li>
					<li class="list-group-item active">Anglais :</li>
					<li class="list-group-item">- Niveau B2</li>
				</ul>
			</div>
			<div class="col-12 col-md-5 offset-md-2 activites">
				<h3 class="text-center">Loisirs</h3>
				<div class=" d-flex flex-column justify-content-between">
					<div class="row">
						<div class="col-12 col-sm-4 d-flex justify-content-center">
							<img src="https://ressources.maxime-p.fr/portfolio/img/archery.svg" alt="Icon tir à l'arc">
						</div>
						<div class="col-12 col-sm-8">
							<p>Tir à l'arc, club sportif</p>
							<p class="text-muted">Club d'Arc Saint Maur (Depuis Septembre 2019)</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-4 d-flex justify-content-center">
							<img src="https://ressources.maxime-p.fr/portfolio/img/controller.svg" alt="Icon jeux vidéos">
						</div>
						<div class="col-12 col-sm-8">
							<p>Jeux vidéos compétitif</p>
							<p class="text-muted">CS:GO, Overwatch, Valorant</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-4 d-flex justify-content-center">
							<img src="https://ressources.maxime-p.fr/portfolio/img/body.svg" alt="Icon corps humain">
						</div>
						<div class="col-12 col-sm-8">
							<p>Bénévolat</p>
							<p class="text-muted">Comité des fêtes dde Saint Maurice, Association sportive</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr class="my-4">

		<div class="row" id="contact">
			<div class="col-12 col-md-5">
				<h3 class="text-center">Formulaire de contact</h3>
				<form action="">
					<div class="form-group"><input type="text" name="name"  class="form-control my-input" id="name" placeholder="Votre nom"></div>
					<div class="form-group"><input type="email" name="email"  class="form-control my-input" id="email" placeholder="Votre adresse de messagerie"></div>
					<div class="form-group"><input type="text" name="name"  class="form-control my-input" id="name" placeholder="Object"></div>
					<div class="form-group"><textarea class="form-control my-input" name="text" id="text" cols="30" rows="10" placeholder="Votre message"></textarea></div>
					<button type="submit" class=" btn btn-block send-button tx-tfm">Envoyer</button>
				</form>
			</div>
			<div class="col-12 col-md-5 offset-md-2">
				<h3 class="text-center">On peut me retrouver ici</h3>
				<p class="text-justify">Les reseaux sociaux sont pour moi un outil de renseignement et d'entre aide. Ils permettent de rester informé des dernières nouveautées/technoligies ainsi que nous des contact avec des personnes d'expériences</p>
				<div class="d-flex flex-row justify-content-between align-items-center">
					<a href="https://www.linkedin.com/in/maxime-perraud/" target="_blank" class="reseau">
						<img src="https://ressources.maxime-p.fr/portfolio/img/linkedin.svg" alt="LinkedIn logo" class="icon-default">
						<img src="https://ressources.maxime-p.fr/portfolio/img/linkedin2.svg" alt="LinkedIn logo" class="icon-hover">
					</a>
					<a href="https://github.com/Maxime-p" target="_blank" class="reseau">
						<img src="https://ressources.maxime-p.fr/portfolio/img/github.svg" alt="GitHub logo" class="icon-default">
						<img src="https://ressources.maxime-p.fr/portfolio/img/github2.svg" alt="GitHub logo" class="icon-hover">
					</a>
					<a href="https://stackoverflow.com/users/12998685/maxime-p" target="_blank" class="reseau">
						<img src="https://ressources.maxime-p.fr/portfolio/img/stackoverflow.svg" alt="StackOverflow logo" class="icon-default">
						<img src="https://ressources.maxime-p.fr/portfolio/img/stackoverflow2.svg" alt="StackOverflow logo" class="icon-hover">
					</a>
					<a href="https://twitter.com/Maximep_dev" target="_blank" class="reseau">
						<img src="https://ressources.maxime-p.fr/portfolio/img/twitter.svg" alt="Twitter logo" class="icon-default">
						<img src="https://ressources.maxime-p.fr/portfolio/img/twitter2.svg" alt="Twitter logo" class="icon-hover">
					</a>
				</div>
				<hr>
				<h3 class="text-center">Mon curriculum vitae</h3>
				<div class="text-center">
					<a class="btn btn-primary btn-lg" href="https://ressources.maxime-p.fr/portfolio/documents/Maxime_Perraud_CV.pdf" target="_blank">Format PDF</a>
					<!--<button class="btn btn-primary btn-lg">Format PNG</button>-->
				</div>
			</div>	
		</div>
	</div>

	<footer>
		<div class="text-center mt-5 py-3">© 2020 Copyright :
		 	<a href="https://pro.maxime-p.fr"> pro.maxime-p.fr</a>
		</div>
	</footer>

</body>

</html>
