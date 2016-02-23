<?php
/**
 * Description of debts
 *
 * @author Judah Lafia-King
 */

include_once("adb.php");

class debts extends adb {
    
    function debts(){
        adb::adb();
    }
    
    function displayAllDebts(){
        $query = "Select creditorId, firstName, lastName, userType, businessName, debtorName, currency, amount, maturityDate, debtStatus, debts.dateCreated, summary from debts INNER JOIN users on debts.creditorId = users.userId order by debtId DESC";
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