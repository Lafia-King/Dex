/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$.post( "ajax/test.html", function( data ) {
//  $( ".result" ).html( data );
//});

//Ajax Request
function sendRequest(url) {
// Send request to server
//u a url as a string
//async is type of request
    var obj = $.ajax({
        url: url,
        async: false
    });
    //Convert the JSON string to object
    var result = $.parseJSON(obj.responseText);
    return result; //return object
}

//registerIndividual
function registerIndividual() {
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var sector = document.getElementById('sector').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var url = "php/controller.php?" + "cmd=3&firstName=" + firstName + "&lastName=" + lastName + "&sector=" + sector + "&phone=" + phone + "&email=" + email + "&password=" + password;
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);
    if (objResult.result === 1) {
        alert("Success!!!");
        window.open("login.html", "_self");
        return;
    } else {
        alert("Failure!!!");
    }
}

//registerBusiness
function registerBusiness(e) {
    e.preventDefault();
    var businessName = document.getElementById('businessName').value;
    var sector = document.getElementById('bSector').value;
    var firstName = document.getElementById('cFirstName').value;
    var lastName = document.getElementById('cLastName').value;
    var phone = document.getElementById('bPhone').value;
    var email = document.getElementById('bEmail').value;
    var password = document.getElementById('bPassword').value;
    var url = "php/controller.php?" + "cmd=4&businessName=" + businessName + "&bSector=" + sector + "&cFirstName=" + firstName + "&cLastName=" + lastName + "&bPhone=" + phone + "&bEmail=" + email + "&bPassword=" + password;
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);
    if (objResult.result === 1) {
        alert("Success!!!");
//        window.open("login.html", "_self");
        window.location("login.html");
        return;
    } else {
        alert("Failure!!!");
    }
}

//login individual
function loginIndividual() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

//    if (email)
    var url = "php/controller.php?" + "cmd=1&email=" + email + "&password=" + password;
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);
    prompt("tesing", objResult.result);
    if (objResult.result === 1) {
        alert("Successful login: Individual!!!");
        window.open("dashboard.php", "_self");
        return;
    } else {
        alert("Failed login!!!");
    }
}

function validate() {
    if (document.getElementById("firstName").value == "") {
        alert("required field");
        document.getElementById("firstName").focus();
        return flase;
    }
    if (document.getElementById("lastName").value == " ") {
        alert("required field");
    }
    if (document.getElementById("sector").value == "sector") {
        alert("required field");
    } else if (document.getElementById("phone").value == "") {
        alert("required field");
    } else if (document.getElementById("email").value == "") {
        alert("required field");
    } else if (document.getElementById("password").value == "" || document.getElementById("confirmPassword").value == document.getElementById("password").value) {
        alert("required field");
    }
}

//upload debt
function uploadDebt() {
    var debtor = document.getElementById('debtorName').value;
    var phone = document.getElementById('debtorPhone').value;
    var email = document.getElementById('debtorEmail').value;
    var currency = document.getElementById('currency').value;
    var amount = document.getElementById('amount').value;
    var maturityDate = document.getElementById('maturityDate').value;
    var description = document.getElementById('summary').value;
    var dir = document.getElementById('supportingDocs').value;
    var supportingDocs = dir.replace("C:\\fakepath\\", "uploads/");

    prompt("suppo", supportingDocs);
    var url = "php/controller.php?" + "cmd=5&debtorName=" + debtor + "&debtorPhone=" + phone + "&debtorEmail=" + email + "&currency=" + currency + "&amount=" + amount + "&maturityDate=" + maturityDate + "&summary=" + description + "&supportingDocs=" + supportingDocs;
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);
//    prompt("tesing", objResult.result);

    if (objResult.result === 1) {
        alert("Upload Successful!!!");
//        window.open("dashboard.php", "_self");
        return;
    } else {
        alert("Upload Failed!!!");
    }
}

