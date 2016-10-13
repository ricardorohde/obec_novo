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

		<title>Adicionar Notícia ::: Painel ADM | OBEC RS</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>          
	</head>

	<body class="admin">
		<div class="container-fluid">
			
			<!-- header -->
			<div class="row admin-header">

				<!-- brand! -->
				<a href="admin.php" class="link">
					<div class="headerAdm-brand">
						<div class="logo-icon small"></div>
						<div class="headerAdm-title">
							<div class="h1">PAINEL</div>
							<div class="h2">Administrativo</div>
						</div>
					</div>
				</a>

				<div class="headerAdm-right">
						
					<!-- view! -->
					<a href="/obec_new" class="link" target="_blank">
						<div class="headerAdm-button">Visualizar site</div>
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

				<!-- barra lateral -->
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="row">
						<div class="admin-sidebar">
							<ul class="sidebarAdm-menu">
								<a href="projects.php" class="link">
									<li class="partner">
										<div class="sidebarAdmMenu-icons project"></div>
										Projetos
									</li>
								</a>
								<a href="projects_create.php" class="link">
									<li class="subMenu-li">
										Novo projeto
									</li>
								</a>
								<a href="pub_create.php" class="link">
									<li class="subMenu-li">
										Nova publicação
									</li>
								</a>
								<li class="subMenu-li active">
									Novo vídeo
									<div class="sidebarAdmLeft-arrow"></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- conteúdo -->
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<div class="admin-container">
						<div class="admin-content project-content">
							
							<div class="contentAdm-section">

								<!-- */\/* título *\/\* -->
								<div class="contentAdm-title">ADICIONAR</div>

								<form>
									<div class="form-group">
										<label>Título</label>
										<input type="text" class="form-control form-contato">
									</div>

									<div class="form-group">
										<label>Projeto</label>
										<input type="text" class="form-control form-contato">
									</div>

									<div class="form-group">
										<label>Link</label>
										<input type="text" class="form-control form-contato">
									</div>

			    					<div class="form-group">
										<button type="submit" class="button small right">Salvar</button>
									</div>

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>