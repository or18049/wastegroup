<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>ログイン</title>
 </head>
 <body>
 <?php
   session_start();
   $_SESSION["manage"] = false;
   ?>
    これはトップページだよ
    <a href=login.php>ログインページ<br>
</body>
</html>