<?php
function getMeta($pg) {
	switch ($pg) {
		case "":
			$metatags = '<meta name="keywords" content="Lion Webdesign" />
				<meta name="description" content="Kútfúrás" />
				<title>Egyedi weboldal készítés</title>';
		break;	

		case "kezdolap":
			$metatags = '<meta name="keywords" content="Madricon" />
			<meta name="description" content="Kútfúrás" />
			<title>Madricon Kft.</title>';
		break;
		case "kutfuras":
			$metatags = '<meta name="keywords" content="Madricon" />
			<meta name="description" content="Kútfúrás" />
			<title>Madricon Kft.</title>';
		break;
		case "vizkezeles-es-viztisztitas":
			$metatags = '<meta name="keywords" content="Madricon" />
			<meta name="description" content="Kútfúrás" />
			<title>Madricon Kft.</title>';
		break;
		case "gepi-foldmunka":
			$metatags = '<meta name="keywords" content="Madricon" />
			<meta name="description" content="Kútfúrás" />
			<title>Madricon Kft.</title>';
		break;
	}
	return $metatags;

}
?>