<?php

class Clients {

    private $id;
    private $name;
    private $secondName;
    private $lastName;
    private $email;
    private $phone;
    private $title;
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
        $this->dateOfFirstContact = "";
        
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

    
    // SHOW LIST OF ALL CLIENTS //
    
    
    
}
