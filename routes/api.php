<?php

use Illuminate\Support\Facades\Route;
use Statamic\Facades\Entry;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('configuration/{code}', function ($code) {

    $data = Entry::query()->where('slug', $code)->first();
    if ($data) {
        $menus = [];
        if ($data_menu = $data->menus) {
            foreach ($data_menu as $menu) {
                $menus[] = [
                    'menu_code' => $menu->menu_code,
                    'menu_name' => $menu->menu_name,
                ];
            }
        }
        $response = [
            'nama' => $data->title,
            'domain' => $data->domain,
            'logo' => $data->logo[0]['permalink'] ?? null,
            'warna' => $data->color,
            'menu' => $menus,
        ];
    } else {
        $response = [
            'status' => false,
            'error' => 'Data tidak ditemukan',
        ];
    }

    return response()->json($response);

})->name('configuration');
