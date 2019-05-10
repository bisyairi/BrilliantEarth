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

        ProductAttribute::create([
            'product_id' => '2',
            'sku' => 'SKU-LoveknotRose-11',
            'size' => '11',
            'gemstone' => '',
            'colour' => '',
            'price' => '24900',
        ]);

        ProductAttribute::create([
            'product_id' => '2',
            'sku' => 'SKU-LoveknotRose-13',
            'size' => '13',
            'gemstone' => '',
            'colour' => '',
            'price' => '24900',
        ]);

        ProductAttribute::create([
            'product_id' => '2',
            'sku' => 'SKU-LoveknotRose-15',
            'size' => '15',
            'gemstone' => '',
            'colour' => '',
            'price' => '24900',
        ]);

        ProductAttribute::create([
            'product_id' => '2',
            'sku' => 'SKU-LoveknotRose-17',
            'size' => '17',
            'gemstone' => '',
            'colour' => '',
            'price' => '24900',
        ]);

        ProductAttribute::create([
            'product_id' => '3',
            'sku' => 'SKU-HeartSpark',
            'size' => '15',
            'gemstone' => '',
            'colour' => 'Rose Gold',
            'price' => '12200',
        ]);

        ProductAttribute::create([
            'product_id' => '4',
            'sku' => 'SKU-BeadsofWisdom-8',
            'size' => '8',
            'gemstone' => '',
            'colour' => 'Tsavorite Garnet',
            'price' => '9900',
        ]);

        ProductAttribute::create([
            'product_id' => '4',
            'sku' => 'SKU-BeadsofWisdom-10-Amethyst',
            'size' => '10',
            'gemstone' => '',
            'colour' => 'Amethyst',
            'price' => '9900',
        ]);

        ProductAttribute::create([
            'product_id' => '4',
            'sku' => 'SKU-BeadsofWisdom-10-TG',
            'size' => '10',
            'gemstone' => '',
            'colour' => 'Tsavorite Garnet',
            'price' => '9900',
        ]);
        ProductAttribute::create([
            'product_id' => '4',
            'sku' => 'SKU-BeadsofWisdom-8-YS',
            'size' => '10',
            'gemstone' => '',
            'colour' => 'Yellow Sapphire',
            'price' => '9900',
        ]);

        ProductAttribute::create([
            'product_id' => '4',
            'sku' => 'SKU-BeadsofWisdom-12-TG',
            'size' => '12',
            'gemstone' => '',
            'colour' => 'Tsavorite Garnet',
            'price' => '9900',
        ]);

        ProductAttribute::create([
            'product_id' => '4',
            'sku' => 'SKU-BeadsofWisdom-12-YS',
            'size' => '12',
            'gemstone' => '',
            'colour' => 'Yellow Sapphire',
            'price' => '9900',
        ]);
        
        ProductAttribute::create([
            'product_id' => '5',
            'sku' => 'SKU-FYBTopaz-10.5',
            'size' => '10.5',
            'gemstone' => '',
            'colour' => '',
            'price' => '18800',
        ]);

        ProductAttribute::create([
            'product_id' => '5',
            'sku' => 'SKU-FYBTopaz-13',
            'size' => '13',
            'gemstone' => '',
            'colour' => '',
            'price' => '18800',
        ]);

        ProductAttribute::create([
            'product_id' => '5',
            'sku' => 'SKU-FYBTopaz-14',
            'size' => '14',
            'gemstone' => '',
            'colour' => '',
            'price' => '18800',
        ]);

        ProductAttribute::create([
            'product_id' => '5',
            'sku' => 'SKU-FYBTopaz-16.5',
            'size' => '16.5',
            'gemstone' => '',
            'colour' => '',
            'price' => '18800',
        ]);

        ProductAttribute::create([
            'product_id' => '5',
            'sku' => 'SKU-FYBTopaz-19',
            'size' => '10.5',
            'gemstone' => '',
            'colour' => '',
            'price' => '18800',
        ]);
    }
}
