function validate(){
    var name = document.getElementById("name").value;
    var amount = document.getElementById("amount").value;
    var date = document.getElementById("date").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
  
    error_message.style.padding = "10px";
  
    var text;
    if(name.length < 3 || !isNaN(name)){
        text = "Please Enter valid Name";
        error_message.innerHTML = text;
        return false;
    }
    if(amount.length<4){
        text = "Please Enter valid Amount";
        error_message.innerHTML = text;
        return false;
    }
    if (date == null || date == "" ) {
        text = "Please Enter Date of Birth ";
        error_message.innerHTML = text;
        return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6 || !(/\w+\d*@\w+.\w+/.test(email)) ){
        text = "Please Enter valid Email";
        error_message.innerHTML = text;
        return false;
    }
    if(message.length <= 10 || message.length ==0){
        text = "Please Enter More Than 10 Characters";
        error_message.innerHTML = text;
        return false;
    }
    alert("Form Submitted Successfully!");
    return true;
}