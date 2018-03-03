
<form action="#" method="POST">
	<fieldset>
		<legend><b>Degree</b></legend>
		<table>
			<tr>
				<td>
					<input type="CheckBox" name="Education" value="SSC" <?php if(isset($_POST['Education'])){if($_POST['Education']== "SSC"){echo "checked";}}?>> SSC
				</td>
				<td>
					<input type="CheckBox" name="Education" value="HSC" <?php if(isset($_POST['Education'])){if($_POST['Education']== "HSC"){echo "checked";}}?>> HSC
				</td>
			
				<td>
					<input type="CheckBox" name="Education" value="BSc" <?php if(isset($_POST['Education'])){if($_POST['Education']== "BSc"){echo "checked";}}?>> BSc
				</td>
				<td>
					<input type="CheckBox" name="Education" value="MSc" <?php if(isset($_POST['Education'])){if($_POST['Education']== "MSc"){echo "checked";}}?>> MSc
				</td>
			</tr>
		</table>

		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>