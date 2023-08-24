<!DOCTYPE html>
<html>
<head>
    <title>Snake Game</title>
    <style>
        #game-board {
            width: 300px;
            height: 300px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Snake Game</h1>
    <div id="game-board"></div>
    <script>
        const gameBoard = document.getElementById('game-board');
        const gridSize = 10;
        let snake = [{ x: 10, y: 10 }];
        let food = { x: 5, y: 5 };
        let direction = 'right';
        let score = 0;

        function draw() {
            gameBoard.innerHTML = '';

            // Draw the snake
            snake.forEach(segment => {
                const snakeSegment = document.createElement('div');
                snakeSegment.style.gridColumn = segment.x;
                snakeSegment.style.gridRow = segment.y;
                snakeSegment.className = 'snake';
                gameBoard.appendChild(snakeSegment);
            });

            // Draw the food
            const foodElement = document.createElement('div');
            foodElement.style.gridColumn = food.x;
            foodElement.style.gridRow = food.y;
            foodElement.className = 'food';
            gameBoard.appendChild(foodElement);
        }

        function move() {
            let headX = snake[0].x;
            let headY = snake[0].y;

            // Update the head's position based on the direction
            if (direction === 'right') headX++;
            if (direction === 'left') headX--;
            if (direction === 'up') headY--;
            if (direction === 'down') headY++;

            // Check for collisions
            if (headX === food.x && headY === food.y) {
                // Snake ate the food, so grow and respawn the food
                score++;
                snake.unshift({ x: headX, y: headY });
                food = {
                    x: Math.floor(Math.random() * gridSize) + 1,
                    y: Math.floor(Math.random() * gridSize) + 1,
                };
            } else {
                // Move the snake by adding a new head and removing the tail
                snake.unshift({ x: headX, y: headY });
                snake.pop();
            }

            // Check for game over (collisions with walls or self)
            if (
                headX < 1 ||
                headX > gridSize ||
                headY < 1 ||
                headY > gridSize ||
                checkSelfCollision()
            ) {
                clearInterval(gameInterval);
                alert('Game over! Score: ' + score);
            }

            draw();
        }

        function checkSelfCollision() {
            // Check if the head collides with any part of the snake body
            for (let i = 1; i < snake.length; i++) {
                if (snake[i].x === snake[0].x && snake[i].y === snake[0].y) {
                    return true;
                }
            }
            return false;
        }

        // Handle key presses to change the direction
        document.addEventListener('keydown', event => {
            if (event.key === 'ArrowUp' && direction !== 'down') direction = 'up';
            if (event.key === 'ArrowDown' && direction !== 'up') direction = 'down';
            if (event.key === 'ArrowLeft' && direction !== 'right') direction = 'left';
            if (event.key === 'ArrowRight' && direction !== 'left') direction = 'right';
        });

        // Start the game loop
        const gameInterval = setInterval(move, 100);
    </script>
</body>
</html>
