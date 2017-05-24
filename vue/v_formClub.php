<!DOCTYPE html>
<html>
	<head>
		<title> Clubs BDA </title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<button type="button" onclick="$('#exemple_fadein').fadeIn();">Afficher la fenêtre</button>
		<div id="exemple_fadein" style="background:gray;padding:20px;display:none;z-index:10001;position:absolute;top:0;left:0;height:500px;width:500px;">
		<form name="htmlform" method="post" action="html_form_send.php">
			<table width="450px">
			</tr>
			<tr>
			 <td valign="top">
			  <label for="first_name">First Name *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="first_name" maxlength="50" size="30">
			 </td>
			</tr>
			 
			<tr>
			 <td valign="top"">
			  <label for="last_name">Last Name *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="last_name" maxlength="50" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="email">Email Address *</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="email" maxlength="80" size="30">
			 </td>
			 
			</tr>
			<tr>
			 <td valign="top">
			  <label for="telephone">Telephone Number</label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="telephone" maxlength="30" size="30">
			 </td>
			</tr>
			<tr>
			 <td valign="top">
			  <label for="comments">Comments *</label>
			 </td>
			 <td valign="top">
			  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
			 </td>
			 
			</tr>
			<tr>
			 <td colspan="2" style="text-align:center">
			  <input type="submit" value="Submit">  
			 </td>
			</tr>
			</table>
		</form>
		

		
        <input type="text" value="Coucou ça marche"/>
        <br/><br/>
        <button type="button" onclick="$('#exemple_fadein').fadeOut();">Fermer cette fenêtre<button>
</div>
	</body>
</html>