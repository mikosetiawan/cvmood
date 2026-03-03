<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Manajemen Template CV</h2>
        <a href="{{ route('manage-templates.create') }}"
            class="bg-teal-600 text-white px-4 py-2 rounded-xl text-sm font-bold hover:bg-teal-700 transition">
            + Tambah Template
        </a>
    </div>

    <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50">
                    <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase">Preview</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase">Nama Template</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase">Tipe</th>
                    <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @foreach($templates as $tpl)
                    <tr class="hover:bg-slate-50/50">
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/' . $tpl->thumbnail) }}"
                                class="w-16 h-20 object-cover rounded border border-slate-200">
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-bold text-slate-700">{{ $tpl->name }}</div>
                            <div class="text-xs text-slate-400">{{ $tpl->view_path }}</div>
                        </td>
                        <td class="px-6 py-4">
                            @if($tpl->is_premium)
                                <span
                                    class="px-2 py-1 bg-amber-100 text-amber-600 text-[10px] font-bold rounded-full uppercase">Premium</span>
                            @else
                                <span
                                    class="px-2 py-1 bg-slate-100 text-slate-500 text-[10px] font-bold rounded-full uppercase">Gratis</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('manage-templates.edit', $tpl->id) }}"
                                    class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('manage-templates.destroy', $tpl->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus template ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-2 text-rose-600 hover:bg-rose-50 rounded-lg">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
