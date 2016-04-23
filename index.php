<?php
	$mail2 = isset( $_GET['mail'] )? $_GET['mail']: false;
	if($mail2 == 'send'){
		$imie = isset( $_POST['imie'] )? $_POST['imie']: false;
		$mail = isset( $_POST['mail'] )? $_POST['mail']: false;
		$telefon =isset( $_POST['telefon'] )? $_POST['telefon']: false;
		$content_mail = isset( $_POST['content_mail'] )? $_POST['content_mail']: false;
		
		$to      = 'emste@emste.eu';
		$subject = 'Mail ze strony internetowej.';
		$message = '<html><body>Wiadomość ze strony internetowej:<br/>Imię: '.$imie.'</br><br/>Mail: '.$mail.'<br/>Telefon: '.$telefon.'<br/>Treść: '.$content_mail.'</body></html>';
		$headers = "From: " . $mail . "\r\n";
		$headers .= "Reply-To: ". strip_tags($mail) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";
		
		//mail($to, $subject, $message, $headers);
	}
?> 
<!DOCTYPE html>
<!--

 ____  __  __  ___  ____  ____    ____  __  __ 
( ___)(  \/  )/ __)(_  _)( ___)  ( ___)(  )(  )
 )__)  )    ( \__ \  )(   )__)    )__)  )(__)( 
(____)(_/\/\_)(___/ (__) (____)()(____)(______)
________ creative. technology. emste. ________


-->
<html lang="pl-PL" prefix="og: http://ogp.me/ns#">
	<head>
		<title>emste.eu - portfolio</title>
		
		<meta charset="UTF-8"> 
		<meta name="author" content="Emil Spiewak Stefaniuk"/>
		<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW"/>
		<meta name="revisit-after" content="1 days"/>
		<meta name="description" content="emste.eu - strony internetowe, grafika komputerowa, pomoc informatyczna - Białystok"/>
		<meta name="keywords" content="strony internetowe, grafika komputerowa, pomoc informatyczna, Białystok, Emil Stefaniuk, emste" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<link rel="icon" type="image/png" href="img/favicon.png" />
		
		<link rel="author" href="https://plus.google.com/105304308035692042200/"/>
		
		<meta property="fb:admins" content="100001280827519"/>
		<meta property="og:title" content="emste.eu - portfolio"/>
		<meta property="og:url" content="http://emste.eu/"/>
		<meta property="og:type" content="website"/>
		<meta property="og:description" content="emste.eu - strony internetowe, grafika komputerowa, pomoc informatyczna - Białystok"/>
		<meta property="og:image" content="img/bg.jpg"/>
		
		<!--<meta name=”twitter:card” content=”summary”>
		<meta name=”twitter:url” content=”http://www.nytimes.com/2012/02/19/arts/music/amid-police-presence-fans-congregate-for-whitney-houstons-funeral-in-newark.html”>
		<meta name=”twitter:title” content=”Parade of Fans for Houston’s Funeral”>
		<meta name=”twitter:description” content=”NEWARK – The guest list and parade of limousines with celebrities emerging from them seemed more suited to a red carpet event in Hollywood or New York than than a gritty stretch of Sussex Avenue near the former site of the James M. Baxter Terrace public housing project here.”>
		<meta name=”twitter:image” content=”http://graphics8.nytimes.com/images/2012/02/19/us/19whitney-span/19whitney-span-articleLarge.jpg”>-->
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	</head>
	<body>
			<?php if($mail2 == 'send'){ ?>
			<div class="uspiewaka_notifyyy" id="notify">
			Pomyślnie wysłano wiadomość! Poczekaj na odpowiedź!
			</div>
			<?php } ?>
		<div class="uspiewaka_header parallax-window" data-parallax="scroll" data-image-src="img/bg.jpg">
			<div class="uspiewaka_gradient">
				<div class="uspiewaka_pattern jumbotron">
					<div class="col-md-12" style="text-align: center; margin-top: 18.3333%;">
						<!-- <img src="img/uspiewaka.jpg" class="img-circle uspiewaka_avatar"> -->
						<h1>emste.eu</h1>
						<p>creative. technology. emste.</p>
						<a class="uspiewaka_arrow" href="#content" data-toggle="scroll"><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></a>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<div class="container" id="content">
			<div class="row">
				<div class="col-md-4">
					<div>
						<h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> O mnie</h1>
						<hr>
						<div>
							<div class="uspiewaka_left uspiewaka_profile">
								<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c62.0.160.160/p160x160/10641219_804623492923671_9012469478412877182_n.jpg?oh=f62198a1b96559571b167ee00d35bb36&amp;oe=556750F3&amp;__gda__=1430904547_6c10f630f910a5e0376b50d9ae492df4" alt="" class="img-circle uspiewaka_avatar2" style="float:left; margin-right:10px; margin-bottom: 10px;">
								<h2 class="uspiewaka_left">Emil Stefaniuk</h2>
							</div>
							<div class="uspiewaka_left">
								<b>Cześć!</b><br/>
								Mam na imię <b>Emil</b>. Jestem uczniem 3 klasy <a href="http://zse.biaman.pl" target="_blank">Zespołu Szkół Elektrycznych w Białymstoku</a> na profilu <b>technik informatyk</b>.
								Pasjonat informatyki i nowych technologii.<br/><br/>
								<address>
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Białystok<br/>
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 505 915 025<br/>
								<img src="img/skype.png"  alt="skype:"/> emil.stefaniuk<br/>
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:emste@emste.eu">emste@emste.eu</a><br/>
								<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <a href="http://fb.com/emil.stefaniuk" target="_blank">fb.com/emil.stefaniuk</a>
								</address>
							</div>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<div class="col-md-8">
					<h1><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Oferta</h1>
					<hr>
							<h3><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Strony internetowe</h3>
							Potrzebujesz poinformować <b>swoich obecnych klientów</b> o nowej ofercie? Chcesz <b>zaistnieć w Internecie</b> i przyciągnąć <b>nowych odbiorców</b>? Jeśli na <b>jedno z tych pytań</b> odpowiedziałeś twierdząco, oferuję dla Ciebie <b>idealnie skrojoną, dynamiczną stronę internetową</b>!<br/><br/>
							<b>Wykonanie w technikach:</b> HTML, CSS, podstawy PHP, gotowe skrypty JavaScript, Bootstrap;<br/>
							<b>Znam budowę systemów CMS:</b> phpBB by Przemo, PHP-Fusion;
							
							<h3><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Grafika komputerowa</h3>
							Poszukujesz <b>identyfikacji wizualnej, wizytówki, ulotek</b> dla swojej firmy? Robisz imprezę i potrzebujesz <b>projektu plakatu</b>? Może potrzebujesz innej grafiki użytecznej? Chcesz <b>przykuć uwagę</b> potencjalnych klientów? Jeśli na <b>jedno z tych pytań</b> odpowiedziałeś twierdząco - <b>trafiłeś idealnie</b>! <br/><br/>
							<b>Wykorzystywane programy:</b> Adobe Photoshop, GIMP;
							
							<h3><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Pomoc informatyczna</h3>
							Komputer znowu <b>odmawia posłuszeństwa</b>? Potrzebujesz <b>skonfigurowania sieci</b> w swojej firmie? Wybierasz sprzęt i <b>nie wiesz</b> na co się zdecydować? <b>Napisz do mnie</b>!<br/><br/>
							<b>Znajomość:</b> zaawansowana - Windows, średnio-zaawansowana - sieci komputerowe, podstawowa - Linux;<br/>
							<b>Posiadanie kwalifikacji:</b> E.12 - Montaż i eksploatacja komputerów osobistych oraz urządzeń peryferyjnych.<br/>
				</div>
			</div>
			<h1><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Moje ostatnie prace</h1>
			<hr>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active uspiewaka_prace123" style="background-image:url('img/works/thumb_crash_ashes.jpg');">
      <div class="carousel-caption">
        <h3>Matthew Crash - Ashes</h3>
		Wykonanie okładki.
      </div>
    </div>
    <div class="item uspiewaka_prace123" style="background-image:url('img/works/thumb_scaryfools_plakat.jpg');">
      <div class="carousel-caption">
       <h3>Scaryfools</h3>
		Wykonanie plakatu oraz grafiki na YouTube.
      </div>
    </div>

	<div class="item uspiewaka_prace123" style="background-image:url('img/works/thumb_zwierciadla_plakat.jpg');">
      <div class="carousel-caption">
       <h3>Białostockie Spotkania Teatralne "Zwierciadła"</h3>
		Wykonanie plakatu reklamowego.
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Poprzednia</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Następna</span>
  </a>
</div>
			<h1 class="uspiewaka_opinie_h1" ><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Opinie</h1>
			<hr>
				<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel" data-interval="6000">
  <!-- Wrapper for slides -->
  <div class="carousel-inner uspiewaka_box_opinie " role="listbox">
    <div class="item active">
				<div class="row">
					<div class="col-md-4 uspiewaka_opinie">		
						<img alt="Logo CLARX" src="https://scontent-a-ams.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10534117_680910781999286_7604661967033682858_n.png?oh=defecb19d7c11eb9eb961c59a4755003&amp;oe=55246D17" class="img-circle uspiewaka_avatar3">
						<blockquote>Pracowity, pomysłowy i ambitny grafik. Przyjazny człowiek ze świetnym poczuciem humoru!<footer>Czarek Ptak (CLARX)</footer></blockquote>
					</div>
					<div class="col-md-4 uspiewaka_opinie">	
						<img alt="Logo Krilliant" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfa1/v/t1.0-1/p160x160/10624839_258718547672208_261873432277283685_n.jpg?oh=fa3c82920ed57cc24f610d928b4df96f&amp;oe=55651720&amp;__gda__=1432637606_13fafd7202eac840a638c4c1ea320cf0" class="img-circle uspiewaka_avatar3">
						<blockquote>Kapitalne prace! Grafiki prezentują bardzo wysoki poziom, którego nie powstydziłby się żaden profesjonalny grafik z wykształceniem!<footer>Rafał Hernes (Krilliant)</footer></blockquote>
					</div>
					<div class="col-md-4 uspiewaka_opinie">		
						<div>
							<img  alt="Logo LoaX" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpa1/v/t1.0-1/p160x160/10915259_1590873594475734_8200620987588702271_n.jpg?oh=251b9ee83fdbdcaaa1e8095d790e9565&amp;oe=55364A33&amp;__gda__=1433239857_3c36ae67f71713a4361cbe543f8a7af0" class="img-circle uspiewaka_avatar3">
							<blockquote>Really, really good artworks!<footer>Love Axelsson (LoaX)</footer></blockquote>
						</div>
						<div>
							<img alt="Logo Matthew Crash" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/p160x160/10424289_657767244342524_1612429558695908647_n.png?oh=c5307825d682492f1c3f3edd8b00275d&amp;oe=556E9D01&amp;__gda__=1432422119_1053d46fef9783c085f0f5c14334c025" class="img-circle uspiewaka_avatar3">
							<blockquote>Profesjonalnie, szybko, solidnie!<footer>Mateusz Padzik (Matthew Crash)</footer></blockquote>
						</div>
					</div>
					
				</div>
			</div>
			<!---->
			   <div class="item">
           <div class="item active">
     			<div class="row">
					<div class="col-md-8 uspiewaka_opinie">	
						<img alt="Logo Zaścianku Podlaskiego" src="https://d22r54gnmuhwmk.cloudfront.net/rendr-fe/img/default-user-avatar-dc6f2da9.gif" class="img-circle uspiewaka_avatar3" style="margin-left: 5px; float:right;">
						<blockquote>O działalności Emila dowiedzieliśmy się pocztą pantoflową, co prawda zastanawialiśmy się na początku czy warto podjąć współpracę z początkującym webmasterem, ale to był strzał w dziesiątkę. Przejrzysty, czytelny i przede wszystkim niedrogi projekt strony internetowej wraz z jej obsługą pomógł nam w reklamowaniu swojej firmy w Internecie.<footer>Anna Janowska (Zaścianek Podlaski)</footer></blockquote>
					</div>
					<div class="col-md-4 uspiewaka_opinie">	
						<img alt="Logo Andrew Force" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/c37.0.160.160/p160x160/1723941_1397251540529288_1508301131_n.jpg?oh=c04c5c19ea834697ce53af84eb6fea2c&amp;oe=5522B14A&amp;__gda__=1428692201_856b800fd9d8de31dcec468c54b75fbc" class="img-circle uspiewaka_avatar3">
						<blockquote>Prace starannie zrobione i co najważniejsze na czas, zawsze kiedy chciałem od tego pana grafikę to starał się zawsze wykonać ją idealnie.<footer>Andrzej Woś (Andrew Force)</footer></blockquote>
					</div>
				</div>
			</div>
    </div>
	<!---->
	<div class="item">
           <div class="item active">
     			<div class="row">
					<div class="col-md-8 uspiewaka_opinie">	
						<img alt="Logo Scaryfools" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/c0.0.160.160/p160x160/3541_212401362293540_430912413_n.jpg?oh=9120272ab43a60f2c335a3ecc263a926&amp;oe=555EC98F&amp;__gda__=1432608480_7bf5ba793529edd9082d3a6edfeca4f8" class="img-circle uspiewaka_avatar3">
						<blockquote>Jestem bardzo zadowolony z projektów, jakie zrobił dla mnie Emil. Pełny profesjonalizm, projekty takie jakie chciałem, przede wszystkim są na temat i prezentują wysoki poziom! Zdecydowanie polecam!!<footer>Krzysztof Szóstak (Scaryfools)</footer></blockquote>
					</div>
					<!--Michał Zawisza (Maxwell) | Patrick Zemp (Denostra) | Andrzej Woś (Andrew Force)-->
				</div>
			</div>
    </div>
  </div>
</div>
			
			<h1><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> Zaufali mi</h1>
			<hr>
			<!-- -->
<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel" data-interval="6000">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="padding-bottom:20px;">
    <div class="item active">
     			<div class="row uspiewaka_cust">
				<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie okładek i promocyjnych filmów." ><a href="https://www.facebook.com/clarxpl" target="_blank"><img src="img/logo/clarx.png" alt="CLARX"></a></div>
				<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie strony internetowej." ><a href="http://zascianekpodlaski.pl" target="_blank"><img src="img/logo/zascianek.png" alt="Zaścianek Podlaski"></a></div>
				<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie plakatu reklamowego." ><a href="https://www.facebook.com/zwierciadla.bialystok" target="_blank"><img src="img/logo/zwierciadla.png" alt="Zwierciadła"></a></div>
				<!--<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie okładek." ><a href="https://www.facebook.com/denostramusic" target="_blank"><img src="img/logo/denostra.png"></a></div>-->
				<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie plakatu reklamowego." ><a href="https://www.facebook.com/Scaryfools" target="_blank"><img src="img/logo/scaryfools.png" alt="Scaryfools"></a></div>
			</div>
    </div>
    <div class="item">
           <div class="item active">
     			<div class="row uspiewaka_cust">
					<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie okładek."  ><a href="https://www.facebook.com/krilliant" target="_blank"><img src="img/logo/krilliant.png" alt="Krilliant"></a></div>
					<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie okładek."  ><a href="https://www.facebook.com/MatthewCrashMusic" target="_blank"><img src="img/logo/matthewcrash.png" alt="Matthew Crash"></a></div>
					<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie loga oraz okładek."  ><a href="https://www.facebook.com/pages/LoaX/1577651422464618" target="_blank"><img src="img/logo/loax.png" alt="LoaX"></a></div>
					<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie lóg oraz okładek."  ><a href="https://www.facebook.com/PLandrewforce" target="_blank"><img src="img/logo/andrewforce.png" alt="Andrew Force"></a></div>
				</div>
			</div>
    </div>
	<div class="item">
           <div class="item active">
			<div class="row uspiewaka_cust">
				<div class="col-md-3 uspiewaka_customers" data-toggle="tooltip" data-placement="bottom" data-original-title="Wykonanie okładki." ><a href="https://www.facebook.com/maxwellpl" target="_blank"><img src="img/logo/maxwell.png" alt="Maxwell"></a></div>
				
			
			</div>
			</div>
	</div>
	<!---->
  </div>
</div>
		</div>
		<div class="uspiewaka_contact_bg">
			<div class="container">
				<h1><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Porozmawiajmy o Twoim projekcie!</h1>
				<hr>
				<div class="alert alert-info" role="alert">Możesz użyć również kontaktu podanego przy tekście "O mnie"!</div>
				<form action="index.php?mail=send" method="post" >
				<div class="row">
						<div class="col-md-5">	
							<div class="input-group input-group-lg uspiewaka_contact">
								<div class="input-group-addon uspiewaka_contact_label" id="basic-addon1"><div class="uspiewaka_input"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Imię</div></div>
								<input type="text" name="imie" class="form-control" aria-describedby="basic-addon1">
							</div>
							<div class="input-group input-group-lg uspiewaka_contact">
								<div class="input-group-addon uspiewaka_contact_label" id="basic-addon2"><div class="uspiewaka_input"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> E-mail</div></div>
								<input type="text" name="mail" class="form-control" aria-describedby="basic-addon2">
							</div>
							<div class="input-group input-group-lg uspiewaka_contact">
								<div class="input-group-addon uspiewaka_contact_label" id="basic-addon3"><div class="uspiewaka_input"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Telefon</div></div>
								<input type="text" name="telefon" class="form-control" aria-describedby="basic-addon3">
							</div>
						</div>
						<div class="col-md-7">
							<div class="input-group input-group-lg uspiewaka_contact2">
								<span class="input-group-addon" id="basic-addon4">Treść</span>
								<textarea name="content_mail" class="form-control uspiewaka_contact2" rows="14"></textarea>
							</div>
						</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-info uspiewaka_contact_button">Wyślij zapytanie!</button>
					</div>
				</div>
				</form>
			</div>
		</div>
		<div class="uspiewaka_love">
		♥bstok
		</div>		
		<script src="js/jquery.min.js"></script> <!-- 1.11.1 -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/parallax.js"></script>
		<script src="js/jquery.smooth-scroll.js"></script>
		<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
			$('[data-toggle="scroll"]').smoothScroll();
			$('#notify').delay(4000).fadeOut('slow');
		});
		</script>
	</body>
</html>