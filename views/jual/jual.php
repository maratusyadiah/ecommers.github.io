<div data-role="panel" data-title-caption="List jual" data-collapsible="true" data-title-icon= "<span class='mif-chart-line'></span>" class="mt-4">
<table class="table row-hover">
    <thead>
        <th>Id jual</th>
        <th>tanggal transaksi </th>
        <th>nama barang</th>
        <th>jumlah barang</th>
        <th>total harga</th>
        <th>bayar</th>
        <th>Kembali</th>
    </thead>
    <?php  $no=1;
       foreach ($data['jual'] as $jual){  
    ?>
    <tbody>
        <td><?= $jual['idjual']?></td>
        <td><?= $jual['tgljual']?></td>
        <td><?= $jual['nmbarang']?></td>
        <td><?= $jual['jmlbarang']?></td>
        <td><?= $jual['totalharga']?></td>
        <td><?= $jual['bayar']?></td>
        <td><?= $jual['kembali']?></td>
     </tbody>
        
    <?php } ?> 
</table>
       </div>
        