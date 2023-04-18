<!DOCTYPE html>
<html>

    <head>
        <title>Admin</title>
        <link href="style.css" rel="stylesheet">
        <style>
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="assign3.js" type="text/javascript"></script>
    </head>

    <body>

    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="social.php">Social</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>

        <div class="container">
            <input type="text" placeholder="Username" id="username"/>
            <input type="password" placeholder="Password" id="password"/>
            <input type="submit" value="Login" onclick="processLogin()" />
        </div>

    </body>

</html>