<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tabel dengah tabel header</h3>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>Adit</td>
            <td>Sistem Informasi</td>
        </tr>
    </table>

    <h4>Vertical Header</h4>
    <table border="5">
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td>Adit</td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td>:</td>
            <th>Sistem Informasi</th>
        </tr>
    </table>
<br><hr>

    <h4>Empty Cell</h4>
    <table border="2">
        <tr>
            <td>Tulisan Teks</td>
            <td>Tulisan Teks</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Tulisan Teks</td>
        </tr>
        <tr>
            <td>Tulisan Teks</td>
            <td>&nbsp;</td>
        </tr>
        
    </table>

    <br><hr>
    <h4>Colspan dan Rowspan</h4>
    <!-- Colspan -->
    <table border="2">
        <tr>
            <th>Hari</th>
            <th colspan="3">Kuliah</th>
        </tr>
        <tr>
            <td>Senin</td>
            <td>Web Desain</td>
            <td>Aplikasi Web</td>
            <td>Database</td>
        </tr>
    </table>
    <br>
    <!-- Rowspan -->
    <table border="2">
        <tr>
            <th>Hari :</th>
            <td>Senin</td>
        </tr>
        <tr>
            <th rowspan="3">Kuliah</th>
            <td>Web Desain</td>
        </tr>
        <tr>
            <td>Aplikasi Web</td>
        </tr>
        <tr>
            <td>Database</td>
        </tr>

    </table>

</body>
</html>