<?php
require('./config.php');

$title = 'Такой страницы не существует. Ошибка 404 | Нотология';
$keywords = ' ';
$description = ' ';
$url = 'https://notologia.ru';

include ROOT . 'parts/header.php';
?>

<main>
  <section class="page-404">
    <div class="page-404__wrap">
      <h1 class="page-404__title h1">Ой... Кажется, что такой страницы не существует :(</h1>

      <p class="page-404__text">Перейти на <a href="<?php echo HOST; ?>">главную</a></p>
    </div>
  </section>
</main>

<?php
include ROOT . 'parts/footer.php';
?>
