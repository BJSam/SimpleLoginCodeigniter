<?php 

?>
<html>
<head>
    <title>profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
    <style>
     
    </style>

</head>
<body>
<h1 align="center"> <?php echo "welcome ".$_SESSION['user_mail']; ?></h1>
<center>
<form   action="profile" method="POST">
<input  type="submit" value="logout" name="logout"/>
</form>
<form action="search"  method="POST">
      <input style="border:2px solid #ff0000;border-radius:10px; padding: 5px;" type="text" name="sword"  placeholder="What are you looking for?">
     <!-- <button name="ssubmit" value="ssubmit" style="border-radius:10px;padding: 5px; color:#fff;background-color:#ff0000" type="submit" >
        <i class="fa fa-search"></i>
     </button>-->
     <input type="submit" name="ssearch" style="border-radius:10px;padding: 5px; color:#fff;background-color:#ff0000" value="Search"/>
</form>
</center>
</body>
</html>