<?php
$xmlURL = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req='.date('d/m/Y');
$tpl = isset($tpl) ? $modx->getChunk($tpl) : 'EUR: [+euro+] руб | USD: [+usd+] руб';

//кэширование 6 часов
$filename = MODX_BASE_PATH.'cache/kurs.xml';
if (!file_exists($filename) || (file_exists($filename) && time() > filemtime($filename) + 60*60*6)) {
        $file = file_get_contents($xmlURL);
        if ($file) {
                file_put_contents($filename, $file);
                @chmod($filename, 0666);
        }
}

$xml = simplexml_load_file($filename);
if ($xml != false){
        $usd = $xml->xpath('Valute[@ID="R01235"]/Value');
        $usd = round(str_replace(',','.',$usd[0]),1);
        $euro = $xml->xpath('Valute[@ID="R01239"]/Value');
        $euro = round(str_replace(',','.',$euro[0]),1);
        $output = str_replace(array('[+usd+]','[+euro+]'),array($usd,$euro),$tpl);
        return $output;
}
?>