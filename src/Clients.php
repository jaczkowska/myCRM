<?php

class Clients {

    private $id;
    private $name;
    private $secondName;
    private $lastName;
    private $email;
    private $phone;
    private $title;
    private $creationDate;
    private $dateOfFirstContact;
    private $flatId;
    private $sellerId;
    private $specificInformationId;

    public function __construct() {
        $this->id = -1;
        $this->name = "";
        $this->secondName = "";
        $this->lastName = "";
        $this->email = "";
        $this->phone = "";
        $this->title = "";
        $this->creationDate = "";
        $this->dateOfFirstContact = "";
        $this->flatId = "";
        $this->sellerId = "";
        $this->specificInformationId = "";
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSecondName() {
        return $this->secondName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function getTitle() {
        return $this->title;
    }

    function getDateOfFirstContact() {
        return $this->dateOfFirstContact;
    }

    function getFlatId() {
        return $this->flatId;
    }

    function getSellerId() {
        return $this->sellerId;
    }

    function getSpecificInformationId() {
        return $this->specificInformationId;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSecondName($secondName) {
        $this->secondName = $secondName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDateOfFirstContact($dateOfFirstContact) {
        $this->dateOfFirstContact = $dateOfFirstContact;
    }

    function setFlatId($flatId) {
        $this->flatId = $flatId;
    }

    function setSellerId($sellerId) {
        $this->sellerId = $sellerId;
    }

    function setSpecificInformationId($specificInformationId) {
        $this->specificInformationId = $specificInformationId;
    }

    function getCreationDate() {
        return $this->creationDate;
    }

    function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }

    // LOAD CLIENT BY ID //

    static public function loadClientsId(mysqli $connection, $id) {
        $db = "SELECT * FROM clients WHERE id=$id";
        $result = $connection->query($db);
        if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $loadClient = new Clients();
            $loadClient->id = $row['id'];
            $loadClient->name = $row['name'];
            $loadClient->secondName = $row['second_name'];
            $loadClient->lastName = $row['last_name'];
            $loadClient->email = $row['email'];
            $loadClient->phone = $row['phone'];
            $loadClient->title = $row['title'];
            $loadClient->creationDate = $row['creation_date'];
            $loadClient->dateOfFirstContact = $row['date_of_first_contact'];
            $loadClient->flatId = $row['flat_id'];
            $loadClient->sellerId = $row['seller_id'];
            $loadClient->specificInformationId = $row['specific_information_id'];
            return $loadClient;
        }
    }

    //LOAD ALL CLIENTS FROM DB
    static public function loadAllClients(mysqli $connection) {
        $db = "SELECT * FROM clients ORDER BY creation_date DESC";
        $result = $connection->query($db);

        $allClients = [];
        if ($result && $result->num_rows != 0) {
            foreach ($result as $row) {
                $loadClients = new Clients();
                $loadClients->id = $row['id'];
                $loadClients->name = $row['name'];
                $loadClients->secondName = $row['second_name'];
                $loadClients->lastName = $row['last_name'];
                $loadClients->email = $row['email'];
                $loadClients->phone = $row['phone'];
                $loadClients->title = $row['title'];
                $loadClients->creationDate = $row['creation_date'];
                $loadClients->dateOfFirstContact = $row['date_of_first_contact'];
                $loadClients->flatId = $row['flat_id'];
                $loadClients->sellerId = $row['seller_id'];
                $loadClients->specificInformationId = $row['specific_information_id'];
                $allClients[] = $loadClients;
            }
        }

        return $allClients;
    }

    // LOAD ALL CLIENTS FROM DB SELECTED BY FLAT ID//

    static public function loadAllClientsByFlatId(mysqli $connection, $flatId) {

        $db = "SELECT * FROM clients WHERE flat_id = $flatId ORDER BY creation_date DESC";
        $result = $connection->query($db);

        $allClients = [];
        if ($result && $result->num_rows != 0) {
            foreach ($result as $row) {
                $loadClients = new Clients();
                $loadClients->id = $row['id'];
                $loadClients->name = $row['name'];
                $loadClients->secondName = $row['second_name'];
                $loadClients->lastName = $row['last_name'];
                $loadClients->email = $row['email'];
                $loadClients->phone = $row['phone'];
                $loadClients->title = $row['title'];
                $loadClients->creationDate = $row['creation_date'];
                $loadClients->dateOfFirstContact = $row['date_of_first_contact'];
                $loadClients->flatId = $row['flat_id'];
                $loadClients->sellerId = $row['seller_id'];
                $loadClients->specificInformationId = $row['specific_information_id'];
                $allClients[] = $loadClients;
            }
        }

        return $allClients;
    }

    // ADD CLIENT TO DB //

    public function saveToDB(mysqli $connection) {

        if ($this->id == -1) {
            $db = "INSERT INTO clients(name, second_name, last_name, email, "
                    . "phone, title, creation_date, date_of_first_contact, "
                    . "flat_id, seller_id, specific_information_id) VALUES "
                    . "('$this->name', '$this->secondName', '$this->lastName', "
                    . "'$this->email', '$this->phone', '$this->title', "
                    . "'$this->creationDate', '$this->dateOfFirstContact',"
                    . "'$this->flatId', '$this->sellerId', '$this-> specificInformationId')";
            $result = $connection->query($db);
            if ($result) {
                $this->id = $connection->insert_id;
                return true;
            }
        }
        return false;
    }

    //EDIT CLIENT //

    public function editClient(mysqli $connection) {

        if ($this->id == -1) {
            $db = "UPDATE clients SET user_id=$this->username, text=$this->text, "
                    . "creation_date=$this->creationDate WHERE id=$this->id";
            $db = "UPDATE clients SET "
                    . "name=$this->name, "
                    . "second_name=$this->secondName, "
                    . "last_name=$this->lastName, "
                    . "email=$this->email, "
                    . "phone=$this->phone, "
                    . "title=$this->title, "
                    . "creation_date=$this->creationDate, "
                    . "date_of_first_contact=$this->dateOfFirstContact, "
                    . "flat_id=$this->flatId, "
                    . "seller_id=$this->sellerId, "
                    . "specific_information_id=$this->specificInformationId "
                    . "WHERE id=$this->id";
            $result = $connection->query($db);

            if ($result == true) {
                return true;
            }
            return false;
        }
    }

    // DELETE CLIENT FROM DB //

    public function deleteClient(mysqli $connection) {
        if ($this->id != -1) {
            $db = "DELETE FROM clients WHERE id=$this->id";
            $result = $connection->query($db);
            if ($result == true) {
                $this->id = -1;
                return true;
            }
            return false;
        }
        return true;
    }

}
