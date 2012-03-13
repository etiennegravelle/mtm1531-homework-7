<?php
require_once 'includes/db.php';

$results = $db->query('
	SELECT id, rink_name, longitude, latitude 
	FROM rinks
	ORDER BY rink_name ASC
');
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ottawa Outdoor Rinks</title>
</head>
<body>
	<ul>
	
	<?php foreach ($results as $rink) : ?>
		<li><a href="single.php?id=<?php echo $rink['id']; ?>"><?php echo $rink['rink_name']; ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
	
	
</body>
</html>
