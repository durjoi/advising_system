<?php
class Student extends DB {

  public function insert($studentid, $name, $password) {
    $sql = "INSERT INTO students (studentid, name, password) VALUES ('{$studentid}', '{$name}', '{$password}')";

    if(!$insert = $this->connect()->query($sql)) {
      echo "Error: ";
    };
  }


  public function Login($username, $password) {

    $sql = "SELECT * FROM students WHERE studentid = '{$username}' AND password = '{$password}'";

    $result = $this->connect()->query($sql);

    if($result->num_rows > 0) {
      $result = $result->fetch_assoc();
       $_SESSION["student"] = $result['id'];
    }
  }

  public function Logout() {
    session_destroy();
    unset($_SESSION['student']);
    header("location: studentLogin.php");
  }

  public function getStudents() {
    $sql = "SELECT * FROM students";
    $results = $this->connect()->query($sql);
    if($results->num_rows > 0) {
      while($row = $results->fetch_assoc()) {
        $data[] = $row;
      }

      return $data;
    }
    else {
      return 0;
    }
  }
}
