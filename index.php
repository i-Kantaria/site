<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];

        if (mail('igorharseev@gmail.com',
            'Кто-то протестил сайт',
            'Уважаемый(-ая) .$name.! Оцените, пожалуйста, сайт Котика.'

        )) {
            echo('Успешно отправлено');
        } else {
            echo('Ошибка')
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form method="POST">
      <input type="text" name="name" placeholder="Имя" />

      <input type="submit" value="Отправить" />
    </form>
  </body>
</html>
