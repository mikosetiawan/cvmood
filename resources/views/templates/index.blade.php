<x-app-layout>
    <div x-data="{ openPreview: false, previewSrc: '', templateName: '' }" class="relative">

        <div class="mb-10" data-aos="fade-up">
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Pilih Template & Paket</h1>
            <p class="text-slate-500 mt-2 text-lg">Investasikan karirmu dengan desain CV profesional dan ATS-friendly.</p>
        </div>

        @if($activePackages->count() > 0)
            <div class="bg-gradient-to-r from-teal-500 to-emerald-600 p-1 rounded-[2rem] mb-10 shadow-lg shadow-teal-100" data-aos="zoom-in">
                <div class="bg-white/95 backdrop-blur px-6 py-4 rounded-[1.8rem] flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-2xl flex items-center justify-center shadow-inner">
                            <i class="fa-solid fa-gem text-xl"></i>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Status Akun</p>
                            <p class="text-slate-900 font-extrabold text-lg">Sisa Kuota CV Premium: <span class="text-teal-600">{{ $activePackages->sum('remaining_slots') }}</span></p>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <span class="text-xs bg-teal-50 text-teal-700 px-4 py-2 rounded-full font-bold border border-teal-100">Aktif</span>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            @foreach($packages as $package)
            <div class="group relative bg-white border border-slate-100 p-8 rounded-[2.5rem] hover:border-teal-500 transition-all duration-300 shadow-sm hover:shadow-2xl hover:shadow-teal-100/50" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="absolute -top-4 left-8">
                    <span class="text-[10px] font-black uppercase tracking-widest text-white bg-teal-500 px-4 py-1.5 rounded-full shadow-md shadow-teal-200">Paket Hemat</span>
                </div>

                <h3 class="text-xl font-black text-slate-900 mt-4">{{ $package->name }}</h3>
                <div class="flex items-baseline gap-1 mt-2">
                    <span class="text-sm font-bold text-slate-400">Rp</span>
                    <span class="text-4xl font-black text-slate-900">{{ number_format($package->price, 0, ',', '.') }}</span>
                </div>

                <ul class="mt-8 space-y-4 text-sm text-slate-600">
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 bg-teal-50 rounded-full flex items-center justify-center text-teal-500 text-[10px]"><i class="fa-solid fa-check"></i></div>
                        Kuota <strong>{{ $package->cv_limit }} CV</strong> Premium
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 bg-teal-50 rounded-full flex items-center justify-center text-teal-500 text-[10px]"><i class="fa-solid fa-check"></i></div>
                        Akses Semua Template
                    </li>
                </ul>

                <form action="{{ route('purchase.package', $package->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full mt-8 bg-slate-900 text-white py-4 rounded-2xl font-bold group-hover:bg-teal-600 transition-all shadow-lg shadow-slate-200 group-hover:shadow-teal-200 active:scale-95">
                        Beli Sekarang
                    </button>
                </form>
            </div>
            @endforeach
        </div>

        <div class="flex items-center gap-4 mb-8">
            <h2 class="text-2xl font-black text-slate-900 whitespace-nowrap">Pilih Desain CV</h2>
            <div class="h-[1px] w-full bg-slate-100"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($templates as $template)
            @php
                $isUsed = !$template->is_premium && $cvs->where('cv_template_id', $template->id)->first();
                $imageUrl = asset('storage/' . $template->thumbnail);
            @endphp

            <div class="group bg-white rounded-[2rem] border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 {{ $isUsed ? 'opacity-75' : '' }}" data-aos="fade-up">
                <div class="relative overflow-hidden aspect-[3/4]">
                    <img src="{{ $imageUrl }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                    <div class="absolute top-4 right-4 z-10">
                        @if($template->is_premium)
                            <span class="bg-amber-400 text-white text-[10px] font-black px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1">
                                <i class="fa-solid fa-crown"></i> PREMIUM
                            </span>
                        @else
                            <span class="bg-teal-500 text-white text-[10px] font-black px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1">
                                <i class="fa-solid fa-star"></i> GRATIS
                            </span>
                        @endif
                    </div>

                    <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center gap-3 backdrop-blur-[2px]">

                        <button
                            @click="previewSrc = '{{ $imageUrl }}'; templateName = '{{ $template->name }}'; openPreview = true"
                            class="bg-white/20 hover:bg-white text-white hover:text-slate-900 w-12 h-12 rounded-full flex items-center justify-center backdrop-blur-md transition-all duration-300 transform translate-y-4 group-hover:translate-y-0"
                        >
                            <i class="fa-solid fa-eye text-lg"></i>
                        </button>

                        @if(!$isUsed)
                        <a href="{{ route('cv.create', $template->id) }}" class="bg-white text-slate-900 px-6 py-3 rounded-2xl font-bold text-sm shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 delay-75">
                            Gunakan Desain
                        </a>
                        @endif
                    </div>
                </div>

                <div class="p-6 text-center">
                    <h4 class="font-bold text-slate-800 text-lg">{{ $template->name }}</h4>
                    <p class="text-xs text-slate-400 mt-1 uppercase tracking-widest font-bold">
                        {{ $template->is_premium ? 'Exclusive Layout' : 'Standard Layout' }}
                    </p>

                    @if($isUsed)
                        <button disabled class="w-full mt-4 text-xs font-black bg-slate-100 py-3 rounded-xl text-slate-400 cursor-not-allowed uppercase tracking-tighter">
                            <i class="fa-solid fa-lock mr-1"></i> Sudah Digunakan
                        </button>
                    @else
                        <a href="{{ route('cv.create', $template->id) }}" class="block md:hidden w-full mt-4 text-xs font-black bg-teal-50 py-3 rounded-xl text-teal-600 uppercase tracking-tighter">
                            Pilih Template
                        </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div
            x-show="openPreview"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[999] flex items-center justify-center p-4 bg-slate-900/95 backdrop-blur-md"
            x-cloak
            @keydown.escape.window="openPreview = false"
        >
            <div class="absolute inset-0" @click="openPreview = false"></div>

            <div class="relative max-w-3xl w-full flex flex-col items-center" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="scale-95" x-transition:enter-end="scale-100">

                <div class="w-full flex justify-between items-center mb-4 px-2">
                    <h3 class="text-white font-bold text-xl" x-text="templateName"></h3>
                    <button @click="openPreview = false" class="text-white/70 hover:text-white transition-colors">
                        <i class="fa-solid fa-xmark text-3xl"></i>
                    </button>
                </div>

                <div class="bg-white p-2 rounded-3xl shadow-2xl">
                    <img :src="previewSrc" class="max-h-[75vh] w-auto rounded-2xl shadow-inner">
                </div>

                <div class="mt-6 flex gap-4">
                    <button @click="openPreview = false" class="bg-white/10 hover:bg-white/20 text-white px-8 py-3 rounded-2xl font-bold transition-all backdrop-blur-md">
                        Tutup
                    </button>
                </div>
            </div>
        </div>

    </div>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</x-app-layout>
