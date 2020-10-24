<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>用户列表</title>
    </head>
    <body>
        <?php require 'partails/nav.view.php'; ?>
        <ul>
            <?php foreach($users as $user):?>
                <li><?=$user->name;?></li>
            <?php endforeach?>
        </ul>
        <form method="post" action="user/add">
            <input type="text" name="name" autocomplete="FALSE">
            <input type="text" name="telphone" autocomplete="FALSE">
            <button type="submit">提交</button>
        </form>
    </body>
</html>