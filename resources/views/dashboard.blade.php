@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Selamat datang, <span class="text-blue-600">{{ $username }}</span>!</h2>
        <p class="text-gray-600 mt-2">Anda berhasil login ke sistem UTS PWEB</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-blue-50 p-4 rounded-lg border border-blue-100">
            <h3 class="font-semibold text-blue-800">Pengguna Aktif</h3>
            <p class="text-3xl font-bold text-blue-600 mt-2">1</p>
        </div>

        <div class="bg-green-50 p-4 rounded-lg border border-green-100">
            <h3 class="font-semibold text-green-800">Total Produk</h3>
            <p class="text-3xl font-bold text-green-600 mt-2">5</p>
        </div>

        <div class="bg-purple-50 p-4 rounded-lg border border-purple-100">
            <h3 class="font-semibold text-purple-800">Versi Sistem</h3>
            <p class="text-3xl font-bold text-purple-600 mt-2">1.0</p>
        </div>
    </div>
</div>
@endsection
