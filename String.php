<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
</head>
<body>
<?php
echo strlen('This is my first string file');
echo '<br>';
echo strrev('This is my first string file');
echo '<br>';
echo str_replace("file","document",'This is my first string file');
echo '<br>';
echo str_repeat('This is a repeat function <br>', '4');
echo'<br>';
echo str_shuffle("This is my first string file");
echo '<br>';
echo str_word_count('This is mt first string file');
echo '<br>';
echo strcoll('This is my first string file today','Welcome to emobilis');
echo '<br>';
echo strlen('This is my first string file');
echo '<br>';
echo str_rot13('This is my first string file');
echo '<br>';
echo strcasecmp('This is my first string file','This is my first string file');
echo '<br>';
echo strcmp('This is my first string file', 'Welcome');


?>

</body>
</html>
