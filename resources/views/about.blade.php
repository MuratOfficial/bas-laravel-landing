@extends('layouts.app')

@section('content')
<main class="relative bg-white" id="smooth-content">
    <!-- First section -->
    <div class="relative h-screen w-full overflow-hidden grid grid-cols-12 justify-center items-center z-0 bg-white">
        <div class="w-full h-screen xl:flex lg:flex md:flex hidden object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/services/img13.png" class="object-cover w-full h-full" alt="About"/>
        </div>

        <div class="relative lg:pt-0 md:pt-0 pt-16 xl:pt-0 z-10 col-span-12 px-4 md:px-8 lg:px-24 xl:px-24 h-full flex flex-col md:flex-row items-center gap-4 lg:col-span-7 md:col-span-6 xl:col-span-7">
            <div class="py-4 lg:absolute md:absolute static xl:absolute bottom-[12%] flex flex-col gap-6 text-[#363636]">
                <p class="uppercase font-semibold text-xl">О компании</p>
                <p class="text-3xl md:text-3xl lg:text-5xl xl:text-7xl font-bold uppercase text-left">
                    Быстрые и <br class="hidden md:block"/> эффективные <br> решения для бизнеса
                </p>
            </div>
        </div>
        
        <div class="w-full h-[50vh] xl:hidden lg:hidden md:hidden flex object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/services/img13.png" class="object-cover w-full h-full" alt="About"/>
        </div>
        
        <img src="/bas.svg" class="absolute z-20 bottom-[15%] left-[30%] w-32 md:w-40 lg:w-[1280px]" alt="logo"/>
    </div>
    
    <!-- Company description section -->
    <div class="relative min-h-screen w-full flex flex-col pb-20 bg-white">
        <div class="lg:h-full md:h-full h-full xl:h-full grid md:grid-cols-12 lg:grid-cols-8 grid-cols-2 xl:grid-cols-6 w-full py-10">
            <div class="flex flex-col justify-center items-center xl:col-start-2 md:col-start-2 col-start-1 col-end-3 lg:col-start-2 md:col-end-12 lg:col-end-8 xl:col-end-6">
                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 xl:grid-cols-2 z-10">
                    <div class="lg:aspect-square md:aspect-square aspect-auto xl:aspect-square relative w-full flex flex-row justify-start">
                        <img src="/services/img16.svg" class="xl:absolute md:absolute lg:absolute px-2 z-0 xl:h-16 lg:h-10 md:h-8 h-6 -top-[1%] -left-[18%]" alt=""/>
                        <h3 class="font-bold lg:text-2xl xl:text-4xl text-black">
                            Business Application Solutions
                        </h3>
                    </div>
                    <div class="lg:aspect-square md:aspect-square aspect-auto xl:aspect-square p-4 w-full flex flex-col justify-start">
                        <p class="lg:text-base xl:text-xl lg:leading-6 md:leading-6 xl:leading-7 text-black">
                            Мы работаем с 2009 года, специализируясь на внедрении информационных систем на базе решений ведущих мировых производителей в сфере IT. Наша цель — создавать цифровые инструменты, которые помогают бизнесу расти, оптимизировать процессы и добиваться стратегических результатов.
                            За более чем 16 лет на рынке Казахстана мы заслужили репутацию надежного партнёра, которому доверяют клиенты из разных отраслей.
                            
                            <br>Наш главный актив — это команда. В штате компании работают сертифицированные специалисты с глубокой экспертизой в области информационных технологий: от разработки и сопровождения комплексных решений для управления бизнесом до систем электронного документооборота, аналитических платформ и CRM.
                            Мы ставим акцент на инновации, гибкий подход и технологическое лидерство. Наши решения основаны на реальных потребностях бизнеса и направлены на устойчивый рост и цифровую трансформацию компаний.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mission and Vision -->
        <div class="grid md:grid-cols-12 lg:grid-cols-8 xl:grid-cols-6 w-full relative">
            <div class="col-start-2 md:col-end-12 lg:col-end-8 xl:col-end-6 w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 xl:grid-cols-2 gap-8 z-10">
                <div class="p-10 aspect-video flex flex-col text-white justify-between bg-cover bg-no-repeat" style="background-image: url(/services/img14.png);">
                    <p class="text-lg">Миссия</p>
                    <p class="uppercase font-bold text-xl md:text-2xl lg:text-3xl xl:text-3xl w-full">
                        Развиваясь вместе, идем к цифровому будущему
                    </p>
                </div>
                <div class="p-10 aspect-video flex flex-col text-white justify-between bg-cover bg-no-repeat" style="background-image: url(/services/img15.png);">
                    <p class="text-lg">Видение</p>
                    <p class="uppercase font-bold text-xl md:text-2xl lg:text-3xl xl:text-3xl w-full">
                        Стать самой рекомендуемой компанией для клиентов
                    </p>
                </div>
            </div>
            <img src="/services/img17.svg" class="absolute z-0 max-w-screen max-h-screen -top-[25%] -left-[8%]" alt=""/>
        </div>
        <img src="/basg.svg" class="absolute h-92 z-0 max-w-screen max-h-screen top-[25%] -left-[8%]" alt=""/>
        <img src="/circle.png" class="absolute z-0 max-w-screen max-h-screen top-[25%] -right-[4%]" alt=""/>
    </div>
</main>
@endsection
