<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Manajement Data Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
    </style>
</head>
<body style="background: linear-gradient(135deg, #053575, #0d47a1);">
    <div class="container text-center">
          <h1 style="text-align: center; font-size: 35px;">
            <a href="/" style="text-decoration: none; color: rgb(104, 104, 104); display: inline-block;">Manajemen Buku Perpustakaan : </a>
        </h1>        
        <div class="nav d-flex justify-content-center">
            <ul>
                <li><a href="/kategori"><i class="bi bi-tags-fill"></i> Kategori</a></li>
                <li><a href="/penerbit"><i class="bi bi-building"></i>Penerbit</a></li>
                <li><a href="/buku"><i class="bi bi-journal-bookmark-fill"></i>Buku</a></li>
            </ul>
        </div>
