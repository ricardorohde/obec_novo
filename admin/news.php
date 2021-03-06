<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/admin.css">

		<title>Notícias ::: Painel ADM | OBEC RS</title>

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
									<li class="news active">	
										<div class="sidebarAdmMenu-icons news"></div>
										Notícias
										<div class="sidebarAdmLeft-arrow"></div>
									</li>

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
								<a href="news_create.php" class="link">
									<div class="contentAdm-icon">
										<div class="contentAdm-img new-news"></div>
										<p>NOTÍCIA</p>
									</div>
								</a>
								<a href="event_create.php" class="link">
									<div class="contentAdm-icon">
										<div class="contentAdm-img new-event"></div>
										<p>EVENTO</p>
									</div>
								</a>

							</div>

							<div class="content-section admin-ger">

								<!-- */\/* título *\/\* -->
								<div class="contentAdm-title">GERENCIAR</div>

								<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">NOTÍCIAS</div>
									</div>

									<div class="subSection-content">

										<table class="table table-hover admin-table">
					    					
					    					<thead>
					      						<tr>
					        						<th>Título</th>
					        						<th class="hidden-xs">Data</th>
					        						<th class="hidden-xs">Tipo</th>
					        						<th>Editar</th>
					        						<th>Excluir</th>
					      						</tr>
					    					</thead>
					    					
					    					<tbody>
					      						<tr>
					        						<td>UNESCO E CISAC LANÇAM MAPEAMENTO GLOBAL DAS INDÚSTRIAS CULTURAIS E CRIATIVAS</td>
					        						<td class="hidden-xs">04/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon news" title="Notícia"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
											        <td>EMPREENDEDORES BRASILEIROS PARTICIPAM DO MICSUL 2016</td>
											        <td class="hidden-xs">03/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon event" title="Evento"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>UNESCO E CISAC LANÇAM MAPEAMENTO GLOBAL DAS INDÚSTRIAS CULTURAIS E CRIATIVAS</td>
					        						<td class="hidden-xs">04/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon news" title="Notícia"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
											        <td>EMPREENDEDORES BRASILEIROS PARTICIPAM DO MICSUL 2016</td>
											        <td class="hidden-xs">03/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon event" title="Evento"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>UNESCO E CISAC LANÇAM MAPEAMENTO GLOBAL DAS INDÚSTRIAS CULTURAIS E CRIATIVAS</td>
					        						<td class="hidden-xs">04/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon news" title="Notícia"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
											        <td>EMPREENDEDORES BRASILEIROS PARTICIPAM DO MICSUL 2016</td>
											        <td class="hidden-xs">03/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon event" title="Evento"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>UNESCO E CISAC LANÇAM MAPEAMENTO GLOBAL DAS INDÚSTRIAS CULTURAIS E CRIATIVAS</td>
					        						<td class="hidden-xs">04/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon news" title="Notícia"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
											        <td>EMPREENDEDORES BRASILEIROS PARTICIPAM DO MICSUL 2016</td>
											        <td class="hidden-xs">03/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon event" title="Evento"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>UNESCO E CISAC LANÇAM MAPEAMENTO GLOBAL DAS INDÚSTRIAS CULTURAIS E CRIATIVAS</td>
					        						<td class="hidden-xs">04/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon news" title="Notícia"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
											        <td>EMPREENDEDORES BRASILEIROS PARTICIPAM DO MICSUL 2016</td>
											        <td class="hidden-xs">03/10/2016</td>
											        <td class="hidden-xs"><div class="tableAdm-icon event" title="Evento"></div></td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>

					    					</tbody>

					  					</table>

					  					<!-- paginação! -->
					  					<ul class="pagination dark">
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
										</ul>

									</div>
								</div>
								<div class="contentAdm-subSection">

									<div class="subSection-title">
										<div class="subSectionRight-arrow"></div>
										<div class="text-title">EVENTOS</div>
									</div>

									<div class="subSection-content">

										<table class="table table-hover admin-table">
					    					
					    					<thead>
					      						<tr>
					        						<th>Título</th>
					        						<th>Local</th>
					        						<th class="hidden-xs">Data</th>
					        						<th>Editar</th>
					        						<th>Excluir</th>
					      						</tr>
					    					</thead>
					    					
					    					<tbody>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					      						<tr>
					        						<td>Mercado de Indústrias Culturais do Sul (MICSUL 2016)</td>
					        						<td>Bogotá, Colômbia</td>
					        						<td class="hidden-xs">17/10/2016</td>
											        <td><div class="tableAdm-icon edit" title="Editar"></div></td>
											        <td><div class="tableAdm-icon bin" title="Excluir"></div></td>
					      						</tr>
					    					</tbody>

					  					</table>

					  					<!-- paginação! -->
					  					<ul class="pagination dark">
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
										</ul>

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