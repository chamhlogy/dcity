
<?php
$data = $_POST;
foreach ( $data as $key => $value ) {
$data[$key] = urlencode ( $value );
}
echo urldecode(json_encode($data));
$json_string = urldecode(json_encode($data));
file_put_contents('test1.json', $json_string);
?>