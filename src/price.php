<?php
require('./config.php');

$title = 'Стоимость обучения игре на музыкальном инструменте | Нотология';
$keywords = 'цены на обучение музыке, стоимость обучения игре на фортепиано';
$description = 'Узнатйте актуальную стоимость обучения игре на музыкальном инструменте. Для вас есть хорошие акции и специальные предложения. Переходите на страницу, чтобы ознакомиться подробнее';
$url = 'https://notologia.ru/price.php';

include ROOT . 'parts/header.php';
?>

<main>
  <section class="tickets">
    <div class="tickets__wrap">
      <h1 class="tickets__title h1">Абонементы</h1>

      <div class="tickets__price">
        <h2 class="tickets__price-title h2">Индивидуальные уроки</h2>
        <p class="tickets__price-description">Максимум пользы от занятий по авторской методике. Длительность урока 50
          минут</p>

        <ul class="tickets__price-list">
          <li class="tickets__price-item card">
            <div class="card__head">
              <h3 class="card__title">4 урока</h3>
              <span class="card__correction">Занятия 1 раз в неделю</span>
            </div>

            <p class="card__price">6 800</p>

            <a href="#main-form" class="card__button button scroll-to">Записаться</a>
          </li>

          <li class="tickets__price-item card card--hit">
            <div class="card__head">
              <h3 class="card__title">8 уроков</h3>
              <span class="card__correction">Занятия 2 раза в неделю</span>
            </div>

            <p class="card__price">11 800</p>

            <a href="#main-form" class="card__button button scroll-to">Записаться</a>
          </li>

          <li class="tickets__price-item card">
            <div class="card__head">
              <h3 class="card__title">12 уроков</h3>
              <span class="card__correction">Занятия 3 раза в неделю</span>
            </div>

            <p class="card__price">16 200</p>

            <a href="#main-form" class="card__button button scroll-to">Записаться</a>
          </li>
        </ul>
      </div>

      <div class="tickets__price">
        <h2 class="tickets__price-title h2">Инструмент <span>+ сольфеджио</span></h2>
        <p class="tickets__price-description">Для тех, кто будет совмещать занятия по специальности с уроками по
          сольфеджио или музыкальной теории, у меня предусмотрены скидки.</p>

        <ul class="tickets__price-list">
          <li class="tickets__price-item card card--2">
            <div class="card__head">
              <h3 class="card__title">4 урока</h3>
              <span class="card__correction">+ 4 урока сольфеджио или теории</span>
            </div>

            <p class="card__description">1 раз в неделю специальность + 1 раз в неделю сольфеджио или теория музыки</p>

            <p class="card__price">10 600</p>

            <a href="#main-form" class="card__button button scroll-to">Записаться</a>
          </li>

          <li class="tickets__price-item card card--2">
            <div class="card__head">
              <h3 class="card__title">8 уроков</h3>
              <span class="card__correction">+ 8 уроков сольфеджио или теории</span>
            </div>

            <p class="card__description">2 раза в неделю специальность + 2 раза в неделю сольфеджио или теория музыки
            </p>

            <p class="card__price">19 800</p>

            <a href="#main-form" class="card__button button scroll-to">Записаться</a>
          </li>

          <li class="tickets__price-item card card--2">
            <div class="card__head">
              <h3 class="card__title">12 уроков</h3>
              <span class="card__correction">+ 12 уроков сольфеджио или теории</span>
            </div>

            <p class="card__description">3 раза в неделю специальность + 3 раза в неделю сольфеджио или теория музыки
            </p>

            <p class="card__price">28 800</p>

            <a href="#main-form" class="card__button button scroll-to">Записаться</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="trial-lesson">
    <div class="trial-lesson__wrap">
      <h2 class="trial-lesson__title h2">Что будет на <span>пробном уроке</span></h2>

      <ul class="trial-lesson__list">
        <li class="trial-lesson__item trial-lesson__item--1">Познакомимся с музыкальным инструментом</li>
        <li class="trial-lesson__item trial-lesson__item--2">Сыграем первую мелодию и упражнения</li>
        <li class="trial-lesson__item trial-lesson__item--3">Определим цели ваших занятий</li>
        <li class="trial-lesson__item trial-lesson__item--4">Получите первое домашнее задание</li>
      </ul>
    </div>
  </section>

  <section class="promo">
    <div class="promo__wrap">
      <h2 class="visually-hidden">Скидки и предложения</h2>

      <div class="promo__lesson">
        <span>Пробный урок бесплатный</span>
      </div>

      <div class="promo__discount">
        <span class="promo__discount-description">При оплате абонемента в день пробного урока скидка</span>
        <span class="promo__discount-price">500 рублей</span>
      </div>
    </div>
  </section>
</main>

<?php
include ROOT . 'parts/main-form.php';
include ROOT . 'parts/footer.php';
?>