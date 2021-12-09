<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.button {
  background-color: #008CBA; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Rincian Order Sepatu</h3>

<div>
  <form action="<?= base_url('sepatu/cetak'); ?>"method="post">
    <label for="nama">Nama Pembeli</label>
    <input type="text" id="nama" name="nama" value="<?= $nama; ?>" Readonly>

    <label for="nohp">No Hp</label>
    <input type="text" id="nohp" name="nohp" value="<?= $nohp; ?>" Readonly>

    <label for="merek">Merek</label>
    <input type="text" id="merek" name="merek" value="<?= $merek; ?>" Readonly>

    <label for="harga">Harga</label>
    <input type="text" id="harga" name="harga" value="<?= $harga; ?>" Readonly>

    <label for="ukuran">Ukuran Sepatu</label>
    <input type="text" id="ukuran" name="ukuran" value="<?= $ukuran; ?>" Readonly>

    <button class="button"><a href="<?= base_url('sepatu'); ?>">Kembali</a></button>
  </form>
</div>

</body>
</html>


