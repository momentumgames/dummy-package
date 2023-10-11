<?php

Route::get('/api/dashboard/dummy', function () {
    return response()->json(['message' => '¡Hello!'], 200);
});

Route::get('/api/dashboard/dummy2', function () {
    return response()->json(['message' => '¡Hello2!'], 200);
});