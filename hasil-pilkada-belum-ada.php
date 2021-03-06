<!DOCTYPE html>
<html lang="en">
<?php include_once("parts/head.php")?>

<body>

    <!-- Preloader -->
    <?php include_once("parts/loader.php")?>
    <!-- End of Preloader -->

    <!-- Main Header Start -->
    <?php include_once("parts/header.php")?>
    <!-- End of Main Header -->

    <!-- Page title -->
    <div class="lawFirm--page-title text-center lawFirm--bg-center"
        data-bg-img="assets/images/lokasi-img/header-bg.png">
        <div class="container">
            <h2 class="pb-20">Hasil Pilkada 2020</h2>
            <div class="title-bc"><a href="index.php">Home</a> > <span>Hasil Pilkada</span></div>
        </div>
    </div>
    <!-- End of Page title -->

    <!-- No result text -->
    <div class="lawFirm--error-page" data-bg-img="assets/images/hasil-img/voting.png">
        <div class="container">
            <h1 class="pb-35"> <span> Belum Ada Hasil :(</span></h1>
            <p class="pb-35">Maaf, Pilkada Serentak Tahun 2020 belum diadakan, silahkan kembali pada halaman ini setelah pilkada diadakan (Pilkada Serentak 2020 diadakan pada 9 Desember 2020).</p>
        </div>
    </div>
    <!-- End of no result text -->


    <!-- Footer -->
    <?php include_once("parts/footer.php")?>
    <!-- End of Footer -->

    <!-- Back to Top Button -->
    <?php include_once("parts/back-to-top.php")?>
    <!-- End of Back to Top Button -->

    <!-- JS Files -->
    <?php include_once("parts/script.php")?>


</body>

</html>