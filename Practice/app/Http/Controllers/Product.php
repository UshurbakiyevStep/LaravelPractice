<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
        protected array $categories;

        public function __construct()
        {
            $this->categories =  [
                1 => [
                    'name' => 'Категория 1',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '300',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '400',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '500',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                    ],
                ],
                2 => [
                    'name' => 'Категория 2',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '700',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '800',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '900',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                        4 => [
                            'name'    => 'Продукт 4',
                            'cost'    => '900',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 3'
                        ]
                    ],
                ],
            ];
        }

        public function showProduct($catId,$prodId) {
            return view('components/getproduct',
                ['product'=>$this->categories[$catId],'catId'=>$catId,'prodId'=>$prodId]);
        }
        public function showCategory($catId){
            return view('components/getcategory',['category'=>$this->categories[$catId],'catId'=>$catId]);
        }
        public function showCategoryList(){
            return view('components/get-categories',['categories'=>$this->categories]);
        }
}
