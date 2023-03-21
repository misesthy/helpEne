<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::group(['prefix' => 'chat'], function () {

    Route::get('/essai', function () {
        return view('chat.agentProfile');
    });

    Route::get('/essa', function () {
        return view('chat.chat');
    });

    Route::get('/ess', function () {
        return view('chat.contacts');
    });

    Route::get('/es', function () {
        return view('chat.createGroup');
    });

    Route::get('/e', function () {
        return view('chat.dashboard');
    });

    Route::get('/i', function () {
        return view('chat.directChat');
    });

    Route::get('/ai', function () {
        return view('chat.groups');
    });

    Route::get('/sai', function () {
        return view('chat.liveChat');
    });

    Route::get('/ssai', function () {
        return view('chat.messaging');
    });

    Route::get('/essais', function () {
        return view('chat.userProfile');
    });

    Route::get('/sessais', function () {
        return view('chat.addnewclient');
    });

    Route::get('/sessaiss', function () {
        return view('chat.newEssai');
    });

// });


// Route::group(['prefix' => 'helpdesk'], function () {

    Route::get('/helpd', function () {
        return view('helpdesk.basic');
    });

    Route::get('/help', function () {
        return view('helpdesk.HealthCheck.entry');
    });

// });
// Route::group(['prefix' => 'userPanel'], function () {

    Route::get('/userPanel', function () {
        return view('userPanel.archive');
    });

    Route::get('/userPane', function () {
        return view('userPanel.change');
    });

    Route::get('/userPan', function () {
        return view('userPanel.contact');
    });

    Route::get('/userPa', function () {
        return view('userPanel.detailLogin');
    });

    Route::get('/userP', function () {
        return view('userPanel.detail');
    });

    Route::get('/user', function () {
        return view('userPanel.faq');
    });

    Route::get('/use', function () {
        return view('userPanel.index');
    });

    Route::get('/us', function () {
        return view('userPanel.profile');
    });

    Route::get('/helpd', function () {
        return view('userPanel.basic');
    });

// });

// Route::group(['prefix' => 'userPanel'], function () {

    Route::get('/manager', function () {
        return view('manager.addNewClient');
    });

    Route::get('/manage', function () {
        return view('manager.viewallclients');
    });

    Route::get('/manag', function () {
        return view('manager.indexDashboard');
    });

    Route::get('/helpd', function () {
        return view('userPanel.basic');
    });

    Route::get('/helpd', function () {
        return view('userPanel.basic');
    });

    Route::get('/helpd', function () {
        return view('userPanel.basic');
    });

    Route::get('/helpd', function () {
        return view('userPanel.basic');
    });

// });