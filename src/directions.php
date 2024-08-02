<?php
require('./config.php');

$title = 'Направления обучения игры на музыкальном инструменте | Нотология';
$keywords = 'направления обучения, обучение музыке';
$description = 'На моих уроках вы сможете научиться играть на флейте или на фортепиано. А так же, вы узнаете много нового о музыке, освоите сольфеджио и музыкальную теорию. Приходите!';
$url = 'https://notologia.ru/directions.php';

include ROOT . 'parts/header.php';
?>

<main>
  <section class="directions">
    <div class="directions__wrap">
      <h1 class="directions__title h1">Направления</h1>

      <ul class="directions__list">
        <li class="directions__item directions__item--1">
          <h2 class="directions__item-title-1 h2">Уроки флейты</h2>
          <div class="directions__description-block">
            <h2 class="directions__item-title-2 h2">Уроки флейты</h2>
            <p class="directions__item-description">Обучиться игре на флейте практически невозможно самостоятельно, по
              самоучителям или видео. Взаимодействие или контакт преподавателя и ученика - неотъемлемая часть
              эффективных уроков.</p>
            <p class="directions__item-description">Только так можно добиться правильного дыхания и звукоизвлечения,
              чтобы потом не переучиваться, а еще хуже - не лечить здоровье. Поэтому, учиться нужно у профессиональных
              педагогов.</p>
          </div>

          <div class="directions__img-flute-2">
            <picture>
              <source width="379" height="175" type="image/webp" media="(min-width: 1240px)"
                srcset="./img/directions/directions-flute-desktop-2@1x.webp 1x, ./img/directions/directions-flute-desktop-2@2x.webp 2x">
              <source width="354" height="167" type="image/webp" media="(min-width: 768px)"
                srcset="./img/directions/directions-flute-tablet-2@1x.webp 1x, ./img/directions/directions-flute-tablet-2@2x.webp 2x">
              <source width="300" height="150" type="image/webp"
                srcset="./img/directions/directions-flute-mobile@1x.webp 1x, ./img/directions/directions-flute-mobile@2x.webp 2x">
              <source width="379" height="175" type="image/jpeg" media="(min-width: 1240px)"
                srcset="./img/directions/directions-flute-desktop-2@1x.jpg 1x, ./img/directions/directions-flute-desktop-2@2x.jpg 2x">
              <source width="354" height="167" type="image/jpeg" media="(min-width: 768px)"
                srcset="./img/directions/directions-flute-tablet-2@1x.jpg 1x, ./img/directions/directions-flute-tablet-2@2x.jpg 2x">
              <img class="directions__img directions__img--flute" src="./img/directions/directions-flute-mobile@1x.jpg"
                srcset="./img/directions/directions-flute-mobile@2x.jpg 2x" width="300" height="150" alt="Флейта">
            </picture>
          </div>

          <div class="directions__img-flute-1">
            <picture>
              <source width="175" height="175" type="image/webp" media="(min-width: 1240px)"
                srcset="./img/directions/directions-flute-desktop-1@1x.webp 1x, ./img/directions/directions-flute-desktop-1@2x.webp 2x">
              <source width="167" height="168" type="image/webp" media="(min-width: 768px)"
                srcset="./img/directions/directions-flute-tablet-1@1x.webp 1x, ./img/directions/directions-flute-tablet-1@2x.webp 2x">
              <source width="175" height="175" type="image/jpeg" media="(min-width: 1240px)"
                srcset="./img/directions/directions-flute-desktop-1@1x.jpg 1x, ./img/directions/directions-flute-desktop-1@2x.jpg 2x">
              <img class="directions__img directions__img--flute-1"
                src="./img/directions/directions-flute-tablet-1@1x.jpg"
                srcset="./img/directions/directions-flute-tablet-1@2x.jpg 2x" width="167" height="168" alt="Флейта">
            </picture>
          </div>
        </li>

        <li class="directions__item directions__item--2">
          <h2 class="directions__item-title-1 h2">Уроки&nbsp;<br> фортепиано</h2>
          <div class="directions__description-block">
            <h2 class="directions__item-title-2 h2">Уроки&nbsp;<br> фортепиано</h2>
            <p class="directions__item-description">Фортепиано является одним из самых популярных музыкальных
              инструментов. Еще, за этим инструментом очень удобно заниматься музыкальной теорией и сольфеджио.</p>
            <p class="directions__item-description">Удобное расположение нот на клавиатуре пианино очень удобно для
              запоминания нот и игры. Неспроста многие выбирают фортепиано как основной инструмент, и как
              дополнительный.</p>
          </div>

          <div class="directions__img-piano-2">
            <picture>
              <source width="175" height="379" type="image/webp" media="(min-width: 1240px)"
                srcset="./img/directions/directions-piano-desktop-2@1x.webp 1x, ./img/directions/directions-piano-desktop-2@2x.webp 2x">
              <source width="167" height="399" type="image/webp" media="(min-width: 768px)"
                srcset="./img/directions/directions-piano-tablet-2@1x.webp 1x, ./img/directions/directions-piano-tablet-2@2x.webp 2x">
              <source width="300" height="150" type="image/webp"
                srcset="./img/directions/directions-piano-mobile@1x.webp 1x, ./img/directions/directions-piano-mobile@2x.webp 2x">
              <source width="175" height="379" type="image/jpeg" media="(min-width: 1240px)"
                srcset="./img/directions/directions-piano-desktop-2@1x.jpg 1x, ./img/directions/directions-piano-desktop-2@2x.jpg 2x">
              <source width="167" height="399" type="image/jpeg" media="(min-width: 768px)"
                srcset="./img/directions/directions-piano-tablet-2@1x.jpg 1x, ./img/directions/directions-piano-tablet-2@2x.jpg 2x">
              <img class="directions__img directions__img--piano" src="./img/directions/directions-piano-mobile@1x.jpg"
                srcset="./img/directions/directions-piano-mobile@2x.jpg 2x" width="300" height="150"
                alt="Изображение клавиш фортепиано">
            </picture>
          </div>

          <div class="directions__img-piano-1">
            <picture>
              <source width="175" height="175" type="image/webp" media="(min-width: 1240px)"
                srcset="./img/directions/directions-piano-desktop-1@1x.webp 1x, ./img/directions/directions-piano-desktop-1@2x.webp 2x">
              <source width="167" height="167" type="image/webp" media="(min-width: 768px)"
                srcset="./img/directions/directions-piano-tablet-1@1x.webp 1x, ./img/directions/directions-piano-tablet-1@2x.webp 2x">
              <source width="175" height="175" type="image/jpeg" media="(min-width: 1240px)"
                srcset="./img/directions/directions-piano-desktop-1@1x.jpg 1x, ./img/directions/directions-piano-desktop-1@2x.jpg 2x">
              <img class="directions__img directions__img--piano-1"
                src="./img/directions/directions-piano-tablet-1@1x.jpg"
                srcset="./img/directions/directions-piano-tablet-1@2x.jpg 2x" width="167" height="167"
                alt="Изображение клавиш фортепиано">
            </picture>
          </div>
        </li>

        <li class="directions__item directions__item--3">
          <h2 class="directions__item-title-1 h2">Уроки сольфеджио<br> и теории музыки</h2>
          <div class="directions__description-block">
            <h2 class="directions__item-title-2 h2">Уроки сольфеджио<br> и теории музыки</h2>
            <p class="directions__item-description">Занятий только одним музыкальным инструментом зачастую недостаточно.
              Важно разбираться во всех музыкальных тонкостях, чтобы играть профессионально и осознанно.</p>
            <p class="directions__item-description">Сольфеджио и музыкальная теория - это два верных друга начинающего и
              продолжающего музыканта. Без них сложно научиться играть осмысленно и профессионально. Погружение в
              удивительный мир музыки начинается с них.</p>
          </div>

          <div class="directions__img-notes-2">
            <picture>
              <source width="379" height="175" type="image/webp" media="(min-width: 1240px)"
                srcset="./img/directions/directions-notes-desktop-2@1x.webp 1x, ./img/directions/directions-notes-desktop-2@2x.webp 2x">
              <source width="354" height="167" type="image/webp" media="(min-width: 768px)"
                srcset="./img/directions/directions-notes-tablet-2@1x.webp 1x, ./img/directions/directions-notes-tablet-2@2x.webp 2x">
              <source width="300" height="150" type="image/webp"
                srcset="./img/directions/directions-notes-mobile@1x.webp 1x, ./img/directions/directions-notes-mobile@2x.webp 2x">
              <source width="379" height="175" type="image/jpeg" media="(min-width: 1240px)"
                srcset="./img/directions/directions-notes-desktop-2@1x.jpg 1x, ./img/directions/directions-notes-desktop-2@2x.jpg 2x">
              <source width="354" height="167" type="image/jpeg" media="(min-width: 768px)"
                srcset="./img/directions/directions-notes-tablet-2@1x.jpg 1x, ./img/directions/directions-notes-tablet-2@2x.jpg 2x">
              <img class="directions__img directions__img--notes" src="./img/directions/directions-notes-mobile@1x.jpg"
                srcset="./img/directions/directions-notes-mobile@2x.jpg 2x" width="300" height="150"
                alt="Ноты на фортепиано">
            </picture>
          </div>

          <div class="directions__img-notes-1">
            <picture>
              <source width="175" height="175" type="image/webp" media="(min-width: 1240px)"
                srcset="./img/directions/directions-notes-desktop-1@1x.webp 1x, ./img/directions/directions-notes-desktop-1@2x.webp 2x">
              <source width="167" height="167" type="image/webp" media="(min-width: 768px)"
                srcset="./img/directions/directions-notes-tablet-1@1x.webp 1x, ./img/directions/directions-notes-tablet-1@2x.webp 2x">
              <source width="175" height="175" type="image/jpeg" media="(min-width: 1240px)"
                srcset="./img/directions/directions-notes-desktop-1@1x.jpg 1x, ./img/directions/directions-notes-desktop-1@2x.jpg 2x">
              <img class="directions__img" src="./img/directions/directions-notes-tablet-1@1x.jpg"
                srcset="./img/directions/directions-notes-tablet-1@2x.jpg 2x" width="167" height="167"
                alt="Ноты на фортепиано">
            </picture>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php
include ROOT . 'parts/main-form.php';
include ROOT . 'parts/footer.php';
?>