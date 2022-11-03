<?php
if($aksi=='index'){
    $helpers->load_view('jual/jual.php');
}
if($aksi=='add'){
    $idbarang=$uri[4];
    $data['brg']=$db->query($connect,"SELECT * FROM tbarang WHERE idbarang='$idbarang'");
    $data['jual']=$db->query($connect,"SELECT max(right(idjual,4))AS kdjual FROM tjual");
    $helpers->load_view('jual/addjual.php',$data);
}