<?php require_once 'logic.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col"></th>
                <?php foreach ($uniqueSubject as $item): ?>
                <th scope="col"><?= $item ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <?php foreach($points as $key => $values): ?>
            <tr>
                <td><?= $key;?></td>
                <?php foreach ($uniqueSubject as $item): ?>
                    <td><?= $$values[$item] ? : '';?></td>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
