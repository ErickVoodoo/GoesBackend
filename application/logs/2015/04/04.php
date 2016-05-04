<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-04 14:16:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH/classes/Controller/Main.php [ 71 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:71
2015-04-04 14:16:33 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/u65915115...', 71, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:71
2015-04-04 14:17:21 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Main.php [ 72 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:72
2015-04-04 14:17:21 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(72): Kohana_Core::error_handler(8, 'Array to string...', '/home/u65915115...', 72, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:72
2015-04-04 14:19:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The count property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-04-04 14:19:59 --- DEBUG: #0 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('count')
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(65): Kohana_ORM->__get('count')
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-04-04 14:20:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The count property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-04-04 14:20:14 --- DEBUG: #0 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('count')
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(65): Kohana_ORM->__get('count')
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-04-04 14:20:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH/classes/Controller/Main.php [ 76 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:76
2015-04-04 14:20:57 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/u65915115...', 76, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:76
2015-04-04 14:26:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Main.php [ 92 ] in file:line
2015-04-04 14:26:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-04 14:28:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Main.php [ 93 ] in file:line
2015-04-04 14:28:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-04 14:30:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Main.php [ 90 ] in file:line
2015-04-04 14:30:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-04 15:32:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Main.php [ 90 ] in file:line
2015-04-04 15:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-04 15:32:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Main.php [ 90 ] in file:line
2015-04-04 15:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-04 17:32:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Main.php [ 90 ] in file:line
2015-04-04 17:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line