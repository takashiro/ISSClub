<?php

if(!defined('IN_DISCUZ')) exit('Access Denied');

runquery('DROP TABLE IF EXISTS `cdb_plugin_member_verify`');

runquery('ALTER TABLE `pre_common_member_profile` DROP `issbranch`');
runquery('ALTER TABLE `pre_common_member_profile` DROP `awardyear`');
runquery('ALTER TABLE `pre_common_member_profile` DROP `awardschool`');

$finish = TRUE;

?>
