<x-guest-layout title="Lupa Password">
    <div class="w-full max-w-md" data-aos="zoom-in" data-aos-duration="800">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-teal-50 text-[#007a8a] rounded-2xl mb-4 text-2xl">
                <i class="fa-solid fa-key"></i>
            </div>
            <h1 class="text-3xl font-extrabold text-[#005461]">Lupa Password?</h1>
            <p class="text-slate-500 mt-2 px-6">Jangan khawatir! Masukkan email Anda dan kami akan mengirimkan tautan pemulihan.</p>
        </div>

        <div class="bg-white/80 backdrop-blur-xl border border-white p-8 rounded-[2.5rem] shadow-2xl shadow-slate-200/50">
            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 ml-1">Email Terdaftar</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#007a8a] transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email" name="email" :value="old('email')" required autofocus placeholder="nama@email.com"
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                    </div>
                </div>

                <button type="submit" class="btn-primary w-full py-4 rounded-2xl text-white font-bold shadow-lg">
                    Kirim Link Reset
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <a href="{{ route('login') }}" class="text-sm font-bold text-slate-500 hover:text-[#005461] transition-colors">
                    <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Login
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
