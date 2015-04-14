<html>
<head>
	<title>
		TO-Do Lists
	</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
			<!-- this connects the file 'connect.php' from the 'includes' folder -->
				<?php require["includes/connect.php"] ?> 
			</ul>
		</div>
	</div>
	<!-- new form for when you add a new task  -->
	<form class="add-new-task" autocomplete="off">
	<!-- input new item to your task -->
	<input type="text" none="new-task" placeholder="Add new item...">
</body>
</html>