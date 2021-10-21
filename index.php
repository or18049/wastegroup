<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>ゴミ分類検索ページ</title>
 </head>
 <body>
 <?php
   session_start();
   $_SESSION["manage"] = false;
   ?>
    <h1>ゴミ分類検索ページ</h1><br>
    ゴミの分別を検索したい方は<a href=search.php>こちら<a><br>
    管理者の方は<a href=login.php>こちら
</body>
</html>