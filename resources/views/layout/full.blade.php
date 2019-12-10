<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Free Internet Radio Network - Amazing Radios</title>

<!-- 	<link rel="dns-prefetch" href="https://cdn.live.net.mk">
	<link rel="dns-prefetch" href="https://fonts.googleapis.com"> -->

	<link rel="preconnect" href="https://cdn.live.net.mk">
	<link rel="preconnect" href="https://fonts.googleapis.com">


<!-- 
	<link rel="preload" href="res/css/reset.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<link rel="preload" href="res/css/optimized.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<link rel="preload" href="res/css/extra.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="res/css/reset.css">
		<link rel="stylesheet" href="res/css/optimized.css">
		<link rel="stylesheet" href="res/css/extra.css">
	</noscript> -->


	<link rel="stylesheet" href="res/css/reset.css">
	<link rel="stylesheet" href="res/css/optimized.css">

	<link rel="stylesheet" href="res/css/extra.css">


	<!-- Implement Accept image/webp -->
	<link rel="stylesheet" href="res/css/webp.css">
	<link rel="stylesheet" href="res/css/jpg.css">


	<meta name="description" content="Amazing Radios is free internet radio network, providing free music in various genres" />
	<meta name="robots" content="index,follow" />

	@include('layout.headerSnippets.fb')
	@include('layout.headerSnippets.icons')

</head>
<body id="index" vocab="http://schema.org/">
	<div id="wrap">
		<header>
			<img src="https://cdn.live.net.mk/amazingradios/logo/ar-logo.svg" alt="Amazing Radios Logo" id="logo" />

			<input type="checkbox" name="nav" id="nav">
			<label for="nav">menu</label>

			<nav>
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Channels</a>
					</li>
					<li>
						<a href="#">About us</a>
					</li>
					<li>
						<a href="#">Contact us</a>
					</li>
				</ul>

				<ul id="userNav">
					<li>
						<a href="#">Register</a>
					</li>
					<li>
						<a href="#">Log in</a>
					</li>
				</ul>
			</nav>
		

		</header>

		<main>
			@yield('content')

			<ul id="share">
				<li>
					<a
						href="https://www.facebook.com/sharer/sharer.php?u=http://amazingradios.com"
						target="frameShare"
						ln-popup="width=200,height=100"
					>facebook</a>
				</li>
				<li>
					<a
						href="https://twitter.com/home?status=http://amazingradios.com"
						target="frameShare"
						ln-popup="width=200,height=100"
					>twitter</a>
				</li>
				<li>
					<a
						href="https://pinterest.com/pin/create/button/?url=http://amazingradios.com"
						target="frameShare"
						ln-popup="width=200,height=100"
					>pinterest</a>
				</li>
			</ul>

			<section id="slider" class="player"
				ln-scroller 
				ln-scroller-speed="500"
				ln-scroller-direction="horizontal"
				ln-scroller-timeout="2000"
			>
				<div class="ln-scroller-viewport">
					<ul class="ln-scroller-viewport" ln-scroller-target>
						<li class="amazing-radios">
							<h1>
								Amazing Radios
							</h1>
							<p>
								Take your amazing music with you
							</p>
						</li>
						<li>
							<h1>
								Amazing Blues
							</h1>
							<p>
								Take your amazing music with you
							</p>
						</li>
						<li>
							<h1>
								Amazing Smooth and Jazz
							</h1>
							<p>
								Take your amazing music with you
							</p>
						</li>

					</ul>
				</div>

			</section>

			<div id="newsMarqueue">
				<p>
					Music News
				</p>
				<ul>
					<li>
						<a href="#">Vest 1</a>
					</li>
				</ul>
			</div>


			<section id="channels">

				<ul>
					<li id="Amazing-Blues" class="favourited" typeof="RadioStation">
						<h2>
							<a href="#">
								<img property="image" src="https://cdn.live.net.mk/amazingradios/logo/Amazing-Blues-180.webp"
								alt="Amazing Blues Logo"
								title="Amazing Blues Logo" />
								<span property="name">Amazing Blues</span>
							</a>
						</h2>
						<p property="track" typeof="MusicRecording">
							<span property="byArtist">Billy Price & Fred Chapellier</span>
							<span property="name">My Love Comes Tumbling Down</span>
						</p>
						<button class="favourite">star</button>
					</li>
					<li id="Amazing-Smooth-and-Jazz" typeof="RadioStation">
						<h2>
							<a href="#">
								<img property="image" src="https://cdn.live.net.mk/amazingradios/logo/Amazing-Smooth-and-Jazz-180.webp"
								alt="Amazing Smooth and Jazz Logo"
								title="Amazing Smooth and Jazz Logo" />
								<span property="name">Amazing Smooth & Jazz</span>
							</a>
						</h2>
						<p property="track" typeof="MusicRecording">
							<span property="byArtist">Billy Price & Fred Chapellier</span>
							<span property="name">My Love Comes Tumbling Down</span>
						</p>
						<button class="favourite">star</button>
					</li>
					<li id="Amazing-80s" typeof="RadioStation">
						<h2>
							<a href="#">
								<img property="image" src="https://cdn.live.net.mk/amazingradios/logo/Amazing-80s-180.webp"
								alt="Amazing 80's Logo"
								title="Amazing 80's Logo" />
								<span property="name">Amazing 80's</span>
							</a>
						</h2>
						<p property="track" typeof="MusicRecording">
							<span property="byArtist">Billy Price & Fred Chapellier</span>
							<span property="name">My Love Comes Tumbling Down</span>
						</p>
						<button class="favourite">star</button>
					</li>
					<li id="Amazing-Classic-Hits" typeof="RadioStation">
						<h2>
							<a href="#">
								<img property="image" src="https://cdn.live.net.mk/amazingradios/logo/Amazing-Classic-Hits-180.webp"
								alt="Amazing Classic Hits Logo"
								title="Amazing Classic Hits Logo" />
								<span property="name">Amazing Classic Hits</span>
							</a>
						</h2>
						<p property="track" typeof="MusicRecording">
							<span property="byArtist">Billy Price & Fred Chapellier</span>
							<span property="name">My Love Comes Tumbling Down</span>
						</p>
						<button class="favourite">star</button>
					</li>
					<li id="Amazing-Chillout" typeof="RadioStation">
						<h2>
							<a href="#">
								<img property="image" src="https://cdn.live.net.mk/amazingradios/logo/Amazing-Chillout-180.webp" 
								alt="Amazing Chillout Logo"
								title="Amazing Chillout Logo" />
								<span property="name">Amazing Chillout</span>
							</a>
						</h2>
						<p property="track" typeof="MusicRecording">
							<span property="byArtist">Billy Price & Fred Chapellier</span>
							<span property="name">My Love Comes Tumbling Down</span>
						</p>
						<button class="favourite">star</button>
					</li>
					<li id="Amazing-Chillhop" typeof="RadioStation">
						<h2>
							<a href="#">
								<img property="image" src="https://cdn.live.net.mk/amazingradios/logo/Amazing-Chillhop-180.webp" 
								alt="Amazing Chillhop Logo"
								title="Amazing Chillhop Logo" />
								<span property="name">Amazing Chillhop</span>
							</a>
						</h2>
						<p property="track" typeof="MusicRecording">
							<span property="byArtist">Billy Price & Fred Chapellier</span>
							<span property="name">My Love Comes Tumbling Down</span>
						</p>
						<button class="favourite">star</button>
					</li>

				</ul>

				
				<div id="ad1" class="ad ad-1"></div>

			</section>
		</main>

		<footer>
			<nav>
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">About us</a>
					</li>
					<li>
						<a href="#">Privacy</a>
					</li>
					<li>
						<a href="#">TOC</a>
					</li>
					<li>
						<a href="#">FAQ</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</nav>

			<p>
				<img src="https://cdn.live.net.mk/amazingradios/logo/ar-logo-white.svg" alt="Amazing Radios Logo" />
				<span>Copyright &copy; 2019 &middot;
					<a href="https://amazingradios.com">AMAZINGRADIOS.com</a>
				</span>
			</p>

		</footer>
	</div>

	<div id="x"></div>


	<!-- <link rel="preload" href="res/css/extra.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
	<!-- <noscript><link rel="stylesheet" href="res/css/extra.css"></noscript> -->
	
	<!-- <link rel="stylesheet" href="res/css/extra.css"> -->

	<script async type="text/javascript" src="res/js/base.js"></script>

</body>
</html>




<!DOCTYPE html >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>_____</title>

	<!-- Styles -->
	_____
</head>
<body>
	
	

	<!-- Scripts -->
	_____
</body>
</html>