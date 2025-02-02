<x-layout>
    <div class="bg-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Main Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Account Settings</h1>
            </div>

            <!-- Profile Information Section -->
            <div class="bg-white rounded-lg shadow-sm mb-6">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">Profile Information</h2>
                </div>
                <div class="p-6">
                    <form method="POST" action="#">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2">Name</label>
                            <input type="text" name="name" class="w-full border rounded-lg p-2">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" name="email" class="w-full border rounded-lg p-2">
                        </div>

                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Update</button>
                    </form>
                </div>
            </div>

            <!-- Password Account Section -->
            <div class="bg-white rounded-lg shadow-sm mb-6">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">Password Account</h2>
                </div>
                <div class="p-6">
                    <form method="POST" action="#">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2">Current Password</label>
                            <input type="password" name="current_password" class="w-full border rounded-lg p-2">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2">New Password</label>
                            <input type="password" name="new_password" class="w-full border rounded-lg p-2">
                        </div>

                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Update
                            Password</button>
                    </form>
                </div>
            </div>

            <!-- Account Deletion Section -->
            <div class="bg-white rounded-lg shadow-sm border border-red-100">
                <div class="p-6 border-b border-red-100 bg-red-50">
                    <h2 class="text-xl font-semibold text-red-800">Account Deletion</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        Once your account is deleted, all of its resources and data will be permanently removed.
                    </p>
                    <form method="POST" action="#">
                        @csrf
                        <button type="submit" class=" text-white px-4 py-2 rounded-lg"
                            style="background-color: #FF0000">Delete</button>

                    </form>
                </div>
            </div>

        </div>
</x-layout>
