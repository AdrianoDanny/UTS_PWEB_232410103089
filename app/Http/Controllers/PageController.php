<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => 'required|string|min:3',
            'password' => 'required|string|min:3'
        ]);

        return redirect()
            ->route('dashboard')
            ->with('username', $validated['username']);
    }

    public function dashboard(Request $request): View
    {
        return view('dashboard', [
            'username' => $request->session()->get('username') ?? 'Guest'
        ]);
    }

    public function profile(Request $request): View
    {
        return view('profile', [
            'username' => $request->session()->get('username') ?? 'Guest'
        ]);
    }

    public function pengelolaan(): View
    {
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 12000000, 'stock' => 15],
            ['id' => 2, 'name' => 'Smartphone', 'price' => 8000000, 'stock' => 30],
            ['id' => 3, 'name' => 'Tablet', 'price' => 5000000, 'stock' => 20],
            ['id' => 4, 'name' => 'Headphones', 'price' => 1500000, 'stock' => 50],
            ['id' => 5, 'name' => 'Smartwatch', 'price' => 3000000, 'stock' => 25],
        ];

        return view('pengelolaan', compact('products'));
    }
}
