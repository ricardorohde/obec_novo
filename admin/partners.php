<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
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

				<!-- barra lateral -->
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="row">
						<div class="admin-sidebar">
							<ul class="sidebarAdm-menu">
								<li class="open-menuMobile visible-xs">	
									<div class="sidebarAdmMenu-icons menu"></div>
									Menu
									<div class="sidebarAdmLeft-arrow"></div>
								</li>

								<div class="mobileMenuAdm-container">

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
								 
									<li class="partner active">
										<div class="sidebarAdmMenu-icons partner"></div>
										Parceiros
										<div class="sidebarAdmLeft-arrow"></div>
									</li>
								
									<a href="team.php" class="link">	
										<li class="team">
											<div class="sidebarAdmMenu-icons team"></div>
											Equipe
										</li>
									</a>
									
								</div>

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
								<a href="partners_create.php" class="link">
									<div class="contentAdm-icon">
										<div class="contentAdm-img new-partner"></div>
										<p>PARCEIRO</p>
									</div>
								</a>

							</div>

							<div class="contentAdm-section">

								<!-- */\/* título *\/\* -->
								<div class="contentAdm-title">GERENCIAR</div>

								<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">PARCEIROS GOVERNAMENTAIS</div>
									</div>

									<div class="subSection-content">

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/scultura.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/inovapoa.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/agdi.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/minc.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

									</div>

								</div>

								<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">OBEC's PARCEIROS</div>
									</div>

									<div class="subSection-content">

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/amazonas.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/bahia.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/go.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/rj.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/df.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">UNSTITUIÇÕES PARCEIRAS</div>
									</div>

									<div class="subSection-content">

										<div class="container-square">
											<div class="content-square">
												<div class="contentPartner-img"><img src="../images/logos/valencia.png"/></div>
											</div>

											<div class="contentSquare-menu">
												<ul>
													<li><div class="tableAdm-icon link" title="Link"></div></li>
											        <li><div class="tableAdm-icon edit" title="Editar"></div></li>
											        <li><div class="tableAdm-icon bin" title="Excluir"></div></li>
												</ul>
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>