<!DOCTYPE html>
<html>

<head>
    <title>Detail Pendaftaran Peserta Didik Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @media print {
            @page {
                margin: 20px;
            }

            body {
                margin: 20px;
            }
        }

        .ttd {
            position: relative;
            text-align: center;
        }

        .ttd .tgl-surabaya {
            position: absolute;
            top: -30px;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
</head>

<body class="font-sans text-sm p-4">
    <div class="flex justify-center items-center">
        <img src="{{ asset('assets/sma.png') }}" alt="Logo Sekolah" class="mr-4" style="max-width: 100px;">
        <div class="text-center">
            <h1 class="text-xl font-bold">YAYASAN AN-NAJIYAH</h1>
            <h1 class="text-xl font-bold">SEKOLAH MENENGAH ATAS</h1>
            <h1 class="text-xl font-bold">SMA AN-NAJIYAH</h1>
            <p>JL. SIDOSERMO IV / 7, Sidosermo, Kec. Wonocolo, Kota Surabaya Prov. Jawa Timur</p>
        </div>
    </div>
    <div class="flex justify-center items-center mb-6">
        <p class="text-xl font-bold">
            ________________________________________________________________________________________________________________________________
        </p>
    </div>
    <div class="flex justify-center items-center mb-6">
        <h1 class="text-xl font-bold mb-10">DETAIL PENDAFTARAN SISWA</h1>
    </div>
    <div class="flex justify-center">
        <table class="w-full max-w-3xl text-base">
            <tr class="bg-gray-100">
                <th class="p-2 text-left">Tahun Ajaran</th>
                <td class="p-2">{{ $pendaftaran->th_ajaran }}</td>
            </tr>
            <tr>
                <th class="p-2 text-left">Tanggal Daftar</th>
                <td class="p-2">{{ $pendaftaran->tgl_daftar }}</td>
            </tr>
            <tr class="bg-gray-100">
                <th class="p-2 text-left">Nama Lengkap Siswa</th>
                <td class="p-2">{{ $pendaftaran->nm_peserta }}</td>
            </tr>
            <tr>
                <th class="p-2 text-left">Jenis Kelamin</th>
                <td class="p-2">{{ $pendaftaran->jk }}</td>
            </tr>
            <tr class="bg-gray-100">
                <th class="p-2 text-left">Tempat Lahir</th>
                <td class="p-2">{{ $pendaftaran->tmp_lahir }}</td>
            </tr>
            <tr>
                <th class="p-2 text-left">Tanggal Lahir</th>
                <td class="p-2">{{ $pendaftaran->tgl_lahir }}</td>
            </tr>
            <tr class="bg-gray-100">
                <th class="p-2 text-left">Alamat</th>
                <td class="p-2">{{ $pendaftaran->almt_peserta }}</td>
            </tr>
        </table>
    </div>

    <div class="flex justify-center mt-10 mr-40">
        <div class="text-center font-normal text-base">
            <p>Demikian data diri kami sampaikan untuk dapat dipergunakan sebagaimana mestinya</p>
        </div>
    </div>

    <div class="mt-60 flex justify-center">
        <div class="ttd">
            <p class=" ml-96 font-semibold">Surabaya, {{ $pendaftaran->tgl_daftar }}</p>
            <div class="flex justify-end mt-8">
                <div class="text-center font-semibold text-base mr-96">
                    <p>Wali Siswa</p>
                    <br><br><br>
                    <p>______________________</p>
                </div>
                <div class="text-center text-base font-semibold">
                    <p>Calon Siswa</p>
                    <br><br><br>
                    <p>______________________</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
