<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }} - Présences</title>
    {{ HTML::style('css/screen.css'); }}
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body>
    @if(Auth::check())
        <header>
    		@if (Auth::check())
    			<nav>
    				<ul class="navigation">
    					<li id="logo"><a href="/sessions" title="Accueil">{{ HTML::image('img/PresencesLogo.png') }}</a></li>
    					<li class="toggleSubMenu">
    						<span>Menu</span>
    						<ul class="subMenu">
    							<li>{{ link_to_route('courses.index','Gérer mes cours') }}</li>
    							<li>{{ link_to_route('students.index','Gérer mes élèves') }}</li>
    							<li>{{ link_to_route('users.show','Mon profil',Auth::user()->slug) }}</li>
    							<li>{{ link_to_route('logout','Déconnecter') }}</li>
    						</ul>
    					</li>
    				</ul>
    			</nav>
    		@endif
        </header>
        <section class="main">
            @yield('container')
        </section>
        @if (Auth::check())
        <footer>
        	<div class="infosFooter">
        		{{ HTML::image('img/PresencesLogoSmall.png', 'Logo réduit Présences', array('id' => 'logoFooter')) }}
    	    	<p>Développé par <a href="http://www.jerome-poucet.be">Jérôme Poucet</a></p>
    	    	<p>Année scolaire 2013 - 2014</p>
    	    	<p>HEPL Seraing</p>
        	</div>
        	<div class="arrow-up">
        		<a href="#">{{ HTML::image('img/arrow-up.png') }}</a>
        	</div>
        </footer>
       	@endif
       	{{ HTML::script('js/jquery.js') }}
       	{{ HTML::script('js/script.js') }}
    @else
        @yield('login')
    @endif
</body>
</html>