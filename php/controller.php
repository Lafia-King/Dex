<?php

//start session
session_start();
//check url for cmd
if (!isset($_REQUEST['cmd'])) {
    echo '{"result": 0, "message": "Unknown command"}';
    return;
}

$cmd = $_REQUEST['cmd'];

//cmd switch cases
switch ($cmd) {
    case 1:
        loginIndividual();
        break;
    case 2:
        logout();
        break;
    case 3:
        registerIndividual();
        break;
    case 4:
        registerBusiness();
        break;
    case 5:
        uploadDebt();
        break;
    case 6:
        displayDebt();
        break;
    case 7:
        dashboard();
        break;
    case 8:
        displayDebtInfo();
        break;
    case 9:
        displayBidInfo();
        break;
    case 10:
        displayBidHistory();
        break;
    case 11:
        placeBid();
        break;
    case 12:
        addToWatchList();
        break;
    default:
        echo '{"result": 0, "message": "Unknown command"}';
        return;
        break;
}

//login an individual user
function loginIndividual() {
    include "user.php";

    $user = new user();

    $email = $_GET['email'];
    $password = $_GET['password'];

    if (strlen($email))
        $user->loginInd($email, $password);
    $row = $user->fetch();

    if ($row) {

        $_SESSION['email'] = $email;
        $_SESSION['password'] = md5($password);
        $_SESSION['watchListIds'] = array();
        echo '{"result": 1, "message": "Login successful"}';
//        echo $_SESSION['email'];
        return;
    } else {
        echo '{"result": 0, "message": "Wrong details"}';
        return;
    }
}

//login a busienss user
function loginBusiness() {
    include "user.php";

    $user = new user();

    $email = $_GET['bEmail'];
    $password = $_GET['bPassword'];
    $user->loginBus($email, $password);
    $row = $user->fetch();

    if ($row) {
//        session_destroy();
//        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        echo '{"result": 1, "message": "Login successful"}';
        return;
    } else {
        echo '{"result": 0, "message": "Wrong details"}';
        return;
    }
}

//logout all users
function logout() {
    if (!$_SESSION['email']) {
        echo '{"result": 0, "message": "User not loged in"}';
        return;
    }
    session_destroy();
    echo '{"result": 1, "message": "Logged out successfully"}';
    return;
}

//register user as an individual
function registerIndividual() {
    include "user.php";

    $newUser = new user();

    $fname = $_GET['firstName'];
    $lname = $_GET['lastName'];
    $sector = $_GET['sector'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $row = $newUser->addIUser($sector, $fname, $lname, $phone, $email, $password);

    if (!$row) {
        echo '{"result": 0, "message": "User was not added"}';
        echo mysql_error();
        return;
    } else {
        echo '{"result": 1, "message": "User was added successfully"}';
        return;
    }
}

//register user as business
function registerBusiness() {
    include "user.php";

    $newUser = new user();

    $bname = $_GET['businessName'];
    $sector = $_GET['bSector'];
    $fname = $_GET['cFirstName'];
    $lname = $_GET['cLastName'];
    $phone = $_GET['bPhone'];
    $email = $_GET['bEmail'];
    $password = $_GET['bPassword'];
    $row = $newUser->addBUser($bname, $sector, $fname, $lname, $phone, $email, $password);

    if (!$row) {
        echo '{"result": 0, "message": "User was not added"}';
        return;
    } else {
        echo '{"result": 1, "message": "User was added successfully"}';
        return;
    }
}

//upload debt
function uploadDebt() {
    include "user.php";
    $user = new user();

    include "debts.php";
    $debt = new debts();

    $user->getUserByEmail($_SESSION['email']);
    $row = $user->fetch();

    $creditor = $row['userId'];
    $debtor = $_GET['debtorName'];
    $contact = $_GET['debtorPhone'];
    $email = $_GET['debtorEmail'];
    $currency = $_GET['currency'];
    $amount = $_GET['amount'];
    $maturityDate = $_GET['maturityDate'];
//    $maturityDate = date_format($_GET['maturityDate'], 'Y-m-d');
    $debtDescription = $_GET['summary'];
    $supportingDocs = $_GET['supportingDocs'];
    $row = $debt->debtUpload($creditor, $debtor, $contact, $email, $currency, $amount, $maturityDate, $debtDescription, $supportingDocs);

    if (!$row) {
        echo '{"result": 0, "message": "Debt was not uploaded"}';

        return;
    } else {
        echo '{"result": 1, "message": "Debt successfully uploaded"}';
        echo $creditor;
        return;
    }
}

//display debts
function displayDebt() {
    include "debts.php";
    $debt = new debts();

    $debt->displayAllDebts();
    $result = $debt->fetch();

    if (!$result) {
        echo '{"result": 0, "message": "Debt was not displayed"}';
        return;
    } else {
        echo'{"result":1, "debts": [';
        while ($result) {
            if ($result["userType"] == "Individual") {
                echo '{"creditorName": "' . $result["firstName"] . " " . $result["lastName"] . '", "debtorName": "' . $result["debtorName"] . '",'
                . '"currency": "' . $result["currency"] . '", "debtId": "' . $result["debtId"] . '", "amount": "' . $result["amount"] . '",'
                . '"maturityDate": "' . $result["maturityDate"] . '", "summary": "' . $result["summary"] . '"}';
            } else {
                echo '{"creditorName": "' . $result["businessName"] . '", "debtorName": "' . $result["debtorName"] . '",'
                . '"currency": "' . $result["currency"] . '", "debtId": "' . $result["debtId"] . '", "amount": "' . $result["amount"] . '",'
                . '"maturityDate": "' . $result["maturityDate"] . '", "summary": "' . $result["summary"] . '"}';
            }
            if ($result = $debt->fetch()) {
                echo ',';
            }
        }
        echo ']}';
    }
}

//dashboard summaries
function dashboard() {
    include "debts.php";
    $debt = new debts();

    include "user.php";
    $user = new user();

    $user->getUserByEmail($_SESSION['email']);
    $row = $user->fetch();

    $debt->displayDebts($row["userId"]);
    if (!$result = $debt->fetch()) {
        echo '{"result": 0, "message": "Debt was not displayed"}';
        return;
    } else {
        echo'{"result":1, "data": [';
        while ($result) {
            echo '{"Debtor": "' . $result["debtorName"] . '", "Currency": "' . $result["currency"] . '",
                "Amount": "' . $result["amount"] . '", "Date": "' . $result["dateCreated"] . '",
                "Due Date": "' . $result["maturityDate"] . '", "Status": "' . $result["debtStatus"] . '"}';
            if ($result = $debt->fetch()) {
                echo ',';
            }
        }
        echo ']}';
    }
}

//display info on a debt
function displayDebtInfo() {
    include "debts.php";
    $debt = new debts();

    if (isset($_REQUEST['debtId'])) {
        $debtId = $_GET['debtId'];

        $debt->getDebtById($debtId);
        $result = $debt->fetch();
//        print_r($result);
        if (!$result) {
            echo '{"result": 0, "message": "bid was not displayed"}';
            return;
        } else {
            echo'{"result":1, "bidData": [';
//            while ($result) {
            echo '{"creditorName": "' . $result["firstName"] . " " . $result["lastName"] . '", "Debtor": "' . $result["debtorName"] . '", "Currency": "' . $result["currency"] . '",
                "Amount": "' . $result["amount"] . '", "Description": "' . $result["summary"] . '",
                "dueDate": "' . $result["maturityDate"] . '", "Status": "' . $result["bidStatus"] . '"}';
//            if ($result = $bid->fetch()) {
//                echo ',';
//            }
//            }
            echo ']}';
//            header("location:../bid.php");
        }
    } else {
        echo '{"result": 2, "message": "No id was passed"}';
    }
}

