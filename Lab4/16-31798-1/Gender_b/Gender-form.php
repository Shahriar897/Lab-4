<?php if(isset($_POST['gender'])){echo $_POST['gender'];}?>
<form action="#" method="POST">
	<fieldset>
		<legend><b>Gender</b></legend>
		<table>
			<tr>
				<td>
					<input type="radio" name="gender" value="Male" > Male
				</td>
				<td>
					<input type="radio" name="gender" value="Female" > Female
				</td>
			
				<td>
					<input type="radio" name="gender" value="Others" > Others
				</td>
		
			</tr>
		</table>

		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>