	function validateform(){  
			var name=document.myform.name.value;  
			var email=document.myform.email.value;
			var uname=document.myform.uname.value;
			var password=document.myform.password.value; 
			var CPass=document.myform.CPass.value;
	
			if (name==null || name==""){  
			  alert("Name can't be blank");  
			  return false;  
			}else if (email==null || email==""){  
			  alert("email can't be blank");  
			  return false;  
			}
			else if(password.length<6){  
			  alert("Password must be at least 6 characters long.");  
			  return false;  
			}  
			
		}
 
function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }
 function checkemail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("emailErr").innerHTML = "Email can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}
      }
function checkuname() {
			if (document.getElementById("uname").value == "") {
			  	document.getElementById("unameErr").innerHTML = "Username can't be blank";
			  	document.getElementById("unameErr").style.color = "red";
			  	document.getElementById("uname").style.borderColor = "red";
			}else{
			  	document.getElementById("unameErr").innerHTML = "";
				document.getElementById("uname").style.borderColor = "black";
			}
      }        
 function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}else if(document.getElementById("password").value.length<6){
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
			}
			else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("password").style.borderColor = "black";
			}
        }


function checkCPass(){
	var password=document.myform.password.value; 
	var CPass=document.myform.CPass.value;

        	if (document.getElementById("CPass").value == "") {
			  	document.getElementById("CPassErr").innerHTML = "Confrim Password can't be blank";
			  	document.getElementById("CPassErr").style.color = "red";
			  	document.getElementById("CPass").style.borderColor = "red";
			}else if( CPass != password ){
			  	document.getElementById("CPass").style.borderColor = "red";
			  	document.getElementById("CPassErr").style.color = "red";
				document.getElementById("CPassErr").innerHTML = " Password dont match.";
			}
			else{
				document.getElementById("CPassErr").innerHTML = "";
			  	document.getElementById("CPassErr").style.color = "red";
				document.getElementById("CPass").style.borderColor = "black";
			}
        } 
function en(){
        document.getElementById("btn").disabled = false;
        if (document.getElementById("name").value == "" || document.getElementById("email").value == ""|| document.getElementById("uname").value == ""|| document.getElementById("password").value.length<6 || document.getElementById("CPass").value.length<6) {
        document.getElementById("btn").disabled = true;
    }
}       