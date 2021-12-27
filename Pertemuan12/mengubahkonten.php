<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="tulisan1">Ini adalah tulisan sebelum diubah</h1>
    <button onclick="change()">Ubah</button>

    <script>
        function change(){
            document.getElementById("tulisan1").innerHTML = "Ini adalah tulisan setelah diubah";
        }
    </script>
</body>
</html>