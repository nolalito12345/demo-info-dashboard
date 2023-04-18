<!DOCTYPE html>
<html>

    <head>
        <title>Projects</title>
        <link href="style.css" rel="stylesheet">
        <style>
            ol {
                text-align: justify;
                list-style-type: lower-roman;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>

    <body>

    <?php $lines = file("projects.txt"); ?>

    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="social.php">Social</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>

        <h3 style="margin-left: 10px; margin-bottom: 0px;">Projects</h3>
        <ol reversed>
            <?php echo $lines[0]; ?>
        </ol>

    </body>

</html>