<div id="cv-preview" class="bg-white shadow-2xl border border-gray-200 flex flex-col"
    style="min-height: 841px; width: 595px; font-family: 'serif'; position: relative;">

    <div class="h-4 bg-amber-600 w-full"></div>

    <div class="p-10 flex-1">
        <div class="flex justify-between items-start border-b-2 border-amber-600 pb-6 mb-8">
            <div class="w-2/3">
                <h1 class="text-3xl font-bold text-gray-800 tracking-tighter italic" x-text="nama"></h1>
                <p class="text-amber-700 font-semibold tracking-widest uppercase text-xs mt-1" x-text="jabatan"></p>
                <div class="mt-4 text-[10px] text-gray-600 flex gap-4">
                    <span><i class="fas fa-envelope mr-1 text-amber-600"></i> <span x-text="email"></span></span>
                    <span><i class="fas fa-phone mr-1 text-amber-600"></i> <span x-text="phone"></span></span>
                    <span><i class="fas fa-map-marker-alt mr-1 text-amber-600"></i> <span x-text="location"></span></span>
                </div>
            </div>
            <img :src="imageUrl" class="w-24 h-24 border-2 border-amber-600 p-1 object-cover">
        </div>

        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-8">
                <section class="mb-6">
                    <h3 class="text-xs font-bold text-amber-800 uppercase mb-3 border-l-4 border-amber-600 pl-2">Ringkasan Eksekutif</h3>
                    <p class="text-[11px] text-gray-700 leading-relaxed italic" x-text="tentang"></p>
                </section>

                <section>
                    <h3 class="text-xs font-bold text-amber-800 uppercase mb-4 border-l-4 border-amber-600 pl-2">Pengalaman Profesional</h3>
                    <template x-for="exp in pengalaman">
                        <div class="mb-4">
                            <div class="flex justify-between font-bold text-[11px]">
                                <span class="text-gray-800 uppercase" x-text="exp.posisi"></span>
                                <span class="text-amber-700" x-text="exp.tahun"></span>
                            </div>
                            <p class="text-[10px] text-gray-500 mb-1" x-text="exp.tempat"></p>
                            <p class="text-[10px] text-gray-600" x-text="exp.desc"></p>
                        </div>
                    </template>
                </section>
            </div>

            <div class="col-span-4 bg-gray-50 p-4">
                <section class="mb-6">
                    <h3 class="text-[10px] font-bold text-gray-800 uppercase mb-3 text-center">Keahlian Inti</h3>
                    <div class="space-y-2">
                        <template x-for="skill in skills.split('|')">
                            <div class="text-[9px] text-gray-700 border-b border-amber-200 pb-1" x-text="skill.trim()"></div>
                        </template>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
