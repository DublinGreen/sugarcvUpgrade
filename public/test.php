<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "sugadwda_sugadwda", "!$!2KZW+hrg,", "sugadwda_esoftwaresugarcv");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt create table query execution
// $sql = "CREATE TABLE `firebase_notifications` ( 
// `id` INTEGER(255) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
// `userID` INTEGER(255) NOT NULL, 
// `type` enum('planSelection','dailyVideo', 'daysExceeded', 'newMember') default NULL, 
// `notification` text NULL, 
// `payloadUrl` varchar(255) NULL,  
// `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
// `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// ); ";


// if(mysqli_query($link, $sql)){
    // echo "Table created successfully.";
// } else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }



// $query = 'select * from `firebase_notifications` order by created_at desc';
// $query = 'select * from `wp_usermeta` where user_id=240';
// $query = "select * from `wp_users` where user_email='sales@essitco.com'";
$query = "select * from `users`;";
$results = mysqli_query($link, $query) or die('Query error: ' . mysqli_error());

while($row = mysqli_fetch_array($results)) {
	$row1[] = $row;
}
echo "<pre>";
print_r($row1);


 
// Close connection
mysqli_close($link);
?> 