<?php

use Illuminate\Support\Facades\Route;
use App\Services\ApiService;

// Route for returning a JSON response for the API
Route::get('api/teams', function () {
    return response()->json(['message' => 'Welcome to the API (Rahmat Hidayat)']);
});

// Route for fetching premier league teams
Route::get('api/premier-league/teams', [ApiService::class, 'getTeams']);