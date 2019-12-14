@inject('VMIndex', 'App\DemoApp\VM\VMIndex')

@extends('layout.ln')

@section('title', $VMIndex->title)

@section('content')
Testamo
    {{ $VMIndex->title }}
    {{ $VMIndex->date }}

	@include('_partials.share')

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
			@each('_partials.channelListItem', $VMIndex->channels, 'channel')
		</ul>

		
		<div id="ad1" class="ad ad-1"></div>

	</section>
@endsection