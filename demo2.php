<!DOCTYPE html>
<HTML lang="ja">
<html>
    <head>
        <meta charset="UTF-8">
        <title>demo_site_2</title>
        <link rel="stylesheet" type="text/css" href="demo.css">
        <style>
            body{
                font-size: 125%;
                margin-left: 30px;
            }
        </style>    
    </head>
    <body>
      <?php
        if (($_POST['eat'] == '') || (!isset($_POST['eat']))) {
          print '未入力があります<br>';
          print '<input type="button" onclick="history.back()" value="戻る">';
        } else{
          $user_name = $_POST['user_name'];
          $gender = $_POST['gender'];
          $birthday = $_POST['birthday'];
          $age = $_POST['age'];
          $job = $_POST['job'];
          $hobby = $_POST['hobby'];
          $weather = $_POST['weather'];
          $eat = $_POST['eat'];

          print'<form action="demo3.php" method="post">';
          print '<h1 align="center">＜内容確認＞</h1>';
          print '氏名 : '.$user_name.'<br><br>';
          print '性別 : '.$gender.'<br><br>';
          print '生年月日 : '.$birthday.'<br><br>';
          print '年齢 : '.$age.'<br><br>';
          print '職業 : '.$job.'<br><br>';
          print '趣味 : '.$hobby.'<br><br>';
          print '今日の天気 : '.$weather.'<br><br>';
          print '昨日の晩ご飯 : '.$eat.'<br><br><br>';

          print '入力内容に誤りがなければ送信を押してください<br>';
          print '<input type="submit" value="送信">';
          print '</form>';
        }
      ?>
    </body>
</html>