<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'SERPENTINE RING',
            'slug' => 'serpentine-ring',
            'details' => 'in stock',
            'price' => '197',
            'description' => '<p>Ring for your beautiful soul.</p>
            <p>With the design of faceted gemstones, easily create an elegant look for your day.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium or Rose Gold</li>
                <li>Featuring natural, faceted Amethyst, Citrine, Blue Topaz or Peridot</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'GR00035-PA6_1583x.jpg',
        ]);

        Product::create([
            'name' => 'LOVE KNOT ROSE RING PENDANT',
            'slug' => 'loveknot-rose-ring-pendant',
            'details' => 'in stock',
            'price' => '249',
            'description' => '<p>LOVE ME KNOT collection - Let her know your love for her never ends, she is your sunshine as she brightens up your life everday.</p>
            <p>This latest collection is a two piece – both a ring and a pendant in one, featuring natural diamond which represents determination and forever. It can be worn in two ways, as a pendant on a chain or flip the piece around, as a ring.</p>
            <p>This Diamond collection is designed to look effortlessly shiny and stylish on her.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium and Rose Gold</li>
                <li>Featuring a natural Diamond in the center which mined from Botswana and Australia. </li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
                <li>Chain not included</li>
            </ul>',
            'featured' => '1',
            'image' => 'DR000_1583x.png',
            'new_trend' => '1',
        ]);

        Product::create([
            'name' => 'HEART SPARKS RING',
            'slug' => 'heart-sparks-ring',
            'details' => 'in stock',
            'price' => '122',
            'description' => '<p>Heart Sparks Ring features a shimmering Heart Shape Cubic Zirconia stone as the center piece.</p>
            <p>A modern and elegant design that enhances the beauty of your look.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium or Rose Gold</li>
                <li>Embellished with Cubic Zirconia stones</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed! </li>
            </ul>',
            'featured' => '1',
            'image' => 'SR00044-RZ_silver_front_1583x.jpg',
        ]);

        Product::create([
            'name' => 'BEADS OF WISDOM RING',
            'slug' => 'beads-of-wisdom-ring',
            'details' => 'in stock',
            'price' => '99',
            'description' => '<p>Be a lady of wisdom.</p>
            <p>A design that is both feminine and sophisticated, this unique ring is the perfect complement for parties with bubbly drinks, and lace-edged outfits.</p>
            <ul>
                <li>made of sterling silver, plated with rose gold or rhodium or yellow gold</li>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium, Rose Gold or Yellow Gold</li>
                <li>Featuring natural gemstones: Yellow Sapphire, Blue Topaz, Tsavorite Garnet, Amethyst, or Garnet</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'GR00005-PA6_1583x.jpg',
            'new_trend' => '1',
        ]);

        Product::create([
            'name' => 'FYB TOPAZ RING',
            'slug' => 'fyb-topaz-ring',
            'details' => 'in stock',
            'price' => '188',
            'description' => '<p>Follow after what fuels you to be a better, happier person.</p>
            <p>It will only lead you to discover doors that open to infinite possibilities.</p>
            <p>This Blue Topaz ring represents Honesty and Communication.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium</li>
                <li>Featuring natural, faceted Blue Topazes and White Topazes</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'FYB-Topaz-Ring-2_1583x.jpg',
        ]);

        Product::create([
            'name' => 'KHREE RING',
            'slug' => 'darling-enlight-diamond-ring',
            'details' => 'in stock',
            'price' => '159',
            'description' => '<p>Ring for your beautiful soul.</p>
            <p>With the design of faceted heart shape gemstones, easily create an elegant look for your day.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium or Rose Gold</li>
                <li>Featuring natural, faceted Amethyst, Citrine, Blue Topaz or Peridot</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'GR00034-RP4_1583x.jpg',
            'new_trend' => '1',
        ]);

        Product::create([
            'name' => 'CLAW-PINCHED RING',
            'slug' => 'claw-pinched-ring',
            'details' => 'in stock',
            'price' => '244',
            'description' => '<p>This modern interpretation of a tension-set ring is enforced with two thick, solid claws gripping a natural gemstone.</p>
            <p>This ring favours bold and lively young women. Rock this look with sharp slacks or a sleek LBD, and don’t forget your smart stilettos.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium or Rose Gold</li>
                <li>Choose between these natural gems: Amethyst, Red Garnet, Blue Topaz or Citrine</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'GR00002-PA6_1583x.jpg',
        ]);

        Product::create([
            'name' => 'VISION RING',
            'slug' => 'vision-ring',
            'details' => 'in stock',
            'price' => '149',
            'description' => '<p>Vision ring features shimmering Cubic Zirconia stones. A symbol of eternity.</p>
            <p>Simple yet elegant. A modern design that enhances the beauty of your look.</p>
            <p>You can wear the ring with any position you like, with the arrow up or down.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium </li>
                <li>Embellished with Cubic Zirconia stones</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'SR00045-RZ5_1583x.png',
            'new_trend' => '1',
        ]);

        Product::create([
            'name' => 'MINI CABOCHON SOLITAIRE RING',
            'slug' => 'mini-cabochon-solitaire-ring',
            'details' => 'in stock',
            'price' => '99',
            'description' => '<p>Less can do more, as observed in the trends of miniskirts and macarons.</p>
            <p>This ring is a tease—a dainty but bright natural gemstone, cute as a button, in a classic four-claw setting.</p>
            <p>An effortless nip of fun that you can bring to any outfit. Stack them together to create a miniature candy land.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium, Rose Gold or Yellow Gold</li>
                <li>Featuring a cabochon-cut natural gemstone: Amethyst, Pink Tourmaline, Blue Topaz, Garnet, or Citrine</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'GR00006-RB5_1583x.jpg',
        ]);

        Product::create([
            'name' => 'FYB SAPPHIRE RING',
            'slug' => 'fyb-sapphire-ring',
            'details' => 'in stock',
            'price' => '197',
            'description' => '<p>Follow after what fuels you to be a better, happier person.</p>
            <p>It will only lead you to discover doors that open to infinite possibilities.</p>
            <p>This Sapphire ring represents Peace and Joy.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium</li>
                <li>Featuring natural, faceted Blue Sapphires and White Topazes</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'featured' => '1',
            'image' => 'FYB-Sapphire-Ring-2_1583x.jpg',
            'new_trend' => '1',

        ]);
    }
}
