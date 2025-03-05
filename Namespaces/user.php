<?php
namespace App\Model;

class User
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    function get_name(){
        return $this->name;
    }
}
?>