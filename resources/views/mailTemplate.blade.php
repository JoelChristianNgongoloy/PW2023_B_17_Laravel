<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Akun</title>
</head>

<body>
    <p>
        Halo <b>{{$details['name'] }}</b>
    </p>

    <p>
        Anda telah melakukan registrasi akun dengan menggunakan email ini.
    </p>

    <p>
        Berikut adalah data anda:
    </p>

    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{$details['name'] }}</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td>{{$details['website']}}</td>
        </tr>
        <tr>
            <td>Tanggal Register</td>
            <td>:</td>
            <td>{{$details['datetime']}}</td>
        </tr>
    </table>

    <center>
        <h3>Buka link dibawah untuk melakukan verifikasi akun.</h3>
        <b style="color: blue;">{{ $details['url'] }}</b>
    </center>

    <p>
        Terima Kasih telah melakukan registrasi.
    </p>

</body>

</html>