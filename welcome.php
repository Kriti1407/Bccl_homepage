<?php 
include('connectionup.php')
?>
<?php
session_start();
include ('connectionup.php');
if(empty($_SESSION['E_name']))
{
	header('location:index.php');
}
$session_name=$_SESSION['E_name'];
$sql="select * from fbccl where e_name='".$session_name."'";
$query=mysqli_query($con,$sql);
//$fetch=mysqli_num_rows($query);
$val=mysqli_fetch_row($query);
$e_id=$val[0];
$e_name=$val[1];
$e_address=$val[3];
$e_leave=$val[4];
$e_salary=$val[5];
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
		
		<link rel="stylesheet" type="text/css" href="stylecss.css"/>

</head>
<body>
<nav>
		<img src="bccllogo1-1.png"/>
		<ul>
		<li><a href="#">Home</a></li>
		<li><a href="login.php">Login</a></li>
	    <li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="logout.php">Logout</a></li>
	    </ul>
		</nav>
<br>

<br>
<br>
<table border="1" width="500" cellspacing="3" cellpadding="20" align="center">
           <tbody>
                <tr>
                    <td>
                        
                         <div class="info">
<ul><b>
<li><a href="#">Employee_id &nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="<?php echo $e_id;?>"></</a></li><label></label><br><br>
<li><a href="#">Employee_name &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_name;?>"></</a></li><br><br>
<li><a href="#">Employee_address &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_address;?>"></</a></li><br><br>
<li><a href="#">Employee_leave &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_leave;?>"></</a></li><br><br>
<li><a href="#">Employee_salary &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_salary;?>"></</a></li><br><br></b>
</ul>	
</div>
 
                   </td>
                </tr>
            </tbody>
        </table>
                             
                              
                      <!--      <br><br><br>
<div class="info">
<ul><b>
<li><a href="#">Employee_id &nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="<?php echo $e_id;?>"></</a></li><label></label><br><br>
<li><a href="#">Employee_name &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_name;?>"></</a></li><br><br>
<li><a href="#">Employee_address &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_address;?>"></</a></li><br><br>
<li><a href="#">Employee_leave &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_leave;?>"></</a></li><br><br>
<li><a href="#">Employee_salary &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $e_salary;?>"></</a></li><br><br></b>
</ul>	
</div>
-->
</body>
</html>