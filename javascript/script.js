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