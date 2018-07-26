<?php
// Declare a simple class
class User
{
    public $userID;
    public $userName;

    public function __construct($userID, $userName)
    {
        $this->userID = $userID;
        $this->userName = $userName;
    }

    /**
     * @return string JSON formatted string of property key value pairs
     */
    public function __toString()
    {
        return "{ userID: $this->userID, userName: $this->userName }";
    }

    public function __get($name)
    {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }
}

$users = [];
$user = new User(1, "Michael");
$user2 = new User(2, "Marvin");
$users[]=$user;
$users[]=$user2;

foreach ($users as $u) :
    echo $u;?>
    </br>
<?php endforeach?>
