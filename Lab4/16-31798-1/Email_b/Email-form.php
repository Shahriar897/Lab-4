<?php
	
	if(isset($_POST['email'])){
		echo $_POST['email'];
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Email</legend>
		<input type="email" name="email" value="" >
		<img src="icon.png"  height="15" width="15" ><br/><br/>
		<hr/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>