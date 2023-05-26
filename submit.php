<!DOCTYPE html>
<meta charset="UTF-8">
<html>
  <head>
    <title>訂單Order Submission</title>
  </head>

 <body>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $birthday = $_POST["birthday"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        echo "<p>您輸入的姓名是：$name</p>";
        echo "<p>您的性別是：$gender</p>";
        echo "<p>您的生日日期是：$birthday</p>";
        echo "<p>您輸入的電郵是：$email</p>";
        echo "<p>您輸入的電話號碼是：$phone</p>";
      }
    ?>
  </body>
</html>

