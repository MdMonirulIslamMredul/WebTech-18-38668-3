        function validateform(){  
            var name=document.myform.name.value;  
            var password=document.myform.password.value;  
            var age=document.myform.age.value;  
              
            if (name==null || name==""){  
              alert("Name can't be blank");  
              return false;  
            }else if(password.length<6){  
              alert("Password must be at least 6 characters long.");  
              return false;  
            }  
            
        }
        function checkEmpty() {
            if (document.myform.name.value = "") {
                alert("Name can't be blank");
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
        
        function en(){
        document.getElementById("btn").disabled = false;
        if (document.getElementById("name").value == "" || document.getElementById("password").value.length<6 ) {
        document.getElementById("btn").disabled = true;
        }
}
