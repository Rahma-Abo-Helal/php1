<?php
//$str ="rahma ahmed essa";
//$str2 =" commite web";
//$arr=array('one','two','three');
 //$arr =explode(" ",$str);

 //$assoc_arr=[
   // "name" => "amr",
    //"age"  =>  25,
 //];
//echo $assoc_arr["name"];  echo "</br>";
//foreach($assoc_arr as $key => $value){
   // echo "key is ".$key."value is ".$value."</br>" ;
//}
 //echo "string to array ";
 //var_dump(explode(" ",$str));
 //echo "</br>";
 //echo "array to srting ";
// var_dump(implode(" ",$arr));
 //echo "</br>";
 //echo "convert to uppercase ";
 //echo strtoupper($str);
 //echo "</br>";
 //echo "convert to lowercase ";
 //echo strtolower($str);
 //echo "</br>";
 //echo "string length ";
//echo strlen($str);
//echo "</br>";
 //echo "string repeat ";
//echo str_repeat($str,3);
 //echo "</br>";
 //echo "word count ";
 //echo str_word_count($str);
 //echo "<p style='color:red'>rahma ahmed essa</p>";
//echo $str.'  '.$str2;   echo "</br>";
//var_dump($arr);  echo "</br>";
//print_r($arr);

 //echo "string cmp ";
 //echo strcmp($str,$str2); 

 session_start();
 $response ="found";
 
 if ($response=="found"){
$_SESSION['email']="rahma.com";
$_SESSION['password']="112233";
 }

echo isset($response)."<br>";

if (isset($_SESSION['email'])){
    echo $_SESSION['email']. "<br>";
    echo "you are login";
}
setcookie('mode','dark mode',time()+3600*24);
 ?> 


 <button class="btn" onclick= 
 <?php if (isset($_COOKIE['mode'])&& $_COOKIE['mode']=='dark mode'){ ?>
?>
<link rel="stylesheet" href="dark_mode.css">
<?php  }else { ?>
<link rel="stylesheet" href="light_mode.css">
<?php } ?> change mode</button>

<script>

    
</script>