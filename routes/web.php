<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Models\App;

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

Route::get('/', function (Request $request) {
    $app = App::where('client_id', $request->query('client_id'))->first();

    if ($app == null) {
        abort(404);
    }

    return view('test', [
        'app' => $app
    ]);
});
