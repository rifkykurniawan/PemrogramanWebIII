<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
h1{
    text-shadow: 2px 2px;
}
</style>
<body>
    <h1>CONTOH FORM</h1>
    <form action="info.php" method="post">

    
        Nama : <input type="text" name="nama" id="nama"><br>
        Umur : <input type="text" name="umur" id="umur"><br>


        <input type="radio" name="rAgama" id="1" value="islam">Islam <br>
                    <input type="radio" name="rAgama" id="2" value="katolik">Katolik <br>
                    <input type="radio" name="rAgama" id="3" value="kristen">Kristen <br>
                    <input type="radio" name="rAgama" id="4" value="Hindu">Hindu <br>
                    <input type="radio" name="rAgama" id="5" value="Budha">Budha <br>
                    <input type="radio" name="rAgama" id="6" value="Konghucu">Konghucu <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>