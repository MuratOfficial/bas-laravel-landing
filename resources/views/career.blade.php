@extends('layouts.app')

@section('content')
<main class="relative bg-white" id="smooth-content">
    <!-- First section -->
    <div class="relative h-screen w-full overflow-hidden grid grid-cols-12 justify-center items-center z-0 bg-white">
        <div class="w-full h-screen xl:flex lg:flex md:flex hidden object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/career/img1.png" class="object-cover w-full h-full" alt="Career"/>
        </div>

        <div class="relative lg:pt-0 md:pt-0 pt-16 xl:pt-0 col-span-12 z-10 px-4 md:px-8 lg:px-24 xl:px-24 h-full flex flex-col md:flex-row items-center gap-4 lg:col-span-7 md:col-span-6 xl:col-span-7">
            <div class="py-4 lg:absolute md:absolute static xl:absolute bottom-[12%] flex flex-col gap-6 text-[#363636]">
                <p class="uppercase font-semibold text-xl">Карьера</p>
                <p class="text-3xl md:text-3xl lg:text-5xl xl:text-7xl font-bold uppercase text-left">
                    Создавай<br class="hidden md:block"/> технологии будущего<br> вместе с нами
                </p>
            </div>
        </div>
        
        <div class="w-full h-[50vh] xl:hidden lg:hidden md:hidden flex object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/career/img1.png" class="object-cover w-full h-full" alt="Career"/>
        </div>
        
        <img src="/bas.svg" class="absolute z-20 bottom-[15%] left-[30%] w-32 md:w-40 lg:w-[1280px]" alt="logo"/>
    </div>
    
    <!-- Values section -->
    <div class="relative min-h-screen w-full flex flex-col bg-white">
        <div class="w-full lg:h-[50vh] md:h-[50vh] h-full xl:h-[50vh] py-8 grid grid-cols-8">
            <div class="col-start-2 col-end-8 grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 xl:grid-cols-3 gap-8 text-[#323232]">
                <div class="w-full flex flex-col justify-center xl:items-start lg:items-start md:items-start items-center gap-6">
                    <img src="/career/img2.svg" class="lg:w-16 xl:w-20 md:w-16 w-12" alt="Leadership">
                    <p class="font-semibold md:text-sm lg:text-lg xl:text-2xl">Лидерство и ответственность</p>
                </div>
                <div class="w-full flex flex-col justify-center xl:items-start lg:items-start md:items-start items-center gap-6">
                    <img src="/career/img3.svg" class="lg:w-16 xl:w-20 md:w-16 w-12" alt="Professionalism">
                    <p class="font-semibold md:text-sm lg:text-lg xl:text-2xl">Профессионализм и честность</p>
                </div>
                <div class="w-full flex flex-col justify-center xl:items-start lg:items-start md:items-start items-center gap-6">
                    <img src="/career/img4.svg" class="lg:w-16 xl:w-20 md:w-16 w-12" alt="Client Focus">
                    <p class="font-semibold md:text-sm lg:text-lg xl:text-2xl">Клиентоориентированность и надежность</p>
                </div>
            </div>
        </div>
        
        <!-- Development and Culture section -->
        <div class="w-full lg:h-screen md:h-screen h-full xl:h-screen lg:grid md:grid flex flex-col xl:grid grid-rows-2 bg-[#323232]">
            <!-- Development section -->
            <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 xl:grid-cols-2">
                <div class="bg-cover bg-no-repeat xl:aspect-auto lg:aspect-auto md:aspect-auto aspect-video" style="background-image: url(/career/img6.png);"></div>
                <div class="h-full grid grid-cols-6">
                    <div class="text-white py-4 w-full h-full items-start justify-center flex flex-col gap-2 col-start-2 col-end-6">
                        <h3 class="font-bold lg:text-5xl md:text-5xl text-2xl xl:text-5xl uppercase">Ваше развитие</h3>
                        <p class="lg:text-base xl:text-xl lg:line-clamp-5 xl:line-clamp-4">
                            Мы никогда не прекращаем учиться и совершенствоваться, поэтому поможем вам повысить свою квалификацию и получить профессиональные сертификации.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Culture section -->
            <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 xl:grid-cols-2">
                <div class="h-full grid grid-cols-6">
                    <div class="text-white py-4 w-full h-full items-start justify-center flex flex-col gap-2 col-start-2 col-end-6">
                        <h3 class="font-bold lg:text-5xl md:text-5xl text-2xl xl:text-5xl uppercase">Наша культура</h3>
                        <p class="lg:text-base xl:text-xl lg:line-clamp-5 xl:line-clamp-4">
                            Вы станете частью нетворкинга, где обмениваются идеями и вдохновят вас на успех и построение своей карьеры. Мы хотим, чтобы завтра вы стали лучше, чем сегодня.
                        </p>
                    </div>
                </div>
                <div class="bg-cover bg-no-repeat xl:aspect-auto lg:aspect-auto md:aspect-auto aspect-video" style="background-image: url(/career/img7.png);"></div>
            </div>
        </div>
        
        <!-- Selection process section -->
        <div class="w-full xl:px-24 md:px-6 px-6 lg:px-24 py-20 h-fit text-[#323232] flex gap-8 flex-col justify-between">
            <h2 class="lg:text-5xl md:text-5xl text-2xl xl:text-5xl font-bold uppercase w-full text-left">Этапы отбора</h2>
            
            <!-- Desktop version -->
            <div class="lg:flex md:flex hidden xl:flex flex-col justify-center items-center gap-4">
                <div class="xl:px-16 md:px-4 lg:px-16 flex w-full flex-row items-center justify-between">
                    <img src="/career/img8.png" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <img src="/career/img9.svg" alt="arrow" class="xl:h-2 md:h-0.5 lg:h-1">
                    <img src="/career/img10.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <img src="/career/img9.svg" alt="arrow" class="xl:h-2 md:h-0.5 lg:h-1">
                    <img src="/career/img11.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <img src="/career/img9.svg" alt="arrow" class="xl:h-2 md:h-0.5 lg:h-1">
                    <img src="/career/img12.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <img src="/career/img9.svg" alt="arrow" class="xl:h-2 md:h-0.5 lg:h-1">
                    <img src="/career/img13.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                </div>
                <div class="grid grid-cols-5 gap-12 w-full">
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-left">
                        Резюме скрининг
                    </p>
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold">
                        Телефонное интервью
                    </p>
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-center">
                        Тестирование
                    </p>
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-center">
                        Совместное интервью с рекрутером и нанимающим менеджером
                    </p>
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-right">
                        Предложение о приеме на работу
                    </p>
                </div>
            </div>
            
            <!-- Mobile version -->
            <div class="lg:hidden md:hidden flex xl:hidden flex-col justify-center items-center gap-4">
                <div class="flex flex-col gap-2 items-center justify-center">
                    <img src="/career/img8.png" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-center">
                        Резюме скрининг
                    </p>
                </div>
                <img src="/equipments/img7.svg" alt="arrow" class="w-1.5">
                <div class="flex flex-col gap-2 items-center justify-center">
                    <img src="/career/img10.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-center">
                        Телефонное интервью
                    </p>
                </div>
                <img src="/equipments/img7.svg" alt="arrow" class="w-1.5">
                <div class="flex flex-col gap-2 items-center justify-center">
                    <img src="/career/img11.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-center">
                        Тестирование
                    </p>
                </div>
                <img src="/equipments/img7.svg" alt="arrow" class="w-1.5">
                <div class="flex flex-col gap-2 items-center justify-center">
                    <img src="/career/img12.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-center">
                        Совместное интервью с рекрутером и нанимающим менеджером
                    </p>
                </div>
                <img src="/equipments/img7.svg" alt="arrow" class="w-1.5">
                <div class="flex flex-col gap-2 items-center justify-center">
                    <img src="/career/img13.svg" alt="circle" class="xl:h-16 lg:h-12 md:h-8">
                    <p class="lg:text-base md:text-xs xl:text-lg font-semibold text-center">
                        Предложение о приеме на работу
                    </p>
                </div>
            </div>
            
            <p class="font-bold w-full text-right pt-8">
                Все резюме просим отправлять по адресу: <a href="mailto:hr@bas.kz" class="text-blue-600 hover:underline">hr@bas.kz</a>
            </p>
        </div>
    </div>
</main>
@endsection
