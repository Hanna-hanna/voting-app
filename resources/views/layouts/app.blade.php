<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
       <header class="flex items-center justify-between px-8 py-4">
            <a href="#">
                <img src="{{ asset('img/logo.svg') }}" alt="logo">
            </a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
            
                                <a :href="{{ route('logout') }}" class="cursor-pointer"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline cursor-pointer">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline cursor-pointer">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
       </header>

       <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cum adipisci delectus nihil enim sed ea temporibus quia, numquam, animi cumque velit eaque laborum nam libero deserunt illum soluta dolor? Harum, eius! Commodi autem dolore cumque magnam eius cupiditate laboriosam aliquam omnis veritatis incidunt vero maxime, consectetur eligendi sed aspernatur culpa et voluptatem. Odio excepturi atque corrupti consequatur officiis cupiditate ab cum minima est commodi voluptatibus, veniam fuga velit tempora neque rerum laborum! Officia est veniam veritatis eum tempore, voluptas amet consequatur molestiae, et laudantium autem aperiam provident iste natus magnam porro doloribus quae velit ipsum molestias eveniet quos! Officia?
            </div>
            <div class="w-175">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta nam itaque laudantium debitis facilis voluptate ut numquam consequuntur iusto! Illum incidunt repudiandae mollitia possimus aut iste culpa molestias dolore et modi. Nulla eos, autem eligendi aliquam assumenda itaque. Alias obcaecati ullam quis fugiat sint eos enim a, error similique eum veritatis aspernatur nemo temporibus ea tempora fuga quaerat voluptatum? Explicabo a odio eveniet maxime consectetur illo dolorum numquam, sunt quam voluptatibus tempora, consequuntur quas excepturi iure inventore incidunt animi fuga, totam reiciendis ducimus! Est officia soluta quibusdam voluptatem animi quam debitis at laboriosam? Eius sunt consequuntur aliquam hic quas aliquid iusto expedita saepe? Quibusdam autem, sit eligendi nihil pariatur iusto, beatae aliquam quae doloribus laborum velit, exercitationem omnis dolorum atque quaerat facere veniam quas. Eveniet quod quidem atque voluptates corrupti. Officiis, nihil reprehenderit architecto perferendis iure rerum autem, tenetur iste sed quod cum sit laboriosam nesciunt unde quidem est earum commodi. Autem facilis possimus velit tempore vitae magnam et non harum, alias tenetur recusandae nesciunt iusto eligendi maxime iure doloribus ipsa repudiandae cumque officia beatae veniam laboriosam. Itaque, maxime. Laudantium sunt reprehenderit harum? Corrupti nihil omnis excepturi hic accusamus reiciendis voluptatem explicabo. Quibusdam sequi eveniet hic sit, expedita dolorum.
            </div>
       </main>
    </body>
</html>
