function phonenumber(inputtxt)
{
  var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  if(inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("Not a valid Phone Number");
        return false;
        }
}