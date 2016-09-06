/* Jquery --> depois de carregar pg */
$( document ).ready(function() {

	/*========= Navegação vertical do site ========*/
	$('.menu a').click(function(event){
		event.preventDefault();

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


		/* Para que o conteúdo da página ocupe toda a altura da tela */
		if (pagina.outerHeight() < $(window).height()){
			$('<div class="espacador"></div>').height($(window).height() - pagina.outerHeight()).insertAfter(pagina);
		}
		if (pagina_anterior.outerHeight() < $(window).height()){
			$('<div class="espacador"></div>').height($(window).height() - pagina_anterior.outerHeight()).insertAfter(pagina_anterior);
		}

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
		if (larguraTela>767 && alturaTela>767){
			$('.nav-x').show();
			$('.nav-x-left').css('left','50%');	
			$('.nav-x-right').animate({ left: '100%' }, 1000, function(){
				$('.nav-x-right').hide();
			});	
		}else{
			$('.nav-x').show();
			$('.nav-x-left').css('top','50px');	
			$('.nav-x-center').css('top','110px');
			$('.nav-x-right').css('top','0px');
			$('.nav-x-right').hide();
			$('.site').css('overflow','hidden');
		}
		$('.nav-x-center').css('left','90%');
		

		/*=== Esconde seta ===*/
		$('.arrow-nav').hide();

		/* Página de projetos */ /* Ajusta a altura dos projetos, para que as transições funcionem */
		$('.pesquisa-content').each(function( index ) {

		    var curHeight = $(this).height(),
		   		autoHeight = $(this).css('height', 'auto').height();

		   	$(this).height(curHeight).animate({height: autoHeight}, 50);

		});
		$('.lateral-proj').css('background-color', 'rgba(0, 0, 0, 0.6)');

		$('body').scrollTop(0);		
	
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
		if (larguraTela>767 && alturaTela>767){
			$('.nav-x').show();
			$('.nav-x-left').css('left','20%');	
			$('.nav-x-center').css('left','50%');
			$('.nav-x-right').css('left','80%');
		}else{
			$('.nav-x').show();
			$('.nav-x-left').css('top','180px');	
			$('.nav-x-center').css('top','300px');
			$('.nav-x-center').css('left','50%');
			$('.nav-x-right').css('top','245px');
			$('.site').css('overflow','visible');
		}

		/*=== Mostra seta ===*/
		$('.arrow-nav').show();

		/* projetos */
		$('.lateral-proj').css('background-color', 'transparent');
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
		if (larguraTela>767 && alturaTela>767){
			$('.nav-x').show();
			$('.nav-x-center').css('left','10%');
			$('.nav-x-right').css('left','50%');
			$('.nav-x-left').animate({ left: '-20%' }, 150, function(){
				$('.nav-x-left').hide();
			});	
		}else{
			$('.nav-x').show();	
			$('.nav-x-right').css('top','50px');
			$('.nav-x-center').css('top','110px');
			$('.nav-x-center').css('left','10%');
			$('.nav-x-left').css('top','110px');
			$('.nav-x-left').hide();
			$('.site').css('overflow','hidden');
		}					

		/*=== Esconde seta ===*/
		$('.arrow-nav').hide();

		/* Página de projetos */ /* Ajusta a altura dos projetos, para que as transições funcionem */
		$('.pesquisa-content').each(function( index ) {

		    var curHeight = $(this).height(),
		   		autoHeight = $(this).css('height', 'auto').height();

		   	$(this).height(curHeight).animate({height: autoHeight}, 50);

		});
		$('.lateral-proj').css('background-color', 'rgba(0, 0, 0, 0.6)');

		$('body').scrollTop(0);	
	});


	/* Mostra info do projeto */
	$('.titulo-projeto').click(function(event){

		/* fecha outros projetos */
		$(this).parents('.pesquisa-content').siblings().css('height', '0px' );

		/* abre a descrição */
		$(this).siblings('.descricao-projeto').css('height','auto');

		/* abre conteúdo do proj */
		var contentProj = $(this).parents('.pesquisa-content'),
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
		$('.pesquisa-content').each(function( index ) {

		    var curHeight = $(this).height(),
		   		autoHeight = $(this).css('height', 'auto').height();

		   	$(this).height(curHeight).animate({height: autoHeight}, 100);

		});
	});	

	/* Quando a tela é redimencionada, os valores de css voltam ao default */
	$(window).resize(function() {
		$('div.pagina-wrap *').removeAttr('style');
	});
});