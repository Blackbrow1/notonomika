<?php
require('./config.php');

$title = 'Курсы фортепиано и флейты в Санкт-Петербурге | Нотология';
$keywords = 'Уроки фортепиано, уроки флейты, преподаватель фортепиано, уроки сольфеджио, преподаватель флейты';
$description = 'Научим играть профессионально или для души. Подготовим к выступлению или к поступлению в музыкальныю школу. Обучение за 3 месяца. Пробный урок бесплатный!';
$url = 'https://notologia.ru';

include ROOT . 'parts/header.php';
?>

<main>
  <section class="hero">
    <div class="hero__wrap">
      <h1 class="hero__title h1">Уроки <span class="hero__accent">флейты</span> и фортепиано в СПб</h1>

      <p class="hero__description">Подготовлю к поступлению в музыкальное учебное заведение. Научу играть для души за 3
        месяца. Приходите на бесплатный урок!</p>

      <picture>
        <source width="544" height="601" type="image/webp" media="(min-width: 768px)"
          srcset="./img/main-image-desktop@1x.webp 1x, ./img/main-image-desktop@2x.webp 2x">
        <source width="295" height="325" type="image/webp"
          srcset="./img/main-image-mobile@1x.webp 1x, ./img/main-image-mobile@2x.webp 2x">
        <source width="544" height="601" type="image/png" media="(min-width: 768px)"
          srcset="./img/main-image-desktop@1x.png 1x, ./img/main-image-desktop@2x.png 2x">
        <img class="hero__img" src="./img/main-image-mobile@1x.png" srcset="./img/main-image-mobile@2x.png 2x"
          width="295" height="325" alt="Преподаватель по флейте">
      </picture>

      <a href="#main-form" class="hero__button button scroll-to">Записаться</a>
    </div>
  </section>

  <section class="about-lessons">
    <div class="about-lessons__wrap">
      <h2 class="visually-hidden">Об уроках игры на фортепиано и флейте</h2>

      <ul class="about-lessons__list">
        <li class="about-lessons__item about-lessons__item--notes">Уроки флейты и блокфлейты в Санкт-Петербурге.
          Авторская методика преподавания музыкального инструмента</li>
        <li class="about-lessons__item about-lessons__item--heart">Преподаю фортепиано как для начинающих, так и для
          продвинутых. Мой курс строится исходя из индивидуальных способностей ученика</li>
        <li class="about-lessons__item about-lessons__item--book">Теория музыки простым языком и на практике. Разберём
          все тонкости на уроках. От названий нот, до строения аккордов</li>
        <li class="about-lessons__item about-lessons__item--microphone">Курсы сольфеджио для поступающих в музыкальную
          школу или музыкальный колледж. На моих уроках вы убедитесь, что сольфеджио - это просто!</li>
      </ul>

      <picture>
        <source width="585" height="404" type="image/webp" media="(min-width: 1240px)"
          srcset="./img/about-lessons/about-lessons-desktop@1x.webp 1x, ./img/about-lessons/about-lessons-desktop@2x.webp 2x">
        <source width="728" height="503" type="image/webp" media="(min-width: 768px)"
          srcset="./img/about-lessons/about-lessons-tablet@1x.webp 1x, ./img/about-lessons/about-lessons-tablet@2x.webp 2x">
        <source width="300" height="207" type="image/webp"
          srcset="./img/about-lessons/about-lessons-mobile@1x.webp 1x, ./img/about-lessons/about-lessons-mobile@2x.webp 2x">
        <source width="585" height="404" type="image/jpeg" media="(min-width: 1240px)"
          srcset="./img/about-lessons/about-lessons-desktop@1x.jpg 1x, ./img/about-lessons/about-lessons-desktop@2x.jpg 2x">
        <source width="728" height="503" type="image/jpeg" media="(min-width: 768px)"
          srcset="./img/about-lessons/about-lessons-tablet@1x.jpg 1x, ./img/about-lessons/about-lessons-tablet@2x.jpg 2x">
        <img class="about-lessons__img" src="./img/about-lessons/about-lessons-mobile@1x.jpg"
          srcset="./img/about-lessons/about-lessons-mobile@2x.jpg 2x" width="300" height="207"
          alt="Преподаватель в белом концертном платье">
      </picture>
    </div>
  </section>

  <section class="why-study">
    <div class="why-study__wrap">
      <h2 class="why-study__title h2">Зачем учиться музыке</h2>

      <ul class="why-study__list">
        <li class="why-study__item study-card study-card--1">
          <p>Уроки игры на фортепиано и флейте помогают развитию мелкой моторики. Зажимая пальцами определенные
            комбинации клапанов или клавиш развивается скорость мышления, быстрота реакции и внимательность.
          </p>
        </li>
        <li class="why-study__item study-card study-card--2">
          <p>Занятия на флейте требуют глубоко вдоха и медленного выдоха. Такое интенсивное наполнение легких кислородом
            и давление при выдохе идет на пользу при простуде, излечивает аллергию, значительно улучшает настроение.
            Флейта помогает при заболеваниях связок, горла, дыхательных путей, появляется «иммунитет» к туберкулезу и
            воспалению легких.
          </p>
        </li>
        <li class="why-study__item study-card study-card--3">
          <p>Занятия музыкой развивают выносливость и волю, потому что,
            чтобы научиться хорошо играть - нужно будет регулярно заниматься. Это удивительный способ преобразить вашу
            личность, развить терпение и спокойствие духа. </p>
        </li>
        <li class="why-study__item study-card study-card--4">
          <p>Занятия на флейте и фортепиано помогают развитию эстетического вкуса, играя шедевры великих композиторов мы
            приучаем наш мозг к прекрасному, развивается более тонкая чувствительность к окружающему миру.
          </p>
        </li>
        <li class="why-study__item study-card study-card--5">
          <p>Запоминание нотной грамоты, определенного положения пальцев для каждого звука, музыкальных произведений -
            всё это очень помогает развить память
          </p>
        </li>
        <li class="why-study__item study-card study-card--6">
          <p>Если у вас или вашего ребенка, имеются речевые дефекты - то флейта прекрасно выполняет роль логопеда. Чтобы
            играть музыкальные произведения, требуется использование артикуляции. Для этого обычно играются специальные
            упражнения, которые развивают мышцы речевого аппарата</p>
        </li>
      </ul>

      <a href="#main-form" class="why-study__button button scroll-to">Записаться</a>
    </div>
  </section>

  <section class="benefits">
    <div class="benefits__wrap">
      <h2 class="benefits__title h2">Что вы получите, обучаясь у меня</h2>

      <div class="benefits__block-1">
        <ul class="benefits__list-1">
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Профессиональная игра</h3>
            <p class="benefits__item-description">Научитесь играть ваши любимые музыкальные композиции. Поймёте, как из
              набора нот создавать музыкальное произведение</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Здоровье</h3>
            <p class="benefits__item-description">Ваше физическое и эмоциональное самочувствие станут гораздо лучше</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Понимание музыки</h3>
            <p class="benefits__item-description">Научитесь понимать музыку и как устроены музыкальные произведения, за
              счет чего достигается выразительность</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Уверенность</h3>
            <p class="benefits__item-description">Станете увереннее в себе, потому что овладеете новыми навыками</p>
          </li>
        </ul>

        <picture>
          <source width="607" height="579" type="image/webp" media="(min-width: 1240px)"
            srcset="./img/benefits/benefits-1-desktop@1x.webp 1x, ./img/benefits/benefits-1-desktop@2x.webp 2x">
          <source width="354" height="505" type="image/webp" media="(min-width: 768px)"
            srcset="./img/benefits/benefits-1-tablet@1x.webp 1x, ./img/benefits/benefits-1-tablet@2x.webp 2x">
          <source width="300" height="606" type="image/webp"
            srcset="./img/benefits/benefits-1-mobile@1x.webp 1x, ./img/benefits/benefits-1-mobile@2x.webp 2x">
          <source width="607" height="579" type="image/png" media="(min-width: 1240px)"
            srcset="./img/benefits/benefits-1-desktop@1x.png 1x, ./img/benefits/benefits-1-desktop@2x.png 2x">
          <source width="354" height="505" type="image/jpeg" media="(min-width: 768px)"
            srcset="./img/benefits/benefits-1-tablet@1x.jpg 1x, ./img/benefits/benefits-1-tablet@2x.jpg 2x">
          <img class="benefits__img" src="./img/benefits/benefits-1-mobile@1x.jpg"
            srcset="./img/benefits/benefits-1-mobile@2x.jpg 2x" width="300" height="380"
            alt="Девушка с флейтой на концерте">
        </picture>
      </div>

      <div class="benefits__block-2">
        <ul class="benefits__list-2">
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Развитие навыков</h3>
            <p class="benefits__item-description">Разовьете слух, чувство ритма, моторику пальцев. Улучшите память,
              разовьете внимательность и концентрацию</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Управление эмоциями</h3>
            <p class="benefits__item-description">Научитесь глубокому, осознанному дыханию. Сможете лучше управлять
              вашими эмоциями</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Нотная грамота</h3>
            <p class="benefits__item-description">Овладеете нотной грамотой и научитесь читать с листа. Вы увидите, что
              это совсем несложно</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title h3">Игра в ансамбле</h3>
            <p class="benefits__item-description">Научитесь играть в ансамбле. Обучение игре в ансамбле является важным
              этапом в становлении музыканта</p>
          </li>
        </ul>

        <picture>
          <source width="607" height="579" type="image/webp" media="(min-width: 1240px)"
            srcset="./img/benefits/benefits-2-desktop@1x.webp 1x, ./img/benefits/benefits-2-desktop@2x.webp 2x">
          <source width="354" height="505" type="image/webp" media="(min-width: 768px)"
            srcset="./img/benefits/benefits-2-tablet@1x.webp 1x, ./img/benefits/benefits-2-tablet@2x.webp 2x">
          <source width="300" height="606" type="image/webp"
            srcset="./img/benefits/benefits-2-mobile@1x.webp 1x, ./img/benefits/benefits-2-mobile@2x.webp 2x">
          <source width="607" height="579" type="image/jpeg" media="(min-width: 1240px)"
            srcset="./img/benefits/benefits-2-desktop@1x.png 1x, ./img/benefits/benefits-2-desktop@2x.png 2x">
          <source width="354" height="505" type="image/jpeg" media="(min-width: 768px)"
            srcset="./img/benefits/benefits-2-tablet@1x.jpg 1x, ./img/benefits/benefits-2-tablet@2x.jpg 2x">
          <img class="benefits__img" src="./img/benefits/benefits-2-mobile@1x.jpg"
            srcset="./img/benefits/benefits-2-mobile@2x.jpg 2x" width="300" height="380"
            alt="Девушка с флейтой на концерте">
        </picture>
      </div>
    </div>
  </section>

  <section class="video">
    <div class="video__wrap">
      <h2 class="video__title video__title-wrap h2">Как играют мои ученики</h2>

      <div class="swiper video__swiper">
        <ul class="swiper-wrapper video__list">
          <li class="swiper-slide video__item">
            <img class="video__img" src="./img/faq/faq-img-tablet@1x.jpg" alt="">
          </li>

          <li class="swiper-slide video__item">
            <img class="video__img" src="./img/about-lessons/about-lessons-tablet@1x.jpg" alt="">
          </li>

          <li class="swiper-slide video__item">
            <img class="video__img" src="./img/faq/faq-img-tablet@1x.jpg" alt="">
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="guarantees">
    <div class="guarantees__wrap">
      <h2 class="guarantees__title h2">Что я могу гарантировать</h2>

      <p class="guarantees__description">На моих уроках по фортепиано или флейте я могу гарантировать вам обеспечение
        всеми необходимыми учебными материалами. Предоставлю музыкальные инструменты для занятий на уроке</p>

      <picture>
        <source width="790" height="500" type="image/webp" media="(min-width: 1240px)"
          srcset="./img/guarantees/guarantees-desktop@1x.webp 1x, ./img/guarantees/guarantees-desktop@2x.webp 2x">
        <source width="354" height="417" type="image/webp" media="(min-width: 768px)"
          srcset="./img/guarantees/guarantees-tablet@1x.webp 1x, ./img/guarantees/guarantees-tablet@2x.webp 2x">
        <source width="300" height="145" type="image/webp"
          srcset="./img/guarantees/guarantees-mobile@1x.webp 1x, ./img/guarantees/guarantees-mobile@2x.webp 2x">
        <source width="790" height="500" type="image/jpeg" media="(min-width: 1240px)"
          srcset="./img/guarantees/guarantees-desktop@1x.jpg 1x, ./img/guarantees/guarantees-desktop@2x.jpg 2x">
        <source width="354" height="417" type="image/jpeg" media="(min-width: 768px)"
          srcset="./img/guarantees/guarantees-tablet@1x.jpg 1x, ./img/guarantees/guarantees-tablet@2x.jpg 2x">
        <img class="guarantees__img" src="./img/guarantees/guarantees-mobile@1x.jpg"
          srcset="./img/guarantees/guarantees-mobile@2x.jpg 2x" width="300" height="145" alt="Пианино с нотами">
      </picture>

      <p class="guarantees__description-2">При должном и систематическом выполнении домашних заданий могу гарантировать
        вам быстрое и качественное обучение игре на музыкальном инструменте, высокие результаты усвоения материала. И,
        даже поступление в музыкальный колледж</p>
    </div>
  </section>

  <?php
  include ROOT . 'parts/main-form.php';
  ?>

  <section class="faq">
    <div class="faq__wrap">
      <h2 class="faq__title h2">Часто задаваемые вопросы</h2>

      <ul class="faq__list">
        <li class="faq__item">
          <h3 class="faq__item-title h3">Что, если я слишком молод или слишком стар?</h3>
          <p class="faq__item-description faq__item-description--none">Моя многолетняя практика показывает, что учиться
            никогда не рано и никогда не поздно. Отличные результаты могут быть в любом возрасте. Главное - это
            грамотный подход к обучению и постоянная подпитка желания учиться</p>
          <button class="faq__button"><span class="visually-hidden">Открыть</span></button>
        </li>
        <li class="faq__item">
          <h3 class="faq__item-title h3">Как долго нужно учиться?</h3>
          <p class="faq__item-description faq__item-description--none">Кому-то достаточно одного урока, кому-то мало и
            15 лет обучения. Всё зависит от ваших целей, от того, как вы хотите играть и что вы хотите играть. Простые
            мелодии вы сможете исполнять уже через 4-8 уроков</p>
          <button class="faq__button"><span class="visually-hidden">Открыть</span></button>
        </li>
        <li class="faq__item">
          <h3 class="faq__item-title h3">Сложно ли учиться музыке?</h3>
          <p class="faq__item-description faq__item-description--none">Прежде всего, музыке учиться очень интересно. Это
            увлекательное занятие, которое затмевает всю сложность музыкальной теории и практики. А первые результаты в
            виде выученных песен или произведений очень сильно вдохновляют учеников. И любые сложности покажутся лишь
            маленькой ступенькой к следующему прекрасному достижению.</p>
          <button class="faq__button"><span class="visually-hidden">Открыть</span></button>
        </li>
        <li class="faq__item">
          <h3 class="faq__item-title h3">Можно ли перенести занятие?</h3>
          <p class="faq__item-description faq__item-description--none">Да, конечно. Занятие можно перенести, сообщив об
            отмене минимум за 4 часа до начала урока</p>
          <button class="faq__button"><span class="visually-hidden">Открыть</span></button>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php
include ROOT . 'parts/footer.php';
?>