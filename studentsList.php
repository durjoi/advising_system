<?php
include 'core/init.php';

if(!isset($_SESSION['admin'])) {
  header("location: adminLogin.php");
}
if (isset($_GET['logout'])) {
  $admin = new Admin;
  $admin->logout();
}

$students = new Student;
$students = $students->getStudents();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      nav ul li a {
        color: #fff;
        text-decoration: none;
      }
      main {
        color: #000;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 30px;
      }
      table {
        width: 100%;
      }
      h2 {
        margin: 0px;
        padding: 0px;
      }
      .content-header {
        display: flex;
      }
      .btn {
        height: 20px;
        padding: 3px;
        background: #9edfe5;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        AdminDashboard
      </div>
      <nav>
        <ul>
          <li> <a href="adminDashboard.php">Dashboard</a> </li>
          <li> <a href="studentsList.php">Students</a> </li>
          <li> <a href="#">Courses</a> </li>
          <li> <a href="<?php echo $_SERVER['PHP_SELF'] . "?logout='1'" ?>">Logout</a> </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="content-header">
        <h2>Students List</h2> &nbsp; &nbsp; <a class="btn" href="addStudents.php">Add new</a>
      </div>
      <table border="1">
        <thead>
          <tr>
            <td>Student Id</td>
            <td>Name</td>
            <td>Grade</td>
          </tr>
        </thead>
        <tbody>
          <?php if (count($students) > 0):
            foreach ($students as $student):
            ?>
            <tr>
              <td><?php echo $student['studentid']; ?></td>
              <td><?php echo $student['name']; ?></td>
              <td><?php echo $student['grade']; ?></td>
            </tr>
          <?php endforeach; ?>
          <?php endif; ?>
        </table>
    </main>
  </body>
</html>
