<x-guest-layout title="Daftar Akun">
    <div class="w-full max-w-md my-10" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-[#005461]">Buat Akun Baru</h1>
            <p class="text-slate-500 mt-2">Mulai perjalanan karirmu bersama kami</p>
        </div>

        <div class="bg-white/80 backdrop-blur-xl border border-white p-8 rounded-[2.5rem] shadow-2xl shadow-slate-200/50">
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 ml-1">Nama Lengkap</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#007a8a] transition-colors">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="text" name="name" value="{{ old('name') }}" required placeholder="John Doe"
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 ml-1">Email</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#007a8a] transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="john@example.com"
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 ml-1">Password</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#007a8a] transition-colors">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" required placeholder="Minimal 8 karakter"
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 ml-1">Konfirmasi Password</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-[#007a8a] transition-colors">
                            <i class="fa-solid fa-shield-check"></i>
                        </div>
                        <input type="password" name="password_confirmation" required placeholder="Ulangi password"
                            class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                    </div>
                </div>

                <button type="submit" class="btn-primary w-full py-4 rounded-2xl text-white font-bold shadow-lg mt-4">
                    Buat Akun
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-slate-600 text-sm">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-bold text-[#005461] hover:text-[#007a8a] transition-colors">Login di sini</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
