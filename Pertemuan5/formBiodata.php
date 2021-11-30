<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Biodata</h3>
    <form name="form1" method="POST">
        <table border="1">

            <!-- baris nama -->
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="txtnama" id="nama" size="50">
                </td>
            </tr>

            <!-- baris tempat tanggal lahir -->
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="text" name="tempat" id="tempat" size="20">
                    <input type="text" name="tanggal" id="tanggal" size="3">
                    <select name="sBulan" id="bulan">
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                    </select>
                    <select name="sTahun" id="tahun">
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                    </select>
                </td>
            </tr>

            <!-- baris agama -->
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <input type="radio" name="rAgama" id="1">Islam <br>
                    <input type="radio" name="rAgama" id="2">Kristen <br>
                    <input type="radio" name="rAgama" id="3">Katolik <br>
                </td>
            </tr>

            <!-- baris hobi -->
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="cbHobi" id="hobi1" value="memancing">Memancing <br>
                    <input type="checkbox" name="cbHobi" id="hobi2" value="membaca">Membaca <br>
                    <input type="checkbox" name="cbHobi" id="hobi3" value="berlari">Berlari <br>

                </td>
            </tr>

            <!-- baris untuk komentar -->
            <tr>
                <td>komentar</td>
                <td>:</td>
                <td>
                    <textarea name="textarea" id="textarea" cols="30" rows="5"></textarea>
                </td>
            </tr>

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