<x-layout-admin title="Admin Prizes">
    
    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4 mt-9 ml-10">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">🎁 Kelola Hadiah</h1>
            <p class="text-sm text-gray-500">Hanya satu hadiah yang ditampilkan di leaderboard</p>
        </div>
    </div>


    {{-- Content --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        @if(!$prize)
            {{-- Empty State --}}
            <div class="p-12 text-center">
                <div class="text-6xl mb-4">🎁</div>
                <h3 class="text-lg font-medium text-gray-800 mb-2">Belum ada hadiah</h3>
                <p class="text-sm text-gray-500 mb-6">Tambahkan hadiah untuk ditampilkan di leaderboard</p>
                <button data-modal-target="prize-modal" data-modal-toggle="prize-modal"
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-teal-700 hover:bg-teal-600 text-white font-medium rounded-lg transition">
                    <i class="fas fa-plus"></i> Tambah Hadiah
                </button>
            </div>
        @else
            {{-- Prize Card --}}
            <div class="p-6">
                <div class="flex items-start gap-4">
                    {{-- Image --}}
                    <div class="flex-shrink-0">
                        @if($prize->image)
                            <img src="{{ Storage::url($prize->image) }}" 
                                 alt="{{ $prize->name }}" 
                                 class="w-24 h-24 object-cover rounded-xl border border-gray-200">
                        @else
                            <div class="w-24 h-24 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400">
                                <i class="fas fa-gift text-3xl"></i>
                            </div>
                        @endif
                    </div>
                    
                    {{-- Info --}}
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $prize->name }}</h3>
                        @if($prize->description)
                            <p class="text-sm text-gray-600 mt-1">{{ $prize->description }}</p>
                        @endif
                    </div>
                    
                    {{-- Actions --}}
                    <div class="flex items-center gap-2">
                        <button data-modal-target="prize-modal" data-modal-toggle="prize-modal"
                                class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg transition" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        @if($prize)
                        <button data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                                class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
                            <i class="fas fa-trash"></i>
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>

    {{-- CREATE/EDIT MODAL (Single Modal) --}}
    <div id="prize-modal" tabindex="-1" 
         class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-[9999] flex justify-center items-center p-4">
        <div class="relative w-full max-w-md bg-white rounded-xl shadow-2xl">
            <form action="{{ $prize ? route('admin.prizes.update', $prize) : route('admin.prizes.store') }}" 
                  method="POST" enctype="multipart/form-data">
                @csrf
                @if($prize) @method('PUT') @endif
                
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ $prize ? '✏️ Update Hadiah' : '➕ Tambah Hadiah Baru' }}
                    </h3>
                    <button type="button" 
                            class="text-gray-400 hover:bg-gray-100 hover:text-gray-900 rounded-lg p-1.5"
                            data-modal-toggle="prize-modal">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="p-4 space-y-4">
                    {{-- Nama --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Hadiah *</label>
                        <input type="text" name="name" value="{{ old('name', $prize->name ?? '') }}" 
                               placeholder="Contoh: Voucher Belanja Rp 100.000"
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                        @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    {{-- Deskripsi --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                        <textarea name="description" rows="3" placeholder="Jelaskan detail hadiah ini..."
                                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description', $prize->description ?? '') }}</textarea>
                        @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    {{-- Gambar --}}
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Foto Hadiah *</label>
    
    {{-- Preview Container --}}
    <div id="image-preview-container" class="mb-3 hidden">
        <div class="relative inline-block">
            <img id="image-preview" src="" alt="Preview" 
                 class="w-24 h-24 object-cover rounded-lg border-2 border-blue-200 shadow-sm">
            <button type="button" id="remove-image" 
                    class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition shadow"
                    title="Hapus gambar">
                <i class="fas fa-times text-xs"></i>
            </button>
        </div>
    </div>
    
    {{-- Current Image (Edit Mode Only) --}}
    @if($prize?->image)
        <div id="current-image" class="mb-3">
            <div class="relative inline-block">
                <img src="{{ Storage::url($prize->image) }}" alt="{{ $prize->name }}" 
                     class="w-24 h-24 object-cover rounded-lg border border-gray-200">
            </div>
            <p class="text-xs text-gray-500 mt-1 ml-1">Klik "Choose File" untuk ganti gambar</p>
        </div>
    @endif
    
    <input type="file" name="image" id="image-input" accept="image/*" 
       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
       @required(!$prize)>
    
    @error('image') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
    <p class="text-xs text-gray-500 mt-1">Maks. 2MB • JPG, PNG, WebP</p>
</div>
                </div>
                
                <div class="flex items-center justify-end gap-3 p-4 border-t border-gray-200 rounded-b">
                    <button type="button" 
                            class="px-4 py-2 text-gray-700 hover:text-gray-900 font-medium"
                            data-modal-toggle="prize-modal">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-5 py-2 bg-teal-700 hover:bg-teal-600 text-white font-medium rounded-lg transition">
                        💾 {{ $prize ? 'Update' : 'Simpan' }} Hadiah
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- DELETE MODAL --}}
@if($prize)
<div id="delete-modal" tabindex="-1" 
     class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-[9999] flex justify-center items-center p-4">
    <div class="relative w-full max-w-md bg-white rounded-xl shadow-2xl">
        <button type="button" 
                class="absolute top-3 right-3 text-gray-400 hover:bg-gray-100 hover:text-gray-900 rounded-lg p-1.5"
                data-modal-toggle="delete-modal">
            <i class="fas fa-times"></i>
        </button>
        <div class="p-6 text-center">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Hapus Hadiah?</h3>
            <p class="text-sm text-gray-500 mb-6">
                Hadiah akan hilang dari leaderboard.
            </p>
            <form action="{{ route('admin.prizes.destroy', $prize) }}" method="POST">
                @csrf @method('DELETE')
                <div class="flex items-center justify-center gap-3">
                    <button type="button" 
                            class="px-4 py-2 text-gray-700 hover:text-gray-900 font-medium"
                            data-modal-toggle="delete-modal">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                        🗑️ Ya, Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

</x-layout-admin>

{{-- Auto-open modal jika ada error --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    @if($errors->any())
        const modal = document.getElementById('prize-modal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    @endif
});

document.addEventListener('DOMContentLoaded', function() {
    // Auto-open modal jika ada error validasi
    @if($errors->any())
        const modal = document.getElementById('prize-modal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    @endif

    // 🔥 Image Preview Logic
    const imageInput = document.getElementById('image-input');
    const imagePreview = document.getElementById('image-preview');
    const previewContainer = document.getElementById('image-preview-container');
    const currentImage = document.getElementById('current-image');
    const removeBtn = document.getElementById('remove-image');
    
    if (imageInput) {
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            
            if (file && file.type.startsWith('image/')) {
                // Validasi ukuran (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert('Ukuran gambar maksimal 2MB!');
                    this.value = ''; // Reset input
                    return;
                }
                
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    // Hide current image (edit mode)
                    if (currentImage) {
                        currentImage.classList.add('hidden');
                    }
                    
                    // Set preview src dan show container
                    imagePreview.src = event.target.result;
                    previewContainer.classList.remove('hidden');
                };
                
                reader.readAsDataURL(file);
            }
        });
    }
    
    // Remove image preview
    if (removeBtn) {
        removeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Reset file input
            if (imageInput) {
                imageInput.value = '';
            }
            
            // Hide preview
            previewContainer.classList.add('hidden');
            
            // Show current image again (if edit mode)
            if (currentImage) {
                currentImage.classList.remove('hidden');
            }
        });
    }
});



</script>
