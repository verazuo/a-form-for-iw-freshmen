<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <link rel="stylesheet" href="css/j-forms.css">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <title>提交成功</title>
</head>
<body>
<?php 
  session_start();

  $name = $_POST['name'];
  $hometown = $_POST['hometown'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sex = $_POST['sex'];
  $profession = $_POST['profession'];
  $grade = $_POST['grade'];
  $tech = $_POST['tech'];
  $awards = $_POST['awards'];
  $introduce = $_POST['introduce'];

  $dbc = mysql_connect('localhost','gVw5LVuX','vexTlzGXyW5j','gVw5LVuX')
    or die('Error connecting to MySQL server.');
  mysql_select_db("gVw5LVuX", $dbc);
  

  $sql = "INSERT INTO IW (name, hometown, email, phone, sex, profession, grade, tech, awards, introduce)" .
  "VALUES ('$name', '$hometown', '$email', '$phone', '$sex', '$profession', '$grade', '$tech', '$awards', '$introduce')";

  mysql_query($sql);
  mysql_close($dbc);  
?>   
<div class="center">
    <h1>
      提交成功~</br>
      请耐心等待~
    </h1>
    <div class="hello">
      期待你成为我们的一员呦么么扎~</br>
      小伙伴们可以先加入16创新工坊新生交流群，企鹅群号：570858774</br></br>
      <div class="hi">
        <img src="images/1.jpg" >
      </div>
    </div>
</div>

</body>
</html>