<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-225-88-199.compute-1.amazonaws.com");
define("DB_USER", "xqpldvxbbydsqn");
define("DB_PASS", "1dd837dbac8544481dba99ff59e804fe6e340ac1e9026bdb2df9880f9585523d");
define("DB_NAME", "d1mpcvvssdtqms");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
