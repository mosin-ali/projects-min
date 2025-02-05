$(document).ready(function() {
    function form() {
        var pw = $("#pw").val();
        var name = $("#name").val();
        var cpw = $("#cpw").val();
        var email=$("#email").val();

        if (name == null || name === "" ) 
            {
            alert("Please enter your name.");
            return false;
        } 
        else if (email == null || email === ""  ) 
            {
            alert("Please enter your email.");
            return false;
        } 
        
        else if (pw.length === 0) {
            alert("Please enter your password.");
            return false;
        } else if (pw.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        } 
        else if (pw !== cpw) 
				{
                    alert("Passwords do not match.");
                    return false;
					
                } 
        else {
            return true;
        }
    }
    
    $("form").submit(function(event) {
        if (!form()) {
            event.preventDefault(); 
        }
    });
});