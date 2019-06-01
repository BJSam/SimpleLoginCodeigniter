<?php 
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Input Field Gradient Border Focus Fun</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <style>

.input {
  position: relative;
  font-size: 1.5em;
  background: linear-gradient(21deg, #e25111,#e25111);
  padding: 3px;
  display: inline-block;
  border-radius: 9999em;
}
.input *:not(span) {
  position: relative;
  display: inherit;
  border-radius: inherit;
  margin: 0;
  border: none;
  outline: none;
  padding: 0 .325em;
  z-index: 1;
}
.input *:not(span):focus + span {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.input span {
  -webkit-transform: scale(0.993, 0.94);
          transform: scale(0.993, 0.94);
  transition: opacity .25s, -webkit-transform .5s;
  transition: transform .5s, opacity .25s;
  transition: transform .5s, opacity .25s, -webkit-transform .5s;
  opacity: 0;
  position: absolute;
  z-index: 0;
  margin: 4px;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  border-radius: inherit;
  pointer-events: none;
  box-shadow: inset 0 0 0 3px #fff, 0 0 0 4px #fff, 3px -3px 30px #e25111,  -3px 3px 30px #e25111;
}



input {
  font-family: inherit;
  line-height: inherit;
  color: #2e3750;
  min-width: 12em;
}

::-webkit-input-placeholder {
  color: #cbd0d5;
}

:-ms-input-placeholder {
  color: #cbd0d5;
}

::-ms-input-placeholder {
  color: #cbd0d5;
}

::placeholder {
  color: #cbd0d5;
}

html::after {
  content: '';
  background: linear-gradient(21deg, #e25111, #1beabd);
  height: 3px;
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
}

.regbtn {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #5cbf2a));
	background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#5cbf2a',GradientType=0);
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Georgia;
	font-size:21px;
	padding:14px 19px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.regbtn:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;
}
.regbtn:active {
	position:relative;
	top:1px;
}




    </style>

  
</head>

<body>
<h5 align="center">
<font color="red"><?php echo validation_errors();?></font> 
</h5>
<form action="" method="POST" autocomplete="off"> 
  <h1 align="center">Registration</h1></br>
  
<p  align="center">
	<span class="input">
		<input type="text" name="user" placeholder="Enter Mail" autocomplete="off">
		<span></span>	
	</span>
</p></br>
<p  align="center">
    <span class="input">
      <input type="password" name="pass" placeholder="Enter Password" autocomplete="off">
      <span></span>	
    </span>
  </p></br>
  <p  align="center">
      <span class="input">
        <input type="password"  name="repass" placeholder="Re-Enter Password" autocomplete="off">
        <span></span>	
      </span>
    </p></br>
    <p align="center">
   <!-- <a href="#" name="regsub" onclick="document.forms[0].submit();return false;" class="regbtn">Register</a>
   --> 
        <input class="regbtn" type="submit" name="regsub" value="submit"/>
   </p>
  </form>

</body>

</html>
