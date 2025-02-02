<x-layout>
    <div class="min-h-screen bg-gray-100 flex flex-col sm:flex-row items-center justify-center p-6">
        <!-- Left side with logo and tagline -->
        <div class="sm:w-1/2 sm:pr-8 mb-8 sm:mb-0 text-center sm:text-left">
            <h1 class="text-blue-600 text-6xl font-bold mb-4">CulobFace</h1>
            <p class="text-2xl text-gray-700">Culob Face helps you connect and share with the people in your life.</p>
        </div>

        <!-- Right side with login form -->
        <div class="sm:w-[396px]">
            <div class="bg-white p-4 rounded-xl shadow-md w-full">
                <form method="POST" action="#" class="space-y-4">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <input id="email"
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            type="email" name="email" :value="old('email')" required placeholder="Email address"
                            autofocus autocomplete="username" />
                        <input />
                    </div>

                    <!-- Password -->
                    <div>
                        <input id="password"
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            type="password" name="password" required placeholder="Password"
                            autocomplete="current-password" />
                        <input />
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold text-xl hover:bg-blue-700 transition duration-200">
                            Log in
                        </button>
                    </div>

                    <!-- Forgot Password -->
                    <div class="text-center">
                        <a href="#" class="text-blue-600 hover:underline text-sm">
                            Forgot your password?
                        </a>
                    </div>

                    <hr class="my-4">

                    <!-- Create Account Button -->
                    <div class="text-center">
                        <a href="#"
                            class="inline-block bg-green-500 text-white px-6 py-3 rounded-lg font-semibold text-lg hover:bg-green-600 transition duration-200">
                            Create new account
                        </a>
                    </div>
                </form>
            </div>

            <!-- Business Page Link -->
            <div class="text-center mt-6">
                <p class="text-sm">
                    <a href="#" class="font-semibold hover:underline">Create a Page</a>
                    for a celebrity, brand or business.
                </p>
            </div>
        </div>
    </div>
</x-layout>
