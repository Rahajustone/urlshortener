<?php

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Link;

Route::get('/', function () {
    // return view('welcome');
    return view('forms');
});
Route::post('/', function(Request $request) {

    // Then we run the form validation
    $validation = Validator::make($request->all(), [
    	'url' => 'required|url'
    ]);

    if ($validation->fails()) {
        return Redirect::to('/')
        ->withInput()
        ->withErrors($validation);
    } else {
        $link = Link::where('url', $request->url)->first();
        if ($link) {
            return Redirect::to('/')
            ->withInput()
            ->with('link', $link->hash);
        } else {
            // First we create a new unique Hash
            do {
                $newHash = str_random(6);
            } while(Link::where('hash', $newHash)->count() > 0);

            // Now we create a new database record
            Link::create([
                'url'   => $request->url,
                'hash'  => $newHash
            ]);

            // And then we return the new shortended URL info to our action
            return Redirect::to('/')
            ->withInput()
            ->with('link', $newHash);
        }
    }
});

Route::get('{hash}', function($hash) {

	$link = Link::where('hash', $hash)->first();

	if ($link) {
		return Redirect::to($link->url);
	} else {
		return Redirect::to('/')->with('message', 'Invalid Link');
	}
});
// ->where('hash', "[0-9a-zA-Z] {6}");
