<!DOCTYPE html>
<html> 
<head>
<style>
.header{
	height:80px;
	width:98%;
	position:fixed;
	border:2px solid red;
	font-size:12px;
	color:red;
	}
	.tab{
	top:150px;
	left:350px;
	width: 65%;
	height:50%;
	position: fixed;
	color:red;
	font-size:24px;
	border:10px solid white;
}
.cell{
background-color: rgb(192,192,192);
}

.menu{
	top:90px;
	height:84%;
	width:17%;
	position:fixed;
border:2px solid red;
}
.menucell{
	background-color: rgb(192,192,192);
	color:black;
	width:17%;
	height:50px;
}

</style>
	</style>
 </head>
	<body> 
	
	<div class="header">
	<table>
	<tr><td><img id="element1" src="logo.png" height="50px" width="50px"></td>
        <td><b>Sheccha<br>Blood<br>Bank</b></td>
	    <td align="right"><img id="element2" src="settings.png" height="20px" width="20px"><a href="admin_settings.php"></a>
			              <img id="element3" src="logout.png" height="20px" width="20px"><a href="admin_logout.php"></a></td></tr></table></div>
	
	<div class="menu">
	<table>
	<tr align="center"><td class="menucell"><b><a href="admin_reqApproval.php">Request Approval</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="admin_donorInfo.php">Donor Info</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="admin_messeges.php">Messeges</a></b></td></tr>
	</table>
	</div>
	
<table class="tab">
<tr ><td align="center" colspan="8"> <b> Available Blood </b></td></tr>
<tr class="cell"><td  align="center"> A+<br>-- bag</td>
<td  align="center"> A-<br>-- bag</td>
<td  align="center"> B+<br>-- bag</td>
<td  align="center"> B-<br>-- bag</td> </tr>
<tr class="cell"><td  align="center"> AB+<br>-- bag</td>
<td  align="center"> AB-<br>-- bag</td>
<td  align="center"> O+<br>-- bag</td>
<td  align="center"> O-<br>-- bag</td> </tr>


</table>

 </body>
 </html>