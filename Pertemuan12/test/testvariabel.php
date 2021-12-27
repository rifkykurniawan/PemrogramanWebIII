<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
    <style>
        body {
            font-size: small;
        }
    </style>
</head>
<body>
    <h1>Variabel dan Tipe Data Javascript</h1>
    <p id="demo"></p>
    <p id="demo2"></p>

    <script>
        var jumlah = 20;
        var hewan = "Bebek";
        
        document.getElementById("demo").innerHTML = jumlah + "<br>" + hewan;
    </script>

    <script>
        let x = 20 + 20 + "Ayam";
        document.getElementById("demo2").innerHTML = x; 
    </script>
</body>
</html>