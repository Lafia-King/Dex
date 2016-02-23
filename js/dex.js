/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    if (objResult.result == 1) {
        alert("Success!!!");
        window.open("login.html", "_self");
        return;
    }
    else {
        alert("Failure!!!");
    }
}

//registerBusiness
function registerBusiness() {
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
    if (objResult.result == 1) {
        alert("Success!!!");
        window.open("login.html", "_self");
        return;
    }
    else {
        alert("Failure!!!");
    }
}

//login individual
function loginIndividual() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var url = "php/controller.php?" + "cmd=1&email=" + email + "&password=" + password;
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);
    prompt("tesing", objResult.result);
    if (objResult.result == 1) {
        alert("Successful login: Individual!!!");
        window.open("dashboard.html", "_self");
        return;
    }
    else {
        alert("Failed login!!!");
    }
}

//login business
//function loginBusiness(){
//    var email = document.getElementById('bEmail').value;
//    var password = document.getElementById('bPassowrd').value;
//    
//    var url = "php/controller.php?" + "cmd=5&bEmail=" + email + "&bPaassword=" + password;
//    prompt("before request", url);
//    var objResult = sendRequest(url);
//    prompt("after request", url);
//    
//    if(objResult.result == 1){
//        alert("Successfull login: Business!!!");
//        window.open("dashboard.html", "_self");
//        return;
//    }
//    else{
//        alert("Failed login!!!");
//    }
//}

function validate() {
    if (document.getElementById("firstName").value == "null") {
        alert("required field");
        document.getElementById("firstName").focus();
        return flase;
    }
    if (document.getElementById("lastName").value == " ") {
        alert("required field");
    }
    if (document.getElementById("sector").value == "sector") {
        alert("required field");
    }
    else if (document.getElementById("phone").value == "") {
        alert("required field");
    }
    else if (document.getElementById("email").value == "") {
        alert("required field");
    }
    else if (document.getElementById("password").value == "" || document.getElementById("confirmPassword").value == document.getElementById("password").value) {
        alert("required field");
    }
}

function uploadDebt() {
    var debtor = document.getElementById('debtorName').value;
    var phone = document.getElementById('debtorPhone').value;
    var email = document.getElementById('debtorEmail').value;
    var currency = document.getElementById('currency').value;
    var amount = document.getElementById('amount').value;
    var maturityDate = document.getElementById('maturityDate').value;
//    maturityDate.toLocaleDateString();

//    var $input = $('.datepicker').pickadate();
//
//// Use the picker object directly.
//    var maturityDate = $input.pickadate('picker');

    var description = document.getElementById('summary').value;
    var docDir = document.getElementById('supportingDocs').value;
    var url = "php/controller.php?" + "cmd=5&debtorName=" + debtor + "&debtorPhone=" + phone + "&debtorEmail=" + email + "&currency=" + currency + "&amount=" + amount + "&maturityDate=" + maturityDate + "&summary=" + description + "&supportingDocs=" + docDir;
    prompt("before request", url);
    var objResult = sendRequest(url);
    prompt("after request", url);
//    prompt("tesing", objResult.result);

    if (objResult.result == 1) {
        alert("Upload Successful!!!");
//        window.open("dashboard.html", "_self");
        return;
    }
    else {
        alert("Upload Failed!!!");
    }
}




function displayDebt() {
    'use strict';
//    var car = $("#cards");
    var card = "<div class='row' id='cards'>";
    var obj, index;
    var url = "php/controller.php?cmd=6";
    obj = sendRequest(url);

    if (obj.result === 1) {
        for (index in obj.debts) {
            card += '<div class="col s12 m6 l4">';
            card += '<div class="card">';
            card += '<div class="card-image waves-effect waves-block waves-light">';
            card += '<img class="activator" src="images/2.jpg" alt="office">';
            card += '</div>';
            card += '<div class="card-content">';
            card += '<a href="#"><b>' + obj.debts[index].creditorName + '<br><font color="red">' + obj.debts[index].debtorName + '</b></font></a>';
            card += '<a class="card-title activator grey-text text-darken-4 card_1"><i class="mdi-navigation-more-vert right"></i></a>';
            card += '<p><a href="#">Start Bidding</a></p>';
            card += '</div>';
            card += '<div class="card-reveal">';
            card += '<a class="card-title grey-text text-darken-4 card_1"> Creditor: ' + obj.debts[index].creditorName;
            card += '<i class="mdi-navigation-close right"></i></a>';
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
//    console.log(card);
    $("#cards").replaceWith(card);
}

function dashboard() {
    'use strict';
    
//    var obj, url = "php/controller.php?cmd=7";
    
     $('#example').DataTable( {
         processing : true,
        "ajax": {
        "url": "php/controller.php?cmd=7",
        "dataSrc": "data"
    },
        "columns": [
            { "data": "Debtor" },
            { "data": "Amount" },
            { "data": "Date" },
            { "data": "Due Date" },
            { "data": "Status" }
        ]
    } );
}
