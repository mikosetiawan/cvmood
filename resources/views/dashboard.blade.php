<x-app-layout>
    <div class="mb-8" data-aos="fade-up">
        <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900">Ringkasan Karir</h1>
        <p class="text-slate-500 mt-1">Kelola CV dan pantau perkembangan lamaran kerjamu di sini.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="card-stats bg-white p-6 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up"
            data-aos-delay="100">
            <div class="w-12 h-12 bg-teal-50 rounded-2xl flex items-center justify-center text-teal-600 mb-4">
                <i class="fa-solid fa-file-invoice text-xl"></i>
            </div>
            <p class="text-slate-500 text-sm font-medium">CV Dibuat</p>
            <h3 class="text-3xl font-black text-slate-900 mt-1">04</h3>
        </div>
        <div class="card-stats bg-white p-6 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up"
            data-aos-delay="200">
            <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-4">
                <i class="fa-solid fa-paper-plane text-xl"></i>
            </div>
            <p class="text-slate-500 text-sm font-medium">Lamaran Terkirim</p>
            <h3 class="text-3xl font-black text-slate-900 mt-1">12</h3>
        </div>
        <div class="card-stats bg-white p-6 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up"
            data-aos-delay="300">
            <div class="w-12 h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 mb-4">
                <i class="fa-solid fa-eye text-xl"></i>
            </div>
            <p class="text-slate-500 text-sm font-medium">Profil Dilihat HRD</p>
            <h3 class="text-3xl font-black text-slate-900 mt-1">48</h3>
        </div>
        <div class="card-stats bg-white p-6 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up"
            data-aos-delay="400">
            <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 mb-4">
                <i class="fa-solid fa-calendar-check text-xl"></i>
            </div>
            <p class="text-slate-500 text-sm font-medium">Panggilan Interview</p>
            <h3 class="text-3xl font-black text-slate-900 mt-1">02</h3>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-6">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold text-slate-900">CV Terbaru</h2>
                <button class="text-sm font-bold text-teal-600">Lihat Semua</button>
            </div>

            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-[500px]">
                    <thead>
                        <tr class="bg-slate-50/50">
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Nama CV
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Template
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Terakhir
                                Diedit</th>
                            <th
                                class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-wider text-right">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-10 bg-slate-100 rounded border border-slate-200 flex items-center justify-center text-[8px] text-slate-400 font-bold">
                                        PDF</div>
                                    <span class="text-sm font-bold text-slate-700">CV - Frontend Developer</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-500">Tech Specialist</td>
                            <td class="px-6 py-4 text-sm text-slate-500">2 Menit yang lalu</td>
                            <td class="px-6 py-4 text-right whitespace-nowrap">
                                <button class="p-2 text-slate-400 hover:text-teal-600"><i
                                        class="fa-solid fa-pen-to-square"></i></button>
                                <button class="p-2 text-slate-400 hover:text-blue-600"><i
                                        class="fa-solid fa-download"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="space-y-8">
            <h2 class="text-xl font-bold text-slate-900">Tips Karir Hari Ini</h2>
            <div
                class="bg-gradient-to-br from-slate-900 to-slate-800 p-6 rounded-3xl text-white shadow-xl relative overflow-hidden group">
                <i class="fa-solid fa-lightbulb text-teal-400 text-3xl mb-4"></i>
                <h4 class="font-bold mb-2">Gunakan Keyword ATS</h4>
                <p class="text-xs text-slate-300 leading-relaxed">Pastikan CV kamu menggunakan kata kunci yang ada di
                    deskripsi pekerjaan.</p>
            </div>
        </div>
    </div>
</x-app-layout>
