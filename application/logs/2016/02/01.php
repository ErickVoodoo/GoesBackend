<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-01 15:25:05 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Goes.php [ 123 ] in file:line
2016-02-01 15:25:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/u65915115...', 123, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Goes.php(123): array_push(NULL, Array)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_brestAuto()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line