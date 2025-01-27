<?php

use Illuminate\Support\Facades\Route;

Route::options('{any}', function () {
    return response()->json([], 200);
})->where('any', '.*');

Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/test', function () {
    return response()->json(['message' => 'Backend is working!']);
});

Route::get(
    '/appointments',
    function () {
        return response()->json(['message' => 'On recoit les rdv la !']);
    }
);

// Route::get('/test-db', function () {
//     try {
//         DB::table('sqlite_master')->get();
//         return 'SQLite is working!';
//     } catch (\Exception $e) {
//         return 'Error: ' . $e->getMessage();
//     }
// });

// Route::get('/write-test', function () {
//     try {
//         DB::table('test')->insert(['name' => 'Test SQLite']);
//         return 'Data inserted successfully!';
//     } catch (\Exception $e) {
//         return 'Error: ' . $e->getMessage();
//     }
// });

// Route::get('/read-test', function () {
//     try {
//         $data = DB::table('test')->get();
//         return response()->json($data);
//     } catch (\Exception $e) {
//         return 'Error: ' . $e->getMessage();
//     }
// });