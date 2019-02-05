<?php
 die();
?>
20181207 21:15:40: /campage/www/index.php?m=cron&f=ajaxExec&t=html&restart=0
  SELECT * FROM `zt_userview` WHERE account  = 'campage'
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'cron' AND  section  = 'run' AND  `key`  = 'status'
  UPDATE `zt_config` SET  `value` = 'running' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  UPDATE `zt_cron` SET  `lastTime` = '2018-12-07 15:13:38' WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  UPDATE `zt_cron` SET `status` = 'normal',`lastTime` = '2018-12-07 15:13:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:14:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:15:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:15:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:15:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:15:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:15:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:16:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:17:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:18:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:19:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:20:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:20:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:20:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:20:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:20:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:21:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:22:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:23:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:24:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:25:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:25:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:25:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:25:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:25:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:26:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:27:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:28:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:29:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:30:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:30:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:30:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:30:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:30:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:31:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:32:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:33:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:34:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:35:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:35:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:35:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:35:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:35:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:36:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:37:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:38:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:39:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:40:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:40:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:40:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:40:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:40:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:41:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:42:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:43:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:44:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:45:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:45:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:45:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:45:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:45:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:46:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:47:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:48:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:49:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:50:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:50:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:50:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:50:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:50:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:51:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:52:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:53:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:54:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:55:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:55:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 15:55:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:55:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:55:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:56:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:57:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:58:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 15:59:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:00:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:00:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:00:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:00:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:00:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:01:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:02:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:03:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:04:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:05:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:05:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:05:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:05:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:05:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:06:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:07:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:08:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:09:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:10:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:10:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:10:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:10:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:10:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:11:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:12:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:13:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:14:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:15:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:15:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:15:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:15:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:15:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:16:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:17:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:18:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:19:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:20:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:20:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:20:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:20:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:20:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:21:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:22:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:23:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:24:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:25:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:25:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:25:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:25:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:25:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:26:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:27:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:28:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:29:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:30:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:30:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:30:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:30:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:30:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:31:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:32:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:33:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:34:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:35:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:35:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:35:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:35:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:35:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:36:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:37:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:38:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:39:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:40:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:40:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:40:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:40:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:40:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:41:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:42:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:43:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:44:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:45:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:45:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:45:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:45:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:45:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:46:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:47:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:48:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:49:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:50:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:50:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:50:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:50:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:50:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:51:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:52:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:53:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:54:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:55:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:55:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 16:55:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:55:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:55:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:56:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:57:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:58:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 16:59:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:00:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:00:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:00:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:00:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:00:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:01:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:02:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:03:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:04:38' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:05:38' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:05:38' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:05:38'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:05:38' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:05:38' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:06:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:07:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:08:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:09:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:10:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:10:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:10:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:10:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:10:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:11:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:12:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:13:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:14:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:15:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:15:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:15:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:15:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:15:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:16:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:17:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:18:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:19:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:20:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:20:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:20:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:20:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:20:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:21:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:22:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:23:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:24:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:25:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:25:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:25:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:25:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:25:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:26:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:27:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:28:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:29:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:30:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:30:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:30:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:30:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:30:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:31:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:32:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:33:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:34:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:35:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:35:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:35:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:35:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:35:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:36:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:37:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:38:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:39:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:40:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:40:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:40:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:40:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:40:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:41:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:42:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:43:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:44:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:45:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:45:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:45:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:45:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:45:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:46:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:47:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:48:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:49:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:50:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:50:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:50:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:50:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:50:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:51:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:52:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:53:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:54:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:55:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:55:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 17:55:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:55:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:55:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:56:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:57:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:58:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 17:59:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:00:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:00:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:00:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:00:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:00:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:01:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:02:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:03:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:04:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:05:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:05:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:05:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:05:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:05:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:06:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:07:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:08:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:09:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:10:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:10:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:10:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:10:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:10:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:11:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:12:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:13:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:14:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:15:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:15:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:15:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:15:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:15:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:16:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:17:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:18:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:19:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:20:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:20:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:20:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:20:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:20:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:21:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:22:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:23:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:24:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:25:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:25:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:25:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:25:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:25:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:26:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:27:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:28:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:29:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:30:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:30:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:30:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:30:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:30:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:31:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:32:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:33:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:34:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:35:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:35:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:35:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:35:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:35:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:36:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:37:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:38:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:39:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:40:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:40:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:40:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:40:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:40:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:41:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:42:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:43:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:44:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:45:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:45:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:45:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:45:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:45:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:46:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:47:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:48:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:49:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:50:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:50:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:50:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:50:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:50:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:51:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:52:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:53:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:54:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:55:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:55:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 18:55:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:55:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:55:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:56:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:57:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:58:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 18:59:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:00:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:00:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:00:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:00:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:00:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:01:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:02:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:03:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:04:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:05:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:05:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:05:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:05:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:05:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:06:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:07:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:08:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:09:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:10:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:10:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:10:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:10:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:10:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:11:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:12:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:13:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:14:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:15:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:15:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:15:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:15:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:15:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:16:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:17:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:18:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:19:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:20:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:20:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:20:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:20:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:20:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:21:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:22:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:23:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:24:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:25:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:25:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:25:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:25:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:25:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:26:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:27:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:28:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:29:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:30:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:30:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:30:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:30:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:30:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:31:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:32:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:33:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:34:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:35:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:35:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:35:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:35:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:35:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:36:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:37:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:38:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:39:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:40:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:40:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:40:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:40:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:40:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:41:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:42:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:43:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:44:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:45:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:45:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:45:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:45:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:45:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:46:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:47:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:48:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:49:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:50:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:50:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:50:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:50:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:50:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:51:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:52:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:53:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:54:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:55:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:55:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 19:55:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:55:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:55:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:56:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:57:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:58:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 19:59:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:00:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:00:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:00:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:00:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:00:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:01:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:02:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:03:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:04:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:05:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:05:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:05:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:05:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:05:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:06:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:07:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:08:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:09:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:10:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:10:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:10:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:10:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:10:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:11:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:12:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:13:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:14:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:15:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:15:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:15:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:15:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:15:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:16:40' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:17:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:18:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:19:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:20:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:20:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:20:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:20:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:20:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:21:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:22:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:23:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:24:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:25:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:25:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:25:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:25:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:25:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:26:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:27:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:28:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:29:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:30:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:30:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:30:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:30:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:30:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:31:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:32:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:33:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:34:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:35:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:35:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:35:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:35:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:35:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:36:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:37:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:38:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:39:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:40:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:40:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:40:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:40:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:40:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:41:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:42:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:43:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:44:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:45:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:45:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:45:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:45:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:45:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:46:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:47:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:48:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:49:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:50:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:50:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:50:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:50:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:50:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:51:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:52:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:53:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:54:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:55:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:55:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 20:55:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:55:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:55:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:56:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:57:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:58:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 20:59:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:00:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:00:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 21:00:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:00:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:00:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:01:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:02:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:03:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:04:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:05:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:05:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 21:05:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:05:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:05:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:06:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:07:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:08:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:09:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:10:39' WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `zt_cron` WHERE id  = '2'
  SELECT * FROM `zt_cron` WHERE id  = '3'
  SELECT * FROM `zt_cron` WHERE id  = '6'
  SELECT * FROM `zt_cron` WHERE id  = '7'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:10:39' WHERE id  = '7'
  SELECT * FROM `zt_notify` WHERE objectType  = 'mail' AND  status  = 'wait' ORDER BY `id` asc 
  SELECT id,status FROM `zt_notify` WHERE objectType  = 'mail' ORDER BY `id` desc  LIMIT 1 
  DELETE FROM `zt_notify` WHERE status  = 'sended' AND  sendTime  <= '2018-12-05 21:10:39'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '7'
  SELECT * FROM `zt_cron` WHERE id  = '8'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:10:39' WHERE id  = '8'
  SELECT * FROM `zt_webhook` WHERE deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_notify` WHERE status  = 'wait' AND  objectType  = 'webhook' ORDER BY `id` 
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '8'
  SELECT * FROM `zt_cron` WHERE id  = '9'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:10:39' WHERE id  = '9'
  DELETE FROM `zt_log` WHERE date  < '2018-11-07'
  UPDATE `zt_cron` SET `status` = 'normal' WHERE id  = '9'
  SELECT * FROM `zt_cron` WHERE id  = '10'
  SELECT * FROM `zt_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `zt_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `zt_config` WHERE owner  = 'system' AND  module  = 'common' AND  section  = 'global' AND  `key`  = 'cron'
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('xuanxuan') AND  `key` IN ('key')
  SELECT * FROM `zt_config` WHERE owner IN ('system','campage') ORDER BY `id` 
  SELECT * FROM `zt_cron` WHERE id  = '1'
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:11:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:12:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:13:39' WHERE id  = '1'
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
  UPDATE `zt_cron` SET `status` = 'running',`lastTime` = '2018-12-07 21:14:39' WHERE id  = '1'
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

