<x-layout>
    <div class="min-h-screen bg-gray-100 flex flex-col sm:flex-row items-center justify-center p-6 my-20">
        <!-- Left side with logo and tagline -->
        <div class="sm:w-1/2 sm:pr-8 mb-8 sm:mb-0 text-center sm:text-left">
            <h1 class="text-blue-600 text-6xl font-bold mb-4">CulobFace</h1>
            <p class="text-2xl text-gray-700">CulobFace helps you connect and share with the people in your life.</p>
        </div>

        <!-- Right side with registration form -->
        <div class="sm:w-[432px]">
            <div class="bg-white p-6 rounded-xl shadow-md w-full">
                <h2 class="text-3xl font-bold mb-4">Create a new account</h2>
                <p class="text-gray-600 mb-4">It's quick and easy.</p>

                <hr class="mb-4">

                <form method="POST" action="#" class="space-y-4">
                    @csrf

                    <!-- Name -->
                    <div class="flex space-x-4">
                        <div class="flex-1">
                            <input id="name"
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                type="text" name="name" :value="old('name')" required placeholder="Full name"
                                autofocus autocomplete="name" />
                            <input />
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <input id="email"
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            type="email" name="email" :value="old('email')" required placeholder="Email address"
                            autocomplete="username" />
                        <input />
                    </div>

                    <!-- Password -->
                    <div>
                        <input id="password"
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            type="password" name="password" required placeholder="New password"
                            autocomplete="new-password" />
                        <input />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <input id="password_confirmation"
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            type="password" name="password_confirmation" required placeholder="Confirm password"
                            autocomplete="new-password" />
                        <input />
                    </div>

                    <p class="text-xs text-gray-600 mt-4">
                        By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy.
                    </p>

                    <!-- Sign Up Button -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-green-500 text-white px-16 py-2 rounded-lg font-semibold text-xl hover:bg-green-600 transition duration-200">
                            Sign Up
                        </button>
                    </div>
                </form>

                <!-- Already have account -->
                <div class="text-center mt-4">
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                        Already have an account?
                    </a>
                </div>
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
