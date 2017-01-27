<?php

$bot = require_once __DIR__ . '/../bootstrap/bot.php';

/*
|--------------------------------------------------------------------------
| Your Messenger bot first node
|--------------------------------------------------------------------------
|
| Let's try say hi to her when setup completed and then edit this message.
|
*/
$bot->answer('hi', 'Hi [first_name]!');

/*
|--------------------------------------------------------------------------
| Define your nodes here
|--------------------------------------------------------------------------
|
| Start defining your node and make your awesome bot now
|
*/

// Handling SUBSCRIBE button payload (default on the menu)
$bot->answer('payload:SUBSCRIBE', function ($bot, $lead_id) {
    $bot->subscription->addSubscribers($lead_id, 1);
    return 'You have subscribed!';
});


// Action when user click "Get Started" button
$bot->answer('payload:GIGA_GET_STARTED_PAYLOAD', 'Hi [first_name]!');

// Print some message to the browser when done
dd('Nodes seeded!');