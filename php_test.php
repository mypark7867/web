<!DOCTYPE html>
<html lang="kor" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP 예제</title>
  </head>
<style>
  .h1_php {
    text-align: center;
    background-color: #79BEA8; //w3schools.com/colors/colors_monochromatic.asp
    color: #093426; //위 사이트의 컬러 조합 참고함.
    font-size: 33px;
  }
  .h2_php {
    text-align: center;
    background-color: #E7F3EF; //w3schools.com/colors/colors_monochromatic.asp
    color: #23483C; //위 사이트의 컬러 조합 참고함.
    font-size: 20px;
  }
</style>

  <body>

<h2 class="h2_php"><a href="http://localhost/index.html">HOME</a></h2>
<h1 class="h1_php"><abbr title="PHP는 PHP Hyper Text로 재귀적 약어이다.">PHP</abbr> 연습하기</h1>
<h2 class="h2_php">여기 부터  php예제가 시작됩니다.</h2>
<?php
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d H:i:s");
?><p></p>
<p><?php echo "My first PHP script!"; ?>
<p><?php echo '현재 PHP 버전 : ' .phpversion(); ?><p></p>
<a href="./php_test.php?memo=first">첫번째 이야기</a>
<a href="./php_test.php?memo=second">두번째 이야기</a><p></p>

<?php
  if(isset($_GET['memo'])) {
    echo file_get_contents('memo/'.$_GET['memo']);
  }else {
    echo "반가워, 이제부터 PHP를 배우게 된 사연을 들어봐.";
  }
 ?>

<!-- <?php phpinfo(); ?> -->
<h2 class="h2_php">여기까지가 php예제입니다.</h2>

  </body>
</html>
