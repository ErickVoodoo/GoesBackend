<?php
try{
	/*GET USERS*/
	$url = "http://vkcheck.hol.es/main/getUsers";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$users = curl_exec($ch);
	$json = json_decode($users);
	/**/
	/*GET USERS INFO*/
	if($json != null && $json->message != null)
	{
		$url = "https://api.vk.com/method/users.get?user_ids=" . $json->message . "&fields=online,last_seen";
		echo "vk";
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, 1);

		$content = curl_exec($ch);
		if($content != null)
		{
			echo "history";
			echo $content;
			/**/
			/*POST TO HOSTINGER*/
			$values = "secret=mozolevski999&history=" . $content;

			$url = "http://vkcheck.hol.es/main/reloadHistory";

			$ch = curl_init($url);

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $values);
			curl_setopt($ch, CURLOPT_FAILONERROR, 1);
			curl_setopt($ch, CURLOPT_AUTOREFERER, 1);

			$content = curl_exec($ch);
		}
	}
}
catch(Exception $es)
{
	echo $es;
}
