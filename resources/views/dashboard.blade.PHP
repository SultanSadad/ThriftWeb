<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    nav {
      background-color: #253d8a;
      overflow: hidden;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-family: rozha, one;
      font-size: 25px;
      font-weight: 800;
    }

    nav a:hover {
      background-color: #223a89;
      color: black;
    }

    .search {
      display:
      align-items: center;
    }

    input[type="text"] {
      width: 500px;
      border-radius: 12px;
      margin-right: 450px;
      padding: 5px;
    }

    .login-button {
      background-color: #223a89;
      color: white;
      border: white;
      border-radius: 10px;
      padding: 8px 15px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-button:hover {
      background-color: #223a89;
    }

    .dashboard-content {
      margin: 20px;
      text-align: center;
    }

    hr {
      height: 3px;
      width: 80%;
      background-color: aliceblue;
    }
  </style>
</head>

<body>

  <nav>
    <div class="col-4">
      <a href="#" style="margin-left: 40px; margin-right: ;">Metamorphosis</a>
    </div>
    <div class="search">
      <input type="text" placeholder="Cari item" style="height: 15px;">
      <button class="login-button">Login</button>
      <button class="login-button">Register</button>
    </div>
  </nav>

  <div class="dashboard-content">
    <h1>Welcome to the Dashboard</h1>
    <p>Your dashboard content goes here.</p>
    <hr>
  </div>

</body>

</html>
