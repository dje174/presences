<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }} - Présences</title>
    {{ HTML::style('css/screen.css'); }}
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
		@if (Auth::check())
			<nav>
				<ul class="navigation">
					<li id="logo"><a href="/home">{{ HTML::image('img/PresencesLogo.png') }}</a></li>
					<li class="toggleSubMenu">
						<span>Menu</span>
						<ul class="subMenu">
							<li>{{ link_to_route('courses.index','Gérer mes cours') }}</li>
							<li>{{ link_to_route('students.index','Gérer mes élèves') }}</li>
							<li>{{ link_to_route('users.show','Mon profil',Auth::user()->slug,Auth::user()->id) }}</li>
							<li>{{ link_to_route('logout','Déconnecter') }}</li>
						</ul>
					</li>
				</ul>
			</nav>
		@else

		@endif
    </header>
    <section class="main">
        @yield('container')
    </section>
    <footer>
    </footer>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>