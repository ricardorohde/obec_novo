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

		<title>Admin | OBEC RS</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>

	</head>

	<body class="admin">

		<!-- header -->
		<div class="admin-header">

			<!-- brand! -->
			<div class="admin-header-brand">
				<div class="logo-icon small"></div>
				<div class="admin-header-title">
					<div class="h1">PAINEL</div>
					<div class="h2">Administrativo</div>
				</div>
			</div>

			<div class="admin-header-right">
				
				<!-- view! -->
				<a href="/obec_new" class="link" target="_blank">
					<div class="admin-visualiz-button">Visualizar site</div>
				</a>

				<!-- user! -->
				<div class="admin-header-user">
					<div class="table-icon user"></div>
				</div>

			</div>

		</div>

		<!-- barra lateral -->
		<div class="admin-sidebar">
			<ul class="admin-menu">
				<a href="news.php" class="link">
					<li class="news">	
						<div class="admin-menu-icons news"></div>
						Notícias
					</li>
				</a>

				<li class="project active">
					<div class="admin-menu-icons project"></div>
					Projetos
					<div class="left-arrow"></div>
				</li>
			 
				<a href="partners.php" class="link">
					<li class="partner">
						<div class="admin-menu-icons partner"></div>
						Parceiros
					</li>
				</a>
			
				<a href="team.php" class="link">	
					<li class="team">
						<div class="admin-menu-icons team"></div>
						Equipe
					</li>
				</a>

			</ul>
		</div>

		<!-- conteúdo -->
		<div class="admin-container">

			<div class="admin-content project-content">

				<!-- */\/* título *\/\* -->
				<div class="content-title">ADICIONAR</div>


				<!-- */\/* opções *\/\* -->
				<div class="content-icon">
					<div class="content-img new-project"></div>
					<p>PROJETO</p>
				</div>

				<div class="content-icon">
					<div class="content-img new-pub"></div>
					<p>PUBLICAÇÃO</p>
				</div>

				<div class="content-icon">
					<div class="content-img new-video"></div>
					<p>VÍDEO</p>
				</div>
			</div>

		</div>

	</body>
</html>