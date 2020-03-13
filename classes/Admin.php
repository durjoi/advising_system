<?php
class Admin extends DB {

  public function Login($username, $password) {

    $sql = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";

    $result = $this->connect()->query($sql);

    if($result->num_rows > 0) {
      $result = $result->fetch_assoc();
       $_SESSION["admin"] = $result['username'];
    }

  }

  public function Logout() {
    session_destroy();
    unset($_SESSION['admin']);
    header("location: adminLogin.php");
  }
}
