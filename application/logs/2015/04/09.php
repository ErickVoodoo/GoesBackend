<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-09 00:00:35 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 00:00:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 00:37:30 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to MySQL server on 'mysql.hostinger.ru' (4 &quot;Interrupted system call&quot;) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2015-04-09 00:37:30 --- DEBUG: #0 /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('buynewapps')
#3 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#7 /home/u659151156/public_html/application/classes/Controller/Main.php(33): Kohana_ORM::factory('Buynewapp', 1)
#8 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_AnswerNo()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2015-04-09 01:00:28 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 01:00:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 02:00:34 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 02:00:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 03:00:33 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 03:00:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 04:00:42 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 04:00:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 05:00:33 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 05:00:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 06:00:30 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 06:00:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 07:00:29 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 07:00:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 08:00:39 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 08:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 09:00:43 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 09:00:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 10:00:35 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 10:00:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 11:00:32 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 11:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 12:00:33 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 12:00:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 13:00:32 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 13:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 14:00:41 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 14:00:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 15:00:36 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 15:00:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 16:00:36 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 16:00:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 17:00:30 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 17:00:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 18:00:34 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 18:00:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 19:00:35 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 19:00:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 20:00:34 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 20:00:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 21:00:32 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 21:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 22:00:29 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 22:00:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-04-09 23:00:31 --- EMERGENCY: ErrorException [ 256 ]: Curl failed with error #7: couldn't connect to host ~ APPPATH/classes/Controller/Main.php [ 189 ] in file:line
2015-04-09 23:00:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(256, 'Curl failed wit...', '/home/u65915115...', 189, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(189): trigger_error('Curl failed wit...', 256)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line