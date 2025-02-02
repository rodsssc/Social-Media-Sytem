<x-layout>

    <!-- Profile Header -->
    <section class="my-16" style="margin-top: 60px">
        <div class="bg-gray-100 shadow-sm">
            <div class="max-w-4xl mx-auto relative">
                <!-- Cover Photo -->
                <div class="h-48 bg-gray-200 relative z-0">
                    <img src="https://images.unsplash.com/photo-1596387451750-f7bfb51461ef?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Cover Photo" class="w-full h-full object-cover">
                </div>

                <!-- Profile Info -->
                <div class="flex items-center px-4 pb-4 -mt-6 z-10 relative space-x-4">
                    <!-- Profile Picture -->
                    <img src="https://scontent-atl3-2.xx.fbcdn.net/v/t39.30808-1/474804577_122113677974665653_7948094019416841497_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=101&ccb=1-7&_nc_sid=e99d92&_nc_ohc=NLbUUU8z9U0Q7kNvgEuuWAB&_nc_zt=24&_nc_ht=scontent-atl3-2.xx&_nc_gid=AUKixmDrBj7vKSeXexs9LWD&oh=00_AYAgrA4UMyYFL9fXwImMXWna-Rz08BblnjMgNV-nYh3EEA&oe=67A5657B"
                        alt="Profile Picture"
                        class="w-32 h-32 rounded-full border-4 border-white shadow-lg object-cover">

                    <!-- Name & Bio Container -->
                    <div class="flex flex-col">
                        <h1 class="text-2xl font-bold text-gray-900">
                            John Doe
                        </h1>

                        <p class="text-gray-700 mt-1">
                            Are you a coding bug? Because you’ve been stuck in my bio for too long, and I don’t wanna
                            fix you. 😉💙
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <!-- Create Post Card (Visible if viewing own profile) -->
            <div class="bg-white rounded-lg shadow-md mb-6 p-4">
                <div class="flex items-center space-x-4">
                    <form action="#" method="POST" enctype="multipart/form-data" class="flex-1">
                        @csrf
                        <textarea name="content" placeholder="What's on your mind, Rods" required
                            class="w-full border border-gray-300 rounded-xl p-3 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 resize-none placeholder-gray-500"
                            rows="3"></textarea>

                        <div class="flex items-center justify-between mt-3">
                            <label class="flex items-center space-x-2 cursor-pointer text-gray-600 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <input type="file" name="image" accept="image/*" class="hidden">
                                <span class="font-medium">Photo/Video</span>
                            </label>

                            <button type="submit"
                                class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition duration-200 font-semibold">
                                Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Posts Container -->
            <div class="flex flex-col items-center gap-4">

                <div class="bg-white rounded-lg shadow-md w-full">
                    <!-- Post Header -->
                    <div class="p-4 border-b border-gray-100">
                        <div class="flex items-center space-x-3">
                            <img src="https://scontent-atl3-2.xx.fbcdn.net/v/t39.30808-1/474804577_122113677974665653_7948094019416841497_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=101&ccb=1-7&_nc_sid=e99d92&_nc_ohc=NLbUUU8z9U0Q7kNvgEuuWAB&_nc_zt=24&_nc_ht=scontent-atl3-2.xx&_nc_gid=AUKixmDrBj7vKSeXexs9LWD&oh=00_AYAgrA4UMyYFL9fXwImMXWna-Rz08BblnjMgNV-nYh3EEA&oe=67A5657B"
                                alt="Profile Image" class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <div class="font-semibold text-gray-900">
                                    Rods Culob
                                </div>
                                <div class="text-gray-500 text-sm">
                                    2 hours ago
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Content -->
                    <div class="p-4 text-gray-800">
                        Are you a Git commit? Because every time I push, I just want to merge with you. 💖😏
                    </div>

                    <!-- Post Image -->

                    <div class="border-t border-b border-gray-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYRoCL3o92Bg93KvnWhLdADq0bFz9Eq0_K1w&s"
                            alt="Post Image" class="w-full h-64 object-cover">
                    </div>


                    <!-- Post Actions -->
                    <div class="p-4">
                        <a href="#" class="inline-flex items-center space-x-2 text-gray-600 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <span class="font-medium">(10) Comments</span>
                        </a>
                    </div>
                </div>
                <div class="col-span-full text-center py-12 w-full">
                    <div class="text-gray-500 text-lg">
                        No posts to display yet.
                    </div>
                    <p class="mt-2 text-gray-600">
                        Share your first post using the form above!
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
