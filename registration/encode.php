<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');
use \Firebase\JWT\JWT;

$key = "varyverysecrettokenithinkso";

$json = '{
  "user": {
    "_id": "5864195860d96d2fe331d7e7",
    "userid": 3,
    "email": "cs15btech11031@iith.ac.in",
    "password": "$2a$10$B/HXGbZDBjO0CuPIa53eWukK/CDpyvR9QjSaqILDx7kIJ5Hp/7oE2",
    "college": "iith",
    "phone": 9876543210,
    "verificationToken": "GJFRRLeKunKBlQSKWnS3tE0iZkxg1WKoleM6QSTBwRPaybtCG5NgV462J4a2ILKa",
    "__v": 0,
    "emailVerified": true,
    "canAccessKeystone": false,
    "name": {
      "first": "prateek",
      "last": ""
    }
  },
  "iat": 1482955096,
  "exp": 1982955996
}';
print_r(json_decode($json, true));
$r = json_decode($json, true);

echo "<br><br><br>";

$re = JWT :: encode($r, $key );


echo $re;


?>