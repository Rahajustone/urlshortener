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
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;


// Route::get('/', function () {
//     // return view('welcome');
//     return view('forms');
// });
// Route::post('/', function() {
//     // We first define form validation rules
//     $rules = array(
//         'link' => 'required|url'
//     );

//     $request = new Request();

//     // Then we run the form validation
//     $validation = Validator::make($request->all(), $rules);

//     if ($validation->fails()) {
//         return Redirect::to('/')
//         ->withInput()
//         ->withErrors($validation);
//     } else {
//         $link = Link::where('ulr', '=', $request->link)
//         ->first();
//         if ($link) {
//             return Redirect::to('/')
//             ->withInput()
//             ->with('link', $link->hash);
//         } else {
//             // First we create a new unique Hash
//             do {
//                 $newHash = Str::random(6);
//             } while(Link::where('hash', '=', $newHash)->count() > 0);

//             // Now we create a new database record
//             Link::create([
//                 'url'   => $request->link,
//                 'hash'  => $newHash
//             ]);

//             // And then we return the new shortended URL info to our action
//             return Redirect::to('/')
//             ->withInput()
//             ->with('link', $newHash);
//         }
//     }
// });
