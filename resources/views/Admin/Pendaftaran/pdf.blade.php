<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Peserta Didik Baru</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .section p {
            margin: 5px 0;
        }

        .image {
            text-align: center;
            margin-top: 20px;
        }

        .image img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Pendaftaran Peserta Didik Baru</h1>
        </div>
        <div class="section">
            <h2>Detail Pendaftaran</h2>
            <p><strong>Tanggal Daftar:</strong> {{ $tgl_daftar }}</p>
            <p><strong>Tahun Ajaran:</strong> {{ $th_ajaran }}</p>
            <p><strong>Nama Peserta:</strong> {{ $nm_peserta }}</p>
            <p><strong>Tempat Lahir:</strong> {{ $tmp_lahir }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $tgl_lahir }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $jk }}</p>
            <p><strong>Alamat:</strong> {{ $almt_peserta }}</p>
        </div>
        @if ($image)
            <div class="image">
                <h2>Foto Peserta</h2>
                <img src="{{ public_path($image) }}" alt="Foto Peserta">
            </div>
        @endif
    </div>
</body>

</html>
