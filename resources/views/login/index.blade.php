<x-layoutlogin title="Login">
    <div class="flex justify-center">
        <div class="w-[86%] md:w-1/3">












            @if (session()->has('success'))
            <div id="successAlert"
                class="relative max-w-lg mx-auto mb-4 p-3 bg-green-100 border border-green-300 text-green-700 rounded {{ session()->has('loginError') ? 'mt-4' : 'mt-32' }}">
                {{ session('success') }}
                <button type="button" class="absolute top-0 right-0 p-2 text-green-700" onclick="closeAlert('successAlert')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif
        
        @if (session()->has('loginError'))
            <div id="errorAlert"
                class="relative max-w-lg mx-auto mb-4 p-3 bg-red-100 border border-red-300 text-red-700 rounded {{ !session()->has('success') ? 'mt-32' : 'mt-4' }}">
                {{ session('loginError') }}
                <button type="button" class="absolute top-0 right-0 p-2 text-red-700" onclick="closeAlert('errorAlert')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif
        
        <div id="loginForm" class="w-full max-w-md bg-white p-8 rounded-lg shadow-md {{ session()->has('success') || session()->has('loginError') ? 'mt-4' : 'mt-32' }}">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="email" id="email" name="email"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700 @error('email') is-invalid @enderror"
                        placeholder="Email" autofocus required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4 relative">
    <input type="password" id="password" name="password"
        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700 pr-10"
        placeholder="Password" required>
    
    {{-- 🔥 Toggle Show/Hide Password --}}
    <button type="button" id="togglePassword" 
            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none"
            aria-label="Tampilkan password">
        {{-- Icon Eye (Closed) --}}
        <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        {{-- Icon Eye Slash (Open) --}}
        <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
        </svg>
    </button>
</div>
                <button type="submit"
                    class="w-full bg-teal-700 text-white py-2 px-4 rounded-md hover:bg-teal-800">Login</button>
            </form>
            <p class="text-sm text-center text-gray-600 mt-4">
                Belum Punya Akun? <a href="/register" class="text-teal-700 hover:underline">Register</a>
            </p>
        </div>
        
        <script>
            function closeAlert(alertId) {
                var alertElement = document.getElementById(alertId);
                if (alertElement) {
                    alertElement.remove();
                    document.getElementById('loginForm').classList.remove('mt-4');
                    document.getElementById('loginForm').classList.add('mt-32');
                }
            }

            // 🔥 Toggle Show/Hide Password
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const toggleBtn = document.getElementById('togglePassword');
        const eyeClosed = document.getElementById('eyeClosed');
        const eyeOpen = document.getElementById('eyeOpen');
        
        if (toggleBtn && passwordInput) {
            toggleBtn.addEventListener('click', function() {
                const isPassword = passwordInput.type === 'password';
                
                // Toggle input type
                passwordInput.type = isPassword ? 'text' : 'password';
                
                // Toggle icon visibility
                if (isPassword) {
                    eyeClosed.classList.add('hidden');
                    eyeOpen.classList.remove('hidden');
                    toggleBtn.setAttribute('aria-label', 'Sembunyikan password');
                } else {
                    eyeClosed.classList.remove('hidden');
                    eyeOpen.classList.add('hidden');
                    toggleBtn.setAttribute('aria-label', 'Tampilkan password');
                }
            });
        }
    });
        </script>
        

        </div>
    </div>




</x-layoutlogin>
