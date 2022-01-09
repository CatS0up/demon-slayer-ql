<?php

use App\Models\Character\Character;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

Route::get('media/{character}/{image}', function (Character $character, string $image): Response {
    $slug = Str::slug($character->name);

    $avatarPath = "avatars/{$slug}/{$image}";

    if (Storage::disk('public')->exists($avatarPath)) {

        $avatarBase64 = Storage::disk('public')->get("/avatars/{$slug}/{$image}");

        return response($avatarBase64)->header('Content-type', 'image/png');
    }

    return response('Picture not found', 404);
})
    ->name('character.avatar');
