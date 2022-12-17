<?php
class Database {
    private $dns = "mysql:host=localhost:8889;dbname=quanlythoikhoabieu";
    private $user = "root";
    private $pass = "";
    function get_dns() {
        return $this->dns;
      }
    function get_user() {
        return $this->user;
    }
    function get_pass() {
        return $this->pass;
    }
    
}
?>