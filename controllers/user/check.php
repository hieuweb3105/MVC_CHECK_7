<?php

require 'vendor/autoload.php'; // Tải thư viện Google API

// Khởi tạo Google Client
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig(SHEET_JSON_FILE);
$client->setAccessType('offline');
$service = new Google_Service_Sheets($client);

# [VARIABLE]

$name_agency = '';
$name_customer = '';

# [HANDLE]

// get input name agency
if(isset($_POST['name_agency']) && $_POST['name_agency']) $name_agency = $_POST['name_agency'];
else {
    toast_create('danger','Vui lòng nhập Tên Đại Lý của bạn');
    route();
}
// get input name customer
if(isset($_POST['name_customer']) && $_POST['name_customer']) $name_customer = $_POST['name_customer'];
else {
    toast_create('danger','Vui lòng nhập Tên KH của bạn');
    route();
}

// save input
$_SESSION['temp']['name_agency'] = $name_agency;
$_SESSION['temp']['name_customer'] = $name_customer;

// condition call API : null data OR time query < duration time
if(empty($_SESSION['data']) || (time() - $_SESSION['temp']['time']) > REQUEST_API_TIME) {

    // call API get data from GG Sheet
    try {
        // query get
        $response = $service->spreadsheets_values->get(SHEET_ID, 'Info!A3:E');
        
        // get values
        $_SESSION['data'] = $response->getValues(); 

        // checks exist
        if (empty($_SESSION['data'])) {
            toast_create('danger', '[WARNING] Dữ liệu bảng Sheet đang trống !');
            route();
        }

        // save time call API
        $_SESSION['temp']['time'] = time();

    }
    catch (Google_Service_Exception $e) {
        // error 429: too many request in time
        if ($e->getCode() == 429) {
            toast_create('danger', 'Hệ thống đang quá tải !Vui lòng thử lại sau '.REQUEST_API_TIME.' giây');
            route();
        }else die($e);
    }
}

// handle check
foreach ($_SESSION['data'] as $row) {
    // reset old result & roomate
    $_SESSION['temp']['result'] = null;
    $_SESSION['temp']['roomate'] = null;
    // find input
    if(mb_strtolower($name_agency,'UTF-8') === mb_strtolower($row[1],'UTF-8') && mb_strtolower($name_customer,'UTF-8') === mb_strtolower($row[2],'UTF-8')) {
        // save in session temp
        $_SESSION['temp']['result'] = $row;
        // break find input if true
        break;
    }
}

// route
if(empty($_SESSION['temp']['result'])) {
    toast_create('danger','Không tìm thấy thông tin của Tên Đại Lý này');
    route();
}else route('result');