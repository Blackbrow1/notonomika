<section class="main-form" id="main-form">
  <div class="main-form__wrap">
    <form action="mail.php" method="post">
      <fieldset class="main-form__fields">
        <h2 class="main-form__title h2">Записаться на пробный урок</h2>
        <p class="main-form__description">На пробном уроке определим ваш уровень способностей игры на музыкальном
          инструменте. Наметим индивидуальную программу обучения.</p>

        <div class="main-form__container">
          <div class="main-form__name">
            <label class="visually-hidden" for="name">Ваше имя</label>
            <input type="text" id="name" name="name" placeholder="Имя" maxlength="50" required>
          </div>

          <div class="main-form__phone">
            <label class="visually-hidden" for="phone">Ваше номер телефона</label>
            <input type="tel" id="phone" name="tel" placeholder="Телефон" required>
          </div>

          <button class="main-form__button button" type="submit">Отправить</button>

          <input class="main-form__policy visually-hidden" type="checkbox" name="policy" id="policy" required
            checked><label for="policy">Согласие на обработку <a class="main-form__policy-link" href="policy.pdf"
              download>персональных данных</a></label>
        </div>

        <div class="main-form__label">
          <p>Пробный урок бесплатный!</p>
        </div>
      </fieldset>
    </form>
  </div>
</section>