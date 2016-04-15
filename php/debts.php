<?php

/**
 * Description of debts
 *
 * @author Judah Lafia-King
 */
include_once("adb.php");

class debts extends adb {

    function debts() {
        adb::adb();
    }

    function getDebtById($debtId) {
        $query = "SELECT `users`.`firstName`, `users`.`lastName`, `debts`.`debtId`, `debts`.`debtorName`, `debts`.`currency`, `debts`.`amount`, `debts`.`maturityDate`, `debts`.`bidStatus`, `debts`.`dateCreated`, `debts`.`summary`
            FROM `debts`
            INNER JOIN `users`
            ON `debts`.`creditorId` = `users`.`userId`
            WHERE `debts`.`debtId` = $debtId";
        return $this->query($query);
    }

    function debtUpload($creditor, $debtor, $contact, $email, $currency, $amount, $maturityDate, $debtDescription, $supportingDocs) {
        $query = "INSERT INTO `debts`
                 SET `creditorId` = '$creditor',
                     `debtorName` = '$debtor',
                     `debtorPhone` = '$contact',
                     `debtorEmail` = '$email',
                     `currency` = '$currency',
                     `amount` ='$amount',
                     `maturityDate` = '$maturityDate',
                     `summary` = '$debtDescription',
                     `supportingDocs` = '$supportingDocs'";
        return $this->query($query);
    }

    function displayAllDebts() {
        $query = "Select `debtId`, `creditorId`, `firstName`, `lastName`, `userType`, `businessName`, `debtorName`, `currency`, `amount`, `maturityDate`, `debtStatus`, `debts`.`dateCreated`, `summary`
                 FROM `debts`
                 INNER JOIN `users`
                 ON `debts`.`creditorId` = `users`.`userId`
                 ORDER by `debtId` DESC";
//        print_r($query);
        return $this->query($query);
    }

    function displayDebts($user_id) {
        $query = "SELECT `debts`.`creditorId`, `users`.`firstName`, `users`.`lastName`, `users`.`userType`, `users`.`businessName`, `debts`.`debtId`, `debts`.`debtorName`, `debts`.`currency`, `debts`.`amount`, `debts`.`maturityDate`, `debts`.`debtStatus`, `debts`.`dateCreated`, `debts`.`summary` 
                FROM `debts`
                INNER JOIN `users` 
                ON `debts`.`creditorId` = `users`.`userId`
                WHERE `debts`.`creditorId` = `users`.`userId`
                AND `users`.`userId` = '$user_id'
                ORDER BY `debts`.`debtId` DESC";
//        print_r($query);
        return $this->query($query);
    }

}

////call methods here to test
// $obj = new debts();
//// if(!$obj->getUserByEmail("obed@nifty.com")){
//// 	echo "error";
//// }
// $obj->displayDebts();
// $row =$obj->fetch();
// while($row){
// 	print_r($row);
// 	$row= $obj->fetch();
// }