<?php
//
//use App\Kernel;
//
//require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
//
//return function (array $context) {
//    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
//};
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Общественная организация «Мордовские Волки»</title>
    <style>
        /* Сброс стилей и базовые настройки */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        /* Цвета */
        :root {
            --orange: #FF6B00;
            --black: #000000;
            --gray: #f0f0f0;
        }

        /* Шапка */
        header {
            background-color: var(--black);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-weight: bold;
            font-size: 24px;
            text-transform: uppercase;
        }

        .logo span {
            color: var(--orange);
        }

        /* Навигация */
        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: var(--orange);
        }

        /* Герой-баннер */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .hero h1 span {
            color: var(--orange);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            display: inline-block;
            background-color: var(--orange);
            color: white;
            padding: 12px 30px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            text-transform: uppercase;
        }

        .btn:hover {
            background-color: #e05d00;
            transform: translateY(-3px);
        }

        /* О клубе */
        .about {
            padding: 60px 0;
            background-color: white;
        }

        .about h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
        }

        .about-text h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--black);
        }

        .about-text p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .values {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
        }

        .values h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--black);
        }

        .values-list {
            list-style: none;
        }

        .values-list li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
            line-height: 1.5;
        }

        .values-list li:before {
            content: "✔";
            color: var(--orange);
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        /* Галерея */
        .gallery {
            padding: 60px 0;
            background-color: var(--gray);
        }

        .gallery h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            height: 250px;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        /* Призыв к действию */
        .cta {
            background-color: var(--black);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .cta h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .cta p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Подвал */
        footer {
            background-color: var(--black);
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .footer-logo {
            flex: 1;
            min-width: 250px;
            text-align: left;
            margin-bottom: 20px;
        }

        .footer-logo .logo {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .footer-links {
            flex: 1;
            min-width: 250px;
            text-align: left;
        }

        .footer-links h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--orange);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: white;
            text-decoration: none;
        }

        .footer-links ul li a:hover {
            color: var(--orange);
        }

        .footer-contact {
            flex: 1;
            min-width: 250px;
            text-align: left;
        }

        .footer-contact h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--orange);
        }

        .copyright {
            opacity: 0.7;
            font-size: 14px;
            margin-top: 30px;
        }

        /* Медиазапросы для адаптива */
        @media (max-width: 768px) {
            .hero {
                padding: 60px 0;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 18px;
            }

            .about-content {
                flex-direction: column;
                align-items: center;
            }

            .footer-content {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-logo, .footer-links, .footer-contact {
                text-align: center;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 28px;
            }

            .btn {
                padding: 10px 20px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
        .logo {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: grey;
            position: relative;
            display: inline-block;
        }
        .logo::after {
            content: "";
            display: block;
            width: 100%;
            height: 4px;
            background: #FF6B00;
            margin-top: 5px;
        }
        .logo span {
            color: #FF6B00;
        }
    </style>
</head>
<body>
<!-- Шапка -->
<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">Мото <span>Мордовия</span></div>
            <nav>
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О клубе</a></li>
                    <li><a href="#">Галерея</a></li>
                    <li><a href="#">Маршруты</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- Герой-баннер -->
<section class="hero">
    <div class="container">
        <h1>Общественная организация <span>«МотоМордовия»</span></h1>
        <p>Республика Мордовия. Дороги зовут.</p>
        <a href="#" class="btn">Вступить в клуб</a>
    </div>
</section>

<!-- О клубе -->
<section class="about">
    <div class="container">
        <h2>О нашем клубе</h2>
        <div class="about-content">
            <div class="about-text">
                <h3>Братство на двух колесах</h3>
                <p>Мы — сообщество, для которого мотоцикл — не просто железо, а свобода в чистом виде. Саранск, Рузаевка, Темников или бескрайние трассы за пределами республики — наш дом там, где рев двигателя сливается с шумом ветра в соснах.</p>
                <p>Основанный в 2010 году, наш клуб объединяет настоящих ценителей дороги и адреналина. Мы не просто катаемся — мы живем мотоциклами.</p>
            </div>
            <div class="values">
                <h3>Что нас объединяет:</h3>
                <ul class="values-list">
                    <li><strong>Дорога</strong> — наш главный закон</li>
                    <li><strong>Верность</strong> — слово крепче цепи</li>
                    <li><strong>Адреналин</strong> — без него как без бензина</li>
                    <li><strong>Уважение</strong> — к каждому, кто разделяет нашу страсть</li>
                    <li><strong>Традиции</strong> — которые мы создаем вместе</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Галерея -->
<section class="gallery">
    <div class="container">
        <h2>Наши моменты</h2>
        <div class="gallery-grid">
            <div class="gallery-item" style="background-image: url('https://via.placeholder.com/600x400')"></div>
            <div class="gallery-item" style="background-image: url('https://via.placeholder.com/600x400')"></div>
            <div class="gallery-item" style="background-image: url('https://via.placeholder.com/600x400')"></div>
            <div class="gallery-item" style="background-image: url('https://via.placeholder.com/600x400')"></div>
            <div class="gallery-item" style="background-image: url('https://via.placeholder.com/600x400')"></div>
            <div class="gallery-item" style="background-image: url('https://via.placeholder.com/600x400')"></div>
        </div>
    </div>
</section>

<!-- Призыв к действию -->
<section class="cta">
    <div class="container">
        <h2>Вступай в строй!</h2>
        <p>Пока колесо крутится — жизнь продолжается. Стань частью нашего братства и открой для себя настоящую свободу на двух колесах.</p>
        <a href="#" class="btn">Присоединиться</a>
    </div>
</section>

<!-- Подвал -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <div class="logo">Мото <span>Мордовия</span></div>
                <p>Общественная организация Республики Мордовия</p>
            </div>
            <div class="footer-links">
                <h3>Навигация</h3>
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О клубе</a></li>
                    <li><a href="#">Галерея</a></li>
                    <li><a href="#">Маршруты</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Контакты</h3>
                <p>Саранск, ул. Мотоциклетная, 13</p>
                <p>Телефон: +7 (834) 222-33-44</p>
                <p>Email: info@mordovvolki.ru</p>
            </div>
        </div>
        <div class="copyright">
            © 2025 Общественная организация «МотоМордовия». Все права защищены.
        </div>
    </div>
</footer>
</body>
</html>
