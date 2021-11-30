<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 align="center">Formulir Biodata</h3>
    <form name="form1" method="POST">
        <table align="center" border="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="txtnama" id="txtnama" size="50">
                </td>
            </tr>
            <!-- baris baru -->
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="text" name="tempat" id="tempat" size="20">,
                    <input type="text" name="tanggal" id="tanggal" size="2">
                    <select name="sBulan" id="sBulan">
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                    </select>
                    <select name="sTahun" id="sTahun">
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                    </select>
                </td>
            </tr>
            <!-- baris baru -->
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <input type="radio" name="rAgama" id="1" value="islam">Islam <br>
                    <input type="radio" name="rAgama" id="2" value="katolik">Katolik <br>
                    <input type="radio" name="rAgama" id="3" value="kristen">Kristen <br>
                    <input type="radio" name="rAgama" id="4" value="Hindu">Hindu <br>
                    <input type="radio" name="rAgama" id="5" value="Budha">Budha <br>
                    <input type="radio" name="rAgama" id="6" value="Konghucu">Konghucu <br>
                </td>
            </tr>
            <!-- baris baru -->
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="cbHobi" id="1" value="memancing">Memancing <br>
                    <input type="checkbox" name="cbHobi" id="1" value="memancing">Memancing <br>
                </td>
            </tr>
            <!-- baris baru -->
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>
                    <textarea name="textarea" id="txtarea" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <!-- baris baru -->
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>