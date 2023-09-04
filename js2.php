<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1 id="check"></h1>

<div id="data">

</div>
<script>


let number = 5;
let number2 = 51;

console.log(number+number2);

console.log(number);

// document.getElementById("check").innerHTML = "${}number"
// document.getElementById("check").innerHTML = '${number}'
// document.getElementById("check").innerHTML = number
// document.getElementById("check").innerHTML = "the number is "+number
document.getElementById("check").innerHTML = `
the number is ${number}


""""""""''''''''''


`
function apicall()
{

    fetch("https://jsonplaceholder.typicode.com/comments").then((res)=>res.json()).then((Response)=>
    {
        var html = ""
        console.log(Response);
        console.log(Response[0].name);
       Response.forEach(data => 
        {
            html += `
                ${data.id}
                ${data.name}
            `
        });


        document.getElementById("data").innerHTML = html;
        console.log("after");
    })

}

apicall();


</script>


</body>
</html>