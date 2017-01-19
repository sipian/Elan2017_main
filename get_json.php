<?php 


require 'connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$answer = array("elanejung"=>array() , "manthan"=>array() , "campus_princess"=>array() , 
                "breakfree"=>array() , "looseyourfeet"=>array() , "djwars"=>array() , 
                "nrityanjali"=>array() , "just_duet"=>array() , "vibrazione"=>array() , 
                "octaves"=>array() , "andaazapnapna"=>array() , "filmfarefiesta"=>array() , 
                "picelectic"=>array() , "nukkadnatak"=>array() , "lendmeurvoice"=>array() , 
                "nailart"=>array() , "mehendi"=>array() , "claymodelling"=>array() , 
                "facepainting"=>array() , "artexhibition"=>array() , "rjhunt"=>array() , 
                "mrdetective"=>array() , "jam"=>array() , "quizzes"=>array()  , "walk_the_ramp" =>array() );

    $sql = "SELECT * from users where registered_events <> ''";
   /* print_r($answer);
    echo "<br><br><br>";
    print_r($answer);*/

$result = mysqli_query($conn, $sql);
/*print_r($result);*/

if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $temp = explode(",",$row["registered_events"]);

        foreach($temp as $ans) {
            if(strlen($ans)>0 && strcmp($ans,"wheel_of_fortune") !=0)
                array_push($answer[$ans],$row["ID"]);
        }
    }
}
        echo json_encode($answer);


        /*$fp = fopen('elan.json', 'w');
        fwrite($fp, $js);
        fclose($fp);*/
 ?>
