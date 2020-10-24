<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>PHP</title>
    </head>
    <body>
        <?php require 'partails/nav.view.php'; ?>
        <ul>
            <?php foreach($tasks as $task):?>
                <?php if($task->group_id == 3):?>
                    <li><strike><?=$task->title;?></strike></li>
                <?php else:?>
                    <li><?=$task->title;?></li>
                <?php endif;?>
            <?php endforeach?>
        </ul>
    </body>
</html>