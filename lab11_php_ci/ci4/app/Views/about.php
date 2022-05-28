<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>

    <section id="about">
        <div class="bio">
            <img src="Alingga_Reandito.JPG" alt="" >
            <h2>M Safri Satria Permana</h2>
            <p class="p-bio">Perkenalkan saya M Safri Satria Permana, saya sedang belajar memahami HTML, CSS, dan JS</p>
        </div>
    </section>

    <?= $this->include('template/footer'); ?>
</body>
</html>