<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-02 03:07:18 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Goes.php [ 121 ] in file:line
2016-02-02 03:07:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/u65915115...', 121, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Goes.php(121): array_push(NULL, Array)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_brestAuto()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-02-02 04:04:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMNodeList::getElementsByTagName() ~ APPPATH/classes/Controller/Goes.php [ 379 ] in file:line
2016-02-02 04:04:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-02 04:05:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMNodeList::getAttribute() ~ APPPATH/classes/Controller/Goes.php [ 378 ] in file:line
2016-02-02 04:05:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-02 04:06:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMNodeList::getAttribute() ~ APPPATH/classes/Controller/Goes.php [ 379 ] in file:line
2016-02-02 04:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-02 04:07:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMElement::getElementByTagName() ~ APPPATH/classes/Controller/Goes.php [ 378 ] in file:line
2016-02-02 04:07:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-02 07:27:02 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to DOMXPath::__construct() must be an instance of DOMDocument, instance of DOMElement given, called in /home/u659151156/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Goes.php [ 381 ] in file:line
2016-02-02 07:27:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/u65915115...', 381, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Goes.php(381): DOMXPath->__construct(Object(DOMElement))
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_getGrodnoTaxi()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-02-02 07:27:29 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to DOMXPath::__construct() must be an instance of DOMDocument, string given, called in /home/u659151156/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Goes.php [ 381 ] in file:line
2016-02-02 07:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/u65915115...', 381, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Goes.php(381): DOMXPath->__construct('\n\t\n    \n\t\t\n    ...')
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_getGrodnoTaxi()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-02-02 07:50:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMElement::item() ~ APPPATH/classes/Controller/Goes.php [ 383 ] in file:line
2016-02-02 07:50:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-02 07:53:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMXPath::item() ~ APPPATH/classes/Controller/Goes.php [ 383 ] in file:line
2016-02-02 07:53:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-02 08:06:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMDocument::item() ~ APPPATH/classes/Controller/Goes.php [ 383 ] in file:line
2016-02-02 08:06:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-02 08:31:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Goes.php [ 390 ] in /home/u659151156/public_html/application/classes/Controller/Goes.php:390
2016-02-02 08:31:24 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Goes.php(390): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/u65915115...', 390, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_getGrodnoTaxi()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Goes.php:390
2016-02-02 08:49:43 --- EMERGENCY: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, object given ~ APPPATH/classes/Controller/Goes.php [ 401 ] in file:line
2016-02-02 08:49:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strlen() expect...', '/home/u65915115...', 401, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Goes.php(401): strlen(Object(DOMElement))
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_getGrodnoTaxi()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line