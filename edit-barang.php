<?php
include("koneksi.php");
if(isset($_GET['id'])){
    header("Location:barang.php?");
}
   $kode=$_GET['id'];
   $sql="SELECT * FROM barang where id=$kode";
   $query=mysqli_query($db,$sql);
   $barang=mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die("Data tidak di temukan");
   }
   ?>
   <html>
<head>
</head>
<body>
    <h1>From Edit Barang</h1>
    <form action="proses-edit-barang.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $barang['id']?>"/>
            <P>
                <label name="nama">Nama Barang : </label>
                <input type="taxt" value="<?php echo $barang['nama']?>"/>
            </p>
            <P>
                <label name="nama">Setok Barang : </label>
                <input type="taxt" value="<?php echo $barang['nama']?>"/>
            </p>
            <P>
                <label name="nama">Harga Barang : </label>
                <input type="taxt" value="<?php echo $barang['nama']?>"/>
            </p>
            <P>
                <input type="sumbit" value="Simpan" name="simpan"/>
            </p>
</fieldset>
</form>
</body>
</html>