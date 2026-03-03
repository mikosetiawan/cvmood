@props([
    'title' => 'Dashboard',
    'description' => 'Buat CV mudah dan modern!',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta -->
    <title>{{ $title }} | {{ config('app.name') }}</title>
    <meta name="description" content="{{ $description }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $title }} | {{ config('app.name') }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(241, 245, 249, 1); }
        .sidebar-item-active { background: linear-gradient(135deg, #005461 0%, #007a8a 100%); color: white !important; }
        .gradient-text { background: linear-gradient(135deg, #005461 0%, #3bc1a8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .card-stats { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-stats:hover { transform: translateY(-5px); }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>

<body class="bg-[#F8FAFC] text-slate-900 overflow-x-hidden" x-data="{ sidebarOpen: true, profileOpen: false, notificationsOpen: false }">

   @include('layouts.sidebar')

    <main class="transition-all duration-300 min-h-screen" :class="sidebarOpen ? 'lg:ml-64' : 'ml-0'">

       @include('layouts.header')


       <div class="p-6 md:p-8">
        <div class="max-w-4xl">
            @if(session('success'))
                <x-alert type="success" :message="session('success')" />
            @endif

            @if(session('error'))
                <x-alert type="error" :message="session('error')" />
            @endif

            @if($errors->any())
                <x-alert type="error" message="Terdapat kesalahan pada input Anda." />
            @endif
        </div>

        <div class="p-2 md:p-2">
          {{ $slot }}
        </div>
    </main>

    <script>
        AOS.init({ once: true });
    </script>
</body>
</html>
