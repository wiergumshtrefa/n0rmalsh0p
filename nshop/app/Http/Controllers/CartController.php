<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart', compact('cartItems', 'total'));
    }

    public function add($productId)
    {
        $products = $this->getProducts();
        
        if (!isset($products[$productId])) {
            return redirect()->route('catalog')->with('error', 'Товар не найден');
        }

        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'id' => $productId,
                'name' => $products[$productId]['name'],
                'price' => $products[$productId]['price'],
                'image' => $products[$productId]['image'],
                'description' => $products[$productId]['description'],
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Товар добавлен в корзину!');
    }

    public function remove($productId)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Товар удален из корзины');
    }

    public function update(Request $request, $productId)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            $quantity = max(1, (int)$request->input('quantity', 1));
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Корзина очищена');
    }

    private function getProducts()
    {
        return [
            1 => [
                'name' => 'Стиральная машина LG',
                'price' => 35000,
                'image' => 'lg.jpg',
                'description' => 'Загрузка 7 кг, 1200 об/мин, inverter motor'
            ],
            2 => [
                'name' => 'Посудомоечная Bosch',
                'price' => 42000,
                'image' => 'bosch.jpg',
                'description' => 'Встраиваемая, 12 комплектов, сушка'
            ],
            3 => [
                'name' => 'Пылесос Samsung',
                'price' => 8900,
                'image' => 'samsung.jpg',
                'description' => 'Мощность 2000 Вт, мешок 4л, HEPA фильтр'
            ],
            4 => [
                'name' => 'Roborock S7',
                'price' => 29900,
                'image' => 'roborock.png',
                'description' => 'Навигация LIDAR, мойка полов, app control'
            ],
            5 => [
                'name' => 'Холодильник Haier',
                'price' => 55000,
                'image' => 'haier.jpg',
                'description' => 'No Frost, 350л, inverter, зона свежести'
            ],
            6 => [
                'name' => 'Микроволновка Panasonic',
                'price' => 12500,
                'image' => 'panasonic.jpg',
                'description' => '25л, гриль, инверторный нагрев'
            ],
            7 => [
                'name' => 'Телевизор Sony 55"',
                'price' => 89000,
                'image' => 'sony.png',
                'description' => '4K OLED, Smart TV, Android TV'
            ],
            8 => [
                'name' => 'iPad Air 10.9"',
                'price' => 54900,
                'image' => 'ipad.jpg',
                'description' => 'M1 chip, 64GB, Retina display'
            ],
            9 => [
                'name' => 'MacBook Air M2',
                'price' => 119000,
                'image' => 'mac.jpg',
                'description' => '13.6", 8GB, 256GB SSD, Space gold'
            ],
            10 => [
                'name' => 'iPhone 15 Pro',
                'price' => 99900,
                'image' => 'iphone.jpg',
                'description' => '6.1", 128GB, титановый корпус'
            ],
            11 => [
                'name' => 'Sony WH-1000XM5',
                'price' => 32000,
                'image' => 'sonyeir.jpg',
                'description' => 'Bluetooth, шумоподавление, 30ч работы'
            ],
            12 => [
                'name' => 'DeLonghi Magnifica',
                'price' => 45000,
                'image' => 'kofemashina.jpg',
                'description' => 'Автоматическая, капучинатор, помол'
            ]
        ];
    }
}