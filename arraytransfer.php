<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button id="transfer">Transfer Array</button>
    <p>First Array: <span id="first"></span></p>
    <p>Second Array: <span id="second"></span></p>


    <script>


const first = [];
const second = [1, 2, 3, 4, 5];
let index = 0; 
const transfer = document.getElementById("transfer");
const first_display = document.getElementById("first");
const second_display = document.getElementById("second");

transfer.addEventListener("click",() => 
    {
        if (index < second.length) 
        {
            const move = second[index];
            first.push(move);
            index++; 
            update();
        } 
        else 
        {
            alert("All Items have been transferred");
        }
    }
        );

    function update() 
    {
        first_display.innerHTML = first;
        second_display.innerHTML = second; 
    }

        update();


// const first = [];
// const second = [1, 2, 3, 4, 5];

// document.getElementById("transfer").addEventListener("click", 
//     function() 
//     {
//
//     if (second.length > 0) 
//     {
//         first.push(second.shift());
//         update();
//     } 
//     
//      else 
//      {
//          alert("Second array is empty!");
//      }
//
//     }
//  );

            //  function update() 
            // {
            //     document.getElementById("first").textContent = JSON.stringify(first);
            //     document.getElementById("second").textContent = JSON.stringify(second);
            // }

// update();




    </script>
</body>
</html>