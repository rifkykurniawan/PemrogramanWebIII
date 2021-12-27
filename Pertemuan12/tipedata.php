<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tipe Data dalam Javascript</h2>
    <p id="cobaString"></p>
    <p id="cobaNumber"></p>

    <script>
        let contoh1 = "Nama Saya adalah Yoga";
        let contoh2 = "Nama Saya adalah 'Yoga'";
        let contoh3 = 'Nama Saya adalah "Yoga"';

        document.getElementById("cobaString").innerHTML = 
        contoh1 + "<br>" +
        contoh2 + "<br>" + 
        contoh3;
    </script>

    <script>
        let berat1 = 5;
        let berat2 = 10;

        document.getElementById("cobaNumber").innerHTML = 
        berat1 + berat2;
    </script>
</body>
</html>