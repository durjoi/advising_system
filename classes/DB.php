<?php
class DB {
  private $serverhost;
  private $dbusername;
  private $dbpassword;
  private $dbname;

  protected function connect() {
    $this->serverhost = '127.0.0.1';
    $this->dbusername = 'root';
    $this->dbpassword = '';
    $this->dbname     = 'advising_system';

    // Create connection
    $conn = new mysqli($this->serverhost, $this->dbusername, $this->dbpassword, $this->dbname);

    // Check Connection
    if($conn->connect_error) {
      die("Connection Failed: ". $conn->connect_error);
    }

    return $conn;
  }
}
