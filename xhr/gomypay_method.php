<?php
if ($f == 'gomypay_method') {
    if ($s == 'pay_pro') {
        if (Wo_CheckSession($hash_id) === true) {
            if (empty($_POST['type']) || !in_array($_POST['type'], array_keys($wo['pro_packages_types']))) {
                $error = $error_icon . $wo['lang']['please_check_details'];
            }

            if (empty($error)) {
                $shp_item = $_POST['type'];
                $shp_type = 'pro';
                $shp_user = $wo['user']['user_id'];

                $mrh_login = $wo['config']['robokassa_shop_id'];
                $mrh_pass1 = $wo['config']['robokassa_password_1'];

                $array = array(
                    'user_id' => $wo['user']['user_id'],
                    'time' => time()
                );

                $inv_id = Wo_RegisterInvoice($array);
                $inv_desc = !empty($_POST['description']) ? Wo_Secure($_POST['description']) : '';
                $out_summ = number_format((float) $_POST['amount'], 2, '.', '');

                $crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item:Shp_type=$shp_type:Shp_user=$shp_user");

                // build URL
                $url = "https://auth.robokassa.ru/Merchant/Index.aspx?MrchLogin=$mrh_login&" .
                    "OutSum=$out_summ&InvId=$inv_id&Desc=$inv_desc&Shp_item=$shp_item&Shp_type=$shp_type&Shp_user=$shp_user&SignatureValue=$crc";

                $data = array(
                    'status' => 200,
                    'link' => $url
                );
            } else {
                $data = array(
                    'status' => 500,
                    'message' => $error
                );
            }
        }

        header("Content-type: application/json");
        echo json_encode($data);
        exit();
    }

    if ($s == 'wallet') {
        if (Wo_CheckSession($hash_id) === true) {
            $shp_type = 'wallet';
            $shp_user = $wo['user']['user_id'];

            $mrh_login = $wo['config']['robokassa_shop_id'];
            $mrh_pass1 = $wo['config']['robokassa_password_1'];
            $array = array(
                'user_id' => $wo['user']['user_id'],
                'time' => time()
            );

            $inv_id = Wo_RegisterInvoice($array);
            $inv_desc = !empty($_POST['description']) ? Wo_Secure($_POST['description']) : '';
            $out_summ = number_format((float) $_POST['amount'], 2, '.', '');
            $crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_type=$shp_type:Shp_user=$shp_user");

            // build URL
            $url = "https://auth.robokassa.ru/Merchant/Index.aspx?MrchLogin=$mrh_login&" .
                "OutSum=$out_summ&InvId=$inv_id&Desc=$inv_desc&Shp_type=$shp_type&Shp_user=$shp_user&SignatureValue=$crc";

            $data = array(
                'status' => 200,
                'link' => $url
            );
        }

        header("Content-type: application/json");
        echo json_encode($data);
        exit();
    }

    if ($s == 'donate') {
        if (Wo_CheckSession($hash_id) === true) {
            $shp_item = $_POST['type'];
            $shp_type = 'donate';
            $shp_user = $wo['user']['user_id'];

            $mrh_login = $wo['config']['robokassa_shop_id'];
            $mrh_pass1 = $wo['config']['robokassa_password_1'];
            $array = array(
                'user_id' => $wo['user']['user_id'],
                'time' => time()
            );

            $inv_id = Wo_RegisterInvoice($array);
            $inv_desc = !empty($_POST['description']) ? Wo_Secure($_POST['description']) : '';
            $out_summ = number_format((float) $_POST['amount'], 2, '.', '');
            $crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item:Shp_type=$shp_type:Shp_user=$shp_user");

            // build URL
            $url = "https://auth.robokassa.ru/Merchant/Index.aspx?MrchLogin=$mrh_login&" .
                "OutSum=$out_summ&InvId=$inv_id&Desc=$inv_desc&Shp_item=$shp_item&Shp_type=$shp_type&Shp_user=$shp_user&SignatureValue=$crc";

            $data = array(
                'status' => 200,
                'link' => $url
            );
        }

        header("Content-type: application/json");
        echo json_encode($data);
        exit();
    }
}
