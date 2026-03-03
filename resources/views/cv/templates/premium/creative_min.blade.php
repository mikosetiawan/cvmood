<div id="cv-preview" class="bg-stone-50 p-12 flex flex-col"
    style="min-height: 841px; width: 595px; font-family: 'sans-serif';">

    <div class="flex items-center gap-8 mb-12">
        <div class="flex-1">
            <h1 class="text-4xl font-light tracking-tighter text-stone-800" x-text="nama"></h1>
            <p class="text-stone-500 uppercase tracking-[0.2em] text-[10px] mt-2" x-text="jabatan"></p>
        </div>
        <div class="text-[10px] text-stone-500 text-right space-y-1">
            <p x-text="email"></p>
            <p x-text="phone"></p>
            <p x-text="location"></p>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-12">
        <div class="col-span-4">
            <h3 class="text-[10px] font-bold text-stone-400 uppercase tracking-widest mb-4">Skills</h3>
            <div class="space-y-4">
                <template x-for="skill in skills.split('|')">
                    <div class="text-[11px] text-stone-700 border-b border-stone-200 pb-1" x-text="skill.trim()"></div>
                </template>
            </div>
        </div>

        <div class="col-span-8">
            <section class="mb-10 text-stone-700">
                 <h3 class="text-[10px] font-bold text-stone-400 uppercase tracking-widest mb-4">About</h3>
                 <p class="text-xs leading-relaxed" x-text="tentang"></p>
            </section>

            <section class="text-stone-700">
                <h3 class="text-[10px] font-bold text-stone-400 uppercase tracking-widest mb-4">Experience</h3>
                <div class="space-y-8">
                    <template x-for="exp in pengalaman">
                        <div>
                            <span class="text-[9px] text-stone-400" x-text="exp.tahun"></span>
                            <h4 class="font-bold text-xs" x-text="exp.posisi"></h4>
                            <p class="text-[11px] text-stone-500 italic mb-2" x-text="exp.tempat"></p>
                            <p class="text-[11px] leading-relaxed" x-text="exp.desc"></p>
                        </div>
                    </template>
                </div>
            </section>
        </div>
    </div>
</div>
