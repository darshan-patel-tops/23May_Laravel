<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button id="transferButton">Transfer Element</button>
    <p>First Array: <span id="firstArray"></span></p>
    <p>Second Array: <span id="secondArray"></span></p>


    <script>
const firstArray = [-1,-2,-3,-4,-5];
const secondArray = [1, 2, 3, 4, 5]; 

function transferElement() {
    if (secondArray.length > 0) {
        const transferredElement = secondArray.shift(); 
        firstArray.push(transferredElement); 
        updateArraysDisplay();
    } else {
        alert("Second array is empty!");
    }
}

function updateArraysDisplay() {
    document.getElementById("firstArray").textContent = JSON.stringify(firstArray);
    document.getElementById("secondArray").textContent = JSON.stringify(secondArray);
}

document.getElementById("transferButton").addEventListener("click", transferElement);

updateArraysDisplay();

    </script>
</body>
</html>