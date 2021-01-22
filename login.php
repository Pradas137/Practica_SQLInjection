<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
      input {
        display: block;
      }
      p {
        width: 25%;
        padding: 5px;
      }
      .success {
        background-color: green;
      }
      .fail {
        background-color: red;
      }
    </style>
  </head>
  <body>
    <h2>Login</h2>
    <form action="login.php" method="post">
      <input type="text" name="username">
      <input type="password" name="password">
      <input type="submit" name="submit" value="Iniciar sesión">
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["username"]) and isset($_POST["password"])) {
        $hostname = "localhost";
        $dbname = "SQL_Injection";
        $username = "adrian";
        $pw = "Hakantor";
        $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $pw);

        $_username = $_POST["username"];
        $_password = $_POST["password"];

        $query = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = '$_username' and password = '$_password'");
        $query -> execute();
        $row = $query -> fetch();
        if ($row !== false) {
          echo "<p class='success'>Entraste</p>";
        } else {
          echo "<p class='fail'>ERROR</p>";
        }
      }
     ?>
  </body>
</html>