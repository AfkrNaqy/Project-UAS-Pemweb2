<html lang="en">
<!-- ini untuk import font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT</title>

</head>

<style>
* {
    font-family: 'Josefin Sans', sans-serif;
}

.body {
    background: #e4e6c3;
}
</style>

<body>
    <!-- ini untuk navbar -->
    <?php include "adm-navigation.php" ?>
    <section class="Product">
        <h4>PRODUCT</h4>
        <?php include "chart\chart-bar.php"; ?>

    </section>
    <section class="Payment">
        <h4>PAYMENT</h4>
        <div class="canvas"></div>
    </section>
    <section class="Print">
        <h4>PRINT</h4>
        <a href="report\reportExcel-penjualan.php" class="btn" role="button"><img src="img\excel.svg" alt=""></a>
        <a href="report\reportExcel-produk.php" class="btn" role="button"><img src="img\excel.svg" alt=""></a>
    </section>
    <!-- ini untuk tombol search dll -->
    <div class="act"></div>
    <!-- ini untuk tabel product -->
    <div class="table"></div>
</body>

</html>