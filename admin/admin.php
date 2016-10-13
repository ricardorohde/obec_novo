<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width:768px) and (min-height: 700px)">
		<link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width:767px)">
		<link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-height:699px)">

		<link rel="stylesheet" type="text/css" href="../css/admin.css">

		<title>Painel ADM | OBEC RS</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>

	</head>

	<body class="admin">
		<div class="container-fluid">
			
			<!-- header -->
			<div class="row admin-header home">

				<div class="headerAdm-right">
						
					<!-- view! -->
					<a href="/obec_new" class="link" target="_blank">
						<div class="headerAdm-button"><span class="hidden-xs">Visualizar </span>site</div>
					</a>

					<!-- user! -->
					<div class="headerAdm-user">

						<button class="transparent-button dropdown-toggle" type="button" data-toggle="dropdown">
							<div class="tableAdm-icon user"></div>
						</button>
  					
  						<ul class="dropdown-menu">
  							<div class="upArrow-icon"></div>
					    	<li><a href="#" class="text">Logout</a></li>
  						</ul>

					</div>
					
				</div>

			</div>
			
			<!-- resto do site! -->
			<div class="row">
				<div class="adm-container home">

					<!-- brand! -->
					<div class="adm-brand">
					
						<div class="logo-icon big"></div>
					
						<div class="headerAdm-title">
							<div class="h1">PAINEL</div>
							<div class="h2">Administrativo</div>
						</div>
					
					</div>

				</div>

				<div class="optionsAdm-section text-center">

					<!-- */\/* opções *\/\* -->
					<a href="news.php" class="link">
						<div class="contentAdm-icon">
							<div class="contentAdm-img news"></div>
							<p>NOTÍCIAS</p>
						</div>
					</a>

					<a href="projects.php" class="link">
						<div class="contentAdm-icon">
							<div class="contentAdm-img projects"></div>
							<p>PROJETOS</p>
						</div>
					</a>

					<a href="partners.php" class="link">
						<div class="contentAdm-icon">
							<div class="contentAdm-img partners"></div>
							<p>PARCEIROS</p>
						</div>
					</a>

					<a href="team.php" class="link">
						<div class="contentAdm-icon">
							<div class="contentAdm-img team"></div>
							<p>EQUIPE</p>
						</div>
					</a>

				</div>
			</div>
		</div>
	</body>
</html>