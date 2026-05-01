@props(['limit' => 10])

@php
    $leaderboard = \App\Models\Pretest::weeklyLeaderboard($limit)->get();
    $prize = \App\Models\Prize::first();
    $uid = 'lb-' . substr(md5(Auth::id() ?? 'guest'), 0, 5);
@endphp

    {{-- Container: fixed width w-80 agar positioning toggle konsisten --}}
<div id="{{ $uid }}" class="fixed right-4 top-[150px] z-40 hidden lg:block w-80 transition-all duration-300">
    
    <button id="{{ $uid }}-btn" 
        class="absolute -left-11 top-2 w-11 h-11 bg-white border {{ $prize ? 'border-amber-300 hover:bg-amber-50' : 'border-blue-200 hover:bg-blue-50' }} rounded-l-lg shadow flex items-center justify-center hover:scale-105 transition z-10"
        title="{{ $prize ? '🎁 Hadiah: '.$prize->name.'\n\n🏆 Klik untuk buka/tutup leaderboard' : '🏆 Klik untuk buka/tutup leaderboard' }}">
    
    @if($prize)
        <span class="absolute -top-1 -right-1 w-4 h-4 bg-amber-400 text-white rounded-full flex items-center justify-center text-[8px] shadow border-2 border-white animate-pulse">
            🎁
        </span>
    @endif
    
    <i id="{{ $uid }}-icon" class="fas fa-trophy text-amber-500 text-xl transition-transform duration-200 hover:scale-110"></i>
</button>

    {{-- Content Container --}}
    <div id="{{ $uid }}-content" class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-200 rounded-xl shadow-lg overflow-hidden">
        
        {{-- 🔥 PRIZE CARD (Tampil Paling Atas) --}}
        @if($prize)
        <div class="p-4 bg-white/70 border-b border-blue-100">
            <div class="flex items-start gap-3">
                {{-- Prize Image --}}
                <div class="flex-shrink-0">
                    @if($prize->image)
                        <img src="{{ Storage::url($prize->image) }}" 
                             alt="{{ $prize->name }}" 
                             class="w-16 h-16 object-cover rounded-xl border-2 border-amber-200 shadow-sm">
                    @else
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-100 to-orange-100 rounded-xl flex items-center justify-center">
                            <span class="text-2xl">🎁</span>
                        </div>
                    @endif
                </div>
                
                {{-- Prize Info --}}
                <div class="flex-1 min-w-0">
                    <h4 class="font-bold text-gray-800 text-sm leading-tight">
                        {{ $prize->name }}
                    </h4>
                    @if($prize->description)
                        <p class="text-[10px] text-gray-600 mt-1 line-clamp-2">
                            {{ Str::limit($prize->description, 60) }}
                        </p>
                    @endif
                    <span class="inline-flex items-center gap-1 mt-2 text-[10px] text-amber-600 font-medium">
                        <i class="fas fa-gift"></i> Hadiah Minggu Ini
                    </span>
                </div>
            </div>
        </div>
        @endif
        
        {{-- Leaderboard Header --}}
        <div class="flex items-center justify-between p-3 border-b border-blue-100 bg-white/50">
            <h3 class="font-bold text-sm text-gray-800">🏆 Top {{ $limit }}</h3>
            @if(!$prize)
                <span class="text-[10px] bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full">
                    🔄 Soon
                </span>
            @endif
        </div>

        {{-- 🔥 Leaderboard List: Conditional --}}
        <div class="p-2 space-y-2 {{ $prize ? 'max-h-[310px]' : 'max-h-[370px]' }} overflow-y-auto">
            @if($leaderboard->isNotEmpty())
                {{-- ✅ Ada data: tampilkan list --}}
                @foreach($leaderboard as $index => $entry)
                    @php
                        $rank = $index + 1;
                        $medal = match($rank) { 
                            1 => '🥇', 2 => '🥈', 3 => '🥉', 
                            default => "<span class='text-gray-400'>#{$rank}</span>" 
                        };
                    @endphp
                    <div class="flex items-center gap-2 p-2 bg-white rounded-lg border border-gray-100 hover:border-blue-200 transition">
                        <div class="w-6 text-center text-sm">{!! $medal !!}</div>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium text-gray-700 text-sm truncate">
                                {{ $entry->user->name ?? $entry->nama ?? 'Anonim' }}
                            </p>
                            <p class="text-[10px] text-gray-500">{{ $entry->total_score }} poin</p>
                        </div>
                    </div>
                @endforeach
            @else
                {{-- ❌ Tidak ada data: tampilkan pesan --}}
                <div class="flex flex-col items-center justify-center py-6 text-center">
                    <i class="fas fa-trophy text-amber-300 text-2xl mb-2"></i>
                    <p class="text-[10px] text-gray-500 font-medium">
                        Belum ada pemegang leaderboard minggu ini
                    </p>
                </div>
            @endif
        </div>

        {{-- Footer --}}
        <div class="p-2 border-t border-blue-100 bg-white/30 rounded-b-xl text-center">
            <p class="text-[10px] text-gray-500 min-h-[14px]">
                {{ $prize ? '📅 Reset setiap Senin' : '🔄 Hadiah akan diumumkan soon!' }}
            </p>
        </div>
    </div>
</div>
    {{-- 🔥 Mobile Version: Sama Persis Desktop --}}
<div id="{{ $uid }}-mobile" class="lg:hidden fixed bottom-40 right-4 z-40 w-72">
    
   {{-- Toggle Button --}}
<button id="{{ $uid }}-mobile-btn" 
        class="absolute -left-11 -top-[250px] w-11 h-11 bg-white border {{ $prize ? 'border-amber-300' : 'border-blue-200' }} rounded-l-lg shadow flex items-center justify-center hover:bg-blue-50 transition z-10 hover:scale-110"
        title="Tutup/Buka Leaderboard">
    
    @if($prize)
        <span class="absolute -top-1 -right-1 w-4 h-4 bg-amber-400 text-white rounded-full flex items-center justify-center text-[8px] shadow border-2 border-white animate-pulse">
            🎁
        </span>
    @endif
    
    <i id="{{ $uid }}-mobile-icon" class="fas fa-trophy text-amber-500 text-xl"></i>
</button>

    {{-- Content --}}
    <div id="{{ $uid }}-mobile-content" class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-200 rounded-xl shadow-lg overflow-hidden">
        
        {{-- Prize Card --}}
        @if($prize)
        <div class="p-4 bg-white/70 border-b border-blue-100">
            {{-- ... same as desktop ... --}}
        </div>
        @endif
        
        {{-- Header --}}
        <div class="flex items-center justify-between p-3 border-b border-blue-100 bg-white/50">
            <h3 class="font-bold text-sm text-gray-800">🏆 Top {{ $limit }}</h3>
            @if(!$prize)
                <span class="text-[10px] bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full">
                    🔄 Soon
                </span>
            @endif
        </div>

        {{-- 🔥 List: Conditional --}}
        <div class="p-2 space-y-2 {{ $prize ? 'max-h-[190px]' : 'max-h-[190px]' }} overflow-y-auto">
            @if($leaderboard->isNotEmpty())
                @foreach($leaderboard as $index => $entry)
                    {{-- ... same as desktop ... --}}
                @endforeach
            @else
                {{-- ❌ Empty state --}}
                <div class="flex flex-col items-center justify-center py-4 text-center">
                    <i class="fas fa-trophy text-amber-300 text-xl mb-1"></i>
                    <p class="text-[10px] text-gray-500 font-medium">
                        Belum ada pemegang leaderboard
                    </p>
                    <p class="text-[9px] text-gray-400 mt-0.5">
                        Yuk isi pretest! 🚀
                    </p>
                </div>
            @endif
        </div>

        {{-- Footer --}}
        <div class="p-2 border-t border-blue-100 bg-white/30 rounded-b-xl text-center">
            <p class="text-[10px] text-gray-500 min-h-[14px]">
                {{ $prize ? '📅 Reset Senin' : '🔄 Soon!' }}
            </p>
        </div>
    </div>
</div>

    <script>
        (function() {
            // ===== DESKTOP =====
            const key = '{{ $uid }}_closed';
            const content = document.getElementById('{{ $uid }}-content');
            const icon = document.getElementById('{{ $uid }}-icon');
            const btn = document.getElementById('{{ $uid }}-btn');

            // ===== DESKTOP =====
            function updateBtn(btn, icon, isClosed, isMobile = false) {
                const leftClass = isMobile ? '-left-10' : '-left-11';
                if (isClosed) {
                    btn.classList.remove(leftClass, 'rounded-r-lg');
                    btn.classList.add('-right-2', 'rounded-l-lg');
                    // 🔥 Icon trophy TIDAK PERLU di-toggle, biarkan tetap
                } else {
                    btn.classList.remove('-right-2', 'rounded-r-lg');
                    btn.classList.add(leftClass, 'rounded-l-lg');
                    // 🔥 Icon trophy tetap
                }
            }

            // ===== MOBILE =====
            function updateMobileBtn(btn, icon, isClosed) {
                if (isClosed) {
                    btn.classList.remove('-left-11', 'top-2', 'rounded-r-lg');
                    btn.classList.add('-right-2', '-top-[250px]', 'rounded-l-lg');
                    // 🔥 Icon trophy tetap
                } else {
                    btn.classList.remove('-right-2', '-top-[250px]', 'rounded-r-lg');
                    btn.classList.add('-left-11', 'top-2', 'rounded-l-lg');
                    // 🔥 Icon trophy tetap
                }
            }

            const isClosed = localStorage.getItem(key) === '1';
            if (content && btn) {
                updateBtn(btn, icon, isClosed);
                if (isClosed) content.classList.add('hidden');
                btn.addEventListener('click', () => {
                    const closed = !content.classList.contains('hidden');
                    content.classList.toggle('hidden');
                    updateBtn(btn, icon, closed);
                    localStorage.setItem(key, closed ? '1' : '0');
                    // Sync ke mobile
                    syncMobile(closed);
                });
            }

            // ===== MOBILE =====
            const mContent = document.getElementById('{{ $uid }}-mobile-content');
            const mIcon = document.getElementById('{{ $uid }}-mobile-icon');
            const mBtn = document.getElementById('{{ $uid }}-mobile-btn');

            function syncMobile(closed) {
                if (mContent && mBtn) {
                    updateMobileBtn(mBtn, mIcon, closed);
                    if (closed) mContent.classList.add('hidden');
                    else mContent.classList.remove('hidden');
                }
            }

            // Init mobile state
            if (mContent && mBtn) {
                syncMobile(isClosed);
                mBtn.addEventListener('click', () => {
                    const closed = !mContent.classList.contains('hidden');
                    mContent.classList.toggle('hidden');
                    updateMobileBtn(mBtn, mIcon, closed); // ← BENAR! Pakai updateMobileBtn
                    localStorage.setItem(key, closed ? '1' : '0');
                    // Sync ke desktop
                    if (content && btn) {
                        updateBtn(btn, icon, closed);
                        if (closed) content.classList.add('hidden');
                        else content.classList.remove('hidden');
                    }
                });
            }
        })();
    </script>
