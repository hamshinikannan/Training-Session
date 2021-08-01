            function validate(){
                var IsValidEmail= validateEmail();
                var IsValidPassword = validatePassword();
                if(IsValidEmail && IsValidPassword){
                    return true;
                }
                return false;
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
                    error_message  = "Password should have atleast 8 characters";
                }
                password_error_message.innerHTML = error_message;

                return error_message == "" ? true : false;
            }
