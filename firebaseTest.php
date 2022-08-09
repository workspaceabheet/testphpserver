
<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://xxxxxx.firebaseio.com/';
// --- Use your token from Firebase here
/*$token = 'xxxxxxxxxxxxxxx';*/
// --- Here is your parameter from the http GET
$arduino_data = $_GET['https://titanium9969-default-rtdb.firebaseio.com'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/rt.json';
/// --- Making calls
$fb = new fireBase($url);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);
