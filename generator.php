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
<?php

$links = mysqli_fetch_all($result);
foreach ($links as $key => $lin) {
  $exp = $lin[1];
  $pieces = explode("/", $exp);
}

$firstpi = $pieces[0] . "//";
$secpi = $firstpi. $pieces[2] . "/";
$thpi = $secpi. substr(md5($pieces[3]), 0, -24);

   
  ob_start();
 echo $thpi;
  $s = ob_get_clean();

?>


<?php

  if (isset($_POST["submit"])) {

    $give_link = $_POST['give_link'];

    

    $sql = mysqli_query($link, "INSERT INTO `original` (`originallink`) VALUES ('$give_link')");
    //$sql2 = mysqli_query($link, "INSERT INTO `modif` (`modiflink`) VALUES ('<a href = $give_link>$s</a>')");
    $sql2 = mysqli_query($link, "INSERT INTO `modif` (`modiflink`) VALUES ('$s')");

    if ($sql && $sql2) {
      ?> 
      <meta http-equiv="refresh" content="0;url=index.php">
    <?php  if( $_SERVER["REQUEST_URI"] === $s ){header("Location: $get_link");}?>
      <?php
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }

?>