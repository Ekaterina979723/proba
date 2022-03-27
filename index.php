<?php
    $host = 'localhost';
    $user = 'mysql';
    $pass = 'mysql';
    $db_name = 'proba';
    $link = mysqli_connect($host, $user, $pass, $db_name);

    $all = 'SELECT * FROM original';

    $result = mysqli_query($link, $all);
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
    

  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Generator</title>
  </head>
  <body>
  <h2>Введите ссылку</h2>
  <form action="generator.php" method="post">
    <input type="text" name="give_link">
    <input type="submit" name="submit" value="Генерировать">
  </form>


  <?php
$links = mysqli_fetch_all($result);
//print_r($links);
foreach ($links as $key => $lin) {
  echo'</br>';
  $exp = $lin[1];
  $pieces = explode("/", $exp);
  ?>
  
  
<a href="<?php echo $lin[1]; ?>"><?php echo $pieces[0];?>//<?php echo $pieces[2];?>/<?php echo substr(md5($pieces[3]), 0, -24); ?></a>
   
<?php
}

$firstpi = $pieces[0] . "//";
$secpi = $firstpi. $pieces[2] . "/";
$thpi = $secpi. substr(md5($pieces[3]), 0, -24);


  ob_start();
    echo $thpi;
    $s = ob_get_clean();

    //print_r($s);
    ?>
  </body>
  </html>