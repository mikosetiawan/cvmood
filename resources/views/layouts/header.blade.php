<header class="glass sticky top-0 z-40 px-6 py-3 flex justify-between items-center">
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = !sidebarOpen"
            class="text-slate-500 hover:text-teal-600 p-2 rounded-lg bg-slate-50 transition-colors">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
        <h2 class="hidden md:block font-bold text-slate-800">Selamat Datang, {{ explode(' ', auth()->user()->name)[0] }}👋</h2>
    </div>

    <div class="flex items-center space-x-3">
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="w-10 h-10 rounded-full flex items-center justify-center text-slate-500 hover:bg-slate-100 relative">
                <i class="fa-regular fa-bell text-lg"></i>
                <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
            </button>

            <div x-show="open" @click.away="open = false" x-transition
                class="absolute right-0 mt-2 w-80 bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                <div class="p-4 border-b border-slate-50 flex justify-between items-center">
                    <h3 class="font-bold text-sm">Notifikasi</h3>
                    <button class="text-[10px] text-teal-600 font-bold uppercase">Tandai Dibaca</button>
                </div>
                <div class="max-h-96 overflow-y-auto">
                    <a href="#" class="block p-4 hover:bg-slate-50 border-b border-slate-50">
                        <div class="flex gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-teal-100 flex-shrink-0 flex items-center justify-center text-teal-600">
                                <i class="fa-solid fa-check-circle text-xs"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-800">CV Executive berhasil dibuat!</p>
                                <p class="text-[10px] text-slate-400 mt-1">2 jam yang lalu</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block p-4 hover:bg-slate-50 border-b border-slate-50">
                        <div class="flex gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-orange-100 flex-shrink-0 flex items-center justify-center text-orange-600">
                                <i class="fa-solid fa-crown text-xs"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-800">Promo: VIP Premium diskon 50%</p>
                                <p class="text-[10px] text-slate-400 mt-1">1 hari yang lalu</p>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="#" class="block text-center py-3 text-xs font-bold text-slate-500 hover:text-teal-600">Lihat
                    Semua</a>
            </div>
        </div>

        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="flex items-center gap-3 p-1 pr-3 rounded-full hover:bg-slate-50 transition">

                {{-- Logika Foto Profil Dinamis --}}
                @if(auth()->user()->avatar)
                    <img src="{{ asset('storage/' . auth()->user()->avatar) }}"
                        class="w-8 h-8 rounded-full border border-slate-200 shadow-sm object-cover"
                        alt="{{ auth()->user()->name }}">
                @else
                    {{-- Placeholder menggunakan inisial nama jika foto tidak ada --}}
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0D9488&color=fff"
                        class="w-8 h-8 rounded-full border border-slate-200 shadow-sm"
                        alt="{{ auth()->user()->name }}">
                @endif

                <div class="hidden md:block text-left leading-none">
                    <p class="text-xs font-bold text-slate-800">{{ auth()->user()->name }}</p>
                    <span class="text-[10px] text-slate-400">{{ auth()->user()->role ?? 'User' }}</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 ml-1"></i>
            </button>

            <div x-show="open" @click.away="open = false" x-transition
                class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 p-2">
                <div class="px-4 py-3 border-b border-slate-50">
                    <p class="text-xs text-slate-400">Email Anda</p>
                    <p class="text-sm font-bold truncate">{{ auth()->user()->email }}</p>
                </div>
                <div class="mt-2">
                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600 hover:bg-slate-50 rounded-xl transition">
                        <i class="fa-regular fa-user w-4 text-teal-600"></i> Profil Saya
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600 hover:bg-slate-50 rounded-xl transition">
                        <i class="fa-solid fa-gear w-4 text-teal-600"></i> Pengaturan
                    </a>
                </div>
                <div class="mt-2 pt-2 border-t border-slate-50">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-red-500 hover:bg-red-50 rounded-xl transition font-semibold">
                            <i class="fa-solid fa-right-from-bracket w-4"></i> Keluar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
