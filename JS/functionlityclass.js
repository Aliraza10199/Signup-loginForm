

function check_pass() {
    var val = document.getElementById("exampleInputPassword").value;

    if (val.length < 6) {
        document.getElementById("message").innerHTML = "Password must be at least 6 characters in length and must contain at least one number";
        alert("Password incorrect");
        return false;
    }else{
    // Validate numbers
        if(val.search(/[0-9]/) == -1)
        {
            document.getElementById("message").innerHTML = "Password must be at least 6 characters in length and must contain at least one number";
            alert("atleast 1 number");
            return false;
        }
    }
}

// var myInput = document.getElementById("pas");
//     Form validation code will come here.
// function validate()
// {
//     if( document.myForm.first.value == "" )
//     {
//         alert("Please provide your name!");
//         document.myForm.first.focus();
//         return false;
//     }
//     return( true );
// }
