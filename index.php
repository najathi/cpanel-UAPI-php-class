<?php
include "cpaneluapi.class.php";
// new cpanelAPI('cpanelUsername', 'cpanelPassword', 'cpanelHostName')
$cPanel = new cpanelAPI('najathi', '4545454545', 'cpanel.slbi.lk');
$response = $cPanel->api2->Email->addpop(['email' => 'najathi786', 'domain' => 'najathi.lk', 'quota' => '', 'password' => 'najathi@2020']);
var_dump($response);
?>