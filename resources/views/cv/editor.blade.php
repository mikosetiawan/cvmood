<x-app-layout>
    <div class="py-6" x-data="{
        nama: 'Juliana Silva',
        phone: '+123-456-7890',
        email: 'hello@reallygreatsite.com',
        location: 'Jakarta, Indonesia',
        linkedin: 'linkedin.com/in/user',
        jabatan: 'Senior Web Developer',
        tentang: 'Saya, Juliana Silva, adalah lulusan baru yang penuh semangat dan siap untuk membawa energi positif ke dunia profesional...',

        @php
            $name = auth()->user()->name;
            $initials = collect(explode(' ', $name))->filter()->take(2)->map(fn($n) => strtoupper(substr($n, 0, 1)))->implode('');
        @endphp

        imageUrl: '{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : "https://ui-avatars.com/api/?name={$initials}&background=0D9488&color=fff&size=150" }}',

        pendidikan: [
            { tahun: '2016 - 2019', sekolah: 'SMA Borcelle', prodi: 'Administrasi Perkantoran', desc: 'Mempelajari administrasi bisnis.' },
            { tahun: '2020 - 2024', sekolah: 'Universitas Borcelle', prodi: 'Manajemen', desc: 'Strategi bisnis dan SDM.' }
        ],

        pengalaman: [
            { tahun: '2017 - 2018', posisi: 'PKL', tempat: 'Larana Inc', desc: 'Membantu pengelolaan dokumen.' }
        ],

        skills: 'Software Administrasi | Leadership | Bertanggungjawab',
        bahasa: 'Indonesia (Native) | English (Professional)',

        addEducation() { this.pendidikan.push({ tahun: '', sekolah: '', prodi: '', desc: '' }) },
        removeEducation(index) { this.pendidikan.splice(index, 1) },
        addExperience() { this.pengalaman.push({ tahun: '', posisi: '', tempat: '', desc: '' }) },
        removeExperience(index) { this.pengalaman.splice(index, 1) },

        fileChosen(event) {
            const file = event.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = (e) => { this.imageUrl = e.target.result; };
        }
    }">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-start">

                <div class="md:col-span-5 bg-white p-6 shadow-sm sm:rounded-lg overflow-y-auto border border-gray-100"
                    style="max-height: 88vh;">
                    <h2 class="text-xl font-bold mb-6 text-teal-700 italic">Editor CV: {{ $template->name }}</h2>

                    <form action="{{ route('cv.store', $template->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="pendidikan" :value="JSON.stringify(pendidikan)">
                        <input type="hidden" name="pengalaman" :value="JSON.stringify(pengalaman)">
                        <input type="hidden" name="nama" :value="nama">
                        <input type="hidden" name="jabatan" :value="jabatan">

                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1 uppercase">Judul Simpan
                                    CV</label>
                                <input type="text" name="cv_title" required
                                    class="p-2 w-full border-gray-300 rounded-md shadow-sm text-sm"
                                    placeholder="Contoh: CV Software Engineer">
                            </div>

                            <hr>

                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Foto Profil</label>
                                    <input type="file" @change="fileChosen"
                                        class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded file:bg-teal-50 file:text-teal-700">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                                    <input type="text" x-model="nama"
                                        class="p-2 w-full border-gray-300 rounded-md shadow-sm text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Jabatan</label>
                                    <input type="text" x-model="jabatan"
                                        class="p-2 w-full border-gray-300 rounded-md shadow-sm text-sm">
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <input type="text" x-model="phone" placeholder="Telepon"
                                        class="p-2 w-full border-gray-300 rounded-md shadow-sm text-sm">
                                    <input type="email" x-model="email" placeholder="Email"
                                        class="p-2 w-full border-gray-300 rounded-md shadow-sm text-sm">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tentang Saya</label>
                                <textarea x-model="tentang" rows="3"
                                    class="p-2 w-full border-gray-300 rounded-md shadow-sm text-sm"></textarea>
                            </div>

                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <label class="block text-sm font-semibold text-gray-700">Pendidikan</label>
                                    <button type="button" @click="addEducation"
                                        class="text-xs bg-green-500 text-white px-2 py-1 rounded">+ Tambah</button>
                                </div>
                                <template x-for="(edu, index) in pendidikan" :key="index">
                                    <div class="p-3 border border-gray-200 rounded-md mb-2 bg-gray-50 relative">
                                        <button type="button" @click="removeEducation(index)"
                                            class="absolute top-2 right-2 text-red-400">×</button>
                                        <input type="text" x-model="edu.tahun" placeholder="Tahun"
                                            class="p-2 w-full border-gray-300 rounded-md text-xs mb-1">
                                        <input type="text" x-model="edu.sekolah" placeholder="Sekolah"
                                            class="p-2 w-full border-gray-300 rounded-md text-xs mb-1">
                                        <input type="text" x-model="edu.prodi" placeholder="Jurusan"
                                            class="p-2 w-full border-gray-300 rounded-md text-xs mb-1">
                                    </div>
                                </template>
                            </div>

                            <hr class="my-4">

                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <label class="block text-sm font-semibold text-gray-700">Pengalaman Kerja</label>
                                    <button type="button" @click="addExperience"
                                        class="text-xs bg-blue-500 text-white px-2 py-1 rounded">+ Tambah</button>
                                </div>
                                <template x-for="(exp, index) in pengalaman" :key="index">
                                    <div class="p-3 border border-gray-200 rounded-md mb-2 bg-gray-50 relative">
                                        <button type="button" @click="removeExperience(index)"
                                            class="absolute top-2 right-2 text-red-400">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <input type="text" x-model="exp.tahun"
                                            placeholder="Tahun (e.g. 2021 - Sekarang)"
                                            class="p-2 w-full border-gray-300 rounded-md text-xs mb-1">
                                        <input type="text" x-model="exp.posisi" placeholder="Posisi / Jabatan"
                                            class="p-2 w-full border-gray-300 rounded-md text-xs mb-1">
                                        <input type="text" x-model="exp.tempat" placeholder="Nama Perusahaan"
                                            class="p-2 w-full border-gray-300 rounded-md text-xs mb-1">
                                        <textarea x-model="exp.desc" placeholder="Deskripsi Pekerjaan"
                                            class="p-2 w-full border-gray-300 rounded-md text-xs" rows="2"></textarea>
                                    </div>
                                </template>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Skill (Pisah |)</label>
                                <input type="text" x-model="skills"
                                    class="p-2 w-full border-gray-300 rounded-md shadow-sm text-sm">
                            </div>
                        </div>

                        <button type="submit"
                            class="mt-8 w-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-3 rounded-md shadow-lg">
                            SIMPAN CV
                        </button>
                    </form>
                </div>

                <div class="md:col-span-7 flex justify-start bg-gray-100 p-4 rounded-lg">
                    <div class="sticky top-0 scale-[0.85] origin-top-left">
                        @if(view()->exists($template->view_path))
                            @include($template->view_path)
                        @else
                            <div class="bg-red-50 p-4 rounded text-red-600">Desain tidak ditemukan.</div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
