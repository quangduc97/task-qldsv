<?php
class goc {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "qldsv";
    protected $db;
    function __construct()
    {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        $this->db->set_charset("utf8");
    }
}
?>