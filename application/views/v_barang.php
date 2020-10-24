<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Barang</title>
</head>

<body>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Merk</th>
        </thead>
        <tbody>
            <?php foreach ($list_barang as $key) : ?>
                <tr>
                    <td><?= $key->id ?></td>
                    <td><?= $key->nm_brg ?></td>
                    <td><?= $key->jml ?></td>
                    <td><?= $key->merk ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>