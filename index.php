<?php include './templates/header.php'; ?>
<header class="bg-dark text-white text-center py-5">
    <h1 class="display-4">My Gallery</h1>
    <p class="lead">Welcome to a collection of beautiful images</p>
</header>

<section class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Contoh gambar atau konten lainnya -->
        <div class="col">
            <div class="card">
                <img src="gambar1.jpg" class="card-img-top" alt="Gambar 1">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="gambar2.jpg" class="card-img-top" alt="Gambar 2">
            </div>
        </div>
        <!-- Tambahkan lebih banyak item sesuai kebutuhan -->
    </div>
</section>
<?php include './templates/footer.php'; ?>