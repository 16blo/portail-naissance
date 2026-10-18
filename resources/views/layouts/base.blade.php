<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre') — Portail</title>
</head>
<body>
    <header>
        <h1>Portail acte de naissance</h1>
        <nav>
            <a href="/">Accueil</a> |
            <a href="/a-propos">À propos</a> |
            <a href="/demandes">Demandes</a>
        </nav>
    </header>
    <main>
        @yield('contenu')
    </main>
    <footer>L2 Cybersécurité — 2026</footer>
</body>
</html>