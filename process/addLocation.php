<?php 
include "../bootstrap/init.php";

if (!isAjaxRequest()) {
    diePage('Invalid request!');
}
//request is Ajax and OK

if (insertLocation($_POST)) {
    echo "مکان با موفقیت در پایگاه داده ثبت شد و منتظر تائید مدیر است.";
}else {
    echo "مشکلی در ثبت مکان پیش آمده است!";
}