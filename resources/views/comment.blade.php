<x-layout>
    <div class="max-w-2xl mx-auto px-4 py-8">
        <!-- Post Section -->
        <div class="bg-white rounded-lg shadow-md mb-6 p-6">
            <div class="flex items-start gap-4 mb-4">
                <img src="https://scontent-atl3-1.xx.fbcdn.net/v/t39.30808-6/470135885_583929864183222_8404866721621423046_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=UfD1xinkDVoQ7kNvgGrsRIi&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&_nc_gid=AKj-r1duw98b1x0MxcxxtCx&oh=00_AYBzYmOKQv8fvLrLWgBuUEPRnnX8fKMW7Pzt4tUf8IbU9g&oe=67A59D38"
                    alt="#" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <h2 class="font-semibold text-gray-800">John Doe</h2>
                    <p class="text-sm text-gray-500">2 days ago</p>
                </div>
            </div>

            <p class="text-gray-800 mb-4">Lorem ipsum dolor sit.</p>

            <div class="mb-4 rounded-lg overflow-hidden">
                <img src="https://i.redd.it/jbcj0uqbihg41.jpg" alt="Post image" class="w-full h-64 object-cover">
            </div>
        </div>

        <!-- Comments Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold mb-6 text-gray-800">Comments (10)</h3>

            <div class="space-y-4">

                <div class="border-b border-gray-100 pb-4 last:border-0">
                    <div class="flex items-start gap-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="font-medium text-gray-800">Rods</span>
                                <span class="text-xs text-gray-500">1 minute ago</span>
                            </div>
                            <p class="text-gray-700">I like black</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Comment Form (Sticky Bottom) -->
        <div class="sticky bottom-0 bg-white border-t border-gray-100 py-4 mt-6">
            <form method="POST" action="#" class="flex gap-4 items-start">
                @csrf
                <img src="https://scontent-atl3-2.xx.fbcdn.net/v/t39.30808-1/474804577_122113677974665653_7948094019416841497_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=101&ccb=1-7&_nc_sid=e99d92&_nc_ohc=NLbUUU8z9U0Q7kNvgEuuWAB&_nc_zt=24&_nc_ht=scontent-atl3-2.xx&_nc_gid=AUKixmDrBj7vKSeXexs9LWD&oh=00_AYAgrA4UMyYFL9fXwImMXWna-Rz08BblnjMgNV-nYh3EEA&oe=67A5657B"
                    alt="Your profile" class="w-8 h-8 rounded-full object-cover">
                <div class="flex-1">
                    <textarea name="content" placeholder="Write a comment..." rows="1"
                        class="w-full px-4 py-2 border border-gray-200 rounded-full resize-none focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"></textarea>
                    <input type="hidden" name="post_id" value="#">
                </div>
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition-colors">
                    Post
                </button>
            </form>
        </div>
    </div>
</x-layout>
