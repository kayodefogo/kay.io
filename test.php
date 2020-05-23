<?php
include("connect.php")
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>  
<title>power portal</title>

<!--==============================Css =================================-->

 <link  href="stylepw.css" rel="stylesheet" type="text/css" />
 
</head> 
</ul>
        <div class="menu-row">
                	<nav>
                       

<body>
<div id="mainbody">
<img src="images/pk.jpg" alt="" />


<div id="nav" style="background:url(images/link.jpg)">
<div>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="register.php" title="Register">Register</a></li>
<li><a href="loginpage.php" title="Login">Login To Buy</a></li>
<li><a href="" title="FAQ">FAQ</a></li>
<li><a href="" title="Contact Us">Contact Us</a></li>
</ul>

</div>
</div>
			
				<!-- personal details -->
					<section id="pdetails" class="one">
						<div class="container">
                        
                        <header>
								<h2 class="Omotola">DETAILS</h2>
                            </header>  

<table width="100%" border="0" cellspacing="2" cellpadding="2">
 <!-- <tr>
    <td colspan="3" align="left"><strong></strong></td>
  </tr>-->
  
  
  <tr>
    <td align="left" bgcolor="#69b1ce">&nbsp;</td>
    <td align="left" bgcolor="#69b1ce">&nbsp;</td>
    <td align="left" bgcolor="#69b1ce">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><strong>Utility:</strong> <?php echo . $row['utility'];?></td>
    <td align="left"><strong>Meter Number:</strong> <?php echo strtoupper($info['Slga']); ?></td>
    <td align="left"><strong>Amount:</strong> <?php echo strtoupper($info['Sgender']); ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#69b1ce">&nbsp;</td>
    <td align="left" bgcolor="#69b1ce">&nbsp;</td>
    <td align="left" bgcolor="#69b1ce">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><strong>Phone Number:</strong> <?php echo strtoupper($info['Smstatus']); ?></td>
    <td align="left"><strong>Email: <?php echo $info['Sdob']; ?></td>
    <td align="left">&nbsp;</td>
  </tr>
  <td align="center"><div style="width:98%"><input type="submit" name="submit"  value="Buy" />
        </div> 
</td></tr>

	</body>
</html>