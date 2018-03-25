<?php

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ======
// 
// Run local:
// git clone https://github.com/michaelstingl/figma-preview.git
// cd figma-preview
// sed -i -e 's/XX-XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/replace-with-your-personal-access-token/g'  index.php
// php -S localhost:8080
// 
// Return image data:
// http://localhost:8080/?file=Ui4YzD3oQcxJSbzBEr80O9eU&node-id=18:646&format=.png
// 
// Return $imageUrl as text:
// http://localhost:8080/?file=Ui4YzD3oQcxJSbzBEr80O9eU&node-id=18:646&format=.debug
// 
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ======


$figma_personal_access_token = "XX-XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX";
$figma_api_url = "https://api.figma.com/v1/images/";

$figma_file = isset($_GET["file"]) ? $_GET["file"] : null;
$figma_node_id = isset($_GET["node-id"]) ? $_GET["node-id"] : null;
$figma_file_type = isset($_GET["format"])? $_GET["format"] : null;

if ( $figma_file === null || $figma_node_id  === null) {
    die("missing params");
}

// Create a stream to add headers for HTTP GET request
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"X-Figma-Token: " . $figma_personal_access_token
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$result = file_get_contents( $figma_api_url . $figma_file . "?ids=" . $figma_node_id, false, $context);
$json = json_decode($result, true);
$imageUrl = $json["images"][$figma_node_id];

if ($figma_file_type  == ".png") {

  // Return image data
  $image = imagecreatefromstring(file_get_contents($imageUrl));
  header('Content-Type: image/png');
  imagepng($image);

} else {

  echo $imageUrl;

}
