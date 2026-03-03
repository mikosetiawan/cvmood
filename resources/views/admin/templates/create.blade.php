<x-app-layout>
    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-slate-800 mb-6">Tambah Template Baru</h2>

        <form action="{{ route('manage-templates.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Template</label>
                <input type="text" name="name" class="w-full rounded-2xl border-slate-200 focus:border-teal-500 focus:ring-teal-500" placeholder="Contoh: Modern Professional">
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Thumbnail (Image)</label>
                <input type="file" name="thumbnail" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100">
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">View Path (Blade File)</label>
                <input type="text" name="view_path" class="w-full rounded-2xl border-slate-200 focus:border-teal-500 focus:ring-teal-500" placeholder="cv.templates.modern">
                <p class="text-[10px] text-slate-400 mt-1">*Lokasi file di resources/views/...</p>
            </div>

            <div class="flex items-center gap-3">
                <input type="checkbox" name="is_premium" value="1" id="is_premium" class="rounded text-teal-600 focus:ring-teal-500">
                <label for="is_premium" class="text-sm font-bold text-slate-700">Set sebagai Template Premium</label>
            </div>

            <div class="pt-4 flex gap-3">
                <button type="submit" class="flex-1 bg-teal-600 text-white py-3 rounded-2xl font-bold hover:bg-teal-700 transition">Simpan Template</button>
                <a href="{{ route('manage-templates.index') }}" class="flex-1 bg-slate-100 text-slate-600 py-3 rounded-2xl font-bold text-center hover:bg-slate-200 transition">Batal</a>
            </div>
        </form>
    </div>
</x-app-layout>
