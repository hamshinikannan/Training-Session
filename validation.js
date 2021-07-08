
    function validate(){
  var name = document.getElementById("name").value;
  var amount = document.getElementById("amount").value;
  var date = document.getElementById("date").value;
  var email = document.getElementById("email").value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 3){
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
        text = "Please Enter Date of Birth  as DD-MM-YYYY";
        error_message.innerHTML = text;
        return false;
    }
   
  if(email != /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length !=0){
    text = "Please share your thought";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}