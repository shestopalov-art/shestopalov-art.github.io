<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Память о Сергее Константиновиче Шестопалове</title>
    <meta name="description" content="Сайт посвящённый сохранению и популяризации наследия художника Сергея Шестопалова. Его картины, как цветы в саду, продолжают вдохновлять и напоминать о красоте природы и искусстве.">
    <meta name="keywords" content="Сергей Шестопалов, искусство, живопись, цветы, наследие, память, Липецк">
    <link rel="icon" type="image/x-icon" href="/ui/favicon.ico">

    <link href="/ui/bootstrap.min.css" rel="stylesheet">
    <link href="/ui/style.css" rel="stylesheet">
    <link href="/ui/simpleLightbox.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <meta property="og:image" content="/ui/cover.png">
    <meta property="twitter:image" content="/ui/cover.png">

</head>
<body>

@yield('body')


<script src="/ui/simpleLightbox.min.js"></script>

<script>
    // using plain js
    new SimpleLightbox({elements: '.gallery a'});


    // Функция для выключения звука
    function startAudio() {
        const audio = document.getElementById('sonata');
        audio.play();

        document.getElementById('sonata-start').classList.add('d-none');
        document.getElementById('sonata-stop').classList.remove('d-none');
    }

    // Функция для полной остановки воспроизведения
    function stopAudio() {
        const audio = document.getElementById('sonata');
        audio.pause(); // Останавливаем аудио
        audio.currentTime = 0; // Возвращаемся в начало трека


        document.getElementById('sonata-start').classList.remove('d-none');
        document.getElementById('sonata-stop').classList.add('d-none');
    }
</script>

</body>
</html>
