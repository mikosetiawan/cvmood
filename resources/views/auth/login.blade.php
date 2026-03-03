<x-guest-layout title="Masuk">
    <div class="w-full max-w-md" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-[#005461]">Selamat Datang!</h1>
            <p class="text-slate-500 mt-2">Silakan masuk untuk melanjutkan ke <span class="font-semibold">cvmoodern</span></p>
        </div>

        <div class="bg-white/80 backdrop-blur-xl border border-white p-8 rounded-[2.5rem] shadow-2xl shadow-slate-200/50">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="space-y-2">
                    <label for="email" class="text-sm font-semibold text-slate-700 ml-1">Email</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#007a8a] transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="nama@email.com"
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center ml-1">
                        <label for="password" class="text-sm font-semibold text-slate-700">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs font-medium text-[#007a8a] hover:underline">Lupa Password?</a>
                        @endif
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#007a8a] transition-colors">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input id="password" type="password" name="password" required placeholder="••••••••"
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-[#005461] border-slate-300 rounded focus:ring-[#007a8a]">
                    <label for="remember_me" class="ml-2 text-sm text-slate-600">Ingat perangkat ini</label>
                </div>

                <button type="submit" class="btn-primary w-full py-4 rounded-2xl text-white font-bold shadow-lg shadow-teal-900/20">
                    Masuk Sekarang
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-slate-600 text-sm">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-bold text-[#005461] hover:text-[#007a8a] transition-colors">Daftar Gratis</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
