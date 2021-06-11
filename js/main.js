function validateRegistrationForm(){
     this.preventDefault()
    let form = document.forms["registrationform"]

    let Firstname = form["fname"].value
    let Lastname=["lname"].value
    let email = form["email"].value
    let password = form["yourpassword"].value

    
     if(Firstname == ""){
        document.getElementById("fname").innerHTML="Enter Numeric value only".style.border = "1px solid red";
        document.getElementById("fnametext").style.display = "block";
        
    }else{
        document.getElementById("fname").style.border = "1px solid gray";
        document.getElementById("fnametext").style.display = "none";
        
    }

    if(Lastname == ""){
        document.getElementById("lname").innerHTML="Enter Numeric value only".style.border = "1px solid red";
        document.getElementById("lnametext").style.display = "block";
       
    }else{
        document.getElementById("lname").style.border = "1px solid gray";
        document.getElementById("lnametext").style.display = "none";
        
    }
}
    function validateemail()  
    {  
    var x=document.myform.email.value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
        return false; 
   }else{
        document.getElementById("email").style.border = "1px solid gray";
        document.getElementById("emailtext").style.display = "none";
       
    }
}

    if(password.length > 6){
        alert("password must be at least 6 charactters long");
        document.getElementById("yourpassword").style.border = "1px solid red";
        document.getElementById("passwordtext").style.display = "block";
        
    }else{
        document.getElementById("yourpassword").style.border = "1px solid gray";
        document.getElementById("passwordtext").style.display = "none";
        
    }

    if(Firstname == "" ||Lastname == "" || email == "" || password ==""){
        return false
    }else{
        return true
    }



    
   