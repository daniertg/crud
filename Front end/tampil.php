<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
<h1>List Barang</h1>
<hr>
<div class="table-wrapper">
<table class="table">
    <tr><th>ID</th><th>NAMA</th><th>HARGA</th><th>STOK</th><th>ACTION</th></tr>
    
    <?php
    include 'koneksi.php';
    $barang = mysqli_query($koneksi, "SELECT * from barang");
    $no = 1;
    foreach ($barang as $row) {  
    echo "<tr>
    <td>" . $row['id_barang'] . "</td>
    <td>" . $row['nama_barang'] . "</td>
    <td>" . $row['harga_barang'] . "</td>
    <td>" . $row['stok_barang'] . "</td>
    <td><a href='update.php?id_barang=$row[id_barang]'><button type='button' class='edit'>Edit</button></a> "; ?>
	 <a href='delete.php?id_barang=<?=$row['id_barang'];?>' onclick="return confirm('Yakin akan menghapus Data?')"><button type='button' class='hapus'>Delete</button></a></td>
			              </tr>

			              <?php $no++; } ?>
    
        
   </table>         
            
            
        
    

    
</table>
</div>
<hr>


<a href="tambah.php"><button class="tambah">Tambah Barang</button></a>

    </div>
<style>
    .edit , .hapus , .tambah {
        background-color: #0d0e0e;
        border-radius: 5px;
        color: white;
        padding: 6px;
    }
        .tambah:hover{
        background-color: #2F4F4F;
    }
    .hapus:hover{
        background-color: #2F4F4F;
    }
    .edit:hover{
        background-color: #2F4F4F;
    }
    
.container {
          
          float: center;
          padding: 50px;
          background-color: white;
          height: 500px;
          width: 50%;
          margin-top: 100px;
          margin-left: 350px;
          border: solid black;
          
        }
        body{
            background-image: url("gambar1.png");
            background-size: cover;
        }
        .table{
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
             display: block;
             
        }
        th{
            padding: 16px 42px;
            display: table-cell;

            
        }
        td{
            padding: 16px 42px;
        }
    h2{
        margin-top: -5px;
        
    }
    
    
</style>

</body>
</html>
