<?php
include 'core/init.php';

if(!isset($_SESSION['student'])) {
  header("location: studentLogin.php");
}
if (isset($_GET['logout'])) {
  $admin = new Student;
  $admin->logout();
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body {
      margin: 0;
      padding: 0;
    }
      header {
        height: 50px;
        color: #fff;
        background-color: #6146D9;
        padding-left: 50px;
        padding-right: 50px;
      }
      header a {
        color: #fff;
        text-decoration: none;
      }
      .logo {
        width: 20%;
        float: left;
      }
      .logo {
        font-size: 20px;
        line-height: 50px;
      }
      nav {
        width: 80%;
        float: right;
      }
      nav ul {
        float: right;
        list-style: none;
        margin: 0px;
        padding: 0px;
      }
      nav ul li {
        display: inline-block;
        float: left;
        margin-left: 10px;
        line-height: 50px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        Advising Portal
      </div>
      <nav>
        <ul>
          <li> <a href="#">Courses</a> </li>
          <li> <a href="<?php echo $_SERVER['PHP_SELF'] . "?logout='1'" ?>">Logout</a> </li>
        </ul>
      </nav>
    </header>
  </body>
</html>
