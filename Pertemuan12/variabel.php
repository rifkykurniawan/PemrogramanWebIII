<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variabel dan Tipe Data Javascript</h1>
    <p id="demo1"></p>
    <p id="demo2"></p>
    <p id="demo3"></p>
    <p id="demo4"></p>
    <p id="demo5"></p>

    <script>
        var jumlah = 20;
        var hewan = "Ayam";

        document.getElementById("demo1").innerHTML = jumlah + " " + hewan;
    </script>

    <script>
        let x = 20 + 20 + " Ayam";
        document.getElementById("demo2").innerHTML = x;
    </script>

    <script>
        const namahewan = "Rusa";
        document.getElementById("demo3").innerHTML = namahewan;
    </script>

    <script>
        const produk = ["sabun", "sikat", "parfum"];
        document.getElementById("demo4").innerHTML = produk;
    </script>

    <script>
        const hp = {merk:"samsung", model:"samsung s20", color:"white"};

        //menambahkan properti
        hp.owner = "Agus";

        document.getElementById("demo5").innerHTML = hp.owner + " punya hp " + hp.merk + " model " + hp.model + " dan berwarna " + hp.color;
    </script>
</body>
</html>