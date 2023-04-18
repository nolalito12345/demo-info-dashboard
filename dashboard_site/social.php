<!DOCTYPE html>
<html>

    <head>
        <title>Social</title>
        <link href="style.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>

    <body>

    <?php $lines = file("social.txt"); ?>


    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="social.php">Social</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>








            <img src="social_media_icons.jpg" usemap="#image-map" alt="Social Media Icons">

            <map name="image-map">
                <?php echo ('<area target="_blank" alt="Social_1" title="Social_1" href="' . $lines[0] . '" coords="57,56,54" shape="circle">'); ?>
                <?php echo ('<area target="_blank" alt="Social_2" title="Social_2" href="' . $lines[1] . '" coords="55,226,54" shape="circle">'); ?>
                <?php echo ('<area target="_blank" alt="Social_3" title="Social_3" href="' . $lines[2] . '" coords="229,58,54" shape="circle">'); ?>

            </map>

    </body>

</html>