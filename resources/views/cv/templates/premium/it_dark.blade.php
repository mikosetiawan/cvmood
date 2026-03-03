<div id="cv-preview" class="bg-gray-900 text-gray-300 shadow-2xl flex flex-row"
    style="min-height: 841px; width: 595px; font-family: 'monospace';">

    <aside class="w-1/3 bg-black p-6 border-r border-green-500/30">
        <img :src="imageUrl" class="w-32 h-32 grayscale hover:grayscale-0 transition-all duration-500 border border-green-500 mb-6">

        <div class="space-y-6">
            <section>
                <h3 class="text-green-500 text-xs font-bold mb-3 underline">SYSTEM.INFO</h3>
                <div class="text-[10px] space-y-2">
                    <p class="text-green-400">EMAIL: <span class="text-gray-400" x-text="email"></span></p>
                    <p class="text-green-400">LOC: <span class="text-gray-400" x-text="location"></span></p>
                </div>
            </section>

            <section>
                <h3 class="text-green-500 text-xs font-bold mb-3">TECH_STACK</h3>
                <div class="flex flex-wrap gap-2">
                    <template x-for="skill in skills.split('|')">
                        <span class="border border-green-900 bg-green-900/20 text-green-400 text-[9px] px-2 py-1" x-text="skill.trim()"></span>
                    </template>
                </div>
            </section>
        </div>
    </aside>

    <main class="w-2/3 p-8">
        <header class="mb-10">
            <h1 class="text-2xl font-bold text-green-500" x-text="nama"></h1>
            <p class="text-gray-500 text-sm" x-text="jabatan"></p>
        </header>

        <section class="mb-8">
            <h2 class="text-green-500 text-[11px] font-bold mb-2">&gt; ./whoami</h2>
            <p class="text-[11px] leading-relaxed" x-text="tentang"></p>
        </section>

        <section>
            <h2 class="text-green-500 text-[11px] font-bold mb-4">&gt; ./experience</h2>
            <div class="space-y-6 border-l border-green-900 pl-4">
                <template x-for="exp in pengalaman">
                    <div class="relative">
                        <div class="flex justify-between items-baseline">
                            <h4 class="text-white text-[11px] font-bold" x-text="exp.posisi"></h4>
                            <span class="text-[9px] text-green-600" x-text="exp.tahun"></span>
                        </div>
                        <p class="text-[10px] text-gray-500 mb-2" x-text="exp.tempat"></p>
                        <p class="text-[10px] leading-normal" x-text="exp.desc"></p>
                    </div>
                </template>
            </div>
        </section>
    </main>
</div>
