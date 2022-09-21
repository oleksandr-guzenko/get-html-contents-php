<?php

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url); // $url - website api to get contents 
	curl_setopt($curl, CURLOPT_REFERER, $url);

	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($curl, CURLOPT_POST, FALSE);

	curl_setopt($curl, CURLOPT_HEADER, TRUE);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE);
	curl_setopt($curl, CURLOPT_FAILONERROR, TRUE);
	curl_setopt($curl, CURLOPT_ENCODING, TRUE);

	curl_setopt($curl, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($curl, CURLOPT_COOKIEFILE, 'cookie.txt');

	curl_setopt($curl, CURLOPT_HTTPHEADER, ['text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9']);

	curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36');

	$content = curl_exec($curl);
	curl_close($curl);
	echo $content;
?>