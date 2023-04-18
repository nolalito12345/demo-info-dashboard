<!DOCTYPE html>
<html>

    <head>
        <title>Home</title>
        <link href="style.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>


    <body>

    <?php $lines = file("index.txt"); ?>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="social.php">Social</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>


        <img src="IMG_7231.JPG" alt="Photo of Noah"
            style="display: block; margin-left: auto; margin-right: auto; width: 18%; padding: 10px;">
        <div class="center" style="width: 70%; margin: auto;">
        <?php echo $lines[0]; ?>
    
        </div>


        <div style="margin: 20px;text-align: justify;">
        <?php echo $lines[1]; ?>
    </div>




    </body>

</html>