//display info about a bid
function displayBidInfo() {
    include "bids.php";
    $bid = new bids();

    if (isset($_REQUEST['debtId'])) {
        $debtId = $_GET['debtId'];

        $bid->displayBidInfo($debtId);
        $result = $bid->fetch();
//        print_r($result);
//        echo $debtId;
        if (!$result) {
            echo '{"result": 0, "message": "bid was not displayed"}';
            return;
        } else {
            echo'{"result": 1, "bidInfo": [';
            echo '{"highestBid": "' . $result["highestBid"] . '", "numBids": "' . $result["numBids"] . '"}';
            echo ']}';
        }
    } else {
        echo '{"result": 2, "message": "No id was passed"}';
    }
}

//display bid history
function displayBidHistory() {
    include "bids.php";
    $bid = new bids();

    include "user.php";
    $user = new user();

    if (isset($_REQUEST['debtId'])) {
        $debtId = $_GET['debtId'];
//        echo $debtId;
        $bid->displayBidHistory($debtId);
        if ($result = $bid->fetch()) {

            $user->getUserById($result["bidderId"]);
            if ($row = $user->fetch()) {
//        print_r($result);

                if (!$result) {
//            http://stackoverflow.com/questions/3129374/how-to-prevent-this-error-warning-mysql-fetch-assoc-expects-parameter-1-to
//            throw new My_Db_Exception('Database error: ' . mysql_error());
//                    die(mysql_error());
                    echo '{"result": 0, "message": "Bid history was not displayed"}';
                    return;
                } else {
                    echo'{"result": 1, "bidHistory": [';
                    while ($result) {
                        echo '{"Date": "' . $result["date"] . '", "Bidder": "' . $row["firstName"] . " " . $row["lastName"] . '",
                    "Amount": "' . $result["amount"] . '", "Status": "' . $result["status"] . '"}';
                        echo ']}';

                        if ($result = $bid->fetch() AND $row = $user->fetch()) {
                            echo ',';
                        }
                    }
                }
            } else {
                echo '{"result": 4, "message": "No bid data on user"}';
            }
        } else {
            echo '{"result": 3, "message": "No bid data on debt"}';
        }
    } else {
        echo '{"result": 2, "message": "No id was passed"}';
    }
}

//record a placed bid
function placeBid() {
    include "user.php";
    $user = new user();

    include "bids.php";
    $newBid = new bids();

    if (isset($_REQUEST['debtId'])) {

        $user->getUserByEmail($_SESSION['email']);
        $result = $user->fetch();

        $bidder = $result['userId'];
        $debtId = $_GET['debtId'];
        $amount = $_GET['amount'];
        $row = $newBid->placeBid($bidder, $debtId, $amount);

        if (!$row) {
            echo '{"result": 0, "message": "Bid was not recorded"}';

            return;
        } else {
            echo '{"result": 1, "message": "Bid placed"}';
            return;
        }
    } else {
        echo '{"result": 2, "message": "No id was passed"}';
    }
}

//add items to watchlist
function addToWatchList() {
    if (isset($_REQUEST['debtId'])) {
        $debtId = $_GET["debtId"];

        if ($_SESSION['watchListIds'] != NULL) {
            $exists = FALSE;
            foreach ($_SESSION['watchListIds'] as $value) {
                if ($value == $debtId) {
                    $exists = TRUE;
                }
            }
            if ($exists) {
                echo '{"result": 0, "message": "Failed to add to watchlist; Duplicate"}';
                return;
            } else {
                array_push($_SESSION['watchListIds'], $debtId);
                echo '{"result": 1, "message": "Successfully added to watchlist"}';
                return;
            }
        } else {
            array_push($_SESSION['watchListIds'], $debtId);
            echo '{"result": 1, "message": "Successfully added to watchlist"}';
            return;
        }
    } else {
        echo '{"result": 2, "message": "No id was passed"}';
    }
}
