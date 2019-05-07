<?php

use App\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRCitrine-9',
            'size' => '9',
            'gemstone' => 'Citrine',
            'colour' => '',
            'price' => '19700',
        ]);
        
        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRCitrine-11',
            'size' => '11',
            'gemstone' => 'Citrine',
            'colour' => '',
            'price' => '19700',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRCitrine-13',
            'size' => '13',
            'gemstone' => 'Citrine',
            'colour' => '',
            'price' => '19700',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRPeridot-9',
            'size' => '9',
            'gemstone' => 'Peridot',
            'colour' => '',
            'price' => '16900',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRPeridot-11',
            'size' => '11',
            'gemstone' => 'Peridot',
            'colour' => '',
            'price' => '16900',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRPeridot-13',
            'size' => '13',
            'gemstone' => 'Peridot',
            'colour' => '',
            'price' => '16900',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRBlueTopaz-9',
            'size' => '9',
            'gemstone' => 'BlueTopaz',
            'colour' => '',
            'price' => '15900',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRBlueTopaz-11',
            'size' => '11',
            'gemstone' => 'BlueTopaz',
            'colour' => '',
            'price' => '15900',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRAmethyst-9',
            'size' => '9',
            'gemstone' => 'Amethyst',
            'colour' => '',
            'price' => '17800',
        ]);

        ProductAttribute::create([
            'product_id' => '1',
            'sku' => 'SKU-SRAmethyst-11',
            'size' => '11',
            'gemstone' => 'Amethyst',
            'colour' => '',
            'price' => '17800',
        ]);
    }
}
