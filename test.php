<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 2018/5/16
 * Time: 下午5:16
 */

require_once __DIR__ . '/vendor/autoload.php';
use Notice\Notice;
$notice = new Notice('danny','good luck!');

echo $notice->send();