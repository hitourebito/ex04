<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form action="test_ex04.php" method="POST">
      <input type="radio" name="age" value="20歳未満" checked>20歳未満<br/>
      <input type="radio" name="age" value="20歳代" >20歳代<br/>
      <input type="radio" name="age" value="30歳代" >30歳代<br/>
      <input type="radio" name="age" value="40歳以上" >40歳以上<br/>

      <input type="submit" name="btn" value="送信"><br/>
    </form>
      入力したデータは<?php echo $_POST["age"];?>です。
  </body>
</html>