<form action="" method="get">
	Enter name : <input type= "text" name="friend_name"/>
	
	<input type= "sumbit" value="add_friend"/>
</form>

<?php
	$f_name=$_GET['friend_name'];
	echo "$f_name";
?>