<?php
echo "
 <!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='icon' type='image/x-icon' href='icon.png'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<style>
body{ background-image:url('https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg'); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
</style>

</head>
<body>

<h1> You have created an account successfully :) !! </h1>
<h2>Click <a href='index.php'>here</a> to continue back to home</h2>

<svg width='100%' height='300px'>
<g id='R1' transform='translate(250 250)'> 
  <ellipse rx='100' ry='0' opacity='.5'>
  <animateTransform attributeName='transform' type='rotate' dur='7s' from='0' to='360' repeatCount='indefinite' />
  <animate attributeName='cx' dur='8s' values='-20; 220; -20' repeatCount='indefinite' />
  <animate attributeName='ry' dur='3s' values='10; 60; 10' repeatCount='indefinite' />
  </ellipse>
</g>
<use xlink:href='#R1' transform='rotate(72 390 150)' />
<use xlink:href='#R1' transform='rotate(144 390 150)' />
<use xlink:href='#R1' transform='rotate(216 390 150)' />
<use xlink:href='#R1' transform='rotate(288 390 150)' />
</svg>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>

";
?>