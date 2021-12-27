<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        var kondisi = confirm("Apakah anda ingin mengunjungi halaman ini??");

        if (kondisi) {
            window.location = "https://www.google.com";            
        }else{
            document.write("Anda tidak jadi mengunjungi halaman itu");
        }
    </script>
</body>
</html>