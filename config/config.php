<?php

/*
|--------------------------------------------------------------------------
| Bot Token
|--------------------------------------------------------------------------
|
| Change this to your Bot API Token
| It can be obtained from https://telegram.dog/BotFather
|
*/
$config['botToken'] = $_ENV['5163079934:AAEedQpJXtV1KcoOmmquUazIl7q4NqzKCw'];

/*
|--------------------------------------------------------------------------
| Admin User ID
|--------------------------------------------------------------------------
|
| Change this to Admin's Numeric User ID
| ID can be obtained from https://telegram.dog/username_to_id_bot
|
*/
$config['adminID'] = $_ENV['2131742391'];

/*
|--------------------------------------------------------------------------
| Logs Channel ID
|--------------------------------------------------------------------------
|
| Create a New Channel/Group for logging data
| ID can be obtained from https://telegram.dog/BotFather
|
*/
$config['logsID'] =  $_ENV['LOGS_DUMP_ID'];

/*
|--------------------------------------------------------------------------
| Timezone
|--------------------------------------------------------------------------
|
| Current timezone for Logging Activities with time
| It can be obtained from http://1min.in/content/international/time-zones
| By Default it's in IST
|
*/
$config['timeZone'] =  $_ENV['AO'];

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
| Database to Store User Data
|
*/
$config['db']['hostname'] =  $_ENV['sql11.freesqldatabase.com'];
$config['db']['username'] =  $_ENV['sql11483561'];
$config['db']['password'] =  $_ENV['gCYTFuSvsq'];
$config['db']['database'] =  $_ENV['sql11483561'];

/*
|--------------------------------------------------------------------------
| Anti-Spam Timer
|--------------------------------------------------------------------------
|
| Anti-Spam Timer to prevent Spammers from Spamming the Checker
| Value is in Seconds. "20" = 20seconds
|
*/
$config['anti_spam_timer'] =  $_ENV['20'];

/*
|--------------------------------------------------------------------------
| SK Keys
|--------------------------------------------------------------------------
|
| SK Keys for !sm checker gate
| Add a Live SK Key here. You can Also add Multiple SK Keys
| array('sk1','sk2','sk3')
|
*/
$config['sk_keys'] =  explode(",", $_ENV['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']);
?>

