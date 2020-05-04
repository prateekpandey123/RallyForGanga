// After form loads focus will go to User id field.
function firstfocus()
{
var uid = document.registration.userid.focus();
return true;
}

// This function will validate User id.
function userid_validation(mx,my)
{
var uid = document.registration.userid;
var uid_len = uid.value.length;
if (uid_len == 0 || uid_len >= my || uid_len < mx)
{
alert("User Id should not be empty / length be between "+mx+" to "+my);
uid.focus();
return false;
}
// Focus goes to next field i.e. Password.
document.registration.passid.focus();
return true;
}

// This function will validate Password.
function passid_validation(mx,my)
{
var passid = document.registration.passid;
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
// Focus goes to next field i.e. Name.
document.registration.username.focus();
return true;
}

// This function will validate Name.
function allLetter()
{ 
var uname = document.registration.username;
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
// Focus goes to next field i.e. Address.
document.registration.address.focus();
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}

// This function will validate Address.
function alphanumeric()
{ 
var uadd = document.registration.address;
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
// Focus goes to next field i.e. Country.
document.registration.country.focus();
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}

// This function will select country name.
function countryselect()
{
var ucountry = document.registration.country;
if(ucountry.value == "Default")
{
alert('Select your country from the list');
ucountry.focus();
return false;
}
else
{
// Focus goes to next field i.e. ZIP Code.
document.registration.zip.focus();
return true;
}
}

// This function will validate ZIP Code.
function allnumeric()
{ 
var uzip = document.registration.zip;
var numbers = /^[0-9]+$/;
if(uzip.value.match(numbers))
{
// Focus goes to next field i.e. email.
document.registration.email.focus();
return true;
}
else
{
alert('ZIP code must have numeric characters only');
uzip.focus();
return false;
}
}

// This function will validate Email.
function ValidateEmail()
{
var uemail = document.registration.email;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
document.registration.desc.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
} 