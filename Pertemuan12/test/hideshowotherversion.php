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
    <h1>Hello World!</h1>
    <p id="demo">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </p>
    <button onclick="hide()">Hide</button>
    <button onclick="show()">Show</button>

    <script>
        function hide(){
            document.getElementById("demo").style.display = "none";
        }
        function show(){
            document.getElementById("demo").style.display = "block";
        }
    </script>
</body>
</html>