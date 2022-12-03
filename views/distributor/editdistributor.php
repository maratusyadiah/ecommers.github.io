<caption><h1> Edit Data Distributor</h1></caption>
<?php foreach ($data['distributor']as $edit){ ?>
<form action="<?php echo $base_url.'distributor/ubah/'.$edit['iddist']?>" method="post">
    <label for="">Nama Distributor</label>
    <input type="text" name="nmdist" id="" value="<?= $edit['nmdist']?>">
    <label for="">Alamat</label>
    <textarea name="alamat" id="" value="<?= $edit['alamat']?>"></textarea>
    <label for="">No Telepon</label>
    <input type="text" name="notelp" id="" value="<?= $edit['notelp']?>">
    <input type="submit" value="Simpan">
    <input type="reset" value="Batal">
</form>
<?php } ?>