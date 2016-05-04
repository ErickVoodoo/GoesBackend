<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-28 02:13:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMDocument::getElementByClass() ~ APPPATH/classes/Controller/Value.php [ 15 ] in file:line
2016-01-28 02:13:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-28 02:19:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMDocument::getElementsByClassName() ~ APPPATH/classes/Controller/Value.php [ 15 ] in file:line
2016-01-28 02:19:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-28 02:26:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dom ~ APPPATH/classes/Controller/Value.php [ 16 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:16
2016-01-28 02:26:10 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/u65915115...', 16, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:16
2016-01-28 02:26:57 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DOMXPath could not be converted to string ~ APPPATH/classes/Controller/Value.php [ 19 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:19
2016-01-28 02:26:57 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(19): Kohana_Core::error_handler(4096, 'Object of class...', '/home/u65915115...', 19, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:19
2016-01-28 02:27:31 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DOMNodeList could not be converted to string ~ APPPATH/classes/Controller/Value.php [ 19 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:19
2016-01-28 02:27:31 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(19): Kohana_Core::error_handler(4096, 'Object of class...', '/home/u65915115...', 19, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:19
2016-01-28 02:27:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DOMNodeList::count() ~ APPPATH/classes/Controller/Value.php [ 19 ] in file:line
2016-01-28 02:27:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-28 02:31:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dom ~ APPPATH/classes/Controller/Value.php [ 16 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:16
2016-01-28 02:31:27 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/u65915115...', 16, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:16
2016-01-28 02:31:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rows_li ~ APPPATH/classes/Controller/Value.php [ 20 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:20
2016-01-28 02:31:39 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/u65915115...', 20, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:20
2016-01-28 02:31:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: innerHTML ~ APPPATH/classes/Controller/Value.php [ 24 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:24
2016-01-28 02:31:50 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/u65915115...', 24, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:24
2016-01-28 02:34:27 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DOMElement could not be converted to string ~ APPPATH/classes/Controller/Value.php [ 22 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:22
2016-01-28 02:34:27 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(22): Kohana_Core::error_handler(4096, 'Object of class...', '/home/u65915115...', 22, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:22
2016-01-28 02:34:59 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DOMElement could not be converted to string ~ APPPATH/classes/Controller/Value.php [ 22 ] in /home/u659151156/public_html/application/classes/Controller/Value.php:22
2016-01-28 02:34:59 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Value.php(22): Kohana_Core::error_handler(4096, 'Object of class...', '/home/u65915115...', 22, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Value->action_parseCities()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Value))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Value.php:22