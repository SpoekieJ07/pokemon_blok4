
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login_process.php" method="post">
    <div class="form-group">
               <label for="email">email*</label>
               <input type="email" name="email_form" id="email" class="form-control" >
    </div>
      <div class="form-group">
            <label for="password">password*</label>
            <input type="password" name="wachtwoord_form" id="password" class="form-control" >
      </div>
      <button type="submit">login</button>

    </form>
</body>
</html>