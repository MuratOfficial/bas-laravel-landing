@extends('layouts.app')

@section('content')
<main class="relative bg-white" id="smooth-content">
    <!-- First section -->
    <div class="relative h-screen w-full overflow-hidden grid grid-cols-12 justify-center items-center z-0 bg-white">
        <div class="w-full h-screen xl:flex lg:flex md:flex hidden object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/equipments/img1.png" class="object-cover w-full h-full" alt="Equipment"/>
        </div>
        
        <div class="col-span-12 relative lg:pt-0 md:pt-0 pt-16 xl:pt-0 z-10 px-4 md:px-8 lg:px-24 h-full flex flex-col md:flex-row items-center gap-4 lg:col-span-7 md:col-span-6 xl:col-span-7">
            <div class="py-4 lg:absolute md:absolute static xl:absolute bottom-[12%] flex flex-col gap-6 text-[#363636]">
                <p class="uppercase font-semibold text-xl">Оборудование</p>
                <p class="text-3xl md:text-3xl lg:text-5xl xl:text-7xl font-bold uppercase text-left">
                    Портфель основных вендоров
                </p>
            </div>
        </div>
        
        <div class="w-full h-[50vh] xl:hidden lg:hidden md:hidden flex object-contain col-span-12 lg:col-end-5 md:col-span-6 xl:col-span-5 bg-cover bg-no-repeat">
            <img src="/equipments/img1.png" class="object-cover w-full h-full" alt="Equipment"/>
        </div>
        
        <img src="/bas.svg" class="absolute z-20 bottom-[15%] left-[30%] w-32 md:w-40 lg:w-[1280px]" alt="logo"/>
    </div>
    
    <!-- Description section -->
    <div class="relative min-h-screen w-full items-center flex flex-col gap-8 bg-white">
        <div class="grid grid-cols-14 w-full py-12 pt-32">
            <div class="flex items-center col-start-2 col-end-14 justify-center lg:flex-row md:flex-row flex-col xl:flex-row gap-12 text-[#323232] lg:col-start-2 xl:col-start-4 lg:col-end-14 xl:col-end-12 md:col-start-2 md:col-end-14">
                <img src="/equipments/img3.svg" alt="" class="h-12">
                <p class="lg:text-3xl md:text-3xl text-xl xl:text-3xl font-medium">
                    Надежный партнер в сфере информационных технологий с индивидуальным подходом к каждому клиенту. Благодаря многолетнему опыту и тесному сотрудничеству с ведущими вендорами, мы подберем для вас оптимальное решение, исходя из ваших конкретных потребностей и задач
                </p>
            </div>
        </div>
        
        <div class="grid grid-cols-14 w-full py-18">
            <div class="flex items-center col-start-1 col-end-15 justify-between flex-row gap-12 text-[#323232] md:col-start-2 md:col-end-14 lg:col-start-2 xl:col-start-4 lg:col-end-14 xl:col-end-12">
                <img src="/equipments/img4.svg" alt="" class="xl:w-fit lg:w-fit md:w-fit w-8 h-1.5">
                <p class="uppercase lg:text-3xl md:text-3xl text-lg text-center xl:text-3xl font-bold">У нас Вы можете выбрать и заказать</p>
                <img src="/equipments/img4.svg" alt="" class="xl:w-fit lg:w-fit md:w-fit w-8 h-1.5">
            </div>
        </div>
        
        <!-- Equipment categories -->
        <div class="h-screen lg:grid md:grid flex flex-col xl:grid grid-cols-14 w-full py-12">
            <div class="grid lg:grid-cols-2 w-full px-4 md:grid-cols-2 grid-cols-1 xl:grid-cols-2 gap-6 text-[#323232] lg:col-start-2 xl:col-start-4 lg:col-end-14 xl:col-end-12 md:col-start-2 md:col-end-14">
                <!-- Server Equipment -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img38.png" alt="Server Equipment" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Серверное оборудование</h3>
                            <p class="text-sm text-gray-600">мощные и надежные серверы для обеспечения бесперебойной работы вашей компании</p>
                        </div>
                    </div>
                </div>
                
                <!-- Monitoring Systems -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img39.png" alt="Monitoring Systems" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Мониторинговые системы</h3>
                            <p class="text-sm text-gray-600">отслеживание и контроль всех аспектов работы вашей ИТ-инфраструктуры</p>
                        </div>
                    </div>
                </div>
                
                <!-- Data Storage -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img40.png" alt="Data Storage" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Системы хранения данных</h3>
                            <p class="text-sm text-gray-600">от классических до ультрасовременных решений, способных справиться с любыми объемами информации</p>
                        </div>
                    </div>
                </div>
                
                <!-- Communication Systems -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img41.png" alt="Communication Systems" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Системы телефонии и видеоконференцсвязи</h3>
                            <p class="text-sm text-gray-600">решения для качественной коммуникации внутри компании и с внешними партнерами</p>
                        </div>
                    </div>
                </div>
                
                <!-- Network Equipment -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img42.png" alt="Network Equipment" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Сетевое оборудование</h3>
                            <p class="text-sm text-gray-600">коммутаторы, маршрутизаторы, точки доступа и многое другое для создания надежной и эффективной сетевой инфраструктуры</p>
                        </div>
                    </div>
                </div>
                
                <!-- Virtualization -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img43.png" alt="Virtualization" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Виртуализацию и гиперконвергентную инфраструктуру</h3>
                            <p class="text-sm text-gray-600">эффективные и экономичные решения для оптимизации использования ресурсов</p>
                        </div>
                    </div>
                </div>
                
                <!-- Security Solutions -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img44.png" alt="Security Solutions" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Решения в сфере информационной безопасности</h3>
                            <p class="text-sm text-gray-600">оборудование и программное обеспечение для защиты ваших данных и предотвращения киберугроз</p>
                        </div>
                    </div>
                </div>
                
                <!-- Client Workstations -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img45.png" alt="Client Workstations" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Оборудование для клиентских рабочих мест</h3>
                            <p class="text-sm text-gray-600">компьютеры, ноутбуки, мониторы и периферийные устройства, отвечающие самым высоким стандартам</p>
                        </div>
                    </div>
                </div>
                
                <!-- Technical Support -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="/services/img46.png" alt="Technical Support" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-bold text-lg">Техническую поддержку</h3>
                            <p class="text-sm text-gray-600">обеспечение бесперебойной работы вашей инфраструктуры</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <img src="/equipments/img2.png" class="absolute w-[50vw] z-0 max-w-screen max-h-screen top-0" alt=""/>
    </div>
    
    <!-- Vendors section -->
    <div class="relative h-full w-full overflow-hidden flex justify-start items-center flex-col bg-white">
        <div class="flex items-center justify-center flex-row gap-12 text-[#323232] w-full py-12">
            <img src="/equipments/img4.svg" alt="" class="xl:w-fit lg:w-fit md:w-fit w-8 h-1.5">
            <p class="uppercase lg:text-3xl md:text-3xl text-lg text-center xl:text-3xl font-bold">Вендора</p>
            <img src="/equipments/img4.svg" alt="" class="xl:w-fit lg:w-fit md:w-fit w-8 h-1.5">
        </div>
        <img src="/equipments/img5.png" class="xl:max-w-full xl:flex lg:flex md:flex hidden lg:max-w-[1024px] h-full px-10" alt="Vendors"/>
        <img src="/equipments/img6.png" class="xl:max-w-full xl:hidden lg:hidden md:hidden flex lg:max-w-[1024px] h-full px-10" alt="Vendors"/>
    </div>
</main>
@endsection
