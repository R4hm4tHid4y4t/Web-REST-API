<?php

namespace App\Http\Controllers;

use App\Services\ApiService; // Pastikan import ApiService
use Illuminate\Http\Request;

class PremierLeagueController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index()
    {
        try {
            // Mengambil data liga dari ApiService
            $data = $this->apiService->getAllTeams(); // Pastikan method ini ada di ApiService
            return response()->json($data, 200); // Mengembalikan response JSON dengan status 200
        } catch (\Exception $e) {
            // Menangani error jika terjadi
            return response()->json(['error' => 'Unable to fetch league data: ' . $e->getMessage()], 500);
        }
    }

    // Tambahkan method lain sesuai kebutuhan
}