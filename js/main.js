/* Jquery --> depois de carregar pg */
$( document ).ready(function() {
	
	/* ao abrir a agenda */
	function openAgenda (){
		var pgAgenda = $('#pagina-agenda');
		$(pgAgenda).height($(pgAgenda).find('.pagina-content-lateral').outerHeight(true));
	}

	/*========= Navegação vertical do site ========*/
	$('.menu a').click(function(event){
		event.preventDefault();

		/* Busca largura da tela */
		var larguraTela = $(window).width();

		/* Página que está visível é a anterior */
		var pagina_anterior = $('.container-site > div:visible');
		
		/* Onde o scroll está */
		var past = $(window).scrollTop();
		
		/* Página a ser aberta, de acordo com o link do menu */
		var pagina = $('#pagina-' + $(this).attr('href'));
		

		/* Se está na página que foi clicada, não precisa fazer nada */
		if(pagina.index() == pagina_anterior.index()){
			return false;
		}

		if(larguraTela>720){

			/* Para que o conteúdo da página ocupe toda a altura da tela */
			if (pagina.outerHeight() < $(window).height()){
				$('<div class="espacador"></div>').height($(window).height() - pagina.outerHeight()).insertAfter(pagina);
			}
			if (pagina_anterior.outerHeight() < $(window).height()){
				$('<div class="espacador"></div>').height($(window).height() - pagina_anterior.outerHeight()).insertAfter(pagina_anterior);
			}

			$('.pagina-content-lateral').css('overflow','hidden');

			/* Para que todas as páginas sejam abertas e medida que vai para a escolhida */
			$('.container-site > div').each(function(index, element) {
				$(this).show();
				if (pagina.index() > pagina_anterior.index() && index == pagina.index()) return false;
				if (pagina.index() < pagina_anterior.index() && index == pagina_anterior.index()) return false;
			});	
			

			/* Corre a página para esconder a anterior */
			$('html, body').scrollTop(pagina_anterior.offset().top + past);
			$('html, body').animate({ scrollTop: pagina.offset().top }, 1000, function() {
				$('.container-site > div').not(pagina).hide();
				$('.espacador').remove();
				$('html, body').scrollTop(pagina.offset().top);
			});
			$('.pagina-content-lateral').css('overflow','visible');
		}
		else{
			$(pagina).show();
			$(pagina_anterior).hide();
		}

		$('html, body').scrollTop(0);

		if($(this).attr('href')=='agenda'){
			openAgenda();
		}

	});

	/*========= Navegação lateral do site ========*/
	/* Move a página para a esquerda */
	$('.nav-x .left-button').click(function(event){
		event.preventDefault();

		/* Busca largura da tela */
		larguraTela = $(window).width();

		/* Busca altura da tela */
		alturaTela = $(window).height();

		/*=== Altera posição do site ===*/
		$(this).parents('.container-laterais').find('.lateral-left').show();

		$(this).parents('.container-laterais').find('.lateral-center').css('left', '100%');
		$(this).parents('.container-laterais').find('.lateral-right').css('left', '200%');

		$(this).parents('.container-laterais').find('.lateral-left').animate({ left: '0%' }, 10, function() {
			$(this).parents('.container-laterais').find('.lateral-center').hide();	
			$(this).parents('.container-laterais').find('.lateral-right').hide();
		});

		/*=== Altera posição dos títulos ===*/
		$('.nav-x').show();

		$('.nav-x').removeAttr('style');
		$('.nav-x').removeClass('title-nav-x');
		$('.nav-x').removeClass('sub-nav-x');
		$('.nav-x').find('.titulo-lat').removeClass('sub-titulo-lat');


		$('.nav-x-left').css('left','50%');	
		$('.nav-x-left').addClass('title-nav-x');

		$('.nav-x-center').addClass('sub-nav-x');
		$('.nav-x-center').find('.titulo-lat').addClass('sub-titulo-lat');

		$('.nav-x-right').addClass('sub-nav-x');
		$('.nav-x-right').find('.titulo-lat').addClass('sub-titulo-lat');

		/*=== Esconde seta ===*/
		$('.arrow-nav').hide();

		/* Página de projetos */ /* Ajusta a altura dos projetos, para que as transições funcionem */
		$('.projeto-content').each(function( index ) {

		    var curHeight = $(this).height(),
		   		autoHeight = $(this).css('height', 'auto').height();

		   	$(this).height(curHeight).animate({height: autoHeight}, 50);

		});

		$('body').scrollTop(0);	
		$('.site').css('overflow','hidden');	
	
	});

	/* Move a página para o centro */
	$('.nav-x .center-button').click(function(event){
		event.preventDefault();

		/* Busca largura da tela */
		larguraTela = $(window).width();
		/* Busca altura da tela */
		alturaTela = $(window).height();

		/*=== Altera posição do site ===*/
		$(this).parents('.container-laterais').find('.lateral-center').show();

		$(this).parents('.container-laterais').find('.lateral-left').css('left', '-100%');
		$(this).parents('.container-laterais').find('.lateral-right').css('left', '100%');

		$(this).parents('.container-laterais').find('.lateral-center').animate({ left: '0%' }, 10, function() {
			$(this).parents('.container-laterais').find('.lateral-right').hide();	
			$(this).parents('.container-laterais').find('.lateral-left').hide();
		});

		/*=== Altera posição dos títulos ===*/
		$('.nav-x-center').css('left','50%');
		$('.nav-x-center').addClass('title-nav-x');	

		$('.nav-x').removeAttr('style');
		$('.nav-x').removeClass('title-nav-x');
		$('.nav-x').removeClass('sub-nav-x');
		$('.nav-x').find('.titulo-lat').removeClass('sub-titulo-lat');

		/*=== Mostra seta ===*/
		$('.arrow-nav').show();
		$('.site').css('overflow-y','visible');
	});

	/* Move a página para a direita */
	$('.nav-x .right-button').click(function(event){
		event.preventDefault();

		/* Busca largura da tela */
		larguraTela = $(window).width();
		/* Busca altura da tela */
		alturaTela = $(window).height();

		/*=== Altera posição do site ===*/
		$(this).parents('.container-laterais').find('.lateral-right').show();

		$(this).parents('.container-laterais').find('.lateral-center').css('left', '-100%');
		$(this).parents('.container-laterais').find('.lateral-left').css('left', '-200%');

		$(this).parents('.container-laterais').find('.lateral-right').animate({ left: '0%' }, 10, function() {
			$(this).parents('.container-laterais').find('.lateral-center').hide();	
			$(this).parents('.container-laterais').find('.lateral-left').hide();
		});

		/*=== Altera posição dos títulos ===*/		
		$('.nav-x').show();
		
		$('.nav-x').removeAttr('style');
		$('.nav-x').removeClass('sub-nav-x');
		$('.nav-x').removeClass('title-nav-x');
		$('.nav-x').find('.titulo-lat').removeClass('sub-titulo-lat');


		$('.nav-x-right').css('left','50%');	
		$('.nav-x-right').addClass('title-nav-x');	

		$('.nav-x-center').addClass('sub-nav-x');
		$('.nav-x-center').find('.titulo-lat').addClass('sub-titulo-lat');

		$('.nav-x-left').addClass('sub-nav-x');
		$('.nav-x-left').find('.titulo-lat').addClass('sub-titulo-lat');

		/*=== Esconde seta ===*/
		$('.arrow-nav').hide();

		$('body').scrollTop(0);	
		$('.site').css('overflow-y','hidden');
	});

	/* */
	/*========= Fim navegação lateral do site ========*/

	/* ======== PROJETOS  ================*/
	$('.open-projetos').click(function(event){

		/* Página de projetos */ /* Ajusta a altura dos projetos, para que as transições funcionem */
		$('.projeto-content').each(function( index ) {

		    var curHeight = $(this).height(),
		   		autoHeight = $(this).css('height', 'auto').height();

		   	$(this).height(curHeight).animate({height: autoHeight}, 50);

		});
	});

	/*========= Info Projetos -> Pesquisa ========*/
	/* Mostra info do projeto */
	$('.titulo-projeto').click(function(event){

		/* fecha outros projetos */
		$(this).parents('.projeto-content').siblings().css('height', '0px' );

		/* abre a descrição */
		$(this).siblings('.descricao-projeto').css('height','auto');

		/* abre conteúdo do proj */
		var contentProj = $(this).parents('.projeto-content'),
			curHeight = contentProj.height(),
		   	autoHeight = contentProj.css('height', 'auto').height();

		contentProj.height(curHeight).animate({height: autoHeight}, 100);

		/* ajusta scroll */
		$('.lateral-align-vert-right').scrollTop(0);

	});	
	$('.voltar-projeto').click(function(event){

		/* fecha a descrição */
		$(this).parents('.descricao-projeto').css('height','0px'); 

		/* abre conteúdo do proj */
		$('.projeto-content').each(function( index ) {

		    var curHeight = $(this).height(),
		   		autoHeight = $(this).css('height', 'auto').height();

		   	$(this).height(curHeight).animate({height: autoHeight}, 100);

		});
	});	
	/*========= Fim Info Projetos -> Pesquisa ========*/


	/*========= Acervo -> Publicacoes ========*/

	/* função para abrir acervo -> publicações ::: é preciso calcular a largura
		do container, de acordo com o número de relatórios */
	$('.open-publicacoes').click(function(event){
		
		var containerWidth = 0,
			wrapWidth = $('.wrap-pub').width(); 

		/* para cada projeto */
		$('.container-pub').each(function( index ) {

			/* para cada publicação relativa ao projeto */
			$(this).children().each(function( index ){

				/* calcula a largura do container baseado na largura das publicações */
				containerWidth = $(this).width()+containerWidth+20;
			});

			/* atualiza largura */
			$(this).width(containerWidth);

			if(wrapWidth>=containerWidth){
				$(this).parents('.wrap-pub').siblings('.right-move').css({ 'background-image': 'none', 'cursor': 'auto'});
			}

			var marginLeft = $(this).css('marginLeft');
			marginLeft = marginLeft.replace(/px/g, ''); 

			if(marginLeft==0){
				$(this).parents('.wrap-pub').siblings('.left-move').css({ 'background-image': 'none', 'cursor': 'auto'});
			}

			containerWidth = 0;

		});

	});

	/* move publicações para a direita */
	$('.right-move').click(function(event){

		/* busca valor atual da margin */
		var marginLeft = $(this).siblings('.wrap-pub').find('.container-pub').css('margin-left');

		/* apenas números */
		marginLeft = marginLeft.replace(/px/g, ''); 

		/* transforma em inteiro e subtrai valor do próximo elemento */
		marginLeft = parseInt(marginLeft)-170;

		/* busca largura do container */
		var larguraCont = $(this).siblings('.wrap-pub').find('.container-pub').width();

		/* busca largura do wrap */
		var larguraWrap = $(this).siblings('.wrap-pub').width();

		/* margin max */
		var maxMargin = parseInt(larguraWrap) - parseInt(larguraCont);

		if(marginLeft>= maxMargin && (marginLeft%170)==0){
			/* atualiza margin */
			$(this).siblings('.wrap-pub').find('.container-pub').css('margin-left', marginLeft);
			$(this).siblings('.left-move').removeAttr('style');

			if(marginLeft==maxMargin){
				$(this).css({ 'background-image': 'none', 'cursor': 'auto'});
			}
		}
	});

	/* move publicações para a esquerda */
	$('.left-move').click(function(event){

		/* busca valor atual da margin */
		var marginLeft = $(this).siblings('.wrap-pub').find('.container-pub').css('margin-left');

		/* apenas números */
		marginLeft = marginLeft.replace(/px/g, ''); 

		/* transforma em inteiro e adiciona valor do próximo elemento */
		marginLeft = parseInt(marginLeft)+170;

		if(marginLeft<=0 && (marginLeft%170)==0){
			/* atualiza margin */
			$(this).siblings('.wrap-pub').find('.container-pub').css('margin-left', marginLeft);
			$(this).siblings('.right-move').removeAttr('style');

			if(marginLeft==0){
				$(this).css({ 'background-image': 'none', 'cursor': 'auto'});
			}
		}
	});

	/* fecha alguma publicacao, ao clicar na imagem ou clicar em voltar */
	function closePub(obj){
		
		var projeto = $(obj).parents('.wrap-pub'),
			containerPub = $(obj).parents('.container-pub'),
			publicacao = $(obj).parents('.publicacao-content');

		/* remove classe que redimensiona a imagem */
		$(obj).removeClass('opened');
		/* fecha descrição da publicação */
		$(publicacao).find('.pub-content-text').css('display','none');

		/* ajusta altura e largura da publicação */
		$(projeto).removeClass('opened');
		$(publicacao).removeClass('opened');
		$(publicacao).parents('.container-pub').removeClass('opened');

		$(containerPub).height('225px');

		/* abre todas as outras publicações */
		$(publicacao).siblings('.publicacao-content').css('width','170px').css('padding','10px');

		/* setas direcionais reaparecem */	
		$(projeto).siblings('.left-move').show();
		$(projeto).siblings('.right-move').show();
	}
	$('.voltar-pub').click(function(event){

		var imagemPub = $(this).parents('.pub-content-text').siblings('.pub-content-img');
		closePub(imagemPub);
	});

	/* abre publicação ao clicar na imagem */
	$('.pub-content-img').click(function(event){

		/* define objetos */
		var projeto = $(this).parents('.wrap-pub'),
			containerPub = $(this).parents('.container-pub'),
			publicacao = $(this).parents('.publicacao-content');
		
		/* verifica se publicação está aberta ou fechada */
		var openFlag = $(projeto).find('.pub-content-img').hasClass('opened');

		/* abrir */
		if(!openFlag){	

			/* adiciona classe para redimensionar imagem */
			$(this).addClass('opened');
			/* abre descrição da pub */
			$(publicacao).find('.pub-content-text').css('display','inline-block');
			
			/* ajusta largura e altura da publicação */
			$(projeto).addClass('opened');
			$(publicacao).addClass('opened');
			$(containerPub).addClass('opened');

			$(containerPub).find('.publicacao-content.opened').each(function( index ) {

			    var curHeight = $(this).height(),
			   		autoHeight = $(this).css('height', 'auto').height();

			   	$(containerPub).height(curHeight).animate({height: autoHeight}, 50);

			});

			/* fecha todos as outras publicações */
			$(publicacao).siblings('.publicacao-content').css('width','0px').css('padding','0px');

			/* volta rolagem para posição inicial */
			$(containerPub).css('marginLeft','0px');
			$(projeto).siblings('.left-move').css({ 'background-image': 'none', 'cursor': 'auto'});
			if(containerPub.width()>projeto.width()){
				$(projeto).siblings('.right-move').removeAttr('style');
			}
			
			/* setas direcionais desaparecem */			
			$(projeto).siblings('.left-move').hide();
			$(projeto).siblings('.right-move').hide();
		}
		/* fechar */
		else{
			closePub(this);			
		}
	});
	/*========= Fim Acervo -> Publicacoes ========*/


	/*========= Agenda ========*/
	

	/* Ler mais da notícia */
	$('.not-mais').click(function(event){

		var textoNoticia = $(this).siblings('.not-text'),
			textoCompleto = $(textoNoticia).find('.not-text-mais'),
			textoMostrarMais = $(this).find('.closed'),
			textoMostrarMenos = $(this).find('.opened'),
			flagTexto = $(textoCompleto).hasClass('opened');

		/* ler mais */
		if(!flagTexto){
			$(textoCompleto).addClass('opened');
			$(textoMostrarMais).hide();
			$(textoMostrarMenos).show();

		    var curHeight = $(textoCompleto).height(),
		   		autoHeight = $(textoCompleto).css('height', 'auto').height();

		   	$(textoCompleto).height(curHeight).animate({height: autoHeight}, 500);
		}
		/* ler menos */
		else{
			$(textoMostrarMais).show();
			$(textoMostrarMenos).hide();
			$(textoCompleto).removeClass('opened');
			$(textoCompleto).animate({height: '0px'}, 500);
		}
	});
	/*========= Fim Agenda ========*/

	

	/* Quando a tela é redimencionada, os valores de css voltam ao default */
	$(window).resize(function() {
		$('div.pagina-wrap *').removeAttr('style');

		$('.pub-content-img').each(function( index ) {
			closePub(this);		
		});

		$('.nav-x').removeClass('sub-nav-x');
		$('.nav-x').removeClass('title-nav-x');
		$('.nav-x').find('.titulo-lat').removeClass('sub-titulo-lat');

		setTimeout(openAgenda(), 10000);
	});
});