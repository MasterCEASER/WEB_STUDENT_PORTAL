<?php
if(isset($_REQUEST["dwn"]) == true){
    $file = $_REQUEST['file_dwn'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($_REQUEST['file_name']).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
    $r = $_REQUEST['redirect'];
    header('Location:'.$r);

}
?>