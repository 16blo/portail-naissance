<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>@yield('titre') - Portail</title>
</head>
<body>
<header><h1>Portail acte de naissance</h1></header>
<nav>
<a href="/">Accueil</a> |
<a href="/a-propos">À propos</a> |
<a href="/demandes">Demandes</a>
</nav>
<hr>
<main>
@yield('contenu')
</main>
<hr>
<footer><small>L2 Cybersécurité - 2026</small></footer>
</body>
</html>