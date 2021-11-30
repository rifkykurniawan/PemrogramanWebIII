<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Tag Didalam Tabel</h4>
    <table border="2" bgcolor="green">
        <tr>
            <td><p>Ini adalah sebuah tag paragraf</p></td>
            <td>
                <table border="1">
                    <tr>
                        <td>A</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>B</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>Tabel Berisi List</td>
            <td>
                <ul type="Square">
                    <li>Pemrograman Web</li>
                    <li>Bahasa Indonesia</li>
                    <li>Sistem Basis Data</li>
                    <li>Pemrograman Mobile</li>
                </ul>            
            </td>
        </tr>
    </table>

    <hr>
    <h4>Tanpa Cellpadding</h4>
    <table border="1">
        <tr>
            <td>A</td>
            <td>B</td>
        </tr>
        <tr>
            <td>C</td>
            <td>D</td>
        </tr>
    </table>

    <h4>Dengan Cellpadding</h4>
    <table border="1" cellpadding="12">
        <tr>
            <td>A</td>
            <td>B</td>
        </tr>
        <tr>
            <td>A</td>
            <td>B</td>
        </tr>
    </table>

    <br>

    <h4>Dengan Cellspacing</h4>
    <table border="1" cellspacing="12">
        <tr>
            <td>A</td>
            <td>B</td>
        </tr>
        <tr>
            <td>A</td>
            <td>B</td>
        </tr>
    </table>

    <h4>Memberi Background dengan Gambar</h4>
    <table border="2" ">
        <tr>
            <td><p>Ini adalah sebuah tag paragraf</p></td>
            <td>
                <table border="1">
                    <tr>
                        <td>A</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>B</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr background="gambar.png">
            <td align="center">Tabel Berisi List</td>
            <td>
                <ul type="Square">
                    <li>Pemrograman Web</li>
                    <li>Bahasa Indonesia</li>
                    <li>Sistem Basis Data</li>
                    <li>Pemrograman Mobile</li>
                </ul>            
            </td>
        </tr>
    </table>

</body>
</html>