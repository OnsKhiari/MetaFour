<?php 
include 'C:\xampp\htdocs\ONS\uwu\controller\login.php';
include 'C:\xampp\htdocs\ONS\uwu\model\users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    
    <form method="POST">
        
        name<input type="text" name="user_name">
        password<input type="password" name="user_pass">

        <input type="submit" value="login" name="submit">
        <br><br>
        <?php if(isset($error)){ echo '<p>'.$error.'</p>';} ?>
    </form>

    

</body>
</html>