<?php

Route::get('/api/dashboard/dummy', function () {
    return response()->json(['message' => '¡Hello!'], 200);
});
