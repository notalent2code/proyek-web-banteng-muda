<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cooperativ - Koperasi Simpan Pinjam</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     -->
</head>
<body>
    <div class="container-fluid" style="padding: 0">
    <?= $this->include('/navbar'); ?>
	<div class="container-fluid" style="padding: 0">
		<?= $this->renderSection('content'); ?>
	</div>
    <?= $this->include('/footer'); ?>
    </div>
</body>
    <script src="/js/sticky-navbar.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- <script src="/js/sticky-navbar.js"></script> -->

</html>