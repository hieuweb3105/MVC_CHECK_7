<?php

if(isset($_POST['choose_agency']) && $_POST['choose_agency']) {
    $name_agency = $_POST['choose_agency'];
    foreach ($_SESSION['temp']['result'] as $list) {
        if($name_agency == $list[0]) {
            $_SESSION['temp']['result'][0] = $list;
            route('result');
        }
    }
}

view('user','Chọn đại lý', 'choose',null);