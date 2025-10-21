<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Costume Rental</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Reset CSS */
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

        header .info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            color: white;
            font-size: 1rem;
            margin-left: 20px;
        }

        header .info p {
            margin: 5px 0;
            line-height: 1.4;
        }

        /* Testimonials Section */
        .testimonials {
            background-color: #6a1b9a; /* Ungu utama */
            color: white;
            padding: 50px 20px;
            text-align: center;
        }

        .testimonials h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            font-family: 'Arial', sans-serif;
        }

        .testimonial-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .testimonial-item {
            background-color: #fff;
            color: #333;
            padding: 25px;
            margin: 10px;
            width: 280px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative;
            transition: transform 0.3s ease;
        }

        .testimonial-item:hover {
            transform: translateY(-10px);
        }

        .testimonial-item p {
            font-style: italic;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .testimonial-item .author {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .testimonial-item .emoji {
            font-size: 2rem;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        /* Styling for the emoji */
        .testimonial-item .emoji.positive {
            color: #ffcc00;
        }

        .testimonial-item .emoji.neutral {
            color: #ff9900;
        }

        .testimonial-item .emoji.negative {
            color: #ff4444;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <h1>Rentcos Cosplay</h1>
        </div>
        <div class="info">
            <p>Lokasi: Surabaya</p>
            <p>Costum Only | Pengiriman Seluruh Indonesia</p>
        </div>
    </header>

    <main>
        <!-- Testimonial Section -->
        <section class="testimonials">
            <h2>Apa Kata Pelanggan Kami</h2>

            <div class="testimonial-items">
                <!-- Testimonial 1 -->
                <div class="testimonial-item">
                    <div class="emoji positive">😊</div>
                    <p>"Kostum-kostumnya sangat berkualitas, cocok dengan yang saya harapkan! Proses sewa yang cepat dan mudah. Admin juga sangat membantu!"</p>
                    <p class="author">- Andi, Jakarta</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item">
                    <div class="emoji neutral">😐</div>
                    <p>"Pelayanan terbaik! Kostum yang saya sewa sangat nyaman dan sesuai dengan ukuran. Adminnya ramah dan informatif!"</p>
                    <p class="author">- Siti, Surabaya</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item">
                    <div class="emoji positive">😍</div>
                    <p>"Kostum yang saya sewa sangat keren! Sempurna untuk cosplay saya, dan proses pemesanannya sangat cepat dan mudah. Terima kasih Rentcos!"</p>
                    <p class="author">- Budi, Bandung</p>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-item">
                    <div class="emoji positive">🤩</div>
                    <p>"Luar biasa! Saya baru pertama kali sewa kostum, dan ternyata sangat mudah. Kostumnya sangat nyaman dan berkualitas!"</p>
                    <p class="author">- Rina, Bali</p>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-item">
                    <div class="emoji positive">😁</div>
                    <p>"Pengalaman sewa yang menyenankan! Kostum yang saya sewa pas sekali dan sangat detail. Pasti akan sewa lagi di Rentcos!"</p>
                    <p class="author">- Joko, Yogyakarta</p>
                </div>

                <!-- Testimonial 6 -->
                <div class="testimonial-item">
                    <div class="emoji neutral">😌</div>
                    <p>"Meskipun saya sedikit khawatir soal ukuran, tapi ternyata pas dan nyaman. Proses pemesanannya sangat cepat. Terima kasih!"</p>
                    <p class="author">- Dewi, Medan</p>
                </div>

                <!-- Testimonial 7 -->
                <div class="testimonial-item">
                    <div class="emoji positive">😃</div>
                    <p>"Sangat puas dengan pelayanan Rentcos. Kostumnya berkualitas dan pengiriman sangat cepat. Sangat merekomendasikan!"</p>
                    <p class="author">- Ahmad, Jakarta</p>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="info">
            <p>Lokasi: Surabaya</p>
            <p>Costum Only | Pengiriman Seluruh Indonesia</p>
        </div>
        <p>&copy; 2025 Rentcos | Semua Hak Dilindungi</p>
    </footer>

</body>
</html>
