<?php
	/*******************
	****  OpenGraph ****
	********************/
	$cacheBuster = "t26";
	$possibleLangValues = array(
		@$_REQUEST[ 'lang' ],
		@$_SERVER[ 'HTTP_X_FACEBOOK_LOCALE' ],
		@$_REQUEST[ 'fb_locale' ],
		@$_REQUEST[ 'fb_ref' ],
		@$_REQUEST[ 'locale' ],
	);
	
	// locale - default to english and filter dialects
	$locale = "en";
	$gstar_lang = array("en","es","pt");
	foreach ($possibleLangValues as $_lng) {
		foreach ($gstar_lang as $_glng) {
			if (substr($_lng, 0, 2) == $_glng) { 
				$locale = $_glng; // english
			}
			else if (substr($_lng, 0, 2) == $_glng) { 
				$locale = $_glng; // spanish
			}
			else if (substr($_lng, 0, 2) == $_glng) {
				$locale = $_glng; // portuguese
			}
		}
	}
	
	// OpenGraph MetaTag Array
	$og_keyword_common = "Globalstar,FindMeSpot,SPOT,SPOT TRACE,SPOT GEN3,SPOT Adventures,SatFi,Sat-Fi";
	$og = array(
		// english
		"en" => array(
			"title" 		=> "Globalstar Responsive Template",
			"site_name" 	=> "GlobalstarResponsiveTemplate",
			"url"			=> "http://www.findmespot.com/",
			"description" 	=> "Globalstar Responsive Template. FOR INTERNAL USE ONLY.",
			"keyword"		=> $og_keyword_common . "Satellitle Phone,SatPhone,Satellite Hotspot"
		),
		// spanish
		"es" => array(
			"title" 		=> "Plantilla Responsable de Globalstar",
			"site_name" 	=> "PlantillaResponsabledeGlobalstar",
			"url"			=> "http://la.findmespot.com/sp/",
			"description" 	=> "Plantilla Responsable de Globalstar. S&#211;LO PARA USO INTERNO.",
			"keyword"		=> $og_keyword_common . "Telefono satelital,Hotspot de sat&#233;lite"
			
		),
		// portuguese
		"pt" => array(
			"title" 		=> "Modelo responsivo Globalstar",
			"site_name" 	=> "ModeloresponsivoGlobalstar",
			"url"			=> "http://la.findmespot.com/pg/",
			"description" 	=> "Modelo responsivo Globalstar. APENAS PARA USO INTERNO.",
			"keyword"		=> $og_keyword_common . "Telefone via Sat&#233;lite,Hotspot de sat&#233;lite"
			
		)
	);
?>