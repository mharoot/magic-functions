<?php
class Connection
{
    protected $link;
    private $dsn, $username, $password;
    
    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        return $this->connect();
    }

    // prevent connection from being cloned using the keyword clone
    private function __clone(){}

    public function __set($name, $value){
        throw new Exception ('Not allowed to set property.  Encapsulation is protected in this class');
    }
    
    private function connect()
    {
        try {
            if ($this->link === null) {
                $this->link = new PDO($this->dsn, $this->username, $this->password);
                $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } else {
                return $this->link;
            }
        } catch (PDOException $e) {
            echo "FAILURE TO CONNECT";
        } finally {
            if ($this->link !== null) {
                var_dump( "<p>PHP Document Object Connection to mysql created...</p>");
                return $this->link;
            }
        }
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    public function __sleep()
    {
        echo "<p>PDO CONNECTION Sleeping</p>";
        return array('dsn', 'username', 'password');
    }
    
    public function __wakeup()
    {
        echo "<p>PDO CONNECTION Wokeup</p>";
        $this->connect();
    }
}
$dsn = "mysql:host=localhost;dbname=emvc";
$dbuser = "root";
$dbpass = "password";
$connection = new Connection($dsn, $dbuser, $dbpass);
