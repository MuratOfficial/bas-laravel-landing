@extends('layouts.app')

@section('content')
<main class="relative bg-white" id="smooth-content">
    <!-- First section -->
    <div class="relative h-screen w-full overflow-hidden flex justify-center items-center z-0">
        <!-- Logo component would go here -->
        <div class="absolute inset-0">
            <video autoplay playsinline preload="auto" muted loop class="absolute top-0 left-0 w-full h-screen object-cover">
                <source src="/video.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="absolute bottom-24 z-10 px-12 md:px-12 lg:48 xl:px-48 flex flex-col md:flex-row items-center gap-4">
            <button onclick="scrollToElement('.second')" class="text-white hidden xl:flex lg:flex md:flex p-2 transition-all duration-300 rounded-full border border-transparent hover:border-white cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20V4m5 11s-3.682 5-5 5s-5-5-5-5" />
                </svg>
            </button>
            <p class="text-4xl md:text-5xl lg:text-6xl xl:text-8xl font-semibold uppercase text-white text-center md:text-left">
                Создаем <br class="hidden md:block"/>технологии будущего
            </p>
            <button onclick="scrollToElement('.second')" class="text-white xl:hidden lg:hidden md:hidden flex p-2 transition-all duration-300 rounded-full border border-transparent hover:border-white cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20V4m5 11s-3.682 5-5 5s-5-5-5-5" />
                </svg>
            </button>
        </div>
        
        <img src="/bas.svg" class="absolute z-20 bottom-[15%] left-[30%] xl:w-[1280px] md:w-40 lg:w-[1280px]" alt="logo"/>
    </div>
    
    <!-- Third section -->
    <div class="relative second w-full overflow-hidden grid grid-cols-2">
        <!-- Left panel with animation -->
        <div class="bg-[#323232] flex-row text-white bg-cover bg-no-repeat" style="background-image: url(/index/img6.png);">
            <div class="flex items-center justify-center h-full p-8">
                <div class="text-center">
                    <div class="lg:text-7xl text-6xl md:text-6xl xl:text-9xl font-bold counter" data-end="16" data-duration="2">0</div>
                    <p class="font-semibold lg:text-xl xl:text-3xl leading-4 xl:leading-7 md:leading-4">
                        лет на рынке <br> информационных <br> технологий
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Right panel with animation -->
        <div class="bg-[#F04447] flex-row text-white bg-cover bg-no-repeat" style="background-image: url(/index/img7.png);">
            <div class="flex items-center justify-center h-full p-8">
                <div class="text-center">
                    <div class="lg:text-7xl text-6xl md:text-6xl xl:text-9xl font-bold counter" data-end="700" data-duration="2">0</div>
                    <p class="font-semibold lg:text-xl xl:text-3xl lg:pl-6 md:pl-0 xl:pl-8">
                        реализованных <br>проектов
                    </p>
                </div>
            </div>
        </div>

        <!-- Center section -->
        <div class="text-white md:aspect-[5/2] aspect-[3/5] lg:aspect-[5/2] xl:aspect-[5/2] col-span-2 flex flex-col items-center justify-center bg-cover bg-no-repeat" style="background-image: url(/index/img8.png);">
            <div class="text-center">
                <div class="lg:text-9xl text-8xl md:text-7xl xl:text-[11rem] leading-none font-bold counter" data-end="1350" data-duration="2">0</div>
                <p class="font-semibold md:text-5xl text-5xl lg:text-6xl xl:text-7xl">клиентов</p>
            </div>
        </div>
    </div>

    <!-- Fourth section -->
    <div class="relative w-full overflow-hidden grid grid-cols-2 bg-white">
        <!-- Left side -->
        <div class="text-[#EE2E33] xl:col-span-1 lg:col-span-1 md:col-span-1 col-span-2 aspect-square lg:aspect-[2/1] md:aspect-[2/1] xl:aspect-[2/1] grid grid-cols-2 items-center justify-center">
            <div class="bg-white h-full lg:flex-col md:flex-col flex-row xl:flex-col text-[#EE2E33] bg-cover bg-no-repeat" style="background-image: url(/index/img9.png);">
                <div class="flex items-center justify-center h-full p-8">
                    <div class="text-center">
                        <div class="lg:text-7xl text-6xl xl:text-9xl md:text-5xl font-bold counter" data-end="150" data-duration="2">0</div>
                        <p class="font-semibold text-xl lg:text-xl xl:text-3xl md:text-lg">
                            международных <br> сертификатов
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right side -->
        <div class="xl:col-span-1 lg:col-span-1 md:col-span-1 col-span-2 aspect-square lg:aspect-[2/1] md:aspect-[2/1] xl:aspect-[2/1] grid grid-cols-2 justify-center items-center">
            <div class="bg-white h-full lg:flex-col md:flex-col flex-row xl:flex-col text-[#EE2E33] bg-cover bg-no-repeat" style="background-image: url(/index/img10.png);">
                <div class="flex items-center justify-center h-full p-8">
                    <div class="text-center">
                        <div class="lg:text-7xl xl:text-9xl text-6xl md:text-5xl font-bold counter" data-end="20" data-duration="2">0</div>
                        <p class="font-semibold text-xl lg:text-xl xl:text-3xl md:text-lg">
                            международных <br> партнерских <br>статусов
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional sections -->
        <div class="bg-[#F04447] flex-row text-white bg-cover bg-no-repeat" style="background-image: url(/index/img11.png);">
            <div class="flex items-center justify-center h-full p-8">
                <p class="font-semibold lg:text-2xl xl:text-4xl md:text-lg md:leading-5 lg:leading-7 xl:leading-9">
                    Полный комплекс IT-услуг, <br>покрывающих все этапы <br>жизненного цикла системы
                </p>
            </div>
        </div>
        
        <div class="text-[#EE2E33] lg:aspect-[2/1] md:aspect-[2/1] xl:aspect-[2/1] xl:col-span-1 lg:col-span-1 md:col-span-1 col-span-2 grid grid-cols-2 items-center justify-center">
            <div class="bg-white flex-row text-[#EE2E33] bg-cover bg-no-repeat" style="background-image: url(/index/img14.png);">
                <div class="flex items-center justify-center h-full p-8">
                    <p class="font-bold lg:text-2xl xl:text-4xl md:text-lg md:leading-5 lg:leading-7 xl:leading-9">
                        Собственный <br> центр<br> разработки и<br> тестирования<br> проектов
                    </p>
                </div>
            </div>
        </div>
        
        <div class="text-white lg:aspect-[2/1] md:aspect-[2/1] xl:aspect-[2/1] xl:col-span-1 lg:col-span-1 md:col-span-1 col-span-2 grid grid-cols-2 items-center justify-center">
            <div class="bg-[#323232] flex-row text-white bg-cover bg-no-repeat" style="background-image: url(/index/img13.png);">
                <div class="flex items-center justify-center h-full p-8">
                    <p class="font-bold lg:text-2xl xl:text-4xl md:text-lg md:leading-5 lg:leading-7 xl:leading-9">
                        Широкий <br> вендорский<br> портфель,<br> отвечающий<br> трендам развития <br>информационных<br>технологий
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Advantages section -->
    <div class="relative h-screen w-full overflow-hidden flex justify-start items-center flex-col bg-white">
        <div class="w-full h-full flex flex-col items-center justify-center p-8">
            <h2 class="text-4xl font-bold text-[#323232] mb-12">Наши преимущества</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 w-full max-w-6xl">
                <div class="text-center p-6">
                    <img src="/index/img15.png" alt="Professional Staff" class="w-24 h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Профессиональные Сотрудники</h3>
                    <p class="text-gray-600">70% сотрудников компании ежегодно проходят курсы повышения квалификации.</p>
                </div>
                <div class="text-center p-6">
                    <img src="/index/img16.png" alt="Quality Control" class="w-24 h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Контроль Качества</h3>
                    <p class="text-gray-600">В компании работает Служба контроля качества. У нас действует служба контроля качество.</p>
                </div>
                <div class="text-center p-6">
                    <img src="/index/img17.png" alt="Client Focus" class="w-24 h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Клиентоориентированность</h3>
                    <p class="text-gray-600">Предложения наших клиентов рассматриваются на еженедельной встрече дирекции компании, мы делаем сервис ориентированный на клиента.</p>
                </div>
                <div class="text-center p-6">
                    <img src="/index/img18.png" alt="Trends" class="w-24 h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Знаем Тренды</h3>
                    <p class="text-gray-600">Мы следим за трендами и расширяя свой вендорский портфель в целях предложения нашим клиентам передовых и эффективных технологий.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners section -->
    <div class="relative h-full w-full overflow-hidden flex justify-start items-center flex-col bg-white">
        <div class="flex items-center justify-center flex-row gap-12 text-[#323232] w-full py-12">
            <img src="/equipments/img4.svg" alt="" class="h-1.5">
            <p class="uppercase xl:text-3xl md:text-3xl text-xl lg:text-3xl font-bold">Наши партнеры</p>
            <img src="/equipments/img4.svg" alt="" class="h-1.5">
        </div>
        <img src="/index/img19.png" class="xl:w-[1920px] lg:w-[1024px] hidden xl:flex lg:flex md:flex h-full px-10" alt="Partners"/>
        <img src="/index/img20.png" class="w-full flex xl:hidden lg:hidden md:hidden h-full px-10" alt="Partners"/>
    </div>
</main>
@endsection
