<?php
require('./config.php');

$title = 'Страница Спасибо. Благодарим вас за заявку | Нотология';
$keywords = ' ';
$description = ' ';
$url = 'https://notologia.ru';

include ROOT . 'parts/header.php';
?>

<main>
  <section class="thanks">
    <div class="thanks__wrap">
      <h1 class="thanks__title h1">Ваша заявка <span>отправлена успешно!</span></h1>

      <p class="thanks__description">Мы свяжемся с вами в течение 30 минут. А пока - подготовьте пожалуйста интересующие
        вас вопросы.</p>

      <p class="thanks__text">Перейти на <a href="<?php echo HOST; ?>">главную</a></p>
    </div>
  </section>
</main>

<?php
include ROOT . 'parts/footer.php';
?>