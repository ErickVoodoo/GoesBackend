<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-18 13:15:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 393 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:393
2015-06-18 13:15:51 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(393): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 393, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:393
2015-06-18 13:22:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 393 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:393
2015-06-18 13:22:52 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(393): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 393, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:393