<?php
require('./config.php');

$title = 'О преподавателе фортепиано и флейты | Нотономика';
$keywords = 'преподаватель фортепиано, преподаватель флейты, учитель фортепиано, учитель музыки, сольфеджио, теория музыки';
$description = 'Узнать подробнее о преподавателе, опыте работы и достижениях. Вы можете посмотреть видео-примеры игры на музыкальном инструменте, исполняемым преподавателем. Переходите на страницу!';
$url = 'https://notonomika.ru/about.php';

include ROOT . 'parts/header.php';
?>

<main>
  <section class="about">
    <div class="about__wrap">
      <h1 class="about__title h1">О преподавателе</h1>

      <div class="about__content">
        <div class="about__img-wrap">
          <picture>
            <source width="380" height="380" type="image/webp" media="(min-width: 1240px)"
              srcset="./img/about/teacher-desktop@1x.webp 1x, ./img/about/teacher-desktop@2x.webp 2x">
            <source width="354" height="354" type="image/webp" media="(min-width: 768px)"
              srcset="./img/about/teacher-tablet@1x.webp 1x, ./img/about/teacher-tablet@2x.webp 2x">
            <source width="300" height="300" type="image/webp"
              srcset="./img/about/teacher-mobile@1x.webp 1x, ./img/about/teacher-mobile@2x.webp 2x">
            <source width="380" height="380" type="image/jpeg" media="(min-width: 1240px)"
              srcset="./img/about/teacher-desktop@1x.jpg 1x, ./img/about/teacher-desktop@2x.jpg 2x">
            <source width="354" height="354" type="image/jpeg" media="(min-width: 768px)"
              srcset="./img/about/teacher-tablet@1x.jpg 1x, ./img/about/teacher-tablet@2x.jpg 2x">
            <img class="about__img" src="./img/about/teacher-mobile@1x.jpg"
              srcset="./img/about/teacher-mobile@2x.jpg 2x" width="300" height="300"
              alt="Преподаватель с флейтой в руках">
          </picture>
        </div>

        <ul class="about__list">
          <li class="about__item about__item--metronome">Являюсь выпускницей Санкт-Петербургской консерватории им. Н.А.
            Римского-Корсакова</li>
          <li class="about__item about__item--piano">Стаж преподавания более 15 лет</li>
          <li class="about__item about__item--dj-turntable">Многие ученики стали лауреатами международных и
            всероссийских конкурсов</li>
          <li class="about__item about__item--diapason-tuning">За всё время преподавания обучила более 150 учеников</li>
          <li class="about__item about__item--notes">Артист высшей категории в «Петербург-Концерт»</li>
        </ul>
      </div>

      <a href="#main-form" class="about__button button scroll-to">Записаться</a>
    </div>
  </section>

  <section class="video video--teacher">
    <div class="video__wrap">
      <h2 class="video__title video__title--teacher h2">Мои видеозаписи</h2>

      <div class="swiper video__swiper">
        <ul class="swiper-wrapper video__list">
          <li class="swiper-slide video__item">
            <picture>
              <source width="380" height="380" type="image/webp" media="(min-width: 768px)"
                srcset="./img/video/video-img-teacher-1-desktop@1x.webp 1x, ./img/video/video-img-teacher-1-desktop@2x.webp 2x">
              <source width="230" height="230" type="image/webp"
                srcset="./img/video/video-img-teacher-1-mobile@1x.webp 1x, ./img/video/video-img-teacher-1-mobile@2x.webp 2x">
              <source width="380" height="380" type="image/jpeg" media="(min-width: 768px)"
                srcset="./img/video/video-img-teacher-1-desktop@1x.jpg 1x, ./img/video/video-img-teacher-1-desktop@2x.jpg 2x">
              <img class="video__img" src="./img/video/video-img-teacher-1-mobile@1x.jpg"
                srcset="./img/video/video-img-teacher-1-mobile@2x.jpg 2x" width="230" height="230"
                alt="Видео преподавателя">
            </picture>

            <img class="video__img-play" src="./img/icons/play-mobile.svg" alt="Иконка запуска видео">
          </li>

          <li class="swiper-slide video__item">
            <picture>
              <source width="380" height="380" type="image/webp" media="(min-width: 768px)"
                srcset="./img/video/video-img-teacher-2-desktop@1x.webp 1x, ./img/video/video-img-teacher-2-desktop@2x.webp 2x">
              <source width="230" height="230" type="image/webp"
                srcset="./img/video/video-img-teacher-2-mobile@1x.webp 1x, ./img/video/video-img-teacher-2-mobile@2x.webp 2x">
              <source width="380" height="380" type="image/jpeg" media="(min-width: 768px)"
                srcset="./img/video/video-img-teacher-2-desktop@1x.jpg 1x, ./img/video/video-img-teacher-2-desktop@2x.jpg 2x">
              <img class="video__img" src="./img/video/video-img-teacher-2-mobile@1x.jpg"
                srcset="./img/video/video-img-teacher-2-mobile@2x.jpg 2x" width="230" height="230"
                alt="Видео преподавателя">
            </picture>

            <img class="video__img-play" src="./img/icons/play-mobile.svg" alt="Иконка запуска видео">
          </li>

          <li class="swiper-slide video__item">
            <picture>
              <source width="380" height="380" type="image/webp" media="(min-width: 768px)"
                srcset="./img/video/video-img-teacher-3-desktop@1x.webp 1x, ./img/video/video-img-teacher-3-desktop@2x.webp 2x">
              <source width="230" height="230" type="image/webp"
                srcset="./img/video/video-img-teacher-3-mobile@1x.webp 1x, ./img/video/video-img-teacher-3-mobile@2x.webp 2x">
              <source width="380" height="380" type="image/jpeg" media="(min-width: 768px)"
                srcset="./img/video/video-img-teacher-3-desktop@1x.jpg 1x, ./img/video/video-img-teacher-3-desktop@2x.jpg 2x">
              <img class="video__img" src="./img/video/video-img-teacher-3-mobile@1x.jpg"
                srcset="./img/video/video-img-teacher-3-mobile@2x.jpg 2x" width="230" height="230"
                alt="Видео преподавателя">
            </picture>

            <img class="video__img-play" src="./img/icons/play-mobile.svg" alt="Иконка запуска видео">
          </li>
        </ul>
      </div>
    </div>
  </section>
</main>

<?php
include ROOT . 'parts/main-form.php';
include ROOT . 'parts/footer.php';
?>