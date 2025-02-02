<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <header class="mb-10">
        <nav class="fixed top-0 left-0 w-full bg-white border-gray-300 shadow-md z-50">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Facebook_logo_%28square%29.png/600px-Facebook_logo_%28square%29.png"
                        class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">CULOB FACE</span>
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full"
                            src="https://scontent-atl3-2.xx.fbcdn.net/v/t39.30808-1/474804577_122113677974665653_7948094019416841497_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=101&ccb=1-7&_nc_sid=e99d92&_nc_ohc=NLbUUU8z9U0Q7kNvgEuuWAB&_nc_zt=24&_nc_ht=scontent-atl3-2.xx&_nc_gid=AUKixmDrBj7vKSeXexs9LWD&oh=00_AYAgrA4UMyYFL9fXwImMXWna-Rz08BblnjMgNV-nYh3EEA&oe=67A5657B"
                            alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    @if (Auth::check())
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-md"
                            id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 ">{{ 'John Doe' }}</span>
                                <span class="block text-sm text-gray-500 truncate ">{{ '0E8dJ@example.com' }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
                                </li>
                                <li>
                                    <form action="#" method="POST" class="logout-form">
                                        @csrf
                                        <button
                                            type="submit"class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  w-full text-left">Log
                                            out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-md"
                            id="user-dropdown">

                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('profile') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('profileSetting') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Setting</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Register</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </header>


    <main>
        {{ $slot }}
    </main>

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
</body>

</html>
