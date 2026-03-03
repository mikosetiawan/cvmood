<x-guest-layout title="Konfirmasi Keamanan">
    <div class="w-full max-w-md" data-aos="fade-up">
        <div class="bg-white/80 backdrop-blur-xl border border-white p-8 rounded-[2.5rem] shadow-2xl">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-amber-50 text-amber-600 rounded-full mb-4 text-xl">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h1 class="text-xl font-bold text-slate-800">Area Terproteksi</h1>
                <p class="text-sm text-slate-500 mt-2">Untuk melanjutkan, silakan konfirmasi password Anda terlebih dahulu.</p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700">Password</label>
                    <input type="password" name="password" required autocomplete="current-password" autofocus
                        class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 outline-none">
                </div>

                <button type="submit" class="btn-primary w-full py-4 rounded-2xl text-white font-bold">
                    Konfirmasi Password
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
