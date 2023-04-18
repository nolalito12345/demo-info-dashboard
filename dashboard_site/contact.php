<!DOCTYPE html>
<html>

    <head>
        <title>Contact</title>
        <link href="style.css" rel="stylesheet">
        <style>
            label {
                margin: 10px;
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

        <form action="#">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone">
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <br>
            <input type="submit" value="Submit" onclick="submitContactMsg()">
        </form>


    </body>

</html>