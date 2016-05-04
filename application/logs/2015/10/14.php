<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-14 05:36:53 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(): php_network_getaddresses: getaddrinfo failed: Temporary failure in name resolution ~ APPPATH/classes/Controller/Main.php [ 134 ] in file:line
2015-10-14 05:36:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/home/u65915115...', 134, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(134): file_get_contents('http://info.21....')
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_vitebskAuto()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line