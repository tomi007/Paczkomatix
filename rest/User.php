<?php
require_once './Interfaces/ActiveRecord.php';

class User implements ActiveRecord, JsonSerializable {

    private $id,$name, $surname, $address_id, $credits, $password;

    function __construct($id,$name, $surname, $address_id, $credits, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->adress_id = $adress_id;
        $this->credits = $credits;
        $this->password = $password;
    }

    static function load(PDO $database, $id)
    {
        $stmt = $database->prepare('SELECT * FROM User');
    }

    static function loadAll()
    {
        // TODO: Implement loadAll() method.
    }

    function save()
    {
        // TODO: Implement save() method.
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }

    public function getId()
    {
        return $this->id;
    }

    private function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getAddressId()
    {
        return $this->address_id;
    }

    public function setAddressId($address_id)
    {
        $this->address_id = $address_id;
    }

    public function getCredits()
    {
        return $this->credits;
    }

    public function setCredits($credits)
    {
        $this->credits = $credits;
    }

    public function getPassword()
    {
        return $this->password;
    }

    private function setPassword($password)
    {
        $this->password = $password;
    }
}
