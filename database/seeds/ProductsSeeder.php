<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->productName ='Rau Cải';
        $product->productPrice = 10000;
        $product->image = 'http://nongnghiepmoi.net/wp-content/uploads/2018/06/rau-cai-chip-854x540.jpg';
        $product->save();
        $product = new \App\Product();
        $product->productName ='Mướp đắng';
        $product->productPrice = 6000;
        $product->image = 'https://thegioidiengiai.com/images/media/Tin%20trong%20nganh/atintrongnganh/kh%E1%BB%95%20qua_1.png?1531108890419';
        $product->save();
        $product = new \App\Product();
        $product->productName ='Bắp cải';
        $product->productPrice = 7000000;
        $product->image = 'https://i2.wp.com/congthucmonngon.com/wp-content/uploads/2018/04/mua-thu-nen-chon-an-nhung-loai-rau-cu-qua-nhu-the-nay-se-an-toan.jpg?ssl=1';
        $product->save();
        $product = new \App\Product();
        $product->productName ='Bắp cai';
        $product->productPrice = 8000;
        $product->image = 'http://thuocthang.com.vn/vnt_upload/File/Image/den.jpg';
        $product->save();
        $product = new \App\Product();
        $product->productName ='Súp lo';
        $product->productPrice = 9000000;
        $product->image = 'https://media.ex-cdn.com/EXP/media.cpcs.vn/files/content/2019/05/22/suplotim-0646.jpg';
        $product->save();
        $product = new \App\Product();
        $product->productName ='Ngai Cuu';
        $product->productPrice = 10000;
        $product->image = 'https://image.vtcns.com/files/f2/2014/09/25/nhung-loai-rau-cu-tot-cho-suc-khoe-nen-an-vao-mua-thu-4.jpg';
        $product->save();
        $product = new \App\Product();
        $product->productName ='Rau Ngot';
        $product->productPrice = 11000;
        $product->image = 'https://thuycanh.net.vn/wp-content/uploads/2018/11/rau-ngot-nen-an-vao-mua-he-min-1.jpg';
        $product->save();
        $product = new \App\Product();
        $product->productName ='Rau Diep';
        $product->productPrice = 12000;
        $product->image = 'https://blog.wikilady.vn/wp-content/uploads/2019/06/rau-xa-lach.jpg';
        $product->save();
    }
}
