

<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

 
	$serverName = "localhost"; 
	$userName = "root"; 
	$password = ""; 
	$dbName = "coffee"; 

	// create connection 
	$connect = mysqli_connect($serverName, $userName, $password, $dbName); 

	// check connection 
	if (!$connect) {
	 die("Connection failed: " . mysqli_connect_error()); 
	}
	// else{
	// 	echo "Connected";
	// }

    $sql = "INSERT INTO customer (name, email , phone) VALUES ('$name', '$email' , '$phone')"; 

    if (mysqli_query($connect, $sql)) { 
        echo " "; 
        } 
        else {
        echo "Could not add user. Error: " . mysqli_error($connect); 
        } 



    mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<style>
    body{
        background-color : black;
        color : white;
        display: flex;
        justify-content: center;
        align-items:center;
        height : 80vh;
    }
    li{
    list-style : none;
    }
    div{
        margin-top:20vh;
    }
</style>

<!-- <center> -->

<div>
<h1>Thank You For <span style = "color : #D3AD7F;">Booking</span></h1>
<ul><h2><span style = "color : #D3AD7F;">Here's </span> Your Booking info</h2>
<li><span style = "color : #D3AD7F;">Name</span>: <?php echo $name ?></li>
<li><span style = "color : #D3AD7F;">Email</span>: <?php echo $email ?></li>
<li><span style = "color : #D3AD7F;">Phone</span>: <?php echo $phone ?></li>
</ul>
</div>

<!-- </center> -->


</body>
</html>

<?php 


?>
