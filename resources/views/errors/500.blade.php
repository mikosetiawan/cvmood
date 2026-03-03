<x-app-layout title="Gangguan Sistem">
    <div class="flex flex-col items-center justify-center min-h-[60vh] text-center px-4">
        <div class="w-24 h-24 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center mb-6 text-4xl animate-pulse">
            <i class="fas fa-tools"></i>
        </div>

        <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Sedang Ada Perbaikan (500)</h2>
        <p class="text-slate-500 max-w-md mt-3 mb-8">
            Server kami sedang mengalami kendala teknis. Tim kami sudah diberitahu dan sedang memperbaikinya.
        </p>

        <button onclick="window.location.reload()" class="px-8 py-3 sidebar-item-active rounded-xl font-semibold shadow-lg shadow-teal-900/20 transition-all flex items-center gap-2">
            <i class="fas fa-sync-alt"></i> Coba Segarkan Halaman
        </button>
    </div>
</x-app-layout>
