<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

// $id = isset($_GET['id']) ? $_GET['id'] : '1';

echo $id;

?>

<a href="show.php?name=<?php echo urlencode('John Doe'); ?>">Link</a>
<a href="show.php?company=<?php echo urlencode('Widgets&more'); ?>">Link</a>
<a href="show.php?company=<?php echo urlencode('!#*?'); ?>">Link</a>