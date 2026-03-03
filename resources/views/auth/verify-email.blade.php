<x-guest-layout title="Verifikasi Email">
    <div class="w-full max-w-md text-center" data-aos="zoom-in">
        <div class="bg-white/80 backdrop-blur-xl border border-white p-10 rounded-[2.5rem] shadow-2xl shadow-slate-200/50">
            <div class="w-20 h-20 bg-teal-50 text-[#007a8a] rounded-full flex items-center justify-center mx-auto mb-6 text-3xl animate-bounce">
                <i class="fa-solid fa-paper-plane"></i>
            </div>

            <h1 class="text-2xl font-extrabold text-[#005461] mb-4">Cek Email Anda!</h1>
            <p class="text-slate-600 mb-8 leading-relaxed">
                Kami telah mengirimkan tautan verifikasi ke email Anda. Silakan klik tautan tersebut untuk mengaktifkan akun.
            </p>

            <div class="space-y-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn-primary w-full py-3.5 rounded-2xl text-white font-bold">
                        Kirim Ulang Email
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-semibold text-slate-400 hover:text-red-500 transition-colors">
                        Keluar / Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
