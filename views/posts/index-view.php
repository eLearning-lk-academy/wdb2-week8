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
        <?php foreach($posts as $post): ?>
            <div>
                <h2><?= $post['title'] ?></h2>
                <p><?= substr($post['content'],0,100) ?></p>
                <a href="/posts/<?= $post['slug'] ?>">Read more</a>
                <hr>
            </div>
        <?php endforeach; ?>
        <div class="pagination float-right ">
            <?php if($page > 1): ?>
                <a class="me-2" href="/posts?page=<?= $page - 1 ?>">Previous</a>
            <?php endif; ?>
            <?php for($i = 1; $i <= $totalPages; $i++): ?>
                <a class="me-2" href="/posts?page=<?= $i ?>"><?= $i ?> </a> 
            <?php endfor; ?>
            <?php if($page < $totalPages): ?>
                <a class="me-2" href="/posts?page=<?= $page + 1 ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>