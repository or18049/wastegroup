<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>ログイン</title>
 </head>
 <body>
  <h1>ログイン情報を入力してください</h1>
  <?php
   session_start();
   if(isset($_POST["id"]) && isset($_POST["pass"])){
    $_SESSION["id"] = $_POST["id"];
    $_SESSION["pass"] = $_POST["pass"];
    
    if($_SESSION["miss"]){
        print '<h2>ログイン情報が間違っています</h2>';
        $_SESSION["miss"] = false;
    }
   }
   if(isset($_POST['check'])){
    if((empty($_SESSION["id"])) || (empty($_SESSION["pass"]))){
        header("location: login.php");
        $_SESSION["miss"] = true;
    }

    if(preg_match("/<(\"[^\"]*\"|'[^']*'|[^'\">])*>/", $_POST["id"])){
        header("location: login.php");
        $_SESSION["miss"] = true;
    }
    if(preg_match("/<(\"[^\"]*\"|'[^']*'|[^'\">])*>/", $_POST["pass"])){
        header("location: login.php");
        $_SESSION["miss"] = true;
    }
    if(($_SESSION["id"] == "or18049") && ($_SESSION["pass"] == "abc")){
        header("location: manager_index.php");
        $_SESSION["manage"] = true;
    }
   }
   ?>
  <form action=login.php method=POST>
   <input type=text name=id size=5><br>
   <input type=text name=pass size=5>
   <br>
   <button type=submit name=check>ログイン</button>
 </form>
 み
 <hr>
 <a href=index.php>トップページへ<br>
 </body>
</html>