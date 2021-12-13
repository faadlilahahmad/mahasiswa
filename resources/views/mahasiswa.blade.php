<html>
    <head>    
        <title>Data Nilai Mahasiswa</title>
    </head>
    <body>
        <h3 align="center">DATA NILAI MAHASISWA</h3>

        <center><form action="index.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
        </form></center>


        <center><table  width="80%" border="1">
            <tr bgcolor="#539CDC">
                <th>NIM</th>
                <th>Nama</th>
                <th>Tugas Terstruktur</th>
                <th>Tugas Mandiri</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Input Nilai</th>
            </tr>

            @foreach($mahasiswa as $row)
            <tr style="text-align: center; vertical-align: middle;">
                <td>{{ $row->nim }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->tt }}</td>
                <td>{{ $row->tm }}</td>
                <td>{{ $row->uts }}</td>
                <td>{{ $row->uas }}</td>
                <td>{{ $row->na }}</td>
                <td><a href="{{ url('edit') }}"">Tambah Nilai</a></td>
            </tr>
            @endforeach
        </table></center>
        <br>
        <br>
    </body>
</html>