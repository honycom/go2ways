<?php
// Dummy blog posts (later you can fetch from DB or JSON)
$posts = [
    [
        "title" => "Maximo Application Suite 9.1: Transforming Asset Management in the AI Era",
        "excerpt" => "Discover how IBM Maximo helps enterprises manage assets, optimize operations, and reduce costs.",
        "link" => "https://go2ways2021.blogspot.com/",
        "date" => "Sep 25, 2025"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Go2ways Blog</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Our Blog</h2>
        <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['title'] ?></h5>
                            <p class="text-muted small"><?= $post['date'] ?></p>
                            <p class="card-text"><?= $post['excerpt'] ?></p>
                            <a href="<?= $post['link'] ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
