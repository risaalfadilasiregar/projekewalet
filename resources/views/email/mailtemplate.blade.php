<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Pesan Admin</title>
</head>
<body>
    <p><b>Halo User </b></p>
    <table>
      {{-- <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$detail['nama']}}</td>
      </tr> --}}
      <tr>
        <td>Pesan</td>
        <td>:</td>
        <td>{{$detail['komentar']}}</td>
      </tr>
    </table>

</body>
</html>
