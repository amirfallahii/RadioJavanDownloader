<?php
require_once __DIR__ . '/vendor/autoload.php';

use spekulatius\phpscraper;

function isValidURL($url)
{
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

$radioJavanValidUrl = array(
    'radiojavan.com',
    'rj.app'
);

function isRadioJavanURL($url)
{
    global $radioJavanValidUrl;
    foreach ($radioJavanValidUrl as $query) {
        if (strpos($url, $query) !== false) return true;
    }
    return false;
}

if (isset($_POST['Search'])) {
    $url = $_POST['url'];
    if (isValidURL($url) && isRadioJavanURL($url)) {
        $scraper = new phpscraper;
        $scraper->go($url);
        if (array_key_exists('twitter:app:url:iphone', $scraper->twitterCard)) {
            $twitterCard = $scraper->twitterCard['twitter:app:url:iphone'];
            $metaData = explode("/", $twitterCard);
            $response = radiojavan($metaData[2], $metaData[3]);
            $response = json_decode($response, true);
        } else {
            $error = "Not a valid Radio Javan URL";
            include_once 'view.php';
            die();
        }
    } else {
        $error = 'Invalid URL';
        include_once 'view.php';
        die();
    }
    include_once 'download.php';
} else {
    include_once 'view.php';
}

function radiojavan($type, $id)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://rj.app/api2/{$type}?id={$id}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ]);

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}
