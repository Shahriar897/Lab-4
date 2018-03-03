<?php
	
	if(isset($_POST['day'])){
		echo "Date : ".$_POST['day']."/  Month :".$_POST['month']."/  Year :".$_POST['year'];
	}
	
?>
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
					<input type="text" size="2" name="day" value="" > /
				</td>
				<td>
					<input type="text" size="2" name="month" value="" > /
				</td>
			
				<td>
					<input type="text" size="2" name="year" value="" > 
				</td>
		
			</tr>
		</table>

		<hr/>
		<input type="submit" name="submit" value="Submit" >
	</fieldset>
</form>