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

		<title>Projetos ::: Painel ADM | OBEC RS</title>

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

									<li class="project active">
										<div class="sidebarAdmMenu-icons project"></div>
										Projetos
										<div class="sidebarAdmLeft-arrow"></div>
									</li>
								 
									<a href="partners.php" class="link">
										<li class="partner">
											<div class="sidebarAdmMenu-icons partner"></div>
											Parceiros
										</li>
									</a>
								
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
								<a href="projects_create.php" class="link">
									<div class="contentAdm-icon">
										<div class="contentAdm-img new-project"></div>
										<p>PROJETO</p>
									</div>
								</a>

								<a href="pub_create.php" class="link">
									<div class="contentAdm-icon">
										<div class="contentAdm-img new-pub"></div>
										<p>PUBLICAÇÃO</p>
									</div>
								</a>

								<a href="video_create.php" class="link">
									<div class="contentAdm-icon">
										<div class="contentAdm-img new-video"></div>
										<p>VÍDEO</p>
									</div>
								</a>

							</div>

							<div class="content-section admin-ger">

								<!-- */\/* título *\/\* -->
								<div class="contentAdm-title">GERENCIAR</div>

								<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">Projetos</div>
									</div>

									<div class="subSection-content">
										<table class="table table-hover admin-table">
					    					
					    					<thead>
					      						<tr>
					        						<th>Título</th>
					        						<th>Tipo</th>
					        						<th>Editar</th>
					        						<th>Excluir</th>
					      						</tr>
					    					</thead>
					    					
					    					<tbody>
					      						<tr>
					        						<td>COMÉRCIO INTERNACIONAL, INDÚSTRIAS CRIATIVAS E ECONOMIA DA CULTURA</td>
											        <td>Pesquisa</td>
											      	<td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
											        <td>FOMENTO À CULTURA BRASILEIRA: POLÍTICAS E INDICADORES</td>
											        <td>Pesquisa</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>ESTUDOS SETORIAIS EM ECONOMIA DA CULTURA E INDÚSTRIAS CRIATIVAS</td>
					        						<td>Pesquisa</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						<tr>
											        <td>DIÁLOGOS EM ECONOMIA CRIATIVA</td>
											        <td>Extensão</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					    					</tbody>
					  					
					  					</table>
					  				</div>
				  				</div>

				  				<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">Publicações</div>
									</div>

									<div class="subSection-content">

					  					<table class="table table-hover admin-table">
					    					
					    					<thead>
					      						<tr>
					        						<th>Título</th>
					        						<th>Projeto</th>
					        						<th>Editar</th>
					        						<th>Excluir</th>
					      						</tr>
					    					</thead>
					    					
					    					<tbody>
					      						<tr>
					      							<td>LOREM IPSUM DOLOR SIT AMET</td>
					        						<td>COMÉRCIO INTERNACIONAL, INDÚSTRIAS CRIATIVAS E ECONOMIA DA CULTURA</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>LOREM IPSUM DOLOR SIT AMET</td>
											        <td>FOMENTO À CULTURA BRASILEIRA: POLÍTICAS E INDICADORES</td>
											       	<td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>LOREM IPSUM DOLOR SIT AMET</td>
					        						<td>ESTUDOS SETORIAIS EM ECONOMIA DA CULTURA E INDÚSTRIAS CRIATIVAS</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>LOREM IPSUM DOLOR SIT AMET</td>
					        						<td>COMÉRCIO INTERNACIONAL, INDÚSTRIAS CRIATIVAS E ECONOMIA DA CULTURA</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>LOREM IPSUM DOLOR SIT AMET</td>
											        <td>FOMENTO À CULTURA BRASILEIRA: POLÍTICAS E INDICADORES</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>LOREM IPSUM DOLOR SIT AMET</td>
					        						<td>ESTUDOS SETORIAIS EM ECONOMIA DA CULTURA E INDÚSTRIAS CRIATIVAS</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					    					</tbody>
					  					
					  					</table>
					  				</div>
					  			</div>

					  			<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">Vídeos</div>
									</div>

									<div class="subSection-content">

					  					<table class="table table-hover admin-table">
					    					
					    					<thead>
					      						<tr>
					        						<th>Link</th>
					        						<th>Projeto</th>
					        						<th>Editar</th>
					        						<th>Excluir</th>
					      						</tr>
					    					</thead>
					    					
					    					<tbody>
					      						<tr>
					      							<td>youtube.com.br</td>
					        						<td>COMÉRCIO INTERNACIONAL, INDÚSTRIAS CRIATIVAS E ECONOMIA DA CULTURA</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>youtube.com.br</td>
											        <td>FOMENTO À CULTURA BRASILEIRA: POLÍTICAS E INDICADORES</td>
											       	<td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>youtube.com.br</td>
					        						<td>ESTUDOS SETORIAIS EM ECONOMIA DA CULTURA E INDÚSTRIAS CRIATIVAS</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>youtube.com.br</td>
					        						<td>COMÉRCIO INTERNACIONAL, INDÚSTRIAS CRIATIVAS E ECONOMIA DA CULTURA</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>youtube.com.br</td>
											        <td>FOMENTO À CULTURA BRASILEIRA: POLÍTICAS E INDICADORES</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					      							<td>youtube.com.br</td>
					        						<td>ESTUDOS SETORIAIS EM ECONOMIA DA CULTURA E INDÚSTRIAS CRIATIVAS</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					    					</tbody>
					  					
					  					</table>
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