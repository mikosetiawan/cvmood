<x-app-layout title="Halaman Tidak Ditemukan">
    <div class="flex flex-col items-center justify-center min-h-[60vh] text-center px-4">
        <div class="relative">
            <h1 class="text-[120px] md:text-[160px] font-black leading-none opacity-10 select-none">404</h1>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <i class="fas fa-map-signs text-5xl mb-4 text-[#005461]"></i>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Ups! Halaman Hilang</h2>
            </div>
        </div>

        <p class="text-slate-500 max-w-md mt-4 mb-8">
            Maaf, kami tidak dapat menemukan halaman yang Anda cari. Mungkin tautannya salah atau sudah dihapus.
        </p>

        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ url()->previous() }}" class="px-6 py-3 bg-white border border-slate-200 text-slate-700 rounded-xl font-semibold hover:bg-slate-50 transition-all flex items-center gap-2 shadow-sm">
                <i class="fas fa-arrow-left text-sm"></i> Kembali
            </a>
            <a href="/" class="px-6 py-3 sidebar-item-active rounded-xl font-semibold shadow-lg shadow-teal-900/20 transition-all flex items-center gap-2">
                <i class="fas fa-home text-sm"></i> Ke Dashboard
            </a>
        </div>
    </div>
</x-app-layout>
