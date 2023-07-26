
<?php


// print_r($_REQUEST);


?>

<div class="container">
  <div class="card">
    <h2>Register Form</h2>
    <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      <label for="email">email</label>
      <input type="text" id="email" name="email" placeholder="Enter your email" required>
      <label for="mobile">mobile</label>
      <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Enter your password" required>

      <button type="submit" name="register_btn">Register</button>
    </form>
  </div>
</div>




<style>
    @import url('https://fonts.googleapis.com/css2?family=Agdasima&family=Poppins&display=swap');
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom right, #70c1ff, #498ffc);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }
  
  .card {
    width: 350px;
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    padding: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  
  h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    color: #fff;
    margin-bottom: 5px;
  }
  
  input {
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8);
  }
  
  button {
    padding: 10px;
    background-color: #fff;
    color: #498ffc;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #70c1ff;
  }
  
  @media (max-width: 480px) {
    .card {
      width: 100%;
      max-width: 350px;
    }
  }
  
</style>