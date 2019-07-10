<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Challenge NBS</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      <h1>Website Jual - Beli buku</h1>
      <h2>Dijamin Kualitas Bagus</h2>
    </header>
    <nav>
      <a href="/">Home</a> |
      <a href="/sellbook/list">List Buku</a>
    </nav>
    <hr>

    <h3> @yield('judul_halaman')</h3>

    @yield('konten')

    <br>
    <hr>
    <footer>
      <p>By Muhamad Idris 2019</p>
    </footer>
  </body>
</html>
