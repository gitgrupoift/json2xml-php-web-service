<?php

  /////////////////////////////////
	// Require Array2XML class
	require_once('array2xml.php');

  /////////////////////////////////
  // This is to avoid errors for the local tests and the SSL connections.
	$arrContextOptions=array(
		"ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
		),
	);

  ////////////////////////////////
  // The link with the URL comes on a GET call.
  // having the index.php and array2xml.php files on a "/json2xml" folder in the webbrowser
  // Example:
  // http://localhost:8090/json2xml/?=URL
  // http://localhost:8090/json2xml/?=https://data.nasa.gov/resource/y77d-th95.json
  ////////////////////////////////
  $json = file_get_contents($_GET['link'], false, stream_context_create($arrContextOptions));
	$data = json_decode($json, true);

  ////////////////////////////////
  //  For debugging purposes. Show the content of $json and $data variables:
  //  echo $json;
  //  echo $data;
  ////////////////////////////////
	// adding Content Type
	header("Content-type: text/xml");

	$xml = Array2XML::createXML('root-element', $data);

	echo $xml->saveXML();

 ?>
