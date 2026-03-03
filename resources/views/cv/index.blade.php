<x-app-layout>
    <div class="mb-8 flex justify-between items-center" data-aos="fade-up">
        <div>
            <h1 class="text-2xl font-black text-slate-900">Daftar CV Saya</h1>
            <p class="text-slate-500">Kelola semua CV yang telah Anda buat di sini.</p>
        </div>
        <a href="{{ route('templates.index') }}" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-2xl font-bold transition flex items-center shadow-lg shadow-teal-100">
            <i class="fa-solid fa-plus mr-2"></i> Buat CV Baru
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($cvs as $cv)
        <div class="bg-white border border-slate-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition group">
            <div class="relative h-48 bg-slate-100 overflow-hidden">
                <img src="{{ asset($cv->template->thumbnail) }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center gap-3">
                    <a href="#" class="bg-white p-3 rounded-full text-slate-900 hover:bg-teal-500 hover:text-white transition">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="#" class="bg-white p-3 rounded-full text-slate-900 hover:bg-amber-500 hover:text-white transition">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </div>
            </div>

            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-slate-900 text-lg truncate pr-4">{{ $cv->cv_title }}</h3>
                    <span class="text-[10px] bg-slate-100 text-slate-600 px-2 py-1 rounded-md font-bold uppercase italic">
                        {{ $cv->template->name }}
                    </span>
                </div>

                <p class="text-xs text-slate-400 mb-4">
                    Dibuat pada: {{ $cv->created_at->format('d M Y') }}
                </p>

                <div class="flex items-center gap-2 mt-4 pt-4 border-t border-slate-50">
                    <button class="flex-1 bg-slate-900 text-white text-center py-2.5 rounded-xl font-bold text-sm hover:bg-slate-800 transition">
                        Download PDF
                    </button>
                    <form action="#" method="POST" onsubmit="return confirm('Hapus CV ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2.5 text-red-500 hover:bg-red-50 rounded-xl transition">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full bg-white border-2 border-dashed border-slate-200 rounded-3xl p-12 text-center">
            <div class="bg-slate-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-300 text-3xl">
                <i class="fa-solid fa-file-invoice"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-900">Belum ada CV</h3>
            <p class="text-slate-500 mb-6">Anda belum membuat CV apapun. Ayo mulai sekarang!</p>
            <a href="{{ route('templates.index') }}" class="text-teal-600 font-bold hover:underline">
                Lihat Template <i class="fa-solid fa-arrow-right ml-1"></i>
            </a>
        </div>
        @endforelse
    </div>
</x-app-layout>
