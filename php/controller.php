<?php

session_start();
if (!isset($_REQUEST['cmd'])) {
    echo '{"result": 0, "message": "Unknown command"}';
    return;
}

$cmd = $_REQUEST['cmd'];

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
    $user->loginInd($email, $password);
    $row = $user->fetch();

    if ($row) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
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

function uploadDebt() {
    include "user.php";
    $user = new user();

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
    $row = $user->debtUpload($creditor, $debtor, $contact, $email, $currency, $amount, $maturityDate, $debtDescription, $supportingDocs);

    if (!$row) {
        echo '{"result": 0, "message": "Debt was not uploaded"}';

        return;
    } else {
        echo '{"result": 1, "message": "Debt successfully uploaded"}';
        echo $creditor;
        return;
    }
}

function displayDebt() {
    include "debts.php";
    $debt = new debts();

    $debt->displayAllDebts();
    $result = $debt->fetch();
//    print_r($result);
    if (!$result) {
        echo '{"result": 0, "message": "Debt was not displayed"}';
        return;
    } else {
        echo'{"result":1, "debts": [';
        while ($result) {
            if ($result["userType"] == "Individual") {
                echo '{"creditorName": "' . $result["firstName"] . " " . $result["lastName"] . '", "debtorName": "' . $result["debtorName"] . '",'
                . '"currency": "' . $result["currency"] . '", "amount": "' . $result["amount"] . '",'
                . '"maturityDate": "' . $result["maturityDate"] . '", "summary": "' . $result["summary"] . '"}';
            } else {
                echo '{"creditorName": "' . $result["businessName"] . '", "debtorName": "' . $result["debtorName"] . '",'
                . '"currency": "' . $result["currency"] . '", "amount": "' . $result["amount"] . '",'
                . '"maturityDate": "' . $result["maturityDate"] . '", "summary": "' . $result["summary"] . '"}';
            }
            if ($result = $debt->fetch()) {
                echo ',';
            }
        }
        echo ']}';
    }
}

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
