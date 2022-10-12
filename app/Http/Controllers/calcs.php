<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result($value)
    {
        $greeting = array("おはようございます" , "こんにちは" , "こんばんは" , "おやすみ");
        $count  = count($greeting);
        $random = rand(0, $count - 1);

        switch ($value) {
            case 'morning':
                //追記
                return view('message.result', ['time' => '朝', 'conversation' => 'おはようございます']);
                break;

            case 'afternoon':
                //追記
                return view('message.result', ['time' => '昼', 'conversation' => 'こんにちは']);
                break;

            case 'evening':
                //追記
                return view('message.result', ['time' => '夕方', 'conversation' => 'こんばんは']);
                break;

            case 'night':
                //追記
                return view('message.result', ['time' => '夜', 'conversation' => 'おやすみ']);
                break;

            case 'random':
                return view('message.result_03' , ['value' =>$greeting[$random]]);
                break;

            default:
                return view('message.result_02' , ['value' => $value]);
        }
    
    }
}
