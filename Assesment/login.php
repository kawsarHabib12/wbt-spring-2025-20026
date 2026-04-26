<?php require_once "login_process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Welcome back</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <tr>
                    <td> Username <span class="required"></span></td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                        <div class="error"><?php echo $usernameErr; ?></div>
                    </td>
                </tr>
           <tr>
                    <td> Password <span class="required"></span></td>
                    <td>
                        <input type="password" name="password" value="<?php echo $password; ?>">
                        <div class="error"><?php echo $passwordErr; ?></div>
                    </td>
                </tr>
        <input type="submit" value="Login">
    </form>
     <?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        !$usernameErr &&  !$passwordErr): ?>
         <h2>Login Successful!</h2>
         <p>Welcome, <?php echo $username; ?>!</p>
         
     <?php endif; ?>
 
</body>
</html>