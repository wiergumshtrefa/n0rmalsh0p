@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Корзина покупок</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            {{ session('error') }}
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
        @if(empty($cartItems))
            <div class="p-8 text-center">
                <div class="text-gray-400 mb-4" style="font-size: 4rem;">🛒</div>
                <p class="text-gray-600 dark:text-gray-400 text-lg mb-4">Ваша корзина пуста</p>
                <a href="{{ route('catalog') }}" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                    Перейти в каталог
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Товар</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Цена</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Количество</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Итого</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Действия</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($cartItems as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-16 w-16 flex-shrink-0 bg-gray-100 rounded overflow-hidden">
                                        <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="h-full w-full object-contain">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $item['name'] }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $item['description'] }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                {{ number_format($item['price'], 0, ',', ' ') }} ₽
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="flex items-center" id="form-{{ $item['id'] }}">
                                    @csrf
                                    <button type="button" onclick="decreaseQuantity({{ $item['id'] }})" class="bg-gray-200 dark:bg-gray-700 rounded-l px-2 py-1">-</button>
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" id="quantity-{{ $item['id'] }}" 
                                           class="w-12 text-center border-y dark:bg-gray-800 dark:border-gray-700" min="1">
                                    <button type="button" onclick="increaseQuantity({{ $item['id'] }})" class="bg-gray-200 dark:bg-gray-700 rounded-r px-2 py-1">+</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                {{ number_format($item['price'] * $item['quantity'], 0, ',', ' ') }} ₽
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="text-red-600 hover:text-red-900">Удалить</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700">
                <div class="flex justify-between items-center">
                    <div class="text-lg font-semibold text-gray-900 dark:text-white">
                        Итого: {{ number_format($total, 0, ',', ' ') }} ₽
                    </div>
                    <div class="flex space-x-4">
                        <form action="{{ route('cart.clear') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                Очистить корзину
                            </button>
                        </form>
                        <button class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">
                            Оформить заказ
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<script>
function increaseQuantity(productId) {
    const input = document.getElementById('quantity-' + productId);
    input.value = parseInt(input.value) + 1;
    updateQuantity(productId);
}

function decreaseQuantity(productId) {
    const input = document.getElementById('quantity-' + productId);
    if (parseInt(input.value) > 1) {
        input.value = parseInt(input.value) - 1;
        updateQuantity(productId);
    }
}

function updateQuantity(productId) {
    const form = document.getElementById('form-' + productId);
    const formData = new FormData(form);
    const quantity = document.getElementById('quantity-' + productId).value;
    
    // Правильный URL для обновления
    const url = "{{ url('cart/update') }}/" + productId;
    
    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'X-Requested-With': 'XMLHttpRequest'
        }
    }).then(response => {
        if (response.redirected) {
            window.location.href = response.url;
        } else if (response.ok) {
            // Перезагружаем страницу для обновления итогов
            window.location.reload();
        }
    }).catch(error => {
        console.error('Error:', error);
    });
}
</script>
@endsection