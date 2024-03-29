<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->
        <title><?= $page_title; ?></title>
        <?= $head_metas ;?>
        <link rel="stylesheet" href="assets/CSS/header.css">
        <link rel="stylesheet" href="assets/CSS/template.css">
        <link rel="stylesheet" href="assets/CSS/footer.css">
        <link rel="stylesheet" href="assets/CSS/home.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        
        <?php require_once __DIR__ . '/partials/header.php'; ?>
        
        <?= $page_content ;?>
        <?= $page_scripts ;?>
        
        <?php require_once __DIR__ . '/partials/footer.php'; ?>
        
    </body>
</html>

