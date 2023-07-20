<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NotificationController extends Controller
{
    public function index(){
        return view('pushNotification');
    }

    public function sendNotification(){
        $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();
        dd($firebaseToken);
    }
}
