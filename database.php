<?php
class Database {
    public $connect;

    public function Database() {
        $init = parse_ini_file("config.ini");
        $servername = $init["servername"];
        $dbname = $init["dbname"];
        $username = $init["username"];
        $password = $init["pass"];

        try {
            $this->connect = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
?>