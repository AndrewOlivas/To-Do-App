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
				<?php require["includes/connect.php"] ?>
			</ul>
		</div>
	</div>
	<form class="add-new-task" autocomplete="off">
	<input type="text" none="new-task" placeholder="Add new item...">
</body>
</html>