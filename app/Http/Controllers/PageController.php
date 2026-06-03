<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function about()
    {
        return view('about');
    }

    public function rebootcom()
    {
        return view('rebootcom');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function price()
    {
        return view('price');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        // 1. Validasi input form
        $validated = $request->validate([
            'name'    => 'required|min:3|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'message' => 'required|min:10',
        ]);

        // 2. Ambil target URL Dashboard dari konfigurasi .env
        $dashboardUrl = env('DASHBOARD_URL', 'http://dashboard.test');

        try {
            // 3. Kirim data kontak ke endpoint API Dashboard
            $response = Http::post(rtrim($dashboardUrl, '/') . '/contact', [
                'name'    => $validated['name'],
                'email'   => $validated['email'],
                'phone'   => $validated['phone'] ?? null,
                'company' => $validated['company'] ?? null,
                'subject' => 'Pesan Baru dari Website Utama', // Subjek default
                'message' => $validated['message'],
            ]);

            // 4. Jika pengiriman sukses
            if ($response->successful()) {
                // DOKUMENTASI: Sinkronisasi pesan ke Dashboard berhasil
                return back()->with('success', 'Pesan Anda telah berhasil dikirim ke Dashboard.');
            }

            // 5. Jika respon dari dashboard gagal
            $errorData = $response->json();
            $errorMessage = $errorData['message'] ?? 'Gagal menyimpan pesan ke Dashboard (Status: ' . $response->status() . ').';
            return back()->withInput()->withErrors(['message' => $errorMessage]);

        } catch (\Exception $e) {
            // 6. Jika terjadi kegagalan jaringan atau server dashboard tidak aktif
            return back()->withInput()->withErrors(['message' => 'Gagal terhubung ke server Dashboard: ' . $e->getMessage()]);
        }
    }
}

