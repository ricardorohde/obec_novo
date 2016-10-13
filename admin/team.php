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

		<title>Parceiros ::: Painel ADM | OBEC RS</title>

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
								<a href="news.php" class="link">
									<li class="news">	
										<div class="sidebarAdmMenu-icons news"></div>
										Notícias
									</li>
								</a>

								<a href="projects.php" class="link">
									<li class="project">
										<div class="sidebarAdmMenu-icons project"></div>
										Projetos
									</li>
								</a>
							 
							 	<a href="partners.php" class="link">
									<li class="partner">
										<div class="sidebarAdmMenu-icons partner"></div>
										Parceiros
									</li>
								</a>
							
								<li class="team active">
									<div class="sidebarAdmMenu-icons team"></div>
									Equipe
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

								<!-- */\/* opções *\/\* -->
								<a href="team_create.php" class="link">
									<div class="contentAdm-icon">
										<div class="contentAdm-img new-member"></div>
										<p>PESSOA</p>
									</div>
								</a>

							</div>

							<div class="contentAdm-section">

								<!-- */\/* título *\/\* -->
								<div class="contentAdm-title">GERENCIAR</div>

								<div class="container-square">
									<div class="content-square">
										<div class="contentTeam-img"><img src="../images/pessoas/lvaliati.jpg"/></div>
									</div>

									<div class="contentSquare-menu">
										<ul>
											<button type="button" class="transparent-button" data-toggle="modal" data-target="#infoModal">
												<li><div class="tableAdm-icon info" title="Info"></li>
											</button>
									        <li><div class="tableAdm-icon edit" title="Editar"></li>
									        <li><div class="tableAdm-icon bin" title="Excluir"></li>
										</ul>
									</div>
								</div>
								
								<div class="container-square">
									<div class="content-square">
										<div class="contentTeam-img"><img src="../images/pessoas/mbandeira.jpg"/></div>
									</div>

									<div class="contentSquare-menu">
										<ul>
											<button type="button" class="transparent-button" data-toggle="modal" data-target="#infoModal">
												<li><div class="tableAdm-icon info" title="Info"></li>
											</button>
									        <li><div class="tableAdm-icon edit" title="Editar"></li>
									        <li><div class="tableAdm-icon bin" title="Excluir"></li>
										</ul>
									</div>
								</div>

								<div class="container-square">
									<div class="content-square">
										<div class="contentTeam-img"><img src="../images/pessoas/cboettcher.jpg"/></div>
									</div>

									<div class="contentSquare-menu">
										<ul>
											<button type="button" class="transparent-button" data-toggle="modal" data-target="#infoModal">
												<li><div class="tableAdm-icon info" title="Info"></li>
											</button>
									        <li><div class="tableAdm-icon edit" title="Editar"></li>
									        <li><div class="tableAdm-icon bin" title="Excluir"></li>
										</ul>
									</div>
								</div>

								<div class="container-square">
									<div class="content-square">
										<div class="contentTeam-img"><img src="../images/pessoas/lcloss.jpg"/></div>
									</div>

									<div class="contentSquare-menu">
										<ul>
											<button type="button" class="transparent-button" data-toggle="modal" data-target="#infoModal">
												<li><div class="tableAdm-icon info" title="Info"></li>
											</button>
									        <li><div class="tableAdm-icon edit" title="Editar"></li>
									        <li><div class="tableAdm-icon bin" title="Excluir"></li>
										</ul>
									</div>
								</div>

								<div class="container-square">
									<div class="content-square">
										<div class="contentTeam-img"><img src="../images/pessoas/sflorissi.jpg"/></div>
									</div>

									<div class="contentSquare-menu">
										<ul>
											<button type="button" class="transparent-button" data-toggle="modal" data-target="#infoModal">
												<li><div class="tableAdm-icon info" title="Info"></li>
											</button>
									        <li><div class="tableAdm-icon edit" title="Editar"></li>
									        <li><div class="tableAdm-icon bin" title="Excluir"></li>
										</ul>
									</div>
								</div>

								<div class="container-square">
									<div class="content-square">
										<div class="contentTeam-img"><img src="../images/pessoas/eanicet.jpg"/></div>
									</div>

									<div class="contentSquare-menu">
										<ul>
											<button type="button" class="transparent-button" data-toggle="modal" data-target="#infoModal">
												<li><div class="tableAdm-icon info" title="Info"></li>
											</button>
									        <li><div class="tableAdm-icon edit" title="Editar"></li>
									        <li><div class="tableAdm-icon bin" title="Excluir"></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>


				<!-- === modal === -->
				<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
	  				<div class="modal-dialog" role="document">
	   					<div class="modal-content">
	      					
	      					<div class="modal-header">
	        					
	        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          						<span aria-hidden="true">&times;</span>
	        					</button>
	        					
	        					<h4 class="modal-title">Leandro Valiati</h4>

	        				</div>
	      					
	      					<div class="modal-body">
	        					
	        					<div class="content-square">
									<div class="contentTeam-img"><img src="../images/pessoas/lvaliati.jpg"/></div>
								</div>
								<br/>
								<p>Função: Coordenador</p>
								<p>Ocupação: Coordenador do Observatório de Economia Criativa UFRGS e Professor da Faculdade de Ciências Econômicas - UFRGS</p>
								<p>Lattes: <a href="http://lattes.cnpq.br/5429770532157362">http://lattes.cnpq.br/5429770532157362</a></p>

	      					</div>
	      					
	      					<div class="modal-footer">
	        					<button type="button" class="button small" data-dismiss="modal">Voltar</button>
	      					</div>
	    				
	    				</div><!-- /.modal-content -->
	  				</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			</div>
		</div>
	</body>
</html>