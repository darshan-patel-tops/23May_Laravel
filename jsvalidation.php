<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="" method="post">

<input type="text" name="username"  id="username" placeholder="Enter Your username" onblur="checkusername()" required>
<input type="text" name="username"  id="username" placeholder="Enter Your username" onblur="checkusername()" required>
<input type="text" name="username"  id="username" placeholder="Enter Your username" onblur="checkusername()" required>
<input type="text" name="username"  id="username" placeholder="Enter Your username" onblur="checkusername()" required>
<input type="text" name="username"  id="username" placeholder="Enter Your username" onblur="checkusername()" required>
<input type="text" name="username"  id="username" placeholder="Enter Your username" onblur="checkusername()" required>
<span id="error" style="color:red;"></span>

<button>Submit</button>
</form>



<script>
function checkusername()
{
    // console.log(1);
    var username = "";
    username = document.getElementById("username").value;
    console.log(username);

    if(username == "")
    {
        document.getElementById("error").innerHTML = `Please fill this field`
    }
    else
    {
        
        document.getElementById("error").innerHTML = ""
    }


// document.write("Welcome to our lecture");
}






</script>






</body>
</html>