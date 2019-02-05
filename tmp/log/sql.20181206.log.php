<?php
 die();
?>
20181206 17:00:14: /campage/www/index.php?m=cron&f=ajaxExec&t=html&restart=0
  SELECT * FROM `zt_userview` WHERE account  = 'campage'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'cron' AND  section  = 'run' AND  `key`  = 'status'
  UPDATE `zt_config` SET  `value` = 'running' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  UPDATE `zt_cron` SET  `lastTime` = '2018-12-06 13:44:12' WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  UPDATE `zt_cron` SET `status` = 'normal',`lastTime` = '2018-12-06 13:44:12' WHERE id  = '1'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:45:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:45:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 13:45:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:45:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:45:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:46:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:47:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:48:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:49:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:50:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:50:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 13:50:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:50:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:50:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:51:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:52:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:53:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:54:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:55:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:55:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 13:55:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:55:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:55:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:56:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:57:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:58:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 13:59:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:00:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:00:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:00:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:00:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:00:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:01:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:02:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:03:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:04:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:05:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:05:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:05:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:05:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:05:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:06:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:07:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:08:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:09:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:10:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:10:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:10:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:10:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:10:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:11:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:12:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:13:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:14:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:15:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:15:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:15:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:15:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:15:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:16:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:17:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:18:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:19:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:20:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:20:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:20:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:20:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:20:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:21:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:22:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:23:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:24:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:25:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:25:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:25:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:25:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:25:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:26:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:27:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:28:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:29:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:30:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:30:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:30:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:30:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:30:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:31:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:32:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:33:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:34:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:35:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:35:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:35:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:35:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:35:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:36:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:37:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:38:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:39:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:40:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:40:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:40:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:40:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:40:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:41:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:42:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:43:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:44:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:45:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:45:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:45:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:45:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:45:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:46:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:47:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:48:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:49:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:50:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:50:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:50:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:50:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:50:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:51:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:52:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:53:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:54:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:55:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:55:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 14:55:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:55:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:55:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:56:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:57:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:58:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 14:59:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:00:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:00:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:00:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:00:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:00:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:01:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:02:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:03:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:04:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:05:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:05:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:05:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:05:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:05:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:06:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:07:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:08:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:09:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:10:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:10:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:10:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:10:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:10:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:11:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:12:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:13:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:14:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:15:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:15:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:15:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:15:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:15:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:16:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:17:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:18:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:19:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:20:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:20:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:20:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:20:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:20:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:21:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:22:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:23:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:24:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:25:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:25:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:25:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:25:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:25:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:26:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:27:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:28:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:29:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:30:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:30:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:30:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:30:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:30:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:31:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:32:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:33:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:34:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:35:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:35:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:35:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:35:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:35:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:36:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:37:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:38:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:39:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:40:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:40:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:40:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:40:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:40:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:41:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:42:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:43:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:44:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:45:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:45:12' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:45:12'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:45:12' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:45:12' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:46:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:47:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:48:12' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:49:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:50:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:50:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:50:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:50:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:50:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:51:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:52:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:53:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:54:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:55:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:55:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 15:55:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:55:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:55:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:56:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:57:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:58:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 15:59:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:00:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:00:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:00:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:00:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:00:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:01:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:02:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:03:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:04:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:05:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:05:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:05:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:05:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:05:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:06:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:07:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:08:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:09:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:10:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:10:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:10:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:10:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:10:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:11:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:12:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:13:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:14:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:15:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:15:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:15:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:15:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:15:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:16:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:17:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:18:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:19:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:20:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:20:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:20:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:20:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:20:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:21:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:22:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:23:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:24:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:25:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:25:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:25:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:25:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:25:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:26:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:27:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:28:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:29:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:30:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:30:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:30:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:30:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:30:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:31:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:32:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:33:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:34:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:35:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:35:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:35:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:35:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:35:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:36:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:37:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:38:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:39:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:40:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:40:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:40:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:40:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:40:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:41:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:42:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:43:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:44:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:45:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:45:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:45:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:45:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:45:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:46:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:47:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:48:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:49:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:50:13' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:50:13' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:50:13'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:50:13' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:50:13' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:51:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:52:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:53:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:54:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:55:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:55:14' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-04 16:55:14'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:55:14' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:55:14' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-06'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:56:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:57:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:58:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-06 16:59:14' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'

