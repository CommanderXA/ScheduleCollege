<?php
    class User extends Table {

        public $user_id = 0;
        public $lastname = '';
        public $firstname = '';
        public $patronomic = '';
        public $login = null;
        public $pass = null;
        public $gender_id = 0;
        public $birthday = null;
        public $role_id = 0;
        public $active = 1;

        public function validate() {
            return false;
        }
    }
?>