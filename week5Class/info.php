<?php
session_start();
if(isset($_SESSION["check"])){
    $uName=$_GET["uName"];
    $uPwd=$_GET["uPwd"];
    $uEmail=$_GET["uEmail"];
    $uColor=$_GET["uColor"];
    $uAge=$_GET["uAge"];
    $uBirth=$_GET["uBirth"];
    $uLike=$_GET["uLike"];
    $uSecret=$_GET["uSecret"];
    $uGender=$_GET["uGender"];
    $uInterest=$_GET["uInterest"];
    $uCity=$_GET["uCity"];
    $uComment=$_GET["uComment"];
    
    echo "Your name is:".$uName."<br>";
    echo "Your password is:".$uPwd."<br>";
    echo "Your Email is:".$uEmail."<br>";
    echo "Your Color is:".$uColor."<br>";
    echo "Your Birthday is:".$uBirth."<br>";
    echo "Your Age is:".$uAge."<br>";
    echo "Your like is:".$uLike."<br>";
    echo "Your Secret is:".$uSecret."<br>";
    echo "Your Gender is:".$uGender."<br>";
    echo "Your City is:".$uCity."<br>";
    // $j="";
    // foreach ($uInterest as $i){
    //     $j=$j.$i.",";
    // }
    // echo "Your Interests are:".$j."<br>";
    
    $x=count($uInterest);
    if($x==0){
    }else{
        for($i=0;$i<$x;$i++){
            if($i==$x-1){
                echo $uInterest[$i];
            }else{
                echo $uInterest[$i].",";
            }
        }
    }
    echo "<br>";
    echo "Your comments:".nl2br(htmlentities($uComment));
}else{
    echo "illegal user!";
    header("Refresh:2;url='login.php'");
}




?>