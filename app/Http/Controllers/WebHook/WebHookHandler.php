<?php

namespace App\Http\Controllers\WebHook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebHookHandler extends Controller
{
    public function webhookHandler(Request $request){
        logger('webhook from server');
        return response()->json('ok'); 
    }
}
