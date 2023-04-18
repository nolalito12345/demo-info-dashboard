<!DOCTYPE html>
<html>

    <head>
        <title>Resume</title>
        <link href="style.css" rel="stylesheet">
        <!--<style>
            li {
                float: left;
                flex: 1 0 auto;

            }
        </style>-->
        <style>
            dl {
                margin: 20px;
                text-align: left;

            }

            ol {
                margin: 20px;
                text-align: left;

            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>

    <body>

    <?php $lines = file("resume.txt"); ?>

    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="social.php">Social</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>


        <dl>
            <dt>Education</dt>
            <?php echo $lines[0]; ?>
        </dl>
        <dl>
            <dt>Technical Skills</dt>
            <?php echo $lines[1]; ?>
        </dl>
        <strong>Awards & Recognition:</strong>
        <ol>
            <?php echo $lines[2]; ?>
        </ol>
        <strong>Professional Experience:</strong>
        <ol>
        <?php echo $lines[3]; ?>
        </ol>
        <strong>Referees:</strong>
        <ol>
            <?php echo $lines[4]; ?>
        </ol>
        <button style="margin: 20px;">Download Full CV</button>
    </body>

</html>