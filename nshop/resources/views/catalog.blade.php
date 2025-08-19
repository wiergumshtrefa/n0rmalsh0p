@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center">Каталог техники</h1>
    
    <!-- Горизонтальный контейнер с прокруткой -->
    <div class="flex overflow-x-auto pb-4 hide-scrollbar">
        <div class="flex space-x-6 min-w-max">
            <!-- Стиральная машина -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/lg.jpg') }}" alt="Стиральная машина" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Стиральная машина LG</h3>
                    <p class="text-gray-600 mb-3 text-sm">Загрузка 7 кг, 1200 об/мин, inverter motor</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">35 000 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Посудомоечная машина -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/bosch.jpg') }}" alt="посудомоечная машина" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Посудомоечная Bosch</h3>
                    <p class="text-gray-600 mb-3 text-sm">Встраиваемая, 12 комплектов, сушка</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">42 000 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Пылесос -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/samsung.jpg') }}" alt="пылесос" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Пылесос Samsung</h3>
                    <p class="text-gray-600 mb-3 text-sm">Мощность 2000 Вт, мешок 4л, HEPA фильтр</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">8 900 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Робот-пылесос -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/roborock.png') }}" alt="робот пылесос" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Roborock S7</h3>
                    <p class="text-gray-600 mb-3 text-sm">Навигация LIDAR, мойка полов, app control</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">29 900 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Холодильник -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/haier.jpg') }}" alt="холодильник" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Холодильник Haier</h3>
                    <p class="text-gray-600 mb-3 text-sm">No Frost, 350л, inverter, зона свежести</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">55 000 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Микроволновка -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/panasonic.jpg') }}" alt="микроволновка" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Микроволновка Panasonic</h3>
                    <p class="text-gray-600 mb-3 text-sm">25л, гриль, инверторный нагрев</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">12 500 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Телевизор -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/sony.png') }}" alt="телевизор" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Телевизор Sony 55"</h3>
                    <p class="text-gray-600 mb-3 text-sm">4K OLED, Smart TV, Android TV</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">89 000 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Планшет -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/ipad.jpg') }}" alt="планшет" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">iPad Air 10.9"</h3>
                    <p class="text-gray-600 mb-3 text-sm">M1 chip, 64GB, Retina display</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">54 900 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Ноутбук -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/mac.jpg') }}" alt="ноутбук" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">MacBook Air M2</h3>
                    <p class="text-gray-600 mb-3 text-sm">13.6", 8GB, 256GB SSD, Space gold</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">119 000 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Смартфон -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/iphone.jpg') }}" alt="телефон" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">iPhone 15 Pro</h3>
                    <p class="text-gray-600 mb-3 text-sm">6.1", 128GB, титановый корпус</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">99 900 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Наушники -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/sonyeir.jpg') }}" alt="наушники" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">Sony WH-1000XM5</h3>
                    <p class="text-gray-600 mb-3 text-sm">Bluetooth, шумоподавление, 30ч работы</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">32 000 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

            <!-- Кофемашина -->
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow product-card min-w-[300px]">
                <div class="w-full h-[400px] bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/kofemashina.jpg') }}" alt="кофемашина" class="product-image">
                </div>
                <div class="flex-grow">
                    <h3 class="text-lg font-semibold mb-2">DeLonghi Magnifica</h3>
                    <p class="text-gray-600 mb-3 text-sm">Автоматическая, капучинатор, помол</p>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-xl font-bold">45 000 ₽</span>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">
                        В корзину
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
.product-image {
    width: 300px;
    height: 400px;
    object-fit: contain;
    max-width: 100%;
    max-height: 100%;
}

.product-card {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.hide-scrollbar {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}

.hide-scrollbar::-webkit-scrollbar {
    display: none;  /* Chrome, Safari and Opera */
}

/* Плавная прокрутка */
.flex.overflow-x-auto {
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
}

.min-w-max {
    min-width: max-content;
}

/* Адаптивность для мобильных */
@media (max-width: 640px) {
    .product-image {
        width: 250px;
        height: 333px;
    }
    
    .min-w-\[300px\] {
        min-width: 280px;
    }
}

/* Стили для скролла при наведении */
.flex.overflow-x-auto:hover {
    scrollbar-width: thin;
    scrollbar-color: #cbd5e0 #f1f1f1;
}

.flex.overflow-x-auto:hover::-webkit-scrollbar {
    display: block;
    height: 6px;
}

.flex.overflow-x-auto:hover::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 3px;
}

.flex.overflow-x-auto:hover::-webkit-scrollbar-thumb {
    background: #cbd5e0;
    border-radius: 3px;
}

.flex.overflow-x-auto:hover::-webkit-scrollbar-thumb:hover {
    background: #a0aec0;
}
</style>
@endsection