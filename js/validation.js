function validateuserName()
{
    var username=document.getElementById("username");
    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legaluserName=/^[A-Za-z0-9\.\s]+$/;
    var isValiduserName = legaluserName.test(username.value);
    
    if (isValiduserName == false)
        { 
            alert("The name you entered is not in the correct form. \n" +
            "The name contains alphabet characters and character space");
            username.focus(); 
        }
}
    

function validateEmail()
{
    var email=document.getElementById("email");
    var legalEmail=/^[A-Za-z0-9\-\.]+@([A-Za-z]+\.){1,3}[A-Za-z]{2,3}$/;
	//var legalEmail=/^(\w\.\-)@([A-Za-z]+\.){1,3}[A-Za-z]{2,3}$/
    var isValidEmail = legalEmail.test(email.value);
    
    if (isValidEmail == false)
      { 
        alert("The name you entered is not in the correct form. \n" +
                "The user name contains word characters including \"-\" and \".\" \n" +
                "The domain name contains 2 to 4 address extensions \n" +
                "Each extension characters and separated from others by \".\" \n" +
                "The last extension must have 2 to 3 characters");
        email.focus(); 
      }
}

function validatefirstName()
{
    var firstname=document.getElementById("firstname");
    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legalfirstName=/^[A-Za-z\.\s]+$/;
    var isValidfirstName = legalfirstName.test(firstname.value);
    
    if (isValidfirstName == false)
        { 
            alert("The name you entered is not in the correct form. \n" +
            "The name contains alphabet characters and character space");
            firstname.focus(); 
        }
}

function validatelastName()
{
    var lastname=document.getElementById("lastname");
    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legallastName=/^[A-Za-z\.\s]+$/;
    var isValidlastName = legallastName.test(lastname.value);
    
    if (isValidlastName == false)
        { 
            alert("The name you entered is not in the correct form. \n" +
            "The name contains alphabet characters and character space");
            lastname.focus(); 
        }
}

function validateaddress1()
{
    var address1=document.getElementById("address1");
    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legaladdress1=/^[A-Za-z0-9\.\s]+$/;
    var isValidaddress1 = legaladdress1.test(address1.value);
    
    if (isValidaddress1 == false)
        { 
            alert("The address you entered is not in the correct form. \n" +
            "The name contains alphabet characters, character space and numbers");
            address1.focus(); 
        }
}

function validateaddress2()
{
    var address2=document.getElementById("address2");
    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legaladdress2=/^[A-Za-z0-9\.\s]+$/;
    var isValidaddress2 = legaladdress2.test(address2.value);
    
    if (isValidaddress2 == false)
        { 
            alert("The address you entered is not in the correct form. \n" +
            "The name contains alphabet characters, character space and numbers");
            address2.focus(); 
        }
}

function validateCountryStateCity()
{
    var country=document.getElementById("country");
    var state=document.getElementById("state");
    var city=document.getElementById("city");

    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legalcountry=/^[A-Za-z\.\s]+$/;
    var isValidcountry = legalcountry.test(country.value);
    var legalstate=/^[A-Za-z\.\s]+$/;
    var isValidstate = legalstate.test(state.value);
	var legalcity=/^[A-Za-z\.\s]+$/;
    var isValidcity = legalcity.test(city.value);

    
    if (isValidcountry == false)
        { 
            alert("The country name you entered is not in the correct form. \n" +
            "The name contains alphabet characters");
            country.focus(); 
        }
    if (isValidstate == false)
        { 
            alert("The state name you entered is not in the correct form. \n" +
            "The name contains alphabet characters");
            state.focus(); 
        }
    if (isValidcity == false)
        { 
            alert("The city name you entered is not in the correct form. \n" +
            "The name contains alphabet characters");
            city.focus(); 
        }  
}


function validateZipcode()
{
    var zipcode=document.getElementById("zipcode");
    var legalzipcode=/^[0-9\-\.]+$/;
    var isValidzipcode = legalzipcode.test(zipcode.value);
    
    if (isValidzipcode == false)
      { 
        alert("The zipcode you entered is not in the correct form. \n" +
                "The zipcode contains numbers");
        zipcode.focus(); 
      }
}

function validatePhone()
{
    var phone=document.getElementById("phone");
    var legalphone=/^[0-9\-\.]+$/;
    var isValidphone = legalphone.test(phone.value);
    
    if (isValidphone == false)
      { 
        alert("The phone number you entered is not in the correct form. \n" +
                "The phone number contains numbers");
                phone.focus(); 
      }
}


function validateNameonCard()
{
    var nameoncard=document.getElementById("nameoncard");
    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legalnameoncard=/^[A-Za-z\.\s]+$/;
    var isValidnameoncard = legalnameoncard.test(nameoncard.value);
    
    if (isValidnameoncard == false)
        { 
            alert("The name you entered is not in the correct form. \n" +
            "The name contains alphabet characters and character space");
            nameoncard.focus(); 
        }
}


function validateCardnumber()
{
    var cardnumber=document.getElementById("cardnumber");
    var legalcardnumber=/^[0-9\-\.]+$/;
    var isValidcardnumber = legalcardnumber.test(cardnumber.value);
    
    if (isValidcardnumber == false)
      { 
        alert("The Card number you entered is not in the correct form. \n" +
                "The Card number contains numbers");
        cardnumber.focus(); 
      }
}



