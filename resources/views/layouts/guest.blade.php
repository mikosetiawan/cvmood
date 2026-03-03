<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Auth' }} — cvmoodern</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .btn-primary { background: linear-gradient(135deg, #005461 0%, #007a8a 100%); transition: all 0.3s ease; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 20px -10px rgba(0, 84, 97, 0.5); }
        .blob { position: absolute; width: 500px; height: 500px; background: radial-gradient(circle, rgba(59, 193, 168, 0.1) 0%, rgba(255, 255, 255, 0) 70%); z-index: -1; filter: blur(40px); }

        /* Custom Styling untuk SweetAlert agar menyatu dengan UI */
        .swal2-popup {
            border-radius: 20px !important;
            padding: 2rem !important;
        }
        .swal2-confirm {
            background: linear-gradient(135deg, #005461 0%, #007a8a 100%) !important;
            border-radius: 10px !important;
            padding: 12px 30px !important;
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900 overflow-hidden">
    <div class="min-h-screen flex items-center justify-center px-6 relative">
        <div class="blob -top-20 -left-20"></div>
        <div class="blob bottom-0 -right-20"></div>

        <a href="/" class="absolute top-10 left-10 text-slate-500 hover:text-teal-600 font-bold transition-colors hidden md:block">
            <i class="fa-solid fa-arrow-left mr-2"></i> Beranda
        </a>

        {{ $slot }}
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        AOS.init();

        // Helper function untuk memanggil alert kustom
        const showAlert = (type, title, message) => {
            Swal.fire({
                icon: type, // 'success', 'error', 'warning', 'info'
                title: title,
                text: message,
                showConfirmButton: true,
                timer: 4000,
                timerProgressBar: true,
                customClass: {
                    confirmButton: 'btn-primary'
                }
            });
        };

        // Otomatis deteksi Session Laravel (jika Anda menggunakan Laravel)
        @if(session('success'))
            showAlert('success', 'Berhasil!', "{{ session('success') }}");
        @endif

        @if(session('error'))
            showAlert('error', 'Oops!', "{{ session('error') }}");
        @endif

        @if($errors->any())
            showAlert('error', 'Kesalahan Input', "{{ $errors->first() }}");
        @endif
    </script>
</body>
</html>
