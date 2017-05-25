<!-- formulaire de creation de club-->
			<div class ="col-xs-offset-4 col-xs-4" id="creation_club" style="background:#c0c0c0 ;padding:20px;display:none;z-index:10001;position:absolute;height:auto ;width:auto;" align="center">
							<form name="htmlform" method="post" action="controleur/c_creationClub.php">
								<table width="450px" valign="top">
								
								<tr>
								 <td valign="top">
								  <label for="nomclub">Nom Club</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="nomclub" maxlength="50" size="30">
								 </td>
								</tr>
								 
								<tr>
								 <td valign="top"">
								  <label for="pageFB">Page facebook(URL)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="pageFB" maxlength="200" size="30">
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="URLimage">URL image (facultatif)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="URLimage" maxlength="80" size="30">
								 </td>
								 
								</tr>
								<tr>
								 <td valign="top">
								  <label for="descriptif">Descriptif</label>
								 </td>
								 <td valign="top">
								  <textarea  name="descriptif" maxlength="500" cols="30" rows="6"></textarea>
								 </td>
								 
								</tr>
								<tr>
								 <td colspan="2" style="text-align:center">
								  <input type="submit" value="Submit"> 
								  <button type="button" onclick="$('#creation_club').fadeOut();">Fermer cette fenêtre<button> 
								 </td>
								</tr>

							</table>

							</form>
							
</div>


<!-- formulaire de modification de club-->
			<div class ="col-xs-offset-4 col-xs-4" id="modification_club" style="background:#c0c0c0 ;padding:20px;display:none;z-index:10001;position:absolute;height:auto ;width:auto;" align="center">
							<form name="htmlform" method="post" action="controleur/c_modifyclub.php">
								<table width="450px" valign="top">
								<input  type = "hidden" name="idclub" maxlength="50" size="30" value = <?php echo ($idclub); ?>>
								<tr>
								 <td valign="top">
								  <label for="nomclub">Nom Club</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="nomclub" maxlength="50" size="30" value = <?php echo ($nomclub); ?>>
								 </td>
								</tr>
								 
								<tr>
								 <td valign="top"">
								  <label for="pageFB" >Page facebook(URL)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="pageFB" maxlength="200" size="30" value = <?php echo ($pagefb); ?> >
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="URLimage">URL image (facultatif)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="URLimage" maxlength="80" size="30" value = <?php echo ($urlimage); ?>>
								 </td>
								 
								</tr>
								<tr>
								 <td valign="top">
								  <label for="descriptif">Descriptif</label>
								 </td>
								 <td valign="top">
								  <textarea  name="descriptif" maxlength="500" cols="30" rows="6" ></textarea>
								 </td>
								 
								</tr>
								<tr>
								 <td colspan="2" style="text-align:center">
								  <input type="submit" value="Submit"> 
								  <button type="button" onclick="$('#modification_club').fadeOut();">Fermer cette fenêtre<button> 
								 </td>
								</tr>

							</table>

							</form>
							
<!-- formulaire de modification de respo-->
			<div class ="col-xs-offset-4 col-xs-4" id="modification_respo" style="background:#c0c0c0 ;padding:20px;display:none;z-index:10001;position:absolute;height:auto ;width:auto;" align="center">
							<form name="htmlform" method="post" action="controleur/c_modifyclub.php">
								<table width="450px" valign="top">
								<input  type = "hidden" name="idclub" maxlength="50" size="30" value = <?php echo ($idclub); ?>>
								<tr>
								 <td valign="top">
								  <label for="nomclub">Nom Club</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="nomclub" maxlength="50" size="30" value = <?php echo ($nomclub); ?>>
								 </td>
								</tr>
								 
								<tr>
								 <td valign="top"">
								  <label for="pageFB" >Page facebook(URL)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="pageFB" maxlength="200" size="30" value = <?php echo ($pagefb); ?> >
								 </td>
								</tr>
								<tr>
								 <td valign="top">
								  <label for="URLimage">URL image (facultatif)</label>
								 </td>
								 <td valign="top">
								  <input  type="text" name="URLimage" maxlength="80" size="30" value = <?php echo ($urlimage); ?>>
								 </td>
								 
								</tr>
								<tr>
								 <td valign="top">
								  <label for="descriptif">Descriptif</label>
								 </td>
								 <td valign="top">
								  <textarea  name="descriptif" maxlength="500" cols="30" rows="6" ></textarea>
								 </td>
								 
								</tr>
								<tr>
								 <td colspan="2" style="text-align:center">
								  <input type="submit" value="Submit"> 
								  <button type="button" onclick="$('#modification_club').fadeOut();">Fermer cette fenêtre<button> 
								 </td>
								</tr>

							</table>

							</form>
</div>