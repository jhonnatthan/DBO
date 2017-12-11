<?php 

    namespace App\Models;
    use App\Banco;

    class User extends Banco{

        public static function selectAll($id = null) {

            self::connect();

            $table = "users";
            $fields = array("id", "name", "email", "gender", "birthdate");
            $where = !empty($id) ? array("id" => $id) : null;

            $users = self::select($table, $fields, $where, null, null, "name ASC");

            return $users;
        }

        public static function save($name, $email, $gender, $birthdate) {

            self::connect();

        }


        public static function updateUser($id, $name, $email, $gender, $birthdate) {

            self::connect();

        }


        public static function remove($id) {

            self::connect();

        }
    }
?>