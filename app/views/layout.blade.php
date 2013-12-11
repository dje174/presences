<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }} - Présences</title>
</head>
<body>
    <header>
		@if (Auth::check())
			<nav>
				<ul>
					<li>{{ link_to_route('home.index','Accueil') }}</li>
					<li>{{ link_to_route('courses.index','Gérer mes cours') }}</li>
					<li>{{ link_to_route('students.index','Gérer mes élèves') }}</li>
					<li>{{ link_to_route('users.show','Mon profil',Auth::user()->slug,Auth::user()->id) }}</li>
					<li>{{ link_to_route('logout','Déconnecter') }}</li>
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
</body>
</html>