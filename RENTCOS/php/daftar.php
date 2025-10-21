<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3e5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #9c27b0;
            border-radius: 10px;
            padding: 30px;
            width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #fff;
            background-color: #fff;
            color: #9c27b0;
        }

        input[type="submit"] {
            background-color: #6a1b9a;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #8e24aa;
        }

        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Pendaftaran</h2>
        <form id="registerForm">
            <label for="nohp">Nomor HP:</label>
            <input type="text" id="nohp" name="nohp" required>
            <div class="error" id="nohpError"></div>

            <label for="alamat">Alamat Lengkap:</label>
            <input type="text" id="alamat" name="alamat" required>
            <div class="error" id="alamatError"></div>

            <label for="foto">Upload Foto KTP/KARTU PELAJAR:</label>
            <input type="file" id="foto" name="foto" accept="image/*" required>
            <div class="error" id="fotoError"></div>

            <input type="submit" value="Daftar">
        </form>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function (e) {
            e.preventDefault();

            let nohp = document.getElementById('nohp').value;
            let alamat = document.getElementById('alamat').value;
            let foto = document.getElementById('foto').files[0];

            let valid = true;

            // Reset errors
            document.getElementById('nohpError').innerText = '';
            document.getElementById('alamatError').innerText = '';
            document.getElementById('fotoError').innerText = '';

            // Validate fields
            if (!nohp || nohp.length < 10) {
                document.getElementById('nohpError').innerText = 'Nomor HP tidak valid!';
                valid = false;
            }

            if (!alamat) {
                document.getElementById('alamatError').innerText = 'Alamat lengkap harus diisi!';
                valid = false;
            }

            if (!foto) {
                document.getElementById('fotoError').innerText = 'Harap upload foto!';
                valid = false;
            }

            // If valid, submit form
            if (valid) {
                alert('Form berhasil disubmit!');
                // Anda bisa menambahkan proses pengiriman data ke server di sini
            }
        });
    </script>

</body>
</html>
