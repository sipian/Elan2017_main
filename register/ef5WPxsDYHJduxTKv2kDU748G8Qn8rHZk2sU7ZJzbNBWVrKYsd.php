
 <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" ss content="IE=edge">
          <meta name="viewport" content="width=device-width initial-scale=1">

     <title>
       Private
     </title>
   </head>
   <body >
       <div class="b">
       <h3 id="questionname">Add</h3>
       <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="answer" name="answer" id="answer" class="" placeholder = "enter query here" size="25"required/>
        <button id="loginButton" type="submit" class="ghost-button-thick-border"> SUBMIT </button>
     </form>

     </div>
   </body>

 </html>
 <?php

     require "connect.php";
     $conn = mysqli_connect($servername, $username, $password, $dbname);

     // Check connection
     if (!$conn)
       die("Connection failed: " . mysqli_connect_error());
     else{
       if($_SERVER["REQUEST_METHOD"] == "POST"){
         $sql = $_POST["answer"];
          if(stripos($sql,"select") !== false && stripos($sql,"insert") === false) {
           if(stripos($sql,"userDetails") !== false){

             if(stripos($sql,"select email,phone,college from userDetails;") !== false){
               if($result=mysqli_query($conn,$sql)){
               echo "email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;college<br><br><br>";
               while($row=mysqli_fetch_assoc($result)){
                 echo $row["email"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["phone"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["college"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
               }

             }else echo "error11";
             }

             else if(stripos($sql,"*") === false && stripos($sql,"email") !== false){
               if($result=mysqli_query($conn,$sql)){
               echo "email <br><br><br>";
               while($row=mysqli_fetch_assoc($result)){
                 echo $row["email"]."<br>";
               }

             }else echo "error0";
             }
             else if(stripos($sql,"*") === false && stripos($sql,"phone") !== false){
               if($result=mysqli_query($conn,$sql)){
               echo "contact <br><br><br>";
               while($row=mysqli_fetch_assoc($result)){
                 echo $row["phone"]."<br>";
               }

             }else echo "error-1";
             }
             else {
             if($result=mysqli_query($conn,$sql)){
               echo "username\temail\tphone\tcollege\tpassword\ttimeBegin\ttimeEnd\tquizCompleted\t<br>";

               while($row=mysqli_fetch_assoc($result)){
                 echo $row["username"]."\t".$row["email"]."\t".$row["phone"]."\t".$row["college"]."\t".$row["password"]."\t".$row["timeBegin"]."\t".$row["timeEnd"]."\t".$row["quizCompleted"]."\t<br>";
               }
             }else echo "error1";
           }
         }
         if(stripos($sql,"scoreTable") !== false){
           if($result=mysqli_query($conn,$sql)){
echo "username\tpoints\tcurrentTime\tsection1\tsection2\tsection3\tsection1question1Solved\tsection1question1Count\tsection2question1Solved\tsection2question1Count\tsection2question2Solved\tsection2question2Count\tsection2question3Solved\tsection2question3Count\tsection2question4Solved\tsection2question4Count\tsection2question5Solved\tsection2question5Count\tsection3question1Solved\tsection3question1Count\tsection3question1Time\tsection3question2Solved\tsection3question2Count\tsection3question2Time\tsection3question3Solved\tsection3question3Count\tsection3question3Time\tsection3question4Solved\tsection3question4Count\tsection3question4Time\tsection3question5Solved\tsection3question5Count\tsection3question5Time<br>";
             while($row=mysqli_fetch_assoc($result)){
 echo $row["username"]."\t".$row["points"]."\t".$row["currentTime"]."\t".$row["section1"]."\t".$row["section2"]."\t".$row["section3"]."\t".$row["section1question1Solved"]."\t".$row["section1question1Count"]."\t".$row["section2question1Solved"]."\t".$row["section2question1Count"]."\t".$row["section2question2Solved"]."\t".$row["section2question2Count"]."\t".$row["section2question3Solved"]."\t".$row["section2question3Count"]."\t".$row["section2question4Solved"]."\t".$row["section2question4Count"]."\t".$row["section2question5Solved"]."\t".$row["section2question5Count"]."\t".$row["section3question1Solved"]."\t".$row["section3question1Count"]."\t".$row["section3question1Time"]."\t".$row["section3question2Solved"]."\t".$row["section3question2Count"]."\t".$row["section3question2Time"]."\t".$row["section3question3Solved"]."\t".$row["section3question3Count"]."\t".$row["section3question3Time"]."\t".$row["section3question4Solved"]."\t".$row["section3question4Count"]."\t".$row["section3question4Time"]."\t".$row["section3question5Solved"]."\t".$row["section3question5Count"]."\t".$row["section3question5Time"]."\t<br>";
             }
           }else echo "error2";
       }
       if(stripos($sql,"result") !== false){
         if($result=mysqli_query($conn,$sql)){
echo "username\tpoints<br>";
           while($row=mysqli_fetch_assoc($result)){
echo $row["username"]."\t".$row["rank"]."<br>";
         }
       }else echo "error3";
     }

     }
         else if(mysqli_multi_query($conn,$sql))
           echo "success";
         else
           echo "failure2";
       }
 }
  $conn->close();
  ?>