//display debts in cards
function displayDebt() {
    'use strict';
    var card = "<div class='row' id='cards'>";
    var obj, index;
    var url = "php/controller.php?cmd=6";
    obj = sendRequest(url);

    if (obj.result === 1) {
        for (index in obj.debts) {
            card += '<div class="col s12 m6 l4">';
            card += '<div class="hoverable card">';
            card += '<div class="card-image waves-effect waves-block waves-light">';
            card += '<img class="activator" src="images/2.jpg" alt="office">';
            card += '</div>';
            card += '<div class="card-content">';
            card += '<p  class="truncate"><a href="#"><b>' + obj.debts[index].creditorName + '<br><font color="red">' + obj.debts[index].debtorName + '</font></b></a></p>';
            card += '<a class="card-title activator grey-text text-darken-4 card_1"><i class="mdi-navigation-unfold-more right"></i></a>';
            card += '<a href="javascript:addToWatchList(' + obj.debts[index].debtId + ')" class="card-title tooltipped grey-text text-darken-4 card_1" data-position="left" data-delay="50" data-tooltip="I am tooltip"><i class="mdi-action-visibility right"></i></a>';
//            card += '<p><a href="bid.php?id=' + obj.debts[index].debtId + '">Start Bidding</a></p>';
//            card += '<p><a href="#" onclick="displayBid(' + obj.debts[index].debtId + ')">Start Bidding</a></p>';
//            card += '<p><a href="javascript:displayBid(' + obj.debts[index].debtId + ')">Start Bidding</a></p>';
            card += '<a href="bid.php?debtId=' + obj.debts[index].debtId + '">Start Bidding</a>';
            card += '</div>';
            card += '<div class="card-reveal">';
            card += '<a class="card-title grey-text text-darken-4 card_1"> Creditor: ' + obj.debts[index].creditorName;
            card += '<i class="mdi-navigation-unfold-less right"></i></a>';
            card += '<p id="cards"><b>Debtor: </b>' + obj.debts[index].debtorName;
            card += '<p><b>Amount: </b>' + obj.debts[index].currency + obj.debts[index].amount;
            card += '</p><p><b>Description: </b>' + obj.debts[index].summary;
            card += '</p><p><b>Maturity Date: </b>' + obj.debts[index].maturityDate + '</p></p>';
            card += '</div>';
            card += '</div>';
            card += '</div>';
        }
    }
    card += "</div>";
//    if variable holding items on page != 0{
    $("#cards").replaceWith(card);
//    else append
}

//display summary info on dashboard
function dashboard() {
    'use strict';
    $('#example').DataTable({
        processing: true,
        "ajax": {
            "url": "php/controller.php?cmd=7",
            "dataSrc": "data"
        },
        "columns": [
            {"data": "Debtor"},
            {"data": "Amount"},
            {"data": "Date"},
            {"data": "Due Date"},
            {"data": "Status"}
        ]
    });
}

//sources: http://www.jquerybyexample.net/2012/06/get-url-parameters-using-jquery.html
function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}

//display debt info on bid page
function displayDebtInfo() {
    'use strict';
    var debtCard = "<div id='info' class='row col s12 m12 l12'>";
    var obj;
    var url = "php/controller.php?" + "cmd=8&debtId=" + GetURLParameter("debtId");
    obj = sendRequest(url);

    if (obj.result === 1) {
        debtCard += '<div class="row col s12 m12 l6">';
        debtCard += '<p><img class=" responsive-img" src="images/1.jpg" alt="account picture"></p>';
        debtCard += '</div>';
        debtCard += '<div class="row col s12 m10 l6">';
        debtCard += '<h4><span>' + obj.bidData[0].creditorName + '</span></h4>';
        debtCard += '<p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>' + obj.bidData[0].Debtor + '</p>';
        debtCard += '<p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i>' + obj.bidData[0].Currency + obj.bidData[0].Amount + '</p>';
//        debtCard += '<p><i class="mdi-social-cake cyan-text text-darken-2"></i>' + obj.bidData[0].dueDate + '< /p>';
        debtCard += '<p>' + obj.bidData[0].Description + '</p>';
        debtCard += '<p><i class="mdi-content-flag cyan-text text-darken-2"></i>' + obj.bidData[0].dueDate + '</p>';
        debtCard += '</div>';
    }
    debtCard += "</div>";
    $("#info").replaceWith(debtCard);
}

