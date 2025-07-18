<?php

//
//use App\Kernel;
//
//require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
//
//return function (array $context) {
//    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
//};
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наш Telegram Бот</title>
    <style>
        :root {
            --primary-color: #0088cc;
            --secondary-color: #f8f9fa;
            --accent-color: #17a2b8;
            --text-color: #333;
            --light-color: #fff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            background-color: var(--secondary-color);
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 2rem 0;
            text-align: center;
            box-shadow: var(--shadow);
        }

        .logo {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .logo i {
            color: var(--light-color);
        }

        .tagline {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        main {
            flex: 1;
            padding: 3rem 0;
        }

        .hero {
            text-align: center;
            margin-bottom: 3rem;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }

        .bot-card {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: var(--shadow);
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .bot-icon {
            font-size: 4rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .bot-name {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .bot-description {
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background-color: #006699;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .btn-telegram {
            background-color: var(--primary-color);
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature {
            flex: 1 1 300px;
            background-color: var(--light-color);
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: var(--shadow);
            text-align: center;
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        footer {
            background-color: var(--primary-color);
            color: var(--light-color);
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }

        .social-links {
            margin-top: 1rem;
        }

        .social-links a {
            color: var(--light-color);
            margin: 0 10px;
            font-size: 1.5rem;
            transition: opacity 0.3s;
        }

        .social-links a:hover {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .logo {
                font-size: 2rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .bot-icon {
                font-size: 3rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <i class="fab fa-telegram"></i>
            </div>
            <div class="tagline">Инновационный Telegram бот для вашего удобства</div>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="hero">
                <h1>Добро пожаловать в наш Telegram бот!</h1>
                <p>Удобный, быстрый и функциональный помощник для решения ваших задач. Бот находится в разработке и скоро будет доступен.</p>
            </section>

            <section class="bot-card">
                <div class="bot-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h2 class="bot-name">My Awesome Bot</h2>
                <p class="bot-description">Наш бот предоставляет уникальные возможности для автоматизации задач, уведомлений и многого другого. Оставайтесь на связи, чтобы первыми узнать о запуске!</p>
                <a href="https://t.me/YourBotName" class="btn btn-telegram" target="_blank">
                    <i class="fab fa-telegram"></i> Перейти в Telegram
                </a>
            </section>

            <section class="features">
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Быстро</h3>
                    <p>Мгновенная обработка запросов и молниеносная скорость работы</p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Безопасно</h3>
                    <p>Все данные защищены современными методами шифрования</p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Функционально</h3>
                    <p>Множество полезных функций для вашего удобства</p>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>© <?php echo date('Y'); ?> Наш Telegram Бот. Все права защищены.</p>
            <div class="social-links">
                <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>

