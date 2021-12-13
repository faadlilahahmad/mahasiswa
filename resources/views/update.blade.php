<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3 align="center">FORM UBAH DATA</h3>
        
        <form action="update.blade.php" method="POST">
            <table align="center">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" value="" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" value="" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Tugas Terstruktur</td>
                    <td>:</td>
                    <td><input type="number" name="tt" value="" required/></td>
                </tr>
                <tr>
                    <td>Tugas Mandiri</td>
                    <td>:</td>
                    <td><input type="number" name="tm" value="" required /></td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts" value="" required /></td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas" value="" required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Tambah" /> 
                        <input type="reset" name="reset" value="Hapus" />
                        <input type="button" name="back" value="Kembali" onclick="self.history.back()">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>