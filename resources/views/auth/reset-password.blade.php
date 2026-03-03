<x-guest-layout title="Reset Password">
    <div class="w-full max-w-md" data-aos="fade-up">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-[#005461]">Password Baru</h1>
            <p class="text-slate-500 mt-2">Buat password yang kuat untuk keamanan akun Anda.</p>
        </div>

        <div class="bg-white/80 backdrop-blur-xl border border-white p-8 rounded-[2.5rem] shadow-2xl">
            <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <input type="hidden" name="email" value="{{ old('email', $request->email) }}">

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 ml-1">Password Baru</label>
                    <input type="password" name="password" required autofocus
                        class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 ml-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" required
                        class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-[#007a8a]/20 focus:border-[#007a8a] transition-all outline-none">
                </div>

                <button type="submit" class="btn-primary w-full py-4 rounded-2xl text-white font-bold">
                    Update Password
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
