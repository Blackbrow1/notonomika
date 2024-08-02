<?php
require('./config.php');

$title = 'Где мы находимся или как нас найти | Нотология';
$keywords = 'адрес музыкальной школы, обучение музыке рядом';
$description = 'Мы находимся на проспекте Тореза, 78. Это в 10 минутах пешком от станции метро Удельная. Приходите на пробный урок!';
$url = 'https://notologia.ru/contacts.php';

include ROOT . 'parts/header.php';
?>

<main>
  <section class="contacts">
    <div class="contacts__wrap">
      <h1 class="contacts__title h1">Контакты</h1>

      <div class="contacts__information">
        <h2 class="contacts__information-title h2">Где проходят <span>занятия</span></h2>
        <p class="contacts__information-description">Уроки проходят в уютном классе на <span>проспекте Тореза,
            78</span>. Класс оборудован всем необходимым для комфортных и продуктивных занятий музыкой. Предоставляю
          инструменты на уроках: флейта, блокфлейта, фортепиано. Обеспечиваю нотным материалом в электронном виде.</p>

        <div class="swiper contacts__slider">
          <div class="swiper-wrapper contacts__slider-wrap">
            <div class="swiper-slide contacts__slide">
              <picture>
                <source width="380" height="380" type="image/webp" media="(min-width: 1240px)"
                  srcset="./img/contacts-slider/contacts-slider-desktop@1x.webp 1x, ./img/contacts-slider/contacts-slider-desktop@2x.webp 2x">
                <source width="541" height="354" type="image/webp" media="(min-width: 768px)"
                  srcset="./img/contacts-slider/contacts-slider-tablet@1x.webp 1x, ./img/contacts-slider/contacts-slider-tablet@2x.webp 2x">
                <source width="300" height="300" type="image/webp"
                  srcset="./img/contacts-slider/contacts-slider-mobile@1x.webp 1x, ./img/contacts-slider/contacts-slider-mobile@2x.webp 2x">
                <source width="380" height="380" type="image/jpeg" media="(min-width: 1240px)"
                  srcset="./img/contacts-slider/contacts-slider-desktop@1x.jpg 1x, ./img/contacts-slider/contacts-slider-desktop@2x.jpg 2x">
                <source width="541" height="354" type="image/jpeg" media="(min-width: 768px)"
                  srcset="./img/contacts-slider/contacts-slider-tablet@1x.jpg 1x, ./img/contacts-slider/contacts-slider-tablet@2x.jpg 2x">
                <img class="contacts__slider-img" src="./img/contacts-slider/contacts-slider-mobile@1x.jpg"
                  srcset="./img/contacts-slider/contacts-slider-mobile@2x.jpg 2x" width="300" height="300"
                  alt="Помещение для занятий">
              </picture>
            </div>

            <div class="swiper-slide contacts__slide">
              <picture>
                <source width="380" height="380" type="image/webp" media="(min-width: 1240px)"
                  srcset="./img/about/teacher-desktop@1x.webp 1x, ./img/about/teacher-desktop@2x.webp 2x">
                <source width="541" height="354" type="image/webp" media="(min-width: 768px)"
                  srcset="./img/about/teacher-tablet@1x.webp 1x, ./img/about/teacher-tablet@2x.webp 2x">
                <source width="300" height="300" type="image/webp"
                  srcset="./img/about/teacher-mobile@1x.webp 1x, ./img/about/teacher-mobile@2x.webp 2x">
                <source width="380" height="380" type="image/jpeg" media="(min-width: 1240px)"
                  srcset="./img/about/teacher-desktop@1x.jpg 1x, ./img/about/teacher-desktop@2x.jpg 2x">
                <source width="541" height="354" type="image/jpeg" media="(min-width: g768px)"
                  srcset="./img/about/teacher-tablet@1x.jpg 1x, ./img/about/teacher-tablet@2x.jpg 2x">
                <img class="contacts__slider-img" src="./img/about/teacher-mobile@1x.jp"
                  srcset="./img/about/teacher-mobile@2x.jpg 2x" width="300" height="300" alt="Помещение для занятий">
              </picture>
            </div>

            <div class="swiper-slide contacts__slide">
              <picture>
                <source width="380" height="380" type="image/webp" media="(min-width: 1240px)"
                  srcset="./img/directions/directions-notes-desktop-2@1x.webp 1x, ./img/directions/directions-notes-desktop-2@2x.webp 2x">
                <source width="541" height="354" type="image/webp" media="(min-width: 768px)"
                  srcset="./img/directions/directions-notes-tablet-2@1x.webp 1x, ./img/directions/directions-notes-tablet-2@2x.webp 2x">
                <source width="300" height="300" type="image/webp"
                  srcset="./img/directions/directions-notes-mobile@1x.webp 1x, ./img/directions/directions-notes-mobile@2x.webp 2x">
                <source width="380" height="380" type="image/jpeg" media="(min-width: 1240px)"
                  srcset="./img/directions/directions-notes-desktop-2@1x.jpg 1x, ./img/directions/directions-notes-desktop-2@2x.jpg 2x">
                <source width="541" height="354" type="image/jpeg" media="(min-width: 768px)"
                  srcset="./img/directions/directions-notes-tablet-2@1x.jpg 1x, ./img/directions/directions-notes-tablet-2@2x.jpg 2x">
                <img class="contacts__slider-img" src="./img/directions/directions-notes-mobile@1x.jpg"
                  srcset="./img/directions/directions-notes-mobile@2x.jpg 2x" width="300" height="300"
                  alt="Ноты на фортепиано">
              </picture>
            </div>
          </div>
        </div>

        <div class="advantages">
          <ul class="advantages__list">
            <li class="advantages__item advantages__item--star">
              <h3 class="advantages__title">Качество</h3>
              <p class="advantages__description">При систематической домашней работе могу гарантировать высокое качество
                результатов</p>
            </li>
            <li class="advantages__item advantages__item--watch">
              <h3 class="advantages__title">Скорость</h3>
              <p class="advantages__description">У меня есть собственная методика, которая позволяет обучаться игре на
                инструменте за 3 месяца</p>
            </li>
            <li class="advantages__item advantages__item--flower">
              <h3 class="advantages__title">Комфорт</h3>
              <p class="advantages__description">Учебный класс имеет всё необходимое для комфортных и результативных
                занятий музыкой</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="address">
    <div class="address__wrap">
      <h2 class="visually-hidden">Адрес</h2>

      <div class="address__block">
        <p class="address__city">г. Санкт-Петербург</p>
        <p class="address__street">пр. Тореза, 78</p>
        <a class="address__phone" href="tel:89046046624">+7 (904) 604-66-24</a>
        <p class="address__time">с 12:00 до 20:00</p>
      </div>

      <ul class="address__social social">
        <li class="social__item social__item--vk">
          <a href="https://vk.com/elena_flute">
            <span class="visually-hidden">Мы в Контакте</span>
          </a>
        </li>
        <li class="social__item social__item--telegram">
          <a href="https://t.me/SunnySpiritL">
            <span class="visually-hidden">Мы в Телеграм</span>
          </a>
        </li>
        <li class="social__item social__item--whatsapp">
          <a href="https://api.whatsapp.com/send/?phone=79046046624">
            <span class="visually-hidden">Перейти в вотсап</span>
          </a>
        </li>
      </ul>

      <div class="address__map">
        <iframe
          src="https://yandex.ru/map-widget/v1/?um=constructor%3A964d7267b89a039abd1b0c1a73559dd030ddc78c237ff9a35c047601e0ae9ac9&amp;source=constructor"></iframe>
      </div>
    </div>
  </section>
</main>

<?php
include ROOT . 'parts/main-form.php';
include ROOT . 'parts/footer.php';
?>