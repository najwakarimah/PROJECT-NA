<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Costume Rental</title>
    <link rel="stylesheet" href="style.css">
    <style>/* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
}

/* Header Styles */
header {
    background-color: #6a1b9a; /* Ungu utama */
    padding: 20px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .logo h1 {
    font-size: 2rem;
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
    font-weight: bold;
}

nav ul li a:hover {
    color: #ffcc00;
}

/* Hero Section */
.hero {
    background-color: #6a1b9a; /* Ungu utama */
    color: white;
    text-align: center;
    padding: 100px 20px;
}

.hero h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.hero .btn {
    background-color: #ffcc00;
    color: black;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 5px;
}

.hero .btn:hover {
    background-color: #ff9900;
}

/* Catalog Section */
.catalog {
    padding: 50px 20px;
    background-color: #ffffff;
    text-align: center;
}

.catalog h2 {
    font-size: 2rem;
    margin-bottom: 30px;
    color: #6a1b9a; /* Ungu utama */
}

.catalog-items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.catalog-item {
    background-color: #f4f4f9;
    border: 1px solid #ddd;
    width: 220px;
    margin: 10px;
    padding: 15px;
    text-align: center;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.catalog-item:hover {
    transform: translateY(-10px);
}

.catalog-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 5px;
}

.catalog-item h3 {
    font-size: 1.2rem;
    margin: 15px 0;
}

.catalog-item p {
    font-size: 1rem;
    margin-bottom: 15px;
}

.catalog-item .price {
    font-size: 1.2rem;
    color: #9c27b0; /* Ungu muda untuk harga */
    margin-bottom: 20px;
}

.catalog-item .btn {
    background-color: #6a1b9a; /* Ungu utama */
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 5px;
}

.catalog-item .btn:hover {
    background-color: #9c27b0; /* Ungu muda saat hover */
}

/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background-color: #6a1b9a; /* Ungu utama */
    color: white;
    margin-top: 50px;
}
</style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Rentcos Cosplay</h1>
        </div>
        <nav>
            <ul>
                <!-- <li><a href="#">Home</a></li> -->
                <li><a href="catalog.php">Katalog Kostum</a></li>
                <li><a href="sewa.php">Cara Sewa</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h2>Wujudkan Karakter Cosplay Favoritmu!</h2>
            <p>Temukan koleksi kostum anime terbaik dan paling populer. Mudah disewa, cepat diproses!</p>
            <a href="daftar.php" class="btn">Lihat Katalog</a>
            <a href="daftar.php" class="btn">Sewa/Booking</a>
        </section>

        <!-- Katalog Kostum -->
        <section class="catalog">
            <h2>Katalog Kostum Anime</h2>
            <div class="catalog-items">
                <!-- Item 1 -->
                <div class="catalog-item">
                    <img src="https://via.placeholder.com/250" alt="Kostum 1">
                    <h3>Kostum Naruto Uzumaki</h3>
                    <p>Kostum lengkap dengan jaket Hokage, celana, dan headband.</p>
                    <p class="price">Rp 150.000/hari</p>
                    <a href="#" class="btn">Sewa Sekarang</a>
                </div>

                <!-- Item 2 -->
                <div class="catalog-item">
                    <img src="https://via.placeholder.com/250" alt="Kostum 2">
                    <h3>Kostum Sakura Haruno</h3>
                    <p>Kostum dengan kimono merah dan aksesoris khas ninja.</p>
                    <p class="price">Rp 120.000/hari</p>
                    <a href="#" class="btn">Sewa Sekarang</a>
                </div>

                <!-- Item 3 -->
                <div class="catalog-item">
                    <img src="https://via.placeholder.com/250" alt="Kostum 3">
                    <h3>Kostum Luffy - One Piece</h3>
                    <p>Kostum ikonik dengan kaos merah, topi jerami, dan celana pendek.</p>
                    <p class="price">Rp 180.000/hari</p>
                    <a href="#" class="btn">Sewa Sekarang</a>
                </div>

                <!-- Item 4 -->
                <div class="catalog-item">
                    <img src="https://via.placeholder.com/250" alt="Kostum 4">
                    <h3>Kostum Goku - Dragon Ball</h3>
                    <p>Setelan gi lengkap dengan logo dan sabuk biru.</p>
                    <p class="price">Rp 200.000/hari</p>
                    <a href="#" class="btn">Sewa Sekarang</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Anime Kostum Rental | Semua Hak Dilindungi</p>
    </footer>
</body>
</html>
