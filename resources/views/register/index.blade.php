<x-layoutlogin title="Register">

    <div class="flex justify-center">
        <div class="w-[86%] lg:w-1/3">
    

          <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md mt-32">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Register</h2>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="text" id="name" name="name"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700 @error('name') is-invalid @enderror"
                        id="name" placeholder="Name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="email" id="email" name="email"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700 @error('email') is-invalid @enderror"
                        id="email" placeholder="Email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" id="password" name="password"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-700 @error('password') is-invalid @enderror"
                        id="password" placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <button type="submit"
                    class="w-full bg-teal-700 text-white py-2 px-4 rounded-md hover:bg-teal-800">Register</button>
            </form>
            <p class="text-sm text-center text-gray-600 mt-4">
                Sudah Punya Akun? <a href="/login" class="text-teal-700 hover:underline">Login</a>
            </p>
        </div>
        </div>
    </div>




    

</x-layoutlogin>
