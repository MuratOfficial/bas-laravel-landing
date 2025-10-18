@extends('layouts.app')

@section('content')
<main class="relative bg-white" id="smooth-content">
    <!-- First section -->
    <div class="relative h-screen w-full overflow-hidden grid grid-cols-12 justify-center items-center z-0 bg-white">
        <div class="w-full h-screen xl:flex lg:flex md:flex hidden object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/services/img1.png" class="object-cover w-full h-full" alt="Services"/>
        </div>

        <div class="relative lg:pt-0 md:pt-0 pt-16 xl:pt-0 col-span-12 z-10 px-4 md:px-8 lg:px-24 xl:px-24 h-full flex flex-col md:flex-row items-center gap-4 lg:col-span-7 md:col-span-6 xl:col-span-7">
            <div class="py-4 lg:absolute md:absolute static xl:absolute bottom-[12%] flex flex-col gap-6 text-[#363636]">
                <p class="uppercase font-semibold text-xl">Услуги и решения</p>
                <p class="text-3xl md:text-3xl lg:text-5xl xl:text-7xl font-bold uppercase text-left">
                    ИТ-услуги, <br class="hidden md:block"/> которые работают <br> на результат
                </p>
            </div>
        </div>

        <div class="w-full h-[50vh] xl:hidden lg:hidden md:hidden flex object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/services/img1.png" class="object-cover w-full h-full" alt="Services"/>
        </div>
        
        <img src="/bas.svg" class="absolute z-20 bottom-[15%] left-[30%] w-32 md:w-40 lg:w-[1280px]" alt="logo"/>
    </div>
    
    <!-- Services section -->
    <div class="relative h-full w-full overflow-hidden lg:grid md:grid flex flex-col xl:grid grid-rows-5 xl:gap-8 md:gap-8 gap-0 lg:gap-8 justify-between items-center md:py-12 md:px-6 lg:py-16 xl:px-56 lg:px-24 bg-white">
        <div class="lg:grid md:grid flex flex-col xl:grid grid-cols-12 z-10 xl:gap-8 md:gap-8 gap-0 lg:gap-8 h-full w-full row-span-2">
            <div class="flex flex-col p-6 gap-2 text-white justify-end md:col-span-5 lg:col-span-5 xl:col-span-3 aspect-[10/9] bg-cover bg-no-repeat" style="background-image: url(/services/img2.png);">
                <div class="flex flex-row w-full justify-start">
                    <img src="/logo.svg" alt="logo" class="h-12">
                </div>
                
                <p class="leading-5">
                    Мы предоставляем широкий спектр консалтинговых услуг и разрабатываем решения, опираясь на передовые современные практики по следующим направлениям
                </p>
            </div>
            <div class="flex flex-col text-white w-full justify-between md:col-span-7 lg:col-span-7 xl:col-span-9 p-8 bg-[#363636]">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Оказание консалтинговых услуг по оптимальному выбору продуктов/систем под задачи и специфику заказчиков</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Разработка мобильных приложений</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Индивидуальная разработка автоматизированных систем под нишевые задачи</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Применение ИИ в решении бизнес-задач</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Аутстаффинг специалистов</span>
                </div>
            </div>
        </div>
        
        <div class="lg:grid md:grid flex flex-col xl:grid grid-cols-12 z-10 gap-8 h-full w-full row-span-3">
            <div class="flex flex-col text-white col-span-7 p-8 bg-[#363636] w-full justify-between">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>DMS Автоматизация документооборота</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>BPM Управление бизнес-процессами</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>CRM Управление взаимоотношениями с клиентами</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>ECM Организация электронного архива</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>HRM Автоматизация процессов управления персоналом</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>ITSM Автоматизация сервисной службы</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Fintech Системы управления рисками</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Управление закупками</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Управление проектами</span>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <span>Корпоративные порталы</span>
                </div>
            </div>
            <div class="flex flex-col col-span-5 bg-no-repeat bg-cover p-6 gap-2 text-white justify-end" style="background-image: url(/services/img3.png);">
                <div class="flex flex-row w-full justify-end">
                    <img src="/services/img4.svg" alt="logo" class="h-10">
                </div>
                
                <p class="leading-5 text-right">
                    Экосистема low-code продуктов для полной автоматизации любого бизнеса на единой платформе
                </p>
            </div>
        </div>
        
        <img src="/services/img10.png" alt="rect" class="absolute w-fit -left-[10%] bottom-[5%] z-0">
    </div>
    
    <!-- Oracle section -->
    <div class="relative w-full overflow-hidden bg-[#323232]">
        <div class="xl:h-full lg:h-full md:h-full z-10 relative w-full pt-24 pb-8 lg:px-20 md:px-6 xl:px-32 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2 gap-8 grid">
            <img src="/services/img5.svg" alt="oracle" class="xl:h-16 lg:h-16 md:h-16 h-8 top-[1%] absolute w-fit md:top-[4%] lg:top-[6%] xl:top-[12%] left-[30%]">
            <div class="flex flex-col gap-8 justify-between">
                <div class="grid lg:grid-cols-2 md:grid-cols-2 px-4 grid-cols-1 xl:grid-cols-2 gap-10 md:pt-24 lg:pt-30 xl:pt-48">
                    <!-- Oracle services cards -->
                    <div class="bg-white p-6 rounded-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="/services/img18.svg" alt="OFSAA" class="w-12 h-12">
                            <h3 class="font-bold text-lg">Oracle Financial Services Analytical Applications (OFSAA)</h3>
                        </div>
                        <ul class="space-y-2 text-sm">
                            <li>• Управление активами и пассивами</li>
                            <li>• Трансфертное образование</li>
                            <li>• МСФО9</li>
                            <li>• Управление кредитным риском и риском ликвидности</li>
                        </ul>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="/services/img19.svg" alt="Flexcube" class="w-12 h-12">
                            <h3 class="font-bold text-lg">Oracle Flexcube - основная банковская платформа</h3>
                        </div>
                        <ul class="space-y-2 text-sm">
                            <li>• Розничный банкинг</li>
                            <li>• Корпоративный банкинг (управление денежными средствами, управление ликвидностью, виртуальные счета и т.д.)</li>
                        </ul>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="/services/img20.svg" alt="FCCM" class="w-12 h-12">
                            <h3 class="font-bold text-lg">Oracle Financial Services Crime and Complience (FCCM)</h3>
                        </div>
                        <p class="text-sm">AML, Fraud, фильтрация транакций, скрининг клиентов, санкционные списки, KYC, кейс-менеджемнт и т.д.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="/services/img21.svg" alt="Digital Experience" class="w-12 h-12">
                            <h3 class="font-bold text-lg">Oracle Banking Digital Experience</h3>
                        </div>
                        <p class="text-sm">Платформа для интернет-мобильного банкинга</p>
                    </div>
                </div>
            </div>
            
            <div class="w-full h-full aspect-square md:aspect-square lg:aspect-square">
                <div style="background-image: url(/services/img7.png);" class="w-full bg-no-repeat bg-cover h-full flex flex-col justify-end p-12">
                    <p class="text-white text-lg leading-6">
                        Крупнейший мировой разработчик программного обеспечения, предлагающий масштабные и надежные решения, включая базы данных, бизнес-приложения и облачные сервисы, для удовлетворения потребностей современного бизнеса с использованием инновационных технологий
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Support section -->
    <div class="relative w-full overflow-hidden bg-white lg:grid md:grid flex flex-col xl:grid grid-cols-14 gap-12 py-12 items-start justify-center">
        <div class="grid z-10 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 xl:grid-cols-2 gap-4 text-[#323232] xl:col-start-4 xl:col-end-12 lg:col-start-2 lg:col-end-14 md:col-start-2 md:col-end-14">
            <div class="aspect-square bg-white flex flex-col justify-start gap-4 border-3 p-6 border-[#323232]">
                <h4 class="font-bold text-2xl leading-6">Расширенная техническая <br> поддержка ПО</h4>
                <p class="w-full leading-5 text-justify">
                    оказание услуг сопровождения внедренного программного обеспечения. Мы предоставляем гибкие условия поддержки, полностью отвечающие потребностям Заказчика по объему оказываемых услуг и SLA по следующим направлениям:
                </p>
                <div class="flex flex-col gap-3 w-full">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">Администрирование баз данных Oracle</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">Полная линейка продуктов ELMA 3,4 и 365</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">Страховые решения AdInsure</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">Внедренные заказные разработки ПО</span>
                    </div>
                </div>
            </div>
            <div class="aspect-square relative bg-white flex flex-col justify-start gap-4 border-3 p-6 border-[#323232]">
                <h4 class="font-bold text-2xl leading-6">Стандартная техническая <br> поддержка ПО</h4>
                <p class="w-full leading-5 text-justify">
                    оказание услуг продления стандартной технической поддержки на программное обеспечение крупнейших производителей программного обеспечения, таких как:
                </p>
                <div class="flex flex-col gap-3 w-full">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">Oracle</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">ELMA</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">Veeam</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-[#323232] rounded-full"></div>
                        <span class="text-base">VMware и др.</span>
                    </div>
                </div>
                <img src="/services/img11.svg" alt="" class="h-48 absolute w-fit bottom-0 right-0">
            </div>
        </div>
        
        <img src="/services/img10.png" alt="rect" class="absolute z-0 w-fit -right-[10%] bottom-[5%]">
        <img src="/services/img10.png" alt="rect" class="absolute z-0 w-fit -left-[10%] top-[5%]">
    </div>
</main>
@endsection
