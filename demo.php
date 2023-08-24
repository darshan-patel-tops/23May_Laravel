<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors Game</title>
</head>
<body>
    <h1>Rock, Paper, Scissors Game</h1>
    <p>Choose your move: Rock, Paper, or Scissors.</p>

    <?php
    // Initialize variables
    $playerChoice = isset($_POST['choice']) ? $_POST['choice'] : '';
    $computerChoices = ['Rock', 'Paper', 'Scissors'];
    $computerChoice = $computerChoices[array_rand($computerChoices)];
    $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Determine the winner
        if ($playerChoice == $computerChoice) {
            $result = "It's a tie!";
        } elseif (
            ($playerChoice == 'Rock' && $computerChoice == 'Scissors') ||
            ($playerChoice == 'Paper' && $computerChoice == 'Rock') ||
            ($playerChoice == 'Scissors' && $computerChoice == 'Paper')
        ) {
            $result = "You win! $playerChoice beats $computerChoice.";
        } else {
            $result = "Computer wins! $computerChoice beats $playerChoice.";
        }
    }
    ?>

    <form method="post">
        <label>
            <input type="radio" name="choice" value="Rock" <?php if ($playerChoice == 'Rock') echo 'checked'; ?>> Rock
        </label>
        <label>
            <input type="radio" name="choice" value="Paper" <?php if ($playerChoice == 'Paper') echo 'checked'; ?>> Paper
        </label>
        <label>
            <input type="radio" name="choice" value="Scissors" <?php if ($playerChoice == 'Scissors') echo 'checked'; ?>> Scissors
        </label>
        <input type="submit" value="Play">
    </form>

    <p><?php echo $result; ?></p>
</body>
</html>
