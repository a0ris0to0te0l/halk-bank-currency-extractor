<?php
include("/path-to-library/simplehtmldom/simple_html_dom.php");

function getExchangeRate($currency)
{
    $url = 'https://halkbank.mk/kursna-lista.nspx#';
    $html = file_get_html($url);

    $cell = $html->find('tr', $currency);
    $sell = $cell->find('td', 5);
    $buy = $cell->find('td', 3);

    if ($buy->plaintext == '0,0000' && $sell->plaintext == '0,0000') {
        return "Не се продаваат/купуваат $currency";
    }

    return "Куповен за $currency " . $buy->plaintext . "..." . "Продажен за $currency " . $sell->plaintext;
}

$currencyCodes = array('евра', 'лири', 'долари', 'фунти', 'франци', 'шведски круни', 'норвешки круни', 'јени', 'дански круни', 'канадски долари', 'австралиски долари');

foreach ($currencyCodes as $currency) {
    echo getExchangeRate($currency) . "<br>";
}
?>
