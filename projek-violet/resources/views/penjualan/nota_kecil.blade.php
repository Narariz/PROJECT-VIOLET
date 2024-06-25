<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Kecil</title>
    <?php
    $style = '
    <style>
        * {
            font-family: "Arial", sans-serif;
        }
        body {
            padding: 20px;
            background: #f7f7f7;
        }
        .nota {
            max-width: 70mm;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        p {
            margin: 5px 0;
            font-size: 10pt;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table td {
            font-size: 9pt;
            padding: 5px 0;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .btn-print {
            display: none;
        }

        @media print {
            @page {
                margin: 0;
                size: 75mm
    ';
    ?>
    <?php 
    $style .= 
        ! empty($_COOKIE['innerHeight'])
            ? $_COOKIE['innerHeight'] .'mm; }'
            : '}';
    ?>
    <?php
    $style .= '
            html, body {
                width: 70mm;
                background: none;
                padding: 0;
            }
            .btn-print {
                display: none;
            }
        }
    </style>
    ';
    ?>
    {!! $style !!}
</head>
<body onload="window.print()">
    <button class="btn-print" style="position: absolute; right: 1rem; top: 1rem;" onclick="window.print()">Print</button>
    <div class="nota">
        <div class="text-center">
            <img src="<?php echo asset('img/Logo Kasir.png'); ?>" alt="Logo" style="max-width: 50px;">
            <h3 style="margin-bottom: 5px;">{{ strtoupper($setting->nama_perusahaan) }}</h3>
            <p>{{ strtoupper($setting->alamat) }}</p>
        </div>
        <br>
        <div style="display: flex; justify-content: space-between;">
            <p>{{ date('d-m-Y') }}</p>
            <p>{{ strtoupper(auth()->user()->name) }}</p>
        </div>
        <p>No: {{ tambah_nol_didepan($penjualan->id_penjualan, 10) }}</p>
        <p class="text-center">===================================</p>
        <table>
            @foreach ($detail as $item)
                <tr>
                    <td colspan="3">{{ $item->produk->nama_produk }}</td>
                </tr>
                <tr>
                    <td>{{ $item->jumlah }} x {{ format_uang($item->harga_jual) }}</td>
                    <td></td>
                    <td class="text-right">{{ format_uang($item->jumlah * $item->harga_jual) }}</td>
                </tr>
            @endforeach
        </table>
        <p class="text-center">-----------------------------------</p>
        <table>
            <tr>
            <td>Total Harga:</td>
            <td class="text-right">{{ format_uang($penjualan->total_harga) }}</td>
            </tr>
            <tr>
                <td>Total Item:</td>
                <td class="text-right">{{ format_uang($penjualan->total_item) }}</td>
            </tr>
            <tr>
                <td>Diskon:</td>
                <td class="text-right">{{ format_uang($penjualan->diskon) }}</td>
            </tr>
            <tr>
                <td>Total Bayar:</td>
                <td class="text-right">{{ format_uang($penjualan->bayar) }}</td>
            </tr>
            <tr>
                <td>Diterima:</td>
                <td class="text-right">{{ format_uang($penjualan->diterima) }}</td>
            </tr>
            <tr>
                <td>Kembali:</td>
                <td class="text-right">{{ format_uang($penjualan->diterima - $penjualan->bayar) }}</td>
            </tr>
        </table>
        <p class="text-center">===================================</p>
        <p class="text-center">-- TERIMA KASIH --</p>
    </div>
    <script>
        let body = document.body;
        let html = document.documentElement;
        let height = Math.max(
                body.scrollHeight, body.offsetHeight,
                html.clientHeight, html.scrollHeight, html.offsetHeight
            );

        document.cookie = "innerHeight=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "innerHeight="+ ((height + 50) * 0.264583);
    </script>
</body>
</html>
