function validate(){
    var IsValidName = validateName();
    var IsValidEmail= validateEmail();
    var IsValidPassword = validatePassword();
    var IsValidCPassword = validateCPassword();
    var IsValidFile = validateFile();
    if( IsValidName && IsValidEmail && IsValidPassword && IsValidCPassword && IsValidFile){
        return true;
    }
    return false;
}

function validateName(){
    var name = document.getElementById("txtUserName").value;
    var error_message = "";

    if(name == ""){
        error_message = "Please enter the name";
    }else if(!(/^[a-zA-Z-' ]*$/.test(name))){
        error_message = "Only letters and white space allowed"
    }
    name_error_message.innerHTML = error_message;

    return error_message == "" ? true : false;
}

function validateEmail(){
    let email=document.getElementById("txtEmail").value;
    var error_message = "";

    if(email == ""){
        error_message = "Please enter the email";
    }else if(email.indexOf("@") == -1 || !(/\w+\d*@\w+.\w+/.test(email))){
        error_message = "Please enter the valid email"
    }
    email_error_message.innerHTML = error_message;

    return error_message == "" ? true : false;
}

function validatePassword(){
    let password = document.getElementById("txtpassword").value;
    var error_message = "";

    if(password ==""){
        error_message = "Please enter the password";
    } else if (password.length < 8){
        error_message  = "Password should have atleast 8 characters"
    }
    password_error_message.innerHTML = error_message;

    return error_message == "" ? true : false;
}

function validateCPassword(){
    let cpassword = document.getElementById("txtcpassword").value;
    let password = document.getElementById("txtpassword").value;
    var error_message = "";

    if(cpassword ==""){
        error_message = "Please enter the confirm password";
    }else if(cpassword != password){
        error_message = "Password doesnot match";
    }
    cpassword_error_message.innerHTML = error_message;

    return error_message == "" ? true : false;
}

function validateFile(){
    var fileupload = document.getElementById('filename');
    var file = fileupload.value;
    var error_message = "";
    var ext = file.substring(file.lastIndexOf('.') + 1);
    if(ext == ""){
        error_message = "Please upload the file"
    }
    else if(ext != "pdf"){
        error_message = "Only pdf file is allowed";
    }
    fileupload_error_message.innerHTML = error_message;

    return error_message == "" ? true : false;
}





