<!DOCTYPE html>
<html lang="en">

<link>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHPGRAM</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
</link>
</head>

<body>


    <h5 class="head">Добавить пост</h5>

    <form action="upload.php" method="post" enctype="multipart/form-data" class="forms">
        <input type="file" name="photo" accept="image/*" required class="load"><br>
        <textarea name="comment" placeholder="Вам комментарий..." required class="comment"></textarea>
        <button type="submit">Загрузить</button>
    </form>
    <h2>Посты</h2>
    <div id="photo-gallery" class="photo_gallery"></div>
    <h2></h2>



    <footer>
        <div class="footer-bottom">
            <p>PHPGRAM. Все права защищены.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>