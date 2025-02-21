<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #053575, #0d47a1);
            color: white;
            font-family: "Poppins", sans-serif;
            padding: 20px;
        }
        .container-custom {
            max-width: 1400px;
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }
        h1 {
            font-size: 50px;
            font-weight: 700;
        }
        .highlight {
            color: #ff9800;
        }
        p {
            font-size: 20px;
            margin-top: 15px;
            opacity: 0.9;
        }
        .buttons a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            background: #ff9800;
            border-radius: 12px;
            text-decoration: none;
            transition: 0.3s;
            margin: 5px;
        }
        .buttons a:hover {
            background: #0e6624;
        }
        .image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container container-custom">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1>Manajemen <span class="highlight">Data Buku</span></h1>
                <p>Kelola data perpustakaan dengan mudah, mulai dari kategori, penerbit, hingga buku-buku yang tersedia.</p>
                
                <div class="buttons mt-3">
                    <a href="/kategori">Kategori</a>
                    <a href="/penerbit">Penerbit</a>
                    <a href="/buku">Buku</a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="{{ asset('assets/buku-logo-2.png') }}" alt="Buku" class="img-fluid">
            </div>
        </div>
    </div>
</body>
</html>
