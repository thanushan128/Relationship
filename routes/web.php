<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use App\Models\Phone;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $user = User::find(1);
    // dd($user->phone);

    // Get the output as json format
    // $user = User::with('phone')->whereId(1)->first();
    // return Response::json($user);

    // belongs to (inverse one to one relationship)
    // $phone = Phone::find(1);
    // dd($phone->user);

    // Get the output as json format
    // $phone = Phone::with('user')->whereId(1)->first();
    // return Response::json($phone);

    // Update records
        // $user = User::find(1);
        // $phone = new Phone;
        // $phone->phone = '0768888888';

    // $user->phone()->save($phone);
        // $user->phone()->update($phone->toArray());
        // return 'Saved!';

    // change the relationship record into another user record
        $phone = Phone::find(1);
        $user = User::find(2);

        $phone->user()->associate($user)->save();
        return 'Saved!';
});
