<div x-show="sidebarOpen" @click="sidebarOpen = false"
    class="fixed inset-0 z-40 bg-slate-900/20 backdrop-blur-sm lg:hidden transition-opacity">
</div>

<aside
    class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 transition-transform duration-300 transform"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

    <div class="flex flex-col h-full">
        <div class="p-6 flex justify-between items-center">
            <img src="{{ asset('build/assets/cvmoodern.png') }}" alt="Logo" class="h-10 w-auto">
            <button @click="sidebarOpen = false" class="lg:hidden text-slate-400">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <nav class="flex-1 px-4 space-y-2 overflow-y-auto">
            @php
                // Mengambil menu yang diurutkan dan dikelompokkan berdasarkan kategori
                $menuGroups = \App\Models\Menu::orderBy('order')->get()->groupBy('category');
            @endphp

            @foreach($menuGroups as $category => $menus)
                <p
                    class="px-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest {{ $loop->first ? 'mb-4' : 'mt-8 mb-4' }}">
                    {{ $category }}
                </p>

                @foreach($menus as $menu)
                    {{-- Cek apakah user punya permission untuk menu ini --}}
                    @can($menu->permission_name)
                        <a href="{{ url($menu->url) }}"
                            class="flex items-center px-4 py-3 rounded-xl text-sm font-semibold transition-all group
                               {{ Request::is($menu->url . '*') ? 'bg-teal-50 text-teal-600' : 'text-slate-500 hover:bg-slate-50 hover:text-teal-600' }}">

                            <i
                                class="fa-solid {{ $menu->icon }} mr-3 w-5 {{ Request::is($menu->url . '*') ? 'text-teal-600' : 'group-hover:text-teal-600' }}"></i>

                            {{ $menu->name }}

                            {{-- Badge khusus untuk Lowongan --}}
                            @if($menu->name == 'Lowongan')
                                <span class="ml-auto bg-teal-100 text-teal-700 text-[10px] px-2 py-0.5 rounded-full">New</span>
                            @endif
                        </a>
                    @endcan
                @endforeach
            @endforeach
        </nav>

        <div class="p-4 mx-4 mb-6 rounded-2xl bg-teal-50 border border-teal-100">
            <p class="text-xs font-bold text-teal-800">Ganti ke Pro</p>
            <p class="text-[11px] text-teal-600 mt-1 leading-relaxed">Dapatkan akses ke semua template VIP.</p>
            <button
                class="mt-3 w-full py-2 bg-teal-600 text-white text-xs font-bold rounded-lg hover:bg-teal-700 transition">Upgrade
                Sekarang</button>
        </div>
    </div>
</aside>
