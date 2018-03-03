<form action="#" method="POST">
	<fieldset>
		<legend><b>Date-Of-Birth</b></legend>
		<table>
			<tr>
				<th >
					dd
				</th>
				<th >
					mm
				</th>
				<th >
					yy
				</th>
			</tr>
			<tr>
				<td>
					<input type="text" size="2" name="day" value="<?php if(isset($_POST['day'])){echo $_POST['day'];}?>" > 
				</td>
				<td>
					<input type="text" size="2" name="month" value="<?php if(isset($_POST['month'])){echo $_POST['month'];}?>" > /
				</td>
			
				<td>
					<input type="text" size="2" name="year" value="<?php if(isset($_POST['year'])){echo $_POST['year'];}?>" > 
				</td>
		
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>