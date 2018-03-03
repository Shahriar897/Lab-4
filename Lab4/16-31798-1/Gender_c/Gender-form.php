
<form action="#" method="POST">
	<fieldset>
		<legend><b>Gender</b></legend>
		<table>
			<tr>
				<td>
					<input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender'])){if($_POST['gender']== "Male"){echo "checked";}}?> > Male
				</td>
				<td>
					<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender'])){if($_POST['gender']== "Female"){echo "checked";}}?>> Female
				</td>
			
				<td>
					<input type="radio" name="gender" value="Others" <?php if(isset($_POST['gender'])){if($_POST['gender']== "Others"){echo "checked";}}?> > Others
				</td>
		
			</tr>
		</table>

		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>