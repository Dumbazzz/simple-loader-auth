<html>
<head>
  <title></title>
</head>
<body>
<?php
$youza = $_GET["user"]; 
$ki = $_GET["key"]; 
$youza .= $ki;
//I reccomened changing both encryption methods and/or adding more if you'd like.
$kimjongun = hash('md5', $youza);
$og = hash('sha256', $kimjongun);
echo $og;
?>

</body>
</html>
            
