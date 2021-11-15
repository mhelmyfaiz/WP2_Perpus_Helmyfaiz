<html>

<head>
    <title>Tampil Output Penjualan Sepatu</title>
</head>

<body>
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Tampil Data Transaksi Penjualan Toko Sepatu
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr>
            <tr> 
                <th>Nama Pembeli</th> 
                <th>:</th> 
                <td> 
                    <?= $nama; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>No. Hp</td> 
                <td>:</td> 
                <td> 
                    <?= $no; ?> 
                </td> 
            </tr>
            <tr> 
                <td>Merk Sepatu</td> 
                <td>:</td> 
                <td> 
                    <?= $merk; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>harga</td> 
                <td>:</td> 
                <td> 
                    <?= $harga; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Ukuran Sepatu</td> 
                <td>:</td> 
                <td> 
                    <?= $ukr; ?> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('tokosepatu'); ?>">Kembali</a> 
                </td>
            </tr>
        </table>
    </center>
</body>

</html>