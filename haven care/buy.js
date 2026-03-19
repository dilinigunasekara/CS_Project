
function validateForm(){

var contact = document.getElementById("contact").value;
var fname = document.getElementById("fname").value;
var lname = document.getElementById("lname").value;
var address = document.getElementById("address").value;

if(contact == ""){
alert("Please enter email or phone number");
return false;
}

if(fname == ""){
alert("Please enter first name");
return false;
}

if(lname == ""){
alert("Please enter last name");
return false;
}

if(address == ""){
alert("Please enter address");
return false;
}

alert("Order confirmed successfully!");
return true;

}

