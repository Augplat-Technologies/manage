<?php
 die();
?>

13:37:07 Uncaught exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1044 Access denied for user 'mykampai_zentao'@'localhost' to database 'zentao'' in module/install/model.php:436
Stack trace:
#0 module/install/model.php(436): PDO->query('CREATE DATABASE...')
#1 module/install/model.php(321): installModel->createDB('5.7')
#2 module/install/control.php(119): installModel->checkConfig()
#3 [internal function]: install->step3()
#4 framework/base/router.class.php(1703): call_user_func_array(Array, Array)
#5 www/install.php(36): baseRouter->loadModule()
#6 {main}
  thrown in module/install/model.php on line 436 when visiting /zentaopms/www/install.php?m=install&amp;f=step3

13:41:15 Uncaught exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1044 Access denied for user 'mykampai_zentao'@'localhost' to database 'zentao'' in module/install/model.php:436
Stack trace:
#0 module/install/model.php(436): PDO->query('CREATE DATABASE...')
#1 module/install/model.php(321): installModel->createDB('5.7')
#2 module/install/control.php(119): installModel->checkConfig()
#3 [internal function]: install->step3()
#4 framework/base/router.class.php(1703): call_user_func_array(Array, Array)
#5 www/install.php(36): baseRouter->loadModule()
#6 {main}
  thrown in module/install/model.php on line 436 when visiting /zentaopms/www/install.php?m=install&amp;f=step3

13:42:53 Uncaught exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1044 Access denied for user 'mykampai_zentao'@'localhost' to database 'zentao'' in module/install/model.php:436
Stack trace:
#0 module/install/model.php(436): PDO->query('CREATE DATABASE...')
#1 module/install/model.php(321): installModel->createDB('5.7')
#2 module/install/control.php(119): installModel->checkConfig()
#3 [internal function]: install->step3()
#4 framework/base/router.class.php(1703): call_user_func_array(Array, Array)
#5 www/install.php(36): baseRouter->loadModule()
#6 {main}
  thrown in module/install/model.php on line 436 when visiting /zentaopms/www/install.php?m=install&amp;f=step3

14:04:20 Uncaught exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1044 Access denied for user 'mykampai_zentao'@'localhost' to database 'zentao'' in module/install/model.php:436
Stack trace:
#0 module/install/model.php(436): PDO->query('CREATE DATABASE...')
#1 module/install/model.php(321): installModel->createDB('5.7')
#2 module/install/control.php(119): installModel->checkConfig()
#3 [internal function]: install->step3()
#4 framework/base/router.class.php(1703): call_user_func_array(Array, Array)
#5 www/install.php(36): baseRouter->loadModule()
#6 {main}
  thrown in module/install/model.php on line 436 when visiting /zentaopms/www/install.php?m=install&amp;f=step3

14:04:39 Call to a member function query() on null in lib/base/dao/dao.class.php on line 701 when visiting /zentaopms/www/install.php?m=misc&amp;f=ping&amp;t=html

14:07:05 Call to a member function query() on null in lib/base/dao/dao.class.php on line 701 when visiting /zentaopms/www/install.php?m=misc&amp;f=ping&amp;t=html
