<html>
<head>
</head>
<body>
<?php
$youza = $_GET["user"]; 
$ki = $_GET["key"]; 
$youza .= $ki;
$kimjongun = hash('md5', $youza);
$og = hash('sha256', $kimjongun);
if( strpos(file_get_contents("../secretdirectory/users.txt"),$og) !== false) {
      echo 'Valid User';
   }
?>

</body>
</html>

