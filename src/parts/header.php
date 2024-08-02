<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:image" content="https://notologia.ru/img/preview.jpg">
  <meta property="og:site_name" content="Музыкальная школа Нотология">
  <meta property="og:locale" content="ru_RU">
  <title><?php echo $title; ?></title>
  <link rel="icon" href="favicon.ico">
  <link rel="icon" href="favicons/32.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="favicons/180.png">
  <link rel="manifest" href="manifest.webmanifest">
  <link rel="preload" href="fonts/Comfortaa-Bold.woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Comfortaa-Bold.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Comfortaa-Regular.woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Comfortaa-Regular.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Inter-Regular.woff" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Inter-Regular.woff2" as="font" crossorigin="anonymous">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script type='application/ld+json'>
  {
    "@context": "http://www.schema.org",
    "@type": "LocalBusiness",
    "name": "Музыкальная школа Нотология",
    "url": "https://notologia.ru",
    "logo": "https://notologia.ru/img/icons/logo-desktop.svg",
    "image": "https://notologia.ru/img/preview.jpg",
    "description": "Научим играть профессионально или для души. Подготовим к выступлению или к поступлению в музыкальныю школу. Обучение за 3 месяца. Пробный урок бесплатный!",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Проспект Тореза, 78",
      "addressLocality": "Санкт-Петербург",
      "addressCountry": "Россия"
    },
    "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 12:00-20:00",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+7 (904) 604-66-24"
    }
  }
  </script>
</head>

<body class="page__body">
  <header class="header">
    <div class="header__wrap">
      <a href="<?php echo HOST; ?>">
        <picture>
          <source width="120" height="30" media="(min-width: 768px)" srcset="img/icons/logo-desktop.svg"
            type="image/svg+xml">
          <img class="header__logo" src="img/icons/logo-mobile.svg" width="95" height="25" alt="Логотип Нотологии">
        </picture>
      </a>

      <nav class="header__nav header__nav--closed">
        <ul class="header__list">
          <li class="header__item"><a href="<?php echo HOST; ?>">Главная</a></li>
          <li class="header__item"><a href="<?php echo HOST; ?>directions">Направления</a></li>
          <li class="header__item"><a href="<?php echo HOST; ?>about">Преподаватель</a></li>
          <li class="header__item"><a href="<?php echo HOST; ?>price">Цены</a></li>
          <li class="header__item"><a href="<?php echo HOST; ?>contacts">Контакты</a></li>
        </ul>
      </nav>

      <div class="header__contacts">
        <a class="header__phone" href="tel:+79046046624">+7 (904) 604-66-24</a>

        <div class="header__address">
          <span class="header__metro">Удельная,</span>
          <span class="header__street">пр. Тореза, 78</span>
        </div>

        <button class="header__button header__button--opened">
          <span class="visually-hidden">Меню</span>
        </button>
      </div>
    </div>
  </header>