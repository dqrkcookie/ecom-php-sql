<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BRYLLE</title>
    <link rel="stylesheet" href="./style/output.css" />
  </head>
  <body class="font-serif">
    <div class="box w-1/6" id="login">
      <form class="p-6" action="../remote/login.php" method="POST">
        <label>Username</label>
        <input
          class="loginInput"
          type="text"
          placeholder="Enter username"
          name="user"
        />
        <label>Password</label>
        <input
          class="loginInput"
          type="password"
          placeholder="Enter password"
          name="pass"
        />
        <input
          class="button bg-sky-500 cursor-pointer"
          type="submit"
          value="Login"
          name="login"
        />
        <h1 class="mx-auto mt-2">No account yet? <span id="toRegister" class="cursor-pointer hover:text-blue-600 transition duration-100">Register here ></span></h1>
    </div>
      </form>

    <div class="box hidden w-1/6" id="register">
      <div class="flex justify-start m-2 hover:text-blue-600">
        <span class="m-1 cursor-pointer" id="toLogin">Back</span>
      </div>
      <form class="p-6" action="../remote/register.php" method="POST">
        <input
          class="loginInput"
          type="text"
          placeholder="Enter username"
          name="user"
        />
        <input
          class="loginInput"
          type="password"
          placeholder="Enter password"
          name="pass"
        />
        <input
          class="loginInput"
          type="password"
          placeholder="Confirm password"
          name="confirm_pass"
        />
        <input
          class="button bg-sky-500 cursor-pointer"
          type="submit"
          value="Register"
          name="register"
        />
      </form>
    </div>
    <script src="./js/index.js"></script>
  </body>
</html>
