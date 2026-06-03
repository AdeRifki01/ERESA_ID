<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Mengirim pesan dari form "Get in Touch" ke Dashboard API.
     */
    public function send(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        try {
            // Kirim data ke Dashboard API
            $response = Http::withHeaders([
                'X-API-Key' => config('services.dashboard.api_key'),
                'Accept'    => 'application/json',
            ])->post(config('services.dashboard.api_url'), $validated);

            if ($response->successful()) {
                return back()->with('success', 'Pesan berhasil dikirim! Terima kasih telah menghubungi kami.');
            }

            // Log error response
            Log::error('Dashboard API Error', [
                'status' => $response->status(),
                'body'   => $response->json(),
            ]);

            return back()->with('error', 'Gagal mengirim pesan. Silakan coba lagi nanti.')->withInput();

        } catch (\Exception $e) {
            Log::error('Dashboard API Connection Error: ' . $e->getMessage());
            return back()->with('error', 'Tidak dapat terhubung ke server. Silakan coba lagi nanti.')->withInput();
        }
    }
}
