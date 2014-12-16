<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>HOME || Halcyon Agency</title>
		

		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!--<script type="text/javascript" src="js/plugin-slider.js"></script>
		<script type="text/javascript" src="js/plugin-slider-2.js"></script>-->
		<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="css/tooltip.css" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/modernizr.js"></script>
		<script type="text/javascript" src="js/dragdealer.min.js"></script>
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : 'your-app-id',
          xfbml      : true,
          version    : 'v2.1'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
		<div id="container" class="container"><!--contenedor de todo-->
			<section class="slide-menu">
				<nav class="slide-menu-nav" id="menu">
					<div class="slide-list">
						<label class="label">Dejanos lo que pensaste de nosotros!</label>
						<form>
							<ol>
								<li>
									<span>
										<label>What's your name?</label>
										<input type='text' placeholder='Horacio Gutierrez' required>
									</span>
								</li>
								<li>
									<span>
										<label>What's your e-mail?</label>
										<input type='email' placeholder='horacio@Gutierrez.com' required>
									</span>
								</li>
								<li>
									<span>
										<label>What you thought of us</label>
										<textarea placeholder='Describe here...'></textarea>
									</span>
								</li>
								<li>
									<span>
										<label>Describe how do you think we could improve this?</label>
										<textarea placeholder='Describe here...'></textarea>
									</span>
								</li>
							</ol>
						</form>
					</div>
				</nav>
			</section>
			<section class="main-content-up">
				<header class="header">
					<div class="top-logo"><!--logo-->
						<a class="animated fadeIn" href="index.php"></a>
					</div><!--end logo -->
					<nav class="main-menu cl-effect-18" id="">
						<a class="click-a animated fadeInLeft" id="Nosotros" href="#">Nosotros</a>
						<a class="click-a animated fadeInLeft" id="Portfolio" href="#">Portfolio</a>
						<a class="click-a animated fadeInLeft" id="Blog" href="#">Blog</a>
						<a class="click-a animated fadeInLeft" id="Contacto" href="#">Contacto</a>
					</nav>
					
				</header>
				<article>
					
					<div class="title-up" id="title">
						<div class="side-link"><!--boton de comentario-->
							<a class="" href="#"><span class="">Dejanos un comentario!</span></a>
						</div><!--end boton de comentario-->
						<h1 id="h1-title" class="animated fadeInDown">Halcyon Agency</h1>
						<h2 id="h2-title" class="animated fadeInDown">Thinking our own ways</h2>
					</div>
				</article>
			</section>
			<section class="main-content-down down">
				<div class="title-down">
					<h1 id="h1-second-title">Un poco sobre nuestra historia</h1>
					<p class="subline">Inspiración de una tarde</p>
					<p>by <strong>Horacio/Brian</strong> &#8212; <strong>Halcyon, el otro lado</strong> el <strong>May 21, 2014</strong></p>
				</div>
					<article class="main-content">
						<div>
							<p>Dos extraños que se conocen estudiando de repente sacan una agencia de la galera. En Halcyon todo es asi; acá se labura de forma espontánea manteniendo un nivel de profesionalismo adecuado.</p>
							<p>Pasamos de trabajar una tarde por semana en un depto a poder desarollar nuevos proyectos y ampliar el área de marketing y publicidad a cargo de Lu, que nos da una mano, y el área de creatividades que nos amplia ideas a otros horizontes con Cris.</p>
							<p>"...En halcyon creemos que un hambiente de poco stress y mucha creatividad es ideal para sacar al máximo las habilidades de cada uno de nosotros... por eso nos la pasamos boludeando.</p>
							<p>Pero cuando trabajamos, trabajamos con todo. Le ponemos nuestra mano a cada uno de nuestros proyectos para  destacarnos en usar diseños únicos.</p>
							<p>Le decimos NO! a las plantillas compradas; aca en Halcyon te aseguramos un diseño único y de calidad.</p>
							<p>Y si te copó, te venis y nos traes una birra de regalo."</p>
							<div
			  					class="fb-like"
								data-share="true"
								data-width="450"
								data-show-faces="true">
							</div>
						</div>
					</article>
					<footer class="related">
						<p>Y si te copó algo de lo que viste, capaz te interese: </p>
						<div><a href="#"><h4>Workflow de laburo</h4></a></div>
						<div><a href="#"><h4>Primera plantilla</h4></a></div>
					</footer>
			</section>
		</div><!-- /container -->
		<script type="text/javascript">
		$(document).ready(function(){
			$('.side-link').find('span').mouseenter(function(){
    			$(this).addClass("animated");
				$(this).addClass("bounceInLeft");
			}).mouseleave(function(){
    			$(this).removeClass("animated");
				$(this).removeClass("bounceInLeft");
			});

			$('.main-menu').find('a').click(function(){
				$('#title').fadeOut();
			});
			
			$('.side-link').find('span').delay(3100).fadeIn();

			$('.main-menu').find('a').click(function(){
				$(this).addClass("fadeOutRight");
				/*$('.main-content').fadeOut(500);*/
				$('.main-content-php').addClass("fadeOut");
				$('.main-data').addClass("animated fadeOut");

				var option= $(this).text();
				$('.click-a').not(document.getElementById(option)).delay(500).removeClass("fadeOutRight");
				$('.click-a').not(document.getElementById(option)).delay(500).addClass("fadeInLeft");
				$.ajax({
            		method:'POST', 
		            url:'data/main-data/main-data.php',
		            data:{selection: option},
		            dataType: 'json',
		            success:function(result){
	    	        	
    	    	    	var array= result;
              		    /*$('.main-content-up').append("<div class='ajax-content-container'>"+
                    	"<h1 class='animated fadeInLeft'>"+option+"</h1>"+"<h2 class='animated fadeInLeft'>"+result[option]+"</h2>"
                    	+"</div>");
						$('.main-content-up').append("<div class='main-content animated fadeInLeft '>"+"<h1>"+option+"</h1>"+"</div>");
						$('.main-content-up').find(".main-content").append("<h2 class='animated fadeInLeft big-title'>"+result[option]+"</h2>");*/


						$('.main-content-up').delay(700).queue(function (next) {
						    $(this).append("<div class='main-content-php animated fadeInLeft '>"+"<h1>"+option+"</h1>"+"</div>");
						    next();
						});

						$('.main-content-up').delay(300).queue(function (next) {
						    $(this).find(".main-content-php").append("<h2 class='animated fadeInLeft big-title'>"+result[option]+"</h2>");
						    next();
						});
                    }
        		});

        		$.ajax({
            		method:'POST', 
		            url:'data/main-data/main-data-'+option+'.php',
		            data:{selection: option},
		            dataType: 'json',
		            success:function(result){
	    	        	
    	    	    	var array= result;
              		    /*$('.ajax-content-container').append("<div class='main-data'>"+array+"</div>");*/
              		    /*$('.main-content').delay(1000).append(result);*/

              		    $('.main-content-up').append("<div class='main-data animated fadeInLeft'>"+array+"</div>");
			
                    }
        		});




			});

		});
		</script>
	</body>
</html>
