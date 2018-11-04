function validateuserName()
{
    var username=document.getElementById("username");
    //var legalName=/(?=.*[A-Za-z])(?=.*\s)./;
	var legaluserName=/^[A-Za-z\.\s]+$/;
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
