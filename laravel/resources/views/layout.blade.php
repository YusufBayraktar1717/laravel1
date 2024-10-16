<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit Web Sitesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 0;
        }

        header {
            background-color: #1a202c;
            color: lightseagreen;
            padding: 1rem;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        footer {
            background-color: #718096;
            color: white;
            text-align: center;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/about">Hakkımızda</a></li>
            <li><a href="/contact">İletişim</a></li>

        </ul>
    </nav>
</header>

<main>
    @yield('main')
    <section id="home">
        <h1>Hoş Geldiniz!</h1>
    </section>
    <section id="hakkimizda">
        <h2>Hakkımızda</h2>
    </section>
    <section id="hizmetler">
    </section>
    <section id="iletisim">
        <h2>İletişim</h2>
    </section>
</main>

<footer>
<div class="bottom-message">
    @yield('bottom-message')
</div>
</footer>
</body>
</html>
