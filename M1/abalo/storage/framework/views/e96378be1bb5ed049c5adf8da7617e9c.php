<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Artikelübersicht</title>
</head>
<body>

<h1>Artikelübersicht</h1>

<!-- Suchformular -->
<form method="GET" action="<?php echo e(route('articles.index')); ?>">
    <input type="text" name="search" placeholder="Artikel suchen" value="<?php echo e(request('search')); ?>">
    <button type="submit">Suchen</button>
</form>

<!-- Artikeltabelle -->
<table border="1">
    <thead>
    <tr>
        <th>Bild</th>
        <th>Name</th>
        <th>Preis (EUR)</th>
        <th>Beschreibung</th>
        <th>Ersteller</th>
        <th>Erstellungsdatum</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>
            <?php
            $imageUrl = asset("images/articles/{$article->id}.jpg");
            ?>
            <img src="<?php echo e($imageUrl); ?>" alt="Artikelbild" width="50">
        </td>
        <td><?php echo e($article->ab_name); ?></td>
        <td><?php echo e(number_format($article->ab_price / 100, 2, ',', '.')); ?> €</td>
        <td><?php echo e($article->ab_description); ?></td>
        <td><?php echo e($article->creator_name); ?></td>
        <td><?php echo e(date('d.m.Y', strtotime($article->ab_createdate))); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</body>
</html>

<?php /**PATH C:\Users\Ben\IdeaProjects\DBWT2\Prakt\abalo\resources\views/articles/index.blade.php ENDPATH**/ ?>