<div data-role="panel" data-title-caption="List Distributor" data-collapsible="true" data-title-icon= "<span class='mif-chart-line'></span>" class="mt-4">
<table class="table row-hover">
<a class="button success" href="<?= $base_url; ?>distributor/Add/"><span class="mif-add"></span></a>
    <thead>
        <th>Nomor</th>
        <th>Nama Distributor</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th colspan=2>Tools</th>
    </thead>
    <?php
       $no=1;
    foreach ($data['distributor'] as $distributor) {
        ?>
    <tbody>
        <td><?= $no ?></td>
        <td><?= $distributor['nmdist']?></td>
        <td><?= $distributor['alamat']?></td>
        <td><?= $distributor['notelp']?></td>
        <td><a class="button info" href="<?= $base_url.'distributor/edit/'.$distributor['iddist']?>"><span class="mif-pencil"></span>
        <a  class="button alert" href="<?= $base_url.'distributor/hapus/'.$distributor['iddist']?>"  onclick="return confirm('Yakin dihapus?')"><span class="mif-bin"></span></td>
    </tbody>
    <?php
       $no++;
    }
    ?>
    </tbody>
</table>