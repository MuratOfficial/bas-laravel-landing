@php
$links = [
    ['name' => 'О компании', 'url' => '/about', 'content' => 'Информация о компании, миссии и команде'],
    ['name' => 'Услуги и Решения', 'url' => '/services', 'content' => 'Список ИТ-услуг и готовых решений'],
    ['name' => 'Оборудование', 'url' => '/equipments', 'content' => 'Каталог поставляемого ИТ-оборудования'],
    ['name' => 'Карьера', 'url' => '/career', 'content' => 'Найди себя в команде лучших'],
];
@endphp

<!-- Mobile version (burger button only when closed) -->
<div class="xl:hidden lg:hidden md:hidden flex">
    <button 
        id="mobile-menu-toggle"
        class="fixed top-4 right-4 z-50 w-10 h-10 bg-white rounded-xl flex items-center justify-center focus:outline-none"
    >
        <svg 
            id="burger-icon"
            class="w-5 h-5 text-gray-700 transition-transform duration-300"
            fill="none" 
            stroke="currentColor" 
            viewBox="0 0 24 24" 
            xmlns="http://www.w3.org/2000/svg"
        >
            <path 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M4 6h16M4 12h16M4 18h16"
            ></path>
        </svg>
    </button>
</div>

<!-- Main menu -->
<nav 
    id="main-nav"
    class="bg-white lg:w-[600px] md:w-[560px] xl:w-[600px] rounded-xl px-2 py-1.5 fixed top-4 lg:right-8 md:right-8 right-4 xl:right-8 overflow-hidden flex flex-col justify-center transition-all duration-300 z-40 w-10 h-10"
>
    <div class="flex items-center justify-between w-full">
        <!-- Desktop menu -->
        <div class="xl:flex lg:flex md:flex hidden flex-col justify-center group items-center w-full">
            <!-- Horizontal tabs -->
            <div class="flex flex-row gap-6 items-center justify-center w-full">
                @foreach($links as $link)
                    <a
                        href="{{ $link['url'] }}"
                        class="relative text-sm py-2 text-gray-700 group-hover:text-gray-400 hover:text-gray-700 transition font-medium {{ request()->is(ltrim($link['url'], '/')) ? 'text-blue-600 font-semibold' : '' }}"
                    >
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Mobile menu (expands on click) -->
    <div 
        id="mobile-menu"
        class="xl:hidden lg:hidden md:hidden flex flex-col transition-all duration-300 ease-in-out overflow-hidden h-0 opacity-0"
    >
        @foreach($links as $link)
            <a
                href="{{ $link['url'] }}"
                class="py-3 px-4 text-sm text-gray-700 hover:bg-gray-100 rounded-md transition font-medium {{ request()->is(ltrim($link['url'], '/')) ? 'text-blue-600 font-semibold bg-gray-50' : '' }}"
            >
                <div class="font-medium">{{ $link['name'] }}</div>
                <div class="text-xs text-gray-500 mt-1">{{ $link['content'] }}</div>
            </a>
        @endforeach
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mainNav = document.getElementById('main-nav');
    const mobileMenu = document.getElementById('mobile-menu');
    const burgerIcon = document.getElementById('burger-icon');
    
    let isMobileMenuOpen = false;

    mobileMenuToggle.addEventListener('click', function() {
        isMobileMenuOpen = !isMobileMenuOpen;
        
        if (isMobileMenuOpen) {
            mainNav.classList.remove('w-10', 'h-10');
            mainNav.classList.add('w-[300px]', 'h-80');
            mobileMenu.classList.remove('h-0', 'opacity-0');
            mobileMenu.classList.add('h-80', 'opacity-100', 'py-2');
            burgerIcon.style.transform = 'rotate(90deg)';
        } else {
            mainNav.classList.remove('w-[300px]', 'h-80');
            mainNav.classList.add('w-10', 'h-10');
            mobileMenu.classList.remove('h-80', 'opacity-100', 'py-2');
            mobileMenu.classList.add('h-0', 'opacity-0');
            burgerIcon.style.transform = 'rotate(0deg)';
        }
    });
});
</script>
