<?php
abstract class Migration{
    protected PDO $pdo;
    public function __construct(){
        $config = include'../config.php';
        $dsn = "mysql:host=".$config['host'].";dbname=".$config['db'].";charset=".$config['charset'];
        $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->pdo = new PDO($dsn, $config['user'], $config['pass'], $opt);
    }
    public abstract function run();
    public abstract function cancel();
}