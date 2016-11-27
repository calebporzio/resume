@extends('_layouts.master')

@section('body')

<section class="hero is-primary">
	<div class="hero-body">
	<div class="container">
		<div class="level is-mobile">
			<div class="level-left">
				<div class="level-item">
					<h1 class="title is-1">
						Caleb Porzio
					</h1>
					<h3 class="title is-3">Web Developer</h3>
				</div>
			</div>
			<div class="level-right">
				<div class="level-item">
					<a class="nav-item" href="http://calebporzio.com" target="_blank"><span class="icon"><i class="fa fa-desktop"></i></span></a>
				</div>
				<div class="level-item">
					<a class="nav-item" href="http://github.com/calebporzio" target="_blank"><span class="icon"><i class="fa fa-github"></i></span></a>
				</div>
				<div class="level-item">
					<a class="nav-item" href="https://twitter.com/calebporzio" target="_blank"><span class="icon"><i class="fa fa-twitter"></i></span></a>
				</div>
				<div class="level-item">
					<a class="nav-item" href="mailto:calebporzio@gmail.com" target="_blank"><span class="icon"><i class="fa fa-envelope"></i></span></a>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

@include('_includes.apps')

@include('_includes.skills')

@include('_includes.books')

@include('_includes.people')

@include('_includes.jobs')

@include('_includes.hobbies')

@include('_includes.contact')

@endsection
