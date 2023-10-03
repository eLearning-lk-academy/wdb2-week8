<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Add a post</title>
</head>
<body>
    <div class="container">
        <?php if($msg = flashData('error')): ?>
            <div class="alert alert-danger">
                <?=$msg ?>
            </div>
        <?php endif;?>
        <form action="/posts/update/<?=$post['id']?>" method="POST">
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?=$post['title']?>">
            </div>
            <div class="form-group">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="slug"  value="<?=$post['slug']?>" readonly class="form-control">
            </div>

            <div class="form-group">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?=$post['content']?></textarea>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary" type="submit">save</button>
            </div>
        </form>
    </div>
</body>
</html>
