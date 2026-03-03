<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cvmoodern — Elevate Your Career</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .gradient-text {
            color: #005461;
            /* fallback untuk browser lama */
            background: linear-gradient(135deg, #005461 0%, #3bc1a8 100%);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background: linear-gradient(135deg, #005461 0%, #007a8a 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -10px rgba(0, 84, 97, 0.5);
        }

        .card-glow:hover {
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
            border-color: #3bc1a8;
        }

        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(59, 193, 168, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: -1;
            filter: blur(40px);
        }
    </style>
</head>

<body class="bg-[#F8FAFC] text-slate-900 overflow-x-hidden">

    <nav class="glass fixed w-full top-0 z-[100]">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('build/assets/cvmoodern.png') }}" alt="Logo CV Modern"
                    class="h-8 sm:h-10 md:h-12 lg:h-14 w-auto object-contain">
            </div>
            <div class="hidden md:flex space-x-10 text-sm font-semibold text-slate-600">
                <a href="#home" class="hover:text-teal-600 transition-colors">Beranda</a>
                <a href="#templates" class="hover:text-teal-600 transition-colors">Template</a>
                <a href="#pricing" class="hover:text-teal-600 transition-colors">Layanan</a>
            </div>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="btn-primary text-white px-7 py-2.5 rounded-full text-sm font-bold shadow-sm">
                        Buat CV <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="btn-primary text-white px-7 py-2.5 rounded-full text-sm font-bold shadow-sm">
                        Buat CV <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <section id="home" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="blob -top-20 -left-20"></div>
        <div class="blob bottom-0 -right-20"
            style="background: radial-gradient(circle, rgba(0, 84, 97, 0.05) 0%, rgba(255, 255, 255, 0) 70%);"></div>

        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center">
            <div class="lg:w-3/5 text-center lg:text-left" data-aos="fade-up" data-aos-duration="1000">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-teal-50 text-teal-700 text-xs font-bold uppercase tracking-wider mb-6 border border-teal-100">
                    🚀 #1 CV Builder Indonesia
                </span>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
                    Bikin CV Keren <br>
                    <span class="gradient-text">Gak Pakai Ribet.</span>
                </h1>
                <p class="text-lg lg:text-xl text-slate-500 mb-10 max-w-2xl leading-relaxed">
                    Tingkatkan peluang dipanggil interview hingga <span class="text-slate-900 font-bold">80%</span>
                    dengan template ATS-friendly yang didesain oleh pakar HR profesional.
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <button class="btn-primary text-white px-10 py-4 rounded-xl font-bold text-lg shadow-xl">
                        Mulai Sekarang — Gratis
                    </button>
                    <button
                        class="bg-white border border-slate-200 text-slate-700 px-10 py-4 rounded-xl font-bold text-lg hover:bg-slate-50 transition-all flex items-center justify-center">
                        <i class="fa-solid fa-play-circle mr-2 text-teal-600"></i> Lihat Video
                    </button>
                </div>
                <div class="mt-10 flex items-center justify-center lg:justify-start space-x-4 text-sm text-slate-400">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=1"
                            alt="user">
                        <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=2"
                            alt="user">
                        <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=3"
                            alt="user">
                    </div>
                    <span>Bergabung dengan 10,000+ pencari kerja lainnya</span>
                </div>
            </div>

            <div class="lg:w-2/5 mt-16 lg:mt-0 relative" data-aos="zoom-in" data-aos-delay="200">
                <div
                    class="relative z-10 w-72 h-[400px] lg:w-80 lg:h-[480px] bg-white rounded-2xl shadow-[0_30px_60px_-15px_rgba(0,0,0,0.2)] border border-slate-100 p-5 rotate-3 hover:rotate-0 transition-transform duration-500">
                    <div class="w-16 h-16 bg-slate-100 rounded-full mb-6"></div>
                    <div class="h-3 w-1/2 bg-slate-200 rounded mb-2"></div>
                    <div class="h-2 w-1/3 bg-slate-100 rounded mb-8"></div>
                    <div class="space-y-4">
                        <div class="h-2 w-full bg-slate-50 rounded"></div>
                        <div class="h-2 w-full bg-slate-50 rounded"></div>
                        <div class="h-2 w-2/3 bg-slate-50 rounded"></div>
                    </div>
                    <div class="absolute bottom-6 left-0 right-0 px-5">
                        <div class="p-3 bg-teal-50 rounded-lg border border-teal-100 flex items-center justify-between">
                            <span class="text-[10px] font-bold text-teal-700 uppercase">Score: 98/100</span>
                            <div class="flex space-x-1">
                                <div class="w-1 h-1 bg-teal-400 rounded-full"></div>
                                <div class="w-1 h-1 bg-teal-400 rounded-full"></div>
                                <div class="w-1 h-1 bg-teal-400 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-teal-400/20 rounded-full blur-3xl">
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-teal-600 font-bold tracking-widest uppercase text-sm">Layanan Kami</span>
                <h2 class="text-4xl font-extrabold text-slate-900 mt-3">Solusi Karir Terintegrasi</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">Kami tidak hanya memberikan template, tapi membantu
                    perjalanan karirmu dari awal hingga interview.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 bg-teal-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-comments text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Konsultasi Tips</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">
                        Bingung mulai dari mana? Sesi 1-on-1 untuk membahas strategi menonjolkan skill dan menjawab
                        pertanyaan HRD yang menjebak.
                    </p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-600 font-medium">
                        <li><i class="fa-solid fa-check text-teal-500 mr-2"></i> Bedah CV via Chat/Call</li>
                        <li><i class="fa-solid fa-check text-teal-500 mr-2"></i> Strategi Personal Branding</li>
                    </ul>
                    <a href="#"
                        class="block text-center py-3 rounded-xl border border-teal-600 text-teal-600 font-bold hover:bg-teal-600 hover:text-white transition">Tanya
                        Mentor</a>
                </div>

                <div class="bg-slate-900 p-8 rounded-3xl shadow-2xl relative overflow-hidden group" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="absolute top-0 right-0 p-4">
                        <span
                            class="bg-teal-400 text-slate-900 text-[10px] font-black px-3 py-1 rounded-full uppercase">Terpopuler</span>
                    </div>
                    <div class="w-14 h-14 bg-teal-400/10 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-crown text-teal-400 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Customize CV VIP</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Biarkan tim profesional kami yang mengerjakan semuanya. Terima jadi dengan hasil yang dijamin
                        eksklusif dan ATS-Ready.
                    </p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-300 font-medium">
                        <li><i class="fa-solid fa-check text-teal-400 mr-2"></i> Penulisan Deskripsi Kerja</li>
                        <li><i class="fa-solid fa-check text-teal-400 mr-2"></i> Desain Custom Eksklusif</li>
                        <li><i class="fa-solid fa-check text-teal-400 mr-2"></i> Revisi Sampai Puas</li>
                    </ul>
                    <a href="#"
                        class="block text-center py-3 rounded-xl bg-teal-500 text-white font-bold hover:bg-teal-400 transition shadow-lg shadow-teal-500/20">Pesan
                        Layanan VIP</a>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-teal-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-box-open text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Paket Lengkap</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">
                        Senjata perang lengkap untuk melamar kerja. Lebih hemat dan sudah termasuk semua dokumen
                        pendukung yang dibutuhkan.
                    </p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-600 font-medium">
                        <li><i class="fa-solid fa-check text-teal-500 mr-2"></i> Template CV Pilihan</li>
                        <li><i class="fa-solid fa-check text-teal-500 mr-2"></i> Surat Lamaran (Cover Letter)</li>
                        <li><i class="fa-solid fa-check text-teal-500 mr-2"></i> Bonus Template Email HRD</li>
                    </ul>
                    <a href="#"
                        class="block text-center py-3 rounded-xl border border-teal-600 text-teal-600 font-bold hover:bg-teal-600 hover:text-white transition">Lihat
                        Detail Paket</a>
                </div>
            </div>
        </div>
    </section>

    <section id="templates" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-xl" data-aos="fade-right">
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Template Pilihan HRD</h2>
                    <p class="text-slate-500 text-lg">Setiap template telah diuji untuk melewati sistem pelacakan
                        pelamar (ATS) dan menarik perhatian manusia.</p>
                </div>
                <div data-aos="fade-left">
                    <button class="text-teal-600 font-bold hover:underline">Lihat Semua Template <i
                            class="fas fa-arrow-right ml-2"></i></button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="relative overflow-hidden rounded-2xl bg-slate-100 aspect-[3/4] mb-6 shadow-sm border border-slate-100 transition-all card-glow">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                            <button
                                class="bg-white text-slate-900 w-full py-3 rounded-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform">Pakai
                                Template Ini</button>
                        </div>
                        <div class="w-full h-full flex items-center justify-center text-slate-300">
                            <i class="fa-regular fa-file-lines text-6xl"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-bold text-xl text-slate-900">The Executive</h3>
                            <p class="text-slate-500 text-sm">Minimalis & Profesional</p>
                        </div>
                        <span class="bg-teal-50 text-teal-700 px-3 py-1 rounded-md text-sm font-bold italic">Best
                            Seller</span>
                    </div>
                </div>

                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="relative overflow-hidden rounded-2xl bg-slate-100 aspect-[3/4] mb-6 shadow-sm border border-slate-100 transition-all card-glow">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                            <button
                                class="bg-white text-slate-900 w-full py-3 rounded-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform">Pakai
                                Template Ini</button>
                        </div>
                        <div class="w-full h-full flex items-center justify-center text-slate-300 italic font-bold">ATS
                            Friendly</div>
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-bold text-xl text-slate-900">Tech Specialist</h3>
                            <p class="text-slate-500 text-sm">Modern & Clean</p>
                        </div>
                        <span class="text-slate-900 font-extrabold text-lg">Rp 35rb</span>
                    </div>
                </div>

                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="relative overflow-hidden rounded-2xl bg-slate-100 aspect-[3/4] mb-6 shadow-sm border border-slate-100 transition-all card-glow">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                            <button
                                class="bg-white text-slate-900 w-full py-3 rounded-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform">Pakai
                                Template Ini</button>
                        </div>
                        <div class="w-full h-full flex items-center justify-center text-slate-300">
                            <i class="fa-solid fa-wand-magic-sparkles text-6xl"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-bold text-xl text-slate-900">Creative Flow</h3>
                            <p class="text-slate-500 text-sm">Desainer & Kreatif</p>
                        </div>
                        <span class="text-slate-900 font-extrabold text-lg">Rp 50rb</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <img src="{{ asset('build/assets/cvmoodern-white.png') }}" alt="CV Modern Logo"
                        class="mb-4 h-10 sm:h-12 md:h-14 w-auto object-contain">

                    <p class="max-w-sm leading-relaxed mb-6 text-sm sm:text-base text-gray-300">
                        Kami membantu para profesional muda membangun personal brand melalui CV yang tidak hanya cantik,
                        tapi juga fungsional secara sistem.
                    </p>

                    <div class="flex space-x-5 text-white text-lg">
                        <a href="#" class="hover:text-teal-400 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-teal-400 transition-colors">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#" class="hover:text-teal-400 transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">Produk</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-white transition">Template CV</a></li>
                        <li><a href="#" class="hover:text-white transition">Review CV</a></li>
                        <li><a href="#" class="hover:text-white transition">Optimasi LinkedIn</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">Bantuan</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition">Customer Support</a></li>
                        <li><a href="#" class="hover:text-white transition">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="pt-10 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-6 text-sm">
                <p>&copy; {{ date('Y') }} cvmoodern. All rights reserved.</p>
                <div class="flex space-x-6">
                    <span>Privacy Policy</span>
                    <span>Cookie Policy</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize AOS
        AOS.init({
            once: true,
            offset: 100
        });

        // Simple sticky navbar effect
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('py-3');
                nav.classList.remove('py-4');
            } else {
                nav.classList.add('py-4');
                nav.classList.remove('py-3');
            }
        });
    </script>
</body>

</html>