//display info about bid
function displayBidInfo() {
    'use strict';
    var bid = "<div id='bidTab' class='col s12 m12 l12'>";
    var obj;
    var url = "php/controller.php?cmd=9&debtId=" + GetURLParameter("debtId");
    obj = sendRequest(url);

    if (obj.result === 1) {
//        for (index in obj.debts) {
        bid += '<div id="placeBid" class="row col s12 m6 l6">';
        bid += '<div class="row">';
        bid += '<div class="input-field col s6 m6 l3">';
        bid += '<label>Highest bid:</label>';
        bid += '</div>';
        bid += '<div class="input-field col s6 m6 l3">';
        bid += '<label>' + obj.bidInfo[0].highestBid + '</label>';
        bid += '</div>';
        bid += '</div>';
        bid += '<div class="row">';
        bid += '<div class="input-field col s6 m6 l3">';
        bid += '<label>Start Price</label>';
        bid += '</div>';
        bid += '<div class="input-field col s6 m6 l3">';
        bid += '<label>46,000</label>';
        bid += '</div>';
        bid += '</div>';
        bid += '<div class="row">';
        bid += '<div class="input-field col s6 m6 l3">';
        bid += '<label>No of Bids</label>';
        bid += '</div>';
        bid += '<div class="input-field col s6 m6 l3">';
        bid += '<label>' + obj.bidInfo[0].numBids + '</label>';
        bid += '</div>';
        bid += '</div>';
        bid += '</div>';
        bid += '<div class="col s12 m6 l6">';
        bid += '<div class="row">';
        bid += '<div class="col s12 m8 l6">';
        bid += '<input id = bidAmount placeholder="46,000" id="bidAmount" type="number" class="validate">';
        bid += '</div>';
        bid += '</div>';
        bid += '<div class="row">';
        bid += '<div class="col s6 m4 l3">';
        bid += '<button class="btn cyan waves-effect waves-light" onclick="placeBid()">Bid</button>';
        bid += '</div>';
        bid += '<div class="col s6 m4 l3">';
        bid += '<button class="btn cyan waves-effect waves-light" onclick="alert()">Buy</button>';
        bid += '</div>';
        bid += '</div>';
        bid += '</div>';
//        }
    }
    bid += "</div>";
    $("#bidTab").replaceWith(bid);
}


function ry() {
    $("#bidTab").css("display", "none");
//    document.getElementById(bidTab).style.display = "none";
//    driver.execute_script("document.getElementById(bidTab).style.display = 'none';")
}

function bidHistory() {
    'use strict';
    $('#historyTabs').DataTable({
        processing: true,
        "ajax": {
            "url": "php/controller.php?cmd=10&debtId=" + GetURLParameter("debtId"),
            "dataSrc": "bidHistory"
        },
        "columns": [
            {"data": "Date"},
            {"data": "Bidder"},
            {"data": "Amount"},
            {"data": "Status"}
//            {"data": "Status"}
        ]
    });
}

function placeBid() {
    var bidAmount = document.getElementById('bidAmount');

    var url = "php/controller.php?" + "cmd=9&amount=" + bidAmount;
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);

    if (objResult.result === 1) {
        alert("Bid placed");
//        window.open("dashboard.php", "_self");
        return;
    } else {
        alert("Failure, bid not recorded");
    }
}

function GenerateTable() {
    'use strict';
    var historyTable = '<div id="historyTables" class="col s12 m12 l12">';
    var obj, index;
    var url = "php/controller.php?cmd=10&debtId=" + GetURLParameter("debtId");
    obj = sendRequest(url);
    historyTable += '<table class="centered bordered responsive-table">';
    historyTable += '<thead>';
    historyTable += '<tr>';
    historyTable += '<th data-field="date">Date</th>';
    historyTable += '<th data-field="bidder">Bidder</th>';
    historyTable += '<th data-field="amount">Amount</th>';
    historyTable += '<th data-field="status">Staus</th>';
    historyTable += '</tr>';
    historyTable += '</thead>';
    historyTable += '<tbody>';
    if (obj.result === 1) {
        for (index in obj.bidHistory) {
            historyTable += '<tr>';
            historyTable += '<td>' + obj.bidHistory[index].Date + '</td>';
            historyTable += '<td>' + obj.bidHistory[index].Bidder + '</td>';
            historyTable += '<td>' + obj.bidHistory[index].Amount + '</td>';
            historyTable += '<td>' + obj.bidHistory[index].Status + '</td>';
            historyTable += '</tr>';
        }
    } else if (obj.result === 3 || obj.result === 4) {
        historyTable += '<tr>' + "No data" + '</tr>';
    }
    historyTable += '</tbody>';
    historyTable += '</table>';
    historyTable += "</div>";
    $("#historyTables").replaceWith(historyTable);
}

function addToWatchList(debtId) {
    var url = "php/controller.php?cmd=12&debtId=" + debtId;
    alert(url);
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);
    if (objResult.result === 1) {
        alert(debtId + " successfully added to watchlist");
//        prompt("")
        return;
    } else {
        alert("Failed to add " + debtId + " to watchlist");
    }
}