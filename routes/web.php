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

Route::get('/', function () {
    $templates = \App\Models\Template::all();

    return view('index')
        ->with('templates', $templates);
});

Route::get('load-template/{template_id}', function ($template_id) {
    $template = \App\Models\Template::query()->find($template_id);

    return $template->value;
});

Route::post('save-template/{template_id}', function ($template_id, \Illuminate\Http\Request $request) {
    $template = \App\Models\Template::query()->find($template_id);

    $columns = $template->value;

    $datas = $request->data;

    switch ($template->id) {
        case 1:
            break;
        case 2:
            foreach ($datas as $data) {
                $insert = [];
                foreach ($columns as $key => $column) {
                    $insert[$column['field']] = $data[$key];
                }

                \Illuminate\Support\Facades\DB::table('assets')->insert($insert);
            }
            break;
    }

    return [];
});
