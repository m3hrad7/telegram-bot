<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $response = Telegram::sendMessage([
            'chat_id' => '30487017',
            'text' => 'https://forge.medium.com/the-3-breaks-you-need-to-take-every-day-44b84e062086'
        ]);

        $messageId = $response->getMessageId();
        /*$response = Telegram::getUpdates();
        dd($response);*/
    }
}
