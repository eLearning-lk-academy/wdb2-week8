<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <div>
            <?php if($msg = flashData('success')): ?>
                <div class="alert alert-success">
                    <?=$msg ?>
                </div>
            <?php endif;?>
            <h2><?=$post['title']?></h2>
            <a href="/posts/edit/<?=$post['id']?>">Edit</a> 
            <a href="/posts/delete/<?=$post['id']?>">Delete</a>
            <p><?=nl2br($post['content'])?></p>
        </div>
    </div>
</body>
</html>