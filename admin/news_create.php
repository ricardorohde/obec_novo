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

		 <!-- Include Font Awesome. -->
  		<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

		<!-- Include Editor style. -->
		<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.3.4/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
		<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.3.4/css/froala_style.min.css' rel='stylesheet' type='text/css' />		
		<link rel="stylesheet" href="../css/plugins/char_counter.css">
		<link rel="stylesheet" href="../css/plugins/code_view.css">
		<link rel="stylesheet" href="../css/plugins/colors.css">
		<link rel="stylesheet" href="../css/plugins/emoticons.css">
		<link rel="stylesheet" href="../css/plugins/file.css">
		<link rel="stylesheet" href="../css/plugins/fullscreen.css">
		<link rel="stylesheet" href="../css/plugins/image.css">
		<link rel="stylesheet" href="../css/plugins/image_manager.css">
		<link rel="stylesheet" href="../css/plugins/line_breaker.css">
		<link rel="stylesheet" href="../css/plugins/quick_insert.css">
		<link rel="stylesheet" href="../css/plugins/table.css">
		<link rel="stylesheet" href="../css/plugins/video.css">


		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

		<!-- Include JS file. -->
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.3.4/js/froala_editor.min.js'></script>

		<!-- Include Plugins. -->
		<script type="text/javascript" src="../js/plugins/align.min.js"></script>
		<script type="text/javascript" src="../js/plugins/char_counter.min.js"></script>
		<script type="text/javascript" src="../js/plugins/code_beautifier.min.js"></script>
		<script type="text/javascript" src="../js/plugins/code_view.min.js"></script>
		<script type="text/javascript" src="../js/plugins/colors.min.js"></script>
		<script type="text/javascript" src="../js/plugins/emoticons.min.js"></script>
		<script type="text/javascript" src="../js/plugins/entities.min.js"></script>
		<script type="text/javascript" src="../js/plugins/file.min.js"></script>
		<script type="text/javascript" src="../js/plugins/font_family.min.js"></script>
		<script type="text/javascript" src="../js/plugins/font_size.min.js"></script>
		<script type="text/javascript" src="../js/plugins/fullscreen.min.js"></script>
		<script type="text/javascript" src="../js/plugins/image.min.js"></script>
		<script type="text/javascript" src="../js/plugins/image_manager.min.js"></script>
		<script type="text/javascript" src="../js/plugins/inline_style.min.js"></script>
		<script type="text/javascript" src="../js/plugins/line_breaker.min.js"></script>
		<script type="text/javascript" src="../js/plugins/link.min.js"></script>
		<script type="text/javascript" src="../js/plugins/lists.min.js"></script>
		<script type="text/javascript" src="../js/plugins/paragraph_format.min.js"></script>
		<script type="text/javascript" src="../js/plugins/paragraph_style.min.js"></script>
		<script type="text/javascript" src="../js/plugins/quick_insert.min.js"></script>
		<script type="text/javascript" src="../js/plugins/quote.min.js"></script>
		<script type="text/javascript" src="../js/plugins/table.min.js"></script>
		<script type="text/javascript" src="../js/plugins/save.min.js"></script>
		<script type="text/javascript" src="../js/plugins/url.min.js"></script>
		<script type="text/javascript" src="../js/plugins/video.min.js"></script>
          
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
										<li class="partner">
											<div class="sidebarAdmMenu-icons news"></div>
											Notícias
										</li>
									</a>
									<li class="subMenu-li active">
										Nova notícia
										<div class="sidebarAdmLeft-arrow"></div>
									</li>
									<a href="event_create.php" class="link">
										<li class="subMenu-li">
											Novo evento
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

								<form>
									<div class="form-group">
										<label>Título</label>
										<input type="text" class="form-control form-contato">
									</div>

									<div class="form-group">
			    						<textarea id="edit" name="content"></textarea>
			    					</div>

			    					<div class="form-group">
			    						<label class="control control--checkbox login-checkbox">Evento
			                        		<input type="checkbox"/>
			                        		<div class="control__indicator"></div>
			                    		</label>
										<button type="submit" class="button small right">Salvar</button>
									</div>

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
      		$(function() {
          		$('#edit').froalaEditor()
     		});
  		</script>

	</body>
</html>