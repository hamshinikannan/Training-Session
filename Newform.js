
/*function validateName(){
    let userName=document.getElementById("txtUserName").value;
    if(userName==""){
        span.innerHTML="Enter Username";
     }else {
         if(!(/^[a-zA-Z. ]*$/.test(userName))){
        span.innerHTML= "Special characters are not allowed";
        }
    }
}
function validateEmail(){
    let email=document.getElementById("txtEmail").value;
    if(email==""){
        span.innerHTML = "Enter Email";
    }else{ 
        if(email.indexOf("@") == -1 || !(/\w+\d*@\w+.\w+/.test(email))){
            span.innerHTML = "Email is not valid";
        }
    }
}
function validateAmount(){
    let num=document.getElementById("txtnum").value;
    if(num ==""){
		span.innerHTML = "Enter the Donation Amount";
	}else{
        if(num.length<4){
		    span.innerHTML = "Amount must be in terms of 1000";
	    }
    }
}

function validateMessage(){
    let comments=document.getElementById("comments").value;
    if(comments ==""){
		span.innerHTML = "Enter the Comments";
	}else {
        if(comments.length<4){
			span.innerHTML = "Your comments please";
	    }
    }
}
function validateDate(){
    let date=document.getElementById("date");
    if(date ==""){
		span.innerHTML = "Enter the date";
	}
}

function validateType(){
    let rad=document.getElementsByName("donation");
	if (one.checked  || two.checked){
		onError5(one,"");
					
    }else{
		onError5(one,"Please Select the type of donation");
	}
}*/
/*-----------------------------------------------------------------------------------------*/
let userName=document.getElementById("txtUserName");
let email=document.getElementById("txtEmail");
let num=document.getElementById("txtnum");
let comments=document.getElementById("comments");
let date=document.getElementById("date");
let form=document.querySelector("form");
let rad=document.getElementsByName("donation");
let one=document.getElementById("1");
let two=document.getElementById("2");


function validateInput(){
    //check username is empty 
    if(userName.value.trim()===""){
       onError(userName,"User Name cannot be empty");
    }else{
		if(userName.value.length <3){
			onError(userName,"Invalid User Name");
		}
		else{
        onSuccess(userName);
		}
    }
    if(email.value.trim()===""){
        onError1(email,"Email cannot be empty");
    }else {
        if(email.value.indexOf("@") == -1 || email.value.length < 6 || !(/\w+\d*@\w+.\w+/.test(email.value))){
            onError1(email,"Email is not valid");
        }else{
            onSuccess(email);
        }
    }
	if(num.value.trim()===""){
		onError2(num,"Enter the Donation Amount");
	}else{
		if(num.value.length<4){
			onError2(num,"Amount must be in terms of 1000");
		}else{
			onSuccess(num);
		}

	}
	if(comments.value.trim() ===""){
		onError3(comments,"Enter the Comments");
	}else{
		if(comments.value.length<4){
			onError3(comments,"Your comments please");
		}else{
			onSuccess(comments);
		}
	}
	if(date.value.trim() ===""){
		onError4(date,"Enter the date");
	}else{
		onSuccess(date);
	}
	if (one.checked  || two.checked){
		onError5(one,"");
					
    }else{
		onError5(one,"Please Select the type of donation");
	}
    
	
	var group = document.getElementsByName("occ");
	for (var i=0; i<group.length; i++) {
		if (group[i].checked){
		break;
		}
	}
	if (i==group.length){
		onError6(one,"No Checkbox is checked");
		
	}else{
		onError6(one,"");
	}
	
   
}

document.querySelector("button")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput();
});

function onSuccess(input){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="hidden"; 
    parent.classList.remove("error");
    parent.classList.add("success");  
}
function onError(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="visible";
    document.getElementById('errorname').innerHTML=message;
    parent.classList.add("error");
    parent.classList.remove("success");

}
function onError1(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="visible";
    document.getElementById('errorname1').innerHTML=message;
    parent.classList.add("error");
    parent.classList.remove("success");

}function onError2(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="visible";
    document.getElementById('errorname2').innerHTML=message;
    parent.classList.add("error");
    parent.classList.remove("success");

}function onError3(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="visible";
    document.getElementById('errorname3').innerHTML=message;
    parent.classList.add("error");
    parent.classList.remove("success");

}function onError4(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="visible";
    document.getElementById('errorname4').innerHTML=message;
    parent.classList.add("error");
    parent.classList.remove("success");

}function onError5(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="visible";
    document.getElementById('errorname5').innerHTML=message;
    parent.classList.add("error");
    parent.classList.remove("success");

}function onError6(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("span");
    messageEle.style.visibility="visible";
    document.getElementById('errorname6').innerHTML=message;
    parent.classList.add("error");
    parent.classList.remove("success");

}
function Validate()
{
     var image =document.getElementById("image").value;
     if(image!='')
     {
           var checkimg = image.toLowerCase();
          if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG|\.mp4|\.MP4|\.flv|\.FLV|\.mkv|\.MKV)$/)){ // validation of file extension using regular expression before file upload
              document.getElementById("image").focus();
              document.getElementById("errorName5").innerHTML="Wrong file selected"; 
              return false;
           }
            var img = document.getElementById("image"); 
         
            if(img.files[0].size <  30000)  // validation according to file size
            {
            document.getElementById("errorName5").innerHTML="Image size too short";
            return false;
             }
             return true;
      }
    }