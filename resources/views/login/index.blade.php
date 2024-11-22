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
                <div class="mb-4">
                    <input type="password" id="password" name="password"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700"
                        placeholder="Password" required>
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
        </script>
        

        </div>
    </div>




</x-layoutlogin>
