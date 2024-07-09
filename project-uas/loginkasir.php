<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
.container {
  max-width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-align: center;
}

h2 {
  margin-top: 0;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  box-sizing: border-box;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#message {
  color: red;
  margin-top: 10px;
}

</style>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id="login-form">
      <input type="text" id="username" placeholder="Username" required>
      <input type="password" id="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <p id="message"></p>
  </div>

  <script>
 document.getElementById("login-form").addEventListener("submit", function(event) {
  event.preventDefault();
  
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username === "shafira" && password === "220441100101") {
    window.location.href = "kasir.php";
  } else if (username === "adelia" && password === "220441100104") {
    window.location.href = "kasir.php";
  } else {
    document.getElementById("message").innerHTML = "Username atau password salah.";
  }
});


</script>
</body>
</html>
