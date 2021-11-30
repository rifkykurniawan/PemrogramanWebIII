<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* ini adalah CSS Internal */
        body{
            background-color: darkgrey;
        }
        h2{
            color: darkorange;
        }
    </style>
</head>
<body>
    <h2 style="background-color: aquamarine;">Mengirim Data dari Form ke halaman lain</h2>
    <h3 style="color: brown; background-color: cyan;">Ini menggunakan css inline</h3>
    <h1>Ini diubah menggunakan CSS Eksternal</h1>
    <form action="info.php" method="post">
        Nama : <input type="text" name="nama" id="nama"> <br>
        Umur : <input type="text" name="umur" id="umur">
        <br>
        <input type="radio" name="rPendidikan" id="1" value="SD">SD <br>
        <input type="radio" name="rPendidikan" id="2" value="SMP">SMP <br>
        <input type="radio" name="rPendidikan" id="3" value="SMA">SMA <br>
        <input type="submit" value="Submit">
        <button type="submit" class="btn btn-primary">Primary</button>
    </form>
</body>
</html>