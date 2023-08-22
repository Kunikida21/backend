<?php require_once 'logic.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Комментарии</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="mt-3">
            Комментарии
        </h3>
        <div>
            <form method="POST" action="logic.php">
                <input class="mb-3 form-control" type="text" name="name" placeholder="Ваше имя" required>
                <textarea class="form-control" name="comment" placeholder="Оставьте Ваш комментарий" required></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
            <hr>
            <?php if ($comments): ?>
                <ul>
                    <?php foreach($comments as $comment): ?>
                        <li>
                            <strong><?php echo $comment['name']; ?>:</strong>
                            <small><?php echo $comment['created_at']; ?></small>
                            <p><?php echo $comment['comment']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Нет комментариев</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>