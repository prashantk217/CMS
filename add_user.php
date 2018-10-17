<?php
    print_r($_POST);
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="header">
        <h2>Add New User</h2>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-group">
            <label>Name: </label>
            <input type="text" id="name" name="name">
        </div>
        <div class="input-group">
            <label>Password: </label>
            <input type="password" id="pass" name="pass">
        </div>
        <div class="input-group">
            <button type = "submit" name = "Submit" class = "btn">Add</button>
        </div>
    </form>
</body>
</html>
