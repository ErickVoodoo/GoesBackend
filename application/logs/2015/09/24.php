<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-24 06:49:10 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to MySQL server on 'mysql.hostinger.ru' (4 &quot;Interrupted system call&quot;) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2015-09-24 06:49:10 --- DEBUG: #0 /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('messages')
#3 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/u659151156/public_html/application/classes/Controller/Main.php(585): Kohana_ORM::factory('Message')
#8 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_getMessage()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2015-09-24 11:23:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 11:23:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 17:58:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 17:58:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:02:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:02:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:09:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:09:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:16:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:16:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:23:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:23:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:44:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:44:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:51:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:51:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:58:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 18:58:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:02:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:02:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:09:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:09:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:16:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:16:30 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:23:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:23:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:30:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:30:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:37:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:37:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:44:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:44:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:51:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:51:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:58:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 19:58:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:02:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:02:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:09:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:09:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:16:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:16:30 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:23:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:23:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:30:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:30:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:37:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:37:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:44:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:44:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:51:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:51:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:58:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 20:58:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:02:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:02:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:09:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:09:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:16:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:16:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:23:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:23:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:30:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:30:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:37:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:37:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:44:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:44:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:51:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:51:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:58:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 21:58:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:02:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:02:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:10:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:10:19 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:16:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:16:30 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:23:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:23:28 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:30:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:30:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:37:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:37:30 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:44:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:44:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:51:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:51:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:58:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 22:58:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 23:02:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 23:02:29 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 23:30:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 550 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:550
2015-09-24 23:30:30 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(550): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 550, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:550