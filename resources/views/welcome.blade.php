<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Buku Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #053575, #0d47a1);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            color: #fff;
            overflow: hidden;
        }

        .container-custom {
            max-width: 1200px;
            width: 100%;
            background: rgba(255, 255, 255, 0.08);
            padding: 50px 40px;
            border-radius: 25px;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 0;
        }

        .highlight {
            color: #ff9800;
        }

        p {
            font-size: 1.25rem;
            margin-top: 20px;
            opacity: 0.95;
        }

        .buttons a {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            background: #ff9800;
            border-radius: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 8px 10px 0 0;
            box-shadow: 0 5px 15px rgba(255, 152, 0, 0.3);
        }

        .buttons a:hover {
            background: #0e6624;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(14, 102, 36, 0.4);
        }

        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            .container-custom {
                padding: 30px 20px;
            }

            .buttons a {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="container container-custom">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1>Manajemen <span class="highlight">Buku</span></h1>
                <h1 class="highlight">Perpustakaan</h1>
                <p>Mudah mengelola data perpustakaan: atur kategori, penerbit, dan koleksi buku dengan lebih terorganisir.</p>

                <div class="buttons mt-4">
                    <a href="/kategori"><i class="bi bi-tags-fill"></i> Kategori</a>
                    <a href="/penerbit"><i class="bi bi-building"></i> Penerbit</a>
                    <a href="/buku"><i class="bi bi-journal-bookmark-fill"></i> Buku</a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="{{ asset('assets/buku-logo-2.png') }}" alt="Buku" class="img-fluid">
            </div>
        </div>
    </div>
</body>

</html>
