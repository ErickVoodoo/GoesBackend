<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-03 03:16:21 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): No ending delimiter '&quot;' found ~ APPPATH/classes/Controller/Goes.php [ 391 ] in file:line
2016-02-03 03:16:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/home/u65915115...', 391, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Goes.php(391): preg_replace('"', ''', '\xD0\x90\xD0\xBF\xD0\xB5\xD0\xBB\xD1\x8C\xD1\x81\xD0\xB8\xD0...')
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_getGrodnoTaxi()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-02-03 03:16:48 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): No ending delimiter '&quot;' found ~ APPPATH/classes/Controller/Goes.php [ 391 ] in file:line
2016-02-03 03:16:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/home/u65915115...', 391, Array)
#1 /home/u659151156/public_html/application/classes/Controller/Goes.php(391): preg_replace('"', ''', '\xD0\x90\xD0\xBF\xD0\xB5\xD0\xBB\xD1\x8C\xD1\x81\xD0\xB8\xD0...')
#2 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_getGrodnoTaxi()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#5 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-02-03 04:17:23 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'u659151156_vk.taxi' doesn't exist [ SHOW FULL COLUMNS FROM `taxi` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:359
2016-02-03 04:17:23 --- DEBUG: #0 /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('taxi')
#2 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/u659151156/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/u659151156/public_html/application/classes/Controller/Goes.php(359): Kohana_ORM::factory('Taxi')
#7 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Goes->action_getTaxi()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Goes))
#10 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#13 {main} in /home/u659151156/public_html/modules/database/classes/Kohana/Database/MySQL.php:359
2016-02-03 14:10:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$platform ~ APPPATH/classes/Controller/Main.php [ 421 ] in /home/u659151156/public_html/application/classes/Controller/Main.php:421
2016-02-03 14:10:22 --- DEBUG: #0 /home/u659151156/public_html/application/classes/Controller/Main.php(421): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/u65915115...', 421, Array)
#1 /home/u659151156/public_html/system/classes/Kohana/Controller.php(84): Controller_Main->action_reloadHistory()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/u659151156/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/u659151156/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/u659151156/public_html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/u659151156/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/u659151156/public_html/application/classes/Controller/Main.php:421