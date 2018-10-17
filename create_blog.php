<?php
    print_r($_POST);
?>

<html>
<title>Create Blog</title>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label>Title: </label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label>Content: </label>
            <input type="content" id="content" name="content">
        </div>
        <div>
            <label for="msg">Message:</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>

        <div class="button">
            <button type = "submit" name = "Submit" value = "Submit">Add post</button>
        </div>
    </form>
</body>
</html>
