
<?php
require_once 'site.php';
// --- This is your Firebase URL
$url = 'https://titanium9969-default-rtdb.firebaseio.com/';
// --- Use your token from Firebase here
/*$token = 'xxxxxxxxxxxxxxx';*/
$token = 'FrR5M30YoQsL3ms82Ox5VxfkntfD7zeF5nFWzS8m';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url,$token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);
?>

<p>Hello World</p>
