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
