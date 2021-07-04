<?PHP
header('Access-Control-Allow-Origin: *');
src = $_GET["src"]

$jsonString = file_get_contents('jsonFile.json');
$data = json_decode($jsonString, true);

foreach ($data as $key => $entry) {
    if ($entry['src'] == src) {
        $data[$key]['count']++;
    }
}

$newJsonString = json_encode($data);
file_put_contents('jsonFile.json', $newJsonString);
?>
