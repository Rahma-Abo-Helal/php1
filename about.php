<?php
include('templet/header.php')
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="Save">
    </form>

    <?php
include('templet/footer.php')
?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo $_POST['email'] . "<br>";
    echo $_POST['password'] ;
}
echo "<br>";
setcookie('mode','dark mode',time()+3600*24);
function changemode(){

}
 ?> 
<?php if (isset($_COOKIE['mode'])&& $_COOKIE['mode']=='dark mode'){ ?>

<link rel="stylesheet" href="dark_mode.css">
<?php  }else { ?>
<link rel="stylesheet" href="light_mode.css">
<?php } ?>


 <button class="btn" onclick= 
 <?php if (isset($_COOKIE['mode'])&& $_COOKIE['mode']=='dark mode'){ ?>
?>
<link rel="stylesheet" href="dark_mode.css">
<?php  }else { ?>
<link rel="stylesheet" href="light_mode.css">
<?php } ?> change mode</button>
<div class="toggle"></div>
<script>
    const body=document.querySelector("body"),
toggle =document.querySelector(".toggle");

toggle.addEventListener("click",().=> toggle.classList.toggle("active"));
</script>