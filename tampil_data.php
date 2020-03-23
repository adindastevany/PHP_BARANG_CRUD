<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="data_style.css">
</head>
<body>
<div class="table-wrapper">
<table class="fl-table mt-5">
    <thead>
		<tr>
			<th>No</th>
			<th>Barang</th>
			<th>Stok</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Action</th>
        </tr>
        </thead>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
            ?>
        
        <tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_barang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td><?php echo $row['harga_beli']; ?></td>
				<td><?php echo $row['harga_jual']; ?></td>
				<td>
                <button type="button" class="btn btn-outline-success"><a href="edit.php?id=<?php echo $row['id_barang']; ?>">Update</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="proses_barang.php?action=delete&id=<?php echo $row['id_barang']; ?>">Delete</a></button>
                <button type="button" class="btn btn-outline-warning"><a href="tambah_data.php">Tambah Data</a></button>
                </td>
                
            </tr>
            </tbody>
			<?php 
		}
		?>
    </table>
    </div>
</body>
</html>