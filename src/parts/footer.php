  <footer class="footer">
    <div class="footer__wrap">
      <div>
        <a class="footer__logo-link" href="<?php echo HOST; ?>">
          <picture>
            <source width="136" height="30" media="(min-width: 768px)" srcset="img/icons/logo-footer-desktop.svg"
              type="image/svg+xml">
            <img src="img/icons/logo-footer-mobile.svg" width="120" height="25" alt="Логотип Нотологии">
          </picture>
        </a>
      </div>

      <nav class="footer__nav">
        <ul class="footer__list">
          <li class="footer__item"><a href="<?php echo HOST; ?>">Главная</a></li>
          <li class="footer__item"><a href="<?php echo HOST; ?>directions">Направления</a></li>
          <li class="footer__item"><a href="<?php echo HOST; ?>about">Преподаватель</a></li>
          <li class="footer__item"><a href="<?php echo HOST; ?>price">Цены</a></li>
          <li class="footer__item"><a href="<?php echo HOST; ?>contacts">Контакты</a></li>
        </ul>
      </nav>

      <a class="footer__tel" href="tel:+79046046624">+7 (904) 604-66-24</a>

      <div class="footer__contacts">
        <div class="footer__address">
          <span class="footer__metro">Удельная,</span>
          <span class="footer__street">пр. Тореза, 78</span>
        </div>

        <ul class="social">
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
      </div>

      <div class="footer__policy">
        <a href="policy.pdf" class="footer__policy-link" download>Политика конфиденциальности</a>
      </div>

      <p class="footer__site-dev"><span>Сайт разработан в</span> <a href="https://vk.com/blackbrow"
          target="_blank">Prasaim</a></p>
    </div>
  </footer>

  <div class="popup popup--none">
    <div class="popup__video">
      <iframe src="" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen
        scrolling="no" allow="encrypted-media;"></iframe>
    </div>

    <button class="popup__button"><span class="visually-hidden">Закрыть видео</span></button>
  </div>

  <script defer src="./js/swiper-bundle.min.js"></script>
  <script defer src="./js/script.js"></script>
  </body>


  </html>