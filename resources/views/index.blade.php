<x-layout>
    <div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:px-8 my-14">
        <!-- Create Post Card -->
        <div class="bg-white rounded-lg shadow-md mb-6 p-4">
            <div class="flex items-center space-x-4 mb-4">
                <form action="#" method="POST" enctype="multipart/form-data" class="flex-1">
                    @csrf
                    <textarea name="content" placeholder="What's on your mind, culob" required
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

        <!-- Posts -->
        <div class="bg-white rounded-lg shadow-md mb-6">
            <!-- Post Header -->
            <div class="p-4">
                <div class="flex items-center space-x-3">
                    <a href="#" class="flex-shrink-0">
                        <img src="https://scontent-atl3-1.xx.fbcdn.net/v/t39.30808-6/470135885_583929864183222_8404866721621423046_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=UfD1xinkDVoQ7kNvgGrsRIi&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&_nc_gid=Arcin5hPpW7wTAy6LbJipRy&oh=00_AYBzYfIr3NMWykBchzu6Kex5OTzvyFhGFFFBJ_RYgiAX7w&oe=67A564F8"
                            alt="Profile Image" class="w-10 h-10 rounded-full object-cover">
                    </a>
                    <div>
                        <a href="#" class="font-semibold text-gray-900 hover:underline block">
                            John Doe
                        </a>
                        <span class="text-gray-500 text-sm">2 days ago</span>
                    </div>
                </div>
            </div>

            <!-- Post Content -->
            <div class="px-4 pb-3">
                <p class="text-gray-800 whitespace-pre-line leading-relaxed">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit.</p>
            </div>

            <!-- Post Image -->
            <div class="border-t border-b border-gray-100">
                <img src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Post Image" class="w-full object-cover max-h-[500px]">
            </div>

            <!-- Post Actions -->
            <div class="px-4 py-3 border-t border-gray-100">
                <a href="{{ route('comment') }}"
                    class="inline-flex items-center space-x-2 text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <span class="font-medium">Comment</span>
                    <span class="text-gray-500">(10)</span>
                </a>
            </div>
        </div>
    </div>
</x-layout>
