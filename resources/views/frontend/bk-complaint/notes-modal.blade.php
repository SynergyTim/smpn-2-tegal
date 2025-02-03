<div id="notesModal" class="modal-container fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold">Form Pengaduan</h3>
                    <button onclick="closeModal('notesModal')" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <form action="{{ route('bk-complaint.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="type" value="notes">
                    
                    <div>
                        <label class="block text-gray-700 mb-2">Nama (Opsional)</label>
                        <input type="text" name="name" class="w-full border rounded-lg px-3 py-2">
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Kelas <span class="text-red-500">*</span></label>
                        <select name="class" required class="w-full border rounded-lg px-3 py-2">
                            <option value="">Pilih Kelas</option>
                            @for($i = 10; $i <= 12; $i++)
                                @foreach(['A', 'B', 'C', 'D'] as $class)
                                    <option value="{{ $i . $class }}">{{ $i . $class }}</option>
                                @endforeach
                            @endfor
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Jenis Masalah <span class="text-red-500">*</span></label>
                        <select name="problem_type" required class="w-full border rounded-lg px-3 py-2">
                            <option value="">Pilih Jenis Masalah</option>
                            <option value="bullying">Bullying</option>
                            <option value="academic">Akademik</option>
                            <option value="family">Masalah Keluarga</option>
                            <option value="career">Karir</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Deskripsi Pengaduan <span class="text-red-500">*</span></label>
                        <textarea name="description" required rows="4" 
                                class="w-full border rounded-lg px-3 py-2"
                                placeholder="Ceritakan masalahmu di sini..."></textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2">Tingkat Urgensi</label>
                        <select name="urgency" class="w-full border rounded-lg px-3 py-2">
                            <option value="low">Rendah</option>
                            <option value="medium">Sedang</option>
                            <option value="high">Tinggi</option>
                        </select>
                    </div>

                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('notesModal')"
                                class="px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">
                            Batal
                        </button>
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Kirim Pengaduan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>