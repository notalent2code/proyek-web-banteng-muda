<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cooperativ - Koperasi Simpan Pinjam</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/sticky-navbar.js"></script>
</head>
<body>
    <div class="container">
    <?= $this->include('/navbar'); ?>
	<div class="container">
		<?= $this->renderSection('content'); ?>
	</div>
    <?= $this->include('/footer'); ?>
    </div>
</body>
</html>