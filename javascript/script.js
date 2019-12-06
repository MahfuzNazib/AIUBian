function RegistrationCompleteMessage()
{
    alert("Successfully Registered");
}

function checkMessage()
{
    //alert("Check Message Called");
    var receiver_mail = document.getElementById('receiver_mail').value;
    var message = document.getElementById('message').value;

    if(receiver_mail == "")
    {
        alert("Please Enter a Valid Email Address");
    }
    else
    {
        if(message == "")
        {
            alert("Type Something and try again !");
        }
        else
        {
            alert("Message send successfully Done");
        }
    }
    

}


function adminDataValidation()
{
    //Flag Variable

    var Name = null;
    var Email = null;
    var Phone = null;
    var Username = null;
    var Password = null;

    //Get Value from HTML Page
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var regexName = /^[a-zA-Z]/;
	var isValidName = regexName.test(name);

	var regexEmail = /[a-z]?[0-9]+@+[a-z]+.com|.org|.edu/;
    var isValidEmail = regexEmail.test(email);
    
    //Name Validation

    if(name == "")
    {
        document.getElementById('msgName').innerHTML = "Empty Name";
        Name = "Error";
    }
    else
    {
        if(isValidName)
        {
            Name = null;
        }
        else
        {
            document.getElementById('msgName').innerHTML = "Name start with Letter";
            Name = "Error";
        }
    }

    //Email Validation

    if(email == "")
    {
        document.getElementById('msgEmail').innerHTML = "Empty Email Address";
        Email = "Error";
    }
    else
    {
        if(isValidEmail)
        {
            Email = null;
        }
        else
        {
            document.getElementById('msgEmail').innerHTML = "Invalid Email Address";
            Email = "Error";
        }
    }

    //Phone Validation
    if(phone == "")
    {
        document.getElementById('msgPhone').innerHTML = "Empty Phone";
        Phone = "Error";
    }
    else
    {
        Phone = null;
    }

    //Username Validation

    if(username == "")
    {
        document.getElementById('msgUserName').innerHTML = "Empty Username";
        Username = "Error";
    }
    else
    {
        if(username.length > 5)
        {
            Username = null;
        }
        else
        {
            document.getElementById('msgUserName').innerHTML = "Username Must be greater then 5 char";
            Username = "Error";
        }
    }

    //Password Validation

    if(password == "")
    {
        document.getElementById('msgPassword').innerHTML = "Empty Password";
        Password = "Error";
    }
    else
    {
        if(password.length >= 4)
        {
            Password = null;
        }
        else
        {
            document.getElementById('msgPassword').innerHTML = "Password Must be Greater the 4 char";
            Password = "Error";
        }
    }

    if(Name == null && Email == null && Phone == null && Username == null && Password == null)
    {
        //Pass the data in another php from through AJAX Request

        var Fullname = document.getElementById('name').value;
        var usermail = document.getElementById('email').value;
        var UserPhone = document.getElementById('phone').value;
        var Username = document.getElementById('username').value;
        var Password = document.getElementById('password').value;
        
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST","../php/AdminRegistrationCheck.php",true);
        xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhttp.send("Name="+Fullname+"&Email="+usermail+"&Phone="+UserPhone+"&Username="+Username+"&Password="+Password);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200)
            {
                alert(this.responseText);
            }
        };
    }
    else
    {
        alert('Something Went wrong.Try again Later.');
    }
    

}