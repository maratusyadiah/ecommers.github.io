<?php 
foreach($data['jual'] as $jual){
    if($jual>0){
        $no=((int)$jual['kdjual'])+1;
        $kd=sprintf("%04s",$no);
    }else{
        $kd="0001";
    }
    date_default_timezone_set('asia/jakarta');
    $kodejual=date("ymd").$kd;
    }
?>
<script type="text/javascript">
    function startCalc(){
        interval=setInterval("calc()",1);
        }
        function calc(){
            harga=document.jual.harga.value;
            qty=document.jual.jmlbarang.value;
            document.jual.totalharga.value=(harga*1)*(qty*1);
            }
            function stopCalc(){
                clearInterval(interval);
            }
         </script>
<caption><h1>Data Jual</h1></caption>
<div>
    <form action="" method="post" name="jual">
     <div>
    <label for="">Id Jual</label>
    <input type="text" name="idjual" id="" value="<?= $kodejual ?>" readonly>
        <div>
</div>
<label for="">Tanggal Transaksi</label>
<input type="date" name="tgljual" placholder="yyyy-mm-dd" required>
<div>
    <div>
        <div>
            <?php 
            foreach ($data['brg'] as $brg) {
            ?>
        </div>
        <label for="">Nama Barang</label>
        <input type="text" name="idbarang" id=""  value="<?= $brg['idbarang']?>" hidden>
        <input type="text" name="nmbarang" id=""  value="<?= $brg['nmbarang']?>" readonly>
        <div>
        <input type="text" name="harga" value="<?= $brg['harga']?>" onfocus="startCalc()" onblur="stopCalc()" readonly>
</div>
<?php }?>
    </div>
    <div>
       <label for="">Qty</label>
       <input type="number" name="jmlbarang" id="" onfocus="startCalc()" onblur="stopCalc()" required>
    </div>
    <div>
        <label for="">Total Harga</label>
        <input type="number" name="totalharga" id="" onfocus="startCalc()" onblur="stopCalc()" readonly>
    </div>
    <div>
        <label for="">Bayar</label>
        <input type="number" name="bayar" id=""required>
    </div>
    <div>
        <label for="">kembalian</label>
        <input type="number" name="kembali" id=""readonly>
    </div>
</form>
</div>