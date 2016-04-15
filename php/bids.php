<?php

/**
 * Description of bids
 *
 * @author Judah Lafia-King
 */
include_once("adb.php");

class bids extends adb {

    function bids() {
        adb::adb();
    }

    function placeBid($bidder, $debtId, $amount) {
        $query = "INSERT into `bids`
                  SET `bidderId` = $bidder,
                      `debtId` = $debtId,
                      `amount` = $amount";
        return $this->query($query);
    }

    function displayBidHistory($debtId) {
        $query = "SELECT `date`,
                         `bidderId`,
                         `amount`,
                         `status`
                  FROM `bids`
                  WHERE `debtId` = $debtId
                  ORDER by `date` DESC
                  LIMIT 5";
//        echo $query;
        return $this->query($query);
    }

    function displayBidInfo($debtId) {
        $query = "SELECT MAX(`amount`) AS highestBid,
                  COUNT(`debtId`) AS numBids
                  FROM `bids`
                  WHERE `debtId` = $debtId";
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