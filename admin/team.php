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

				<a href="projects.php" class="link">
					<li class="project">
						<div class="admin-menu-icons project"></div>
						Projetos
					</li>
				</a>
			 	
			 	<a href="partners.php" class="link">	
					<li class="partner">
						<div class="admin-menu-icons partner"></div>
						Parceiros
					</li>
				</a>			
				
				<li class="team active">
					<div class="admin-menu-icons team"></div>
					Equipe
					<div class="left-arrow"></div>
				</li>
			</ul>
		</div>

		<!-- conteúdo -->
		<div class="admin-container">

			<div class="admin-content partner-content opened-content">

				<div class="content-section admin-add">
				
					<!-- */\/* título *\/\* -->
					<div class="content-title">ADICIONAR</div>


					<!-- */\/* opções *\/\* -->
					<div class="content-icon">
						<div class="content-img new-person"></div>
						<p>PESSOA</p>
					</div>

				</div>

				<div class="content-section admin-ger">

					<!-- */\/* título *\/\* -->
					<div class="content-title">GERENCIAR</div>

					<div class="content-partner">
						<div class="img-partner">
							<div class="img-team"><img src="../images/pessoas/lvaliati.jpg"/></div>
						</div>

						<div class="menu-partner">
							<ul>
								
								<button type="button" class="transparent-button" data-toggle="modal" data-target="#myModal">
									<li><div class="table-icon info" title="Info"></li>
								</button>
						        <li><div class="table-icon edit" title="Editar"></li>
						        <li><div class="table-icon bin" title="Excluir"></li>
							</ul>
						</div>
					</div>

					<div class="content-partner">
						<div class="img-partner">
							<div class="img-team"><img src="../images/pessoas/mbandeira.jpg"/></div>
						</div>

						<div class="menu-partner">
							<ul>
								<button type="button" class="transparent-button" data-toggle="modal" data-target="#myModal">
									<li><div class="table-icon info" title="Info"></li>
								</button>
						        <li><div class="table-icon edit" title="Editar"></li>
						        <li><div class="table-icon bin" title="Excluir"></li>
							</ul>
						</div>
					</div>

					<div class="content-partner">
						<div class="img-partner">
							<div class="img-team"><img src="../images/pessoas/cboettcher.jpg"/></div>
						</div>

						<div class="menu-partner">
							<ul>
								<button type="button" class="transparent-button" data-toggle="modal" data-target="#myModal">
									<li><div class="table-icon info" title="Info"></li>
								</button>
						        <li><div class="table-icon edit" title="Editar"></li>
						        <li><div class="table-icon bin" title="Excluir"></li>
							</ul>
						</div>
					</div>

					<div class="content-partner">
						<div class="img-partner">
							<div class="img-team"><img src="../images/pessoas/lcloss.jpg"/></div>
						</div>

						<div class="menu-partner">
							<ul>
								<button type="button" class="transparent-button" data-toggle="modal" data-target="#myModal">
									<li><div class="table-icon info" title="Info"></li>
								</button>
						        <li><div class="table-icon edit" title="Editar"></li>
						        <li><div class="table-icon bin" title="Excluir"></li>
							</ul>
						</div>
					</div>

					<div class="content-partner">
						<div class="img-partner">
							<div class="img-team"><img src="../images/pessoas/sflorissi.jpg"/></div>
						</div>

						<div class="menu-partner">
							<ul>
								<button type="button" class="transparent-button" data-toggle="modal" data-target="#myModal">
									<li><div class="table-icon info" title="Info"></li>
								</button>
						        <li><div class="table-icon edit" title="Editar"></li>
						        <li><div class="table-icon bin" title="Excluir"></li>
							</ul>
						</div>
					</div>

					<div class="content-partner">
						<div class="img-partner">
							<div class="img-team"><img src="../images/pessoas/eanicet.jpg"/></div>
						</div>

						<div class="menu-partner">
							<ul>
								<button type="button" class="transparent-button" data-toggle="modal" data-target="#myModal">
									<li><div class="table-icon info" title="Info"></li>
								</button>
						        <li><div class="table-icon edit" title="Editar"></li>
						        <li><div class="table-icon bin" title="Excluir"></li>
							</ul>
						</div>
					</div>

				</div>

			</div>

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  				<div class="modal-dialog" role="document">
   					<div class="modal-content">
      					
      					<div class="modal-header">
        					
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
        					
        					<h4 class="modal-title">Leandro Valiati</h4>

        				</div>
      					
      					<div class="modal-body">
        					
        					<div class="img-partner">
								<div class="img-team"><img src="../images/pessoas/lvaliati.jpg"/></div>
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

	</body>
</html>