<?php
    class Define extends Database {
        protected $pdo = null;
        function __construct()
        {
            $db = new Database();
            try {
                $pdo = new PDO($this->get_dns(), $this->get_user(), $this->get_pass());
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                exit();
            }
        }
    }
?>