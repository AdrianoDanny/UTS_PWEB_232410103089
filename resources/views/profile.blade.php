@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-blue-600 px-6 py-4">
        <h2 class="text-xl font-semibold text-white">Profil Pengguna</h2>
    </div>

    <div class="p-6">
        <div class="flex items-center space-x-4 mb-6">
            <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center">
                <span class="text-2xl font-bold text-blue-600">{{ strtoupper(substr($username, 0, 1)) }}</span>
            </div>
            <div>
                <h3 class="text-xl font-bold text-gray-800">{{ $username }}</h3>
                <p class="text-gray-600">{{ $username }}@example.com</p>
            </div>
        </div>

        <div class="space-y-4">
            <div class="border-b pb-4">
                <h4 class="font-semibold text-gray-700 mb-2">Informasi Akun</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Username</p>
                        <p class="font-medium">{{ $username }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-medium">{{ $username }}@example.com</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Bergabung</p>
                        <p class="font-medium">{{ now()->format('d F Y') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <p class="font-medium text-green-600">Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
