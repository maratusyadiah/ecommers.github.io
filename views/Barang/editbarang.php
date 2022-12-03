<?php
foreach ($data['brg']as $brg){
    
 ?>
<caption><h1>Data Barang</h1></caption>
<form action="<?= $base_url.'barang/ubah/'.$brg['idbarang']?>" method="post">
    <div>
        <label for="">id Barang</label>
        <input type="text" name="idbarang" id="" value="<?= $brg['idbarang'] ?>" readonly>
    </div>
    <div>
        <label for="">Nama Barang</label>
        <input type="text" name="nmbarang" id="" value="<?= $brg['nmbarang']?>">
    </div>
    <div>
        <label for="">jenis Barang</label>
         <select name="idjenis" id="">
            <option value="<?=$brg['idjenis']?>">
            <?= $brg['jenisbarang']?>
        </option>
            <option>Pilih</option>
            <?php  foreach ($data['jenbarang'] as $jen) {?>
            <option value="<?= $jen['idjenis']?>"><?=$jen['jenisbarang']?></option>
            <?php }?>
         </select>
    </div>
    <div>
        <label for="">Stok Barang</label>
        <input type="number" name="stok" id="" value="<? $brg['stok']?>">
    </div>
    <div>
        <label for="">Harga Barang</label>
        <input type="number" name="harga" id="" value="<?= $brg['harga']?>">
    </div>
    <div>
        <label for="">Nama Pengirim</label>
         <select name="iddist" id="">
            <option value="<?= $brg['iddist']?>">
            <?=$brg['nmdist']?>
            </option>
            <option>Pilih</option>
            <?php  foreach ($data['distri'] as $dist) {?>
            <option value="<?= $dist['iddist']?>"><?=$dist['nmdist']?></option>
            <?php }?>
         </select>
    </div>
    <div>
        <input type="submit" value="Simpan">
        <input type="reset" value="Batal">
    </div>
</form>
<?php } ?>