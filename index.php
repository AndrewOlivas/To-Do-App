<html>
<head>
	<title>
		TO-Do Lists
	</title>
	<!-- links main css to this php/html file -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
			<!-- this connects the file 'connect.php' from the 'includes' folder -->
				<?php require("includes/connect.php"); ?> 
			</ul>
		</div>
	</div>
	<!-- new form for when you add a new task  -->
		<form class="add-new-task" autocomplete="off">
	<!-- input new item to your task -->
			<input type="text" none="new-task" placeholder="Add new item...">
		</form>
</body>
<script src="hhtp://code.jquery.com/jquery-latest.min.js"></script>
<script>
	add_task(); //calls the add task function

</script>

</html>