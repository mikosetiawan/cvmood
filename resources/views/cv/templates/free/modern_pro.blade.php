<div id="cv-preview"
    class="bg-white shadow-2xl border border-gray-200 flex flex-row"
    style="min-height: 841px; width: 595px; font-family: 'serif'; position: relative;">

    <aside class="w-1/3 bg-slate-800 text-white p-6 flex flex-col">
        <div class="text-center mb-8">
            <img :src="imageUrl" alt="Profile"
                class="w-28 h-28 rounded-full border-4 border-teal-500 mx-auto mb-4 object-cover shadow-md">
            <h1 class="text-lg font-bold uppercase tracking-wider leading-tight" x-text="nama"></h1>
            <p class="text-teal-400 text-xs font-medium mt-2" x-text="jabatan"></p>
        </div>

        <div class="space-y-6">
            <section>
                <h3 class="text-[10px] font-bold uppercase border-b border-slate-600 pb-1 mb-3 tracking-widest text-teal-500">Kontak</h3>
                <ul class="text-[10px] space-y-2">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-envelope text-teal-500 w-3"></i>
                        <span x-text="email"></span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-phone text-teal-500 w-3"></i>
                        <span x-text="phone"></span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-teal-500 w-3"></i>
                        <span x-text="location"></span>
                    </li>
                </ul>
            </section>

            <section>
                <h3 class="text-[10px] font-bold uppercase border-b border-slate-600 pb-1 mb-3 tracking-widest text-teal-500">Keahlian</h3>
                <div class="flex flex-wrap gap-1">
                    <template x-for="skill in skills.split('|')" :key="skill">
                        <span class="bg-slate-700 text-[9px] px-2 py-0.5 rounded text-gray-200" x-text="skill.trim()" x-show="skill.trim() !== ''"></span>
                    </template>
                </div>
            </section>
        </div>
    </aside>

    <div class="w-2/3 p-8 bg-white">
        <section class="mb-8">
            <h2 class="text-sm font-bold text-slate-800 flex items-center gap-2 mb-3 uppercase tracking-wider">
                <i class="fas fa-user-circle text-teal-600"></i> Profil Profesional
            </h2>
            <p class="text-[11px] text-gray-700 leading-relaxed text-justify" x-text="tentang"></p>
        </section>

        <section class="mb-8">
            <h2 class="text-sm font-bold text-slate-800 flex items-center gap-2 mb-4 uppercase tracking-wider">
                <i class="fas fa-briefcase text-teal-600"></i> Pengalaman Kerja
            </h2>
            <div class="relative border-l border-gray-200 ml-2">
                <template x-for="(exp, index) in pengalaman" :key="index">
                    <div class="mb-5 ml-4 relative">
                        <span class="absolute -left-[21px] top-1 w-3 h-3 bg-teal-500 rounded-full border-2 border-white"></span>
                        <div class="flex justify-between items-start">
                            <h4 class="font-bold text-[11px] text-gray-800" x-text="exp.posisi || 'Posisi'"></h4>
                            <span class="text-[9px] text-teal-600 font-bold" x-text="exp.tahun"></span>
                        </div>
                        <p class="text-[10px] font-medium text-gray-500 italic" x-text="exp.tempat"></p>
                        <p class="text-[10px] text-gray-600 text-justify" x-text="exp.desc"></p>
                    </div>
                </template>
            </div>
        </section>

        <section>
            <h2 class="text-sm font-bold text-slate-800 flex items-center gap-2 mb-4 uppercase tracking-wider">
                <i class="fas fa-graduation-cap text-teal-600"></i> Pendidikan
            </h2>
            <div class="space-y-4 ml-2">
                <template x-for="(edu, index) in pendidikan" :key="index">
                    <div>
                        <div class="flex justify-between">
                            <h4 class="font-bold text-[11px] text-gray-800" x-text="edu.prodi || 'Jurusan'"></h4>
                            <span class="text-[9px] text-gray-500" x-text="edu.tahun"></span>
                        </div>
                        <p class="text-[10px] text-gray-600" x-text="edu.sekolah"></p>
                    </div>
                </template>
            </div>
        </section>
    </div>
</div>
