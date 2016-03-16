<?php

include_once("adb.php");

class user extends adb {

    function user() {
        adb::adb();
    }

    /**
     * query all users in the table and store the dataset in $this->result	
     * @return if successful true else false
     */
    function getAllUsers() {
        $query = "select * from users";
        return $this->query($query);
    }

    /**
     * query all users in the table and store the dataset in $this->result	
     * @return if successful true else false
     */
    function getUserByEmail($email) {
        $query = "SELECT * from users where email = '$email'";
        return $this->query($query);
    }

    /**
     * query all users in the table and store the dataset in $this->result	
     * @return if successful true else false
     */
//    function getUserById($uId) {
//        $query = "SELECT * from users where userId = $uId";
//        return $this->query($query);
//    }
    
    function getUserById($uId) {
        $query = "SELECT * from users where userId = $uId";
        return $this->query($query);
    }

    function addIUser($sector, $fname, $lname, $phone, $email, $password) {
        //write the SQL query and call $this->query()
        $query = "INSERT INTO users set userType = 'Individual', sector = '$sector', firstName = '$fname', lastName = '$lname',  phone = '$phone', email = '$email', password = md5('$password')";
        return $this->query($query);
    }

    function addBUser($bname, $sector, $fname, $lname, $phone, $email, $password) {
        //write the SQL query and call $this->query()
        $query = "INSERT INTO users set userType = 'Business', businessName = '$bname', sector = '$sector', firstName = '$fname', lastName = '$lname', phone = '$phone', email = '$email', password = md5('$password')";
        return $this->query($query);
    }

    function loginInd($email, $password) {
        $query = "SELECT * FROM `users` WHERE email = '$email' AND password = md5($password)";
        return $this->query($query);
    }

    function loginBus($email, $password) {
        $query = "SELECT EXISTS (SELECT * FROM users WHERE email = '$email' AND password = '$password')";
        return $this->query($query);
    }
    function debtUpload($creditor, $debtor, $contact, $email, $currency, $amount, $maturityDate, $debtDescription, $supportingDocs){
        $query = "INSERT INTO debts set creditorId = '$creditor', debtorName = '$debtor', debtorPhone = '$contact', debtorEmail = '$email', currency = '$currency', amount ='$amount', maturityDate = '$maturityDate', summary = '$debtDescription', supportingDocs = '$supportingDocs'";
        return $this->query($query);
    }

    /*
     * updates the record identified by id 
     */
    function change_password($username, $newPassword) {
        //write the SQL query and call $this->query()
        $query = "update into users set pasword=$newPassword where username=$username";
        return $this->query($query);
    }

}

//call methods here to test
// $obj = new user();
// if(!$obj->getUserById(46)){
// 	echo "error";
// }
// $row =$obj->fetch();
// while($row){
// 	print_r($row);
// 	$row= $obj->fetch();
// }
?>