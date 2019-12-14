<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title') Free Internet Radio Network - Amazing Radios</title>

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