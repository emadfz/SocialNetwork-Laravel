
      <!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php
        $b = bcrypt('Aymann90');
        $m= md5('Aymann90');
        $e= encrypt('Aymann90');
              ?>


<p>{{$b}}</p><br>
<p>{{$m}}</p><br>
<p>{{$e}}</p><br>
</body>
</html>