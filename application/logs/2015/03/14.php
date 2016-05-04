<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-14 04:32:05 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Main.php [ 10 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:10
2015-03-14 04:32:05 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(10): Kohana_Core::error_handler(8, 'Array to string...', '/home/u65915115...', 10, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:10
2015-03-14 04:43:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 61 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-14 04:43:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/home/u65915115...', 423, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Route.php(423): preg_match('#^main(?:/(?P<a...', '', NULL)
#2 /home/u659151156/public_html/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /home/u659151156/public_html/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-14 04:44:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 61 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-03-14 04:44:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/home/u65915115...', 423, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Route.php(423): preg_match('#^main(?:/(?P<a...', '', NULL)
#2 /home/u659151156/public_html/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /home/u659151156/public_html/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-03-14 04:50:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''action'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/routes/default.php [ 6 ] in file:line
2015-03-14 04:50:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 04:50:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''action'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/routes/default.php [ 6 ] in file:line
2015-03-14 04:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 04:51:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''action'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/routes/default.php [ 6 ] in file:line
2015-03-14 04:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 04:55:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''action'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/routes/default.php [ 6 ] in file:line
2015-03-14 04:55:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 04:56:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''action'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/routes/default.php [ 6 ] in file:line
2015-03-14 04:56:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:21:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/routes/default.php [ 10 ] in file:line
2015-03-14 05:21:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:21:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/routes/default.php [ 10 ] in file:line
2015-03-14 05:21:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:21:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/routes/default.php [ 10 ] in file:line
2015-03-14 05:21:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:21:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/routes/default.php [ 10 ] in file:line
2015-03-14 05:21:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:21:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/routes/default.php [ 10 ] in file:line
2015-03-14 05:21:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:24:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''action'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/routes/default.php [ 6 ] in file:line
2015-03-14 05:24:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:25:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''action'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/routes/default.php [ 6 ] in file:line
2015-03-14 05:25:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 05:40:00 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'u659151156_vk.buynewapps' doesn't exist [ SHOW FULL COLUMNS FROM `buynewapps` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:359
2015-03-14 05:40:00 --- DEBUG: #0 /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('buynewapps')
#2 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#6 /home/u659151156/public_html/application/classes/Controller/Main.php(13): Kohana_ORM::factory('Buynewapp', 1)
#7 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_countAnswers()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#13 {main} in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:359
2015-03-14 05:41:20 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'u659151156_vk.buynewapps' doesn't exist [ SHOW FULL COLUMNS FROM `buynewapps` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:359
2015-03-14 05:41:20 --- DEBUG: #0 /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('buynewapps')
#2 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#6 /home/u659151156/public_html/application/classes/Controller/Main.php(13): Kohana_ORM::factory('Buynewapp', 1)
#7 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_countAnswers()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#13 {main} in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:359
2015-03-14 05:41:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:14
2015-03-14 05:41:45 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(14): Kohana_ORM->find()
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_countAnswers()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:14
2015-03-14 05:43:02 --- EMERGENCY: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Main.php [ 17 ] in file:line
2015-03-14 05:43:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/home/u65915115...', 17, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Main.php(17): json_decode(Array)
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_countAnswers()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-03-14 05:45:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:25
2015-03-14 05:45:42 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(25): Kohana_ORM->find()
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_countAnswerYes()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:25