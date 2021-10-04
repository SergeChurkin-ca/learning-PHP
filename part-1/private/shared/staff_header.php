<?php if(!isset($page_title)) {$page_title = 'Staf area'; } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BO - <? echo $page_title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
    </head>
    <body>
    <header>
        <h1>Admin Panel</h1>
    </header>
    <nav>
        <ul>
        <li><a href="<?php echo url_for(('/staff/index.php')); ?>">Menu</a></li>
        </ul>
    </nav>

    </body>
</html>