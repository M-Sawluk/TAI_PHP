<?php
    class User {
        private $name;
        private $secondName;
        private $email;
        private $telephone;
        private $address;
        private $roles;

        public function __construct($name, $secondName, $email, $telephone, $address, $roles) {
            $this->name = $name;
            $this->secondName = $secondName;
            $this->email = $email;
            $this->telephone = $telephone;
            $this->address = $address;
            $this->roles = $roles;
        }
        
        public function getName() {
            return $this->name;
        }

        public function getSecondName() {
            return $this->secondName;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getTelephone() {
            return $this->telephone;
        }

        public function getAddress() {
            return $this->address;
        }

        public function getRoles() {
            return $this->roles;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setSecondName($secondName) {
            $this->secondName = $secondName;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setTelephone($telephone) {
            $this->telephone = $telephone;
        }

        public function setAddress($address) {
            $this->address = $address;
        }

        public function setRoles($roles) {
            $this->roles = $roles;
        }
    }

