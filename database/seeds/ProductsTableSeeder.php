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
            'new_trend' => '0',
            'status' => 'sale',
            'status_desc' => 'Sale',
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
            'status' => 'new',
            'status_desc' => 'New',
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
            'new_trend' => '0',
            'status' => 'offer',
            'status_desc' => '-20%',
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
            'status' => 'new',
            'status_desc' => 'Hot',
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
            'new_trend' => '0',
            'status' => '',
            'status_desc' => '',
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
            'status' => '',
            'status_desc' => '',
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
            'status' => '',
            'status_desc' => '',
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
            'status' => '',
            'status_desc' => '',
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
            'status' => '',
            'status_desc' => '',
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
            'status' => '',
            'status_desc' => '',
        ]);

        Product::create([
            'name' => 'Sapphire Rose Earrings',
            'slug' => 'sapphire-rose-earrings',
            'details'=> 'in stock',
            'price' => '249',
            'description' => '<p>SAPPHIRE ROSE earrings with Pink Sapphire in the heart of the flower and Emerald leaves symbolise gratitude, grace, admiration, and joy.</p>
            <p>Ladylike floral designs inspired by delicate flowers from the secret garden because every girl is like a flower - a soul blossoming in nature.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium and Rose Gold</li>
                <li>Featuring a pair of natural, faceted Pink Sappire and a pair of Emerald</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'quantity' => '18',
            'featured' => '1',
            'image' => 'Diamond-Rose-Earrings_2_1349x.png',
            'new_trend' => '0',
            'status' => '',
            'status_desc' => '',
        ]);
        
        Product::create([
            'name' => 'Diamond Sakura Earrings',
            'slug' => 'diamond-sakura-earrings',
            'details'=> 'in stock',
            'price' => '279',
            'description' => '<p>DIAMOND SAKURA earrings set with single Diamonds represents the fragility and the beauty of life.</p><br><p>Ladylike floral designs inspired by delicate flowers from the secret garden because every girl is like a flower - a soul blossoming in nature.</p>
            <p>Sold in limited pieces.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium and Rose Gold</li>
                <li>Featuring a pair of natural, faceted Diamonds </li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
            </ul>',
            'quantity' => '5',
            'featured' => '1',
            'image' => 'Diamond-Sakura-Earrings-3_1349x.png',
            'new_trend' => '1',
            'status' => '',
            'status_desc' => '',
        ]);

        Product::create([
            'name' => 'Topaz Love Earrings',
            'slug' => 'topaz-love-earrings',
            'details'=> 'in stock',
            'price' => '299',
            'description' => '<p>Petite Paradise is a collection with classic pieces designed for the ambitious, passionately fearless woman.</p><p>Twinkling Blue Topaz in the shade of a London Blue is a darker cobalt shade. Its electric blue colour makes it attractive and easy to match with everyday outfits.  So make love, not war, the Blue Topaz represents creativity to conquer everyday challenges.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium</li>
                <li>Featuring natural Blue Topaz</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
            </ul>',
            'quantity' => '11',
            'featured' => '1',
            'image' => 'Topaz-Love-Earrings_1349x.png',
            'new_trend' => '0',
            'status' => '',
            'status_desc' => '',
        ]);

        Product::create([
            'name' => 'Garnet Love Earrings',
            'slug' => 'garnet-love-earrings',
            'details'=> 'in stock',
            'price' => '239',
            'description' => '<p>Petite Paradise is a collection with classic pieces designed for the ambitious, passionately fearless woman.</p>
            <p>They say the prettiest people are the ones who are in love. The Red Garnet represents positivity and surrounded by a star-like twinkle of sparkling stones, this piece will attract all the love you need.</p><br>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium</li>
                <li>Featuring natural Garnet</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
            </ul>',
            'quantity' => '14',
            'featured' => '1',
            'image' => 'Garnet-Love-Earrings_68b48174-6c20-42f2-abcf-8aab4ac5c40e_1349x.png',
            'new_trend' => '0',
            'status' => '',
            'status_desc' => '',
        ]);

        Product::create([
            'name' => 'Origami Princess Earrings',
            'slug' => 'origami-princess-earrings',
            'details'=> 'in stock',
            'price' => '169',
            'description' => '<p>Inspired by the Japanese papercraft, this collection plays with angles, transforming origami inspirations into wearable, chic pieces of art.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'quantity' => '20',
            'featured' => '1',
            'image' => 'PE00037-RZ0_1349x.jpg',
            'new_trend' => '0',
            'status' => '',
            'status_desc' => '',
        ]);

        Product::create([
            'name' => 'Diamond Angel Pendant',
            'slug' => 'diamond-angel-pendant',
            'details'=> 'in stock',
            'price' => '199',
            'description' => '<p>A happy, chubby creature in a rose gold dress, she holds a shining natural Diamond in her hands, wishing you a safe and loving holiday season.</p>
            <p>It is also a wonderful present for someone you care enough about them to want an angel to watch over and guarding them forever.</p>
            <p>Diamond Angel Pendant is a dual-function piece – it may be worn as a pendant on a necklace or as a charm on a bracelet or bangle.</p>
            <ul>
                <li>Material: 925 Sterling Silver, featuring 1 faceted colourless Diamond</li>
                <li>Plating: Rhodium and Rose Gold</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
                <li>No chain included</li>
            </ul>',
            'quantity' => '15',
            'featured' => '1',
            'image' => 'Diamond_Angel_1349x.png',
            'new_trend' => '0',
            'status' => '',
            'status_desc' => '',
        ]);

        Product::create([
            'name' => 'Mesh Chain 45cm',
            'slug' => 'mesh-chain-45cm',
            'details'=> 'in stock',
            'price' => '103',
            'description' => '<p>Get this chain to match with any of your favourite pendants.</p>
            <ul>
                <li>Material: 925 Sterling Silver</li>
                <li>Plating: Rhodium</li>
                <li>Tarnish-resistant</li>
                <li>Safe to wear for sensitive skin</li>
                <li>Suitable for daily wear</li>
                <li>100% quality assurance and satisfaction guaranteed!</li>
            </ul>',
            'quantity' => '12',
            'featured' => '1',
            'image' => 'PA00022-RZ0_1349x.jpg',
            'new_trend' => '1',
            'status' => '',
            'status_desc' => '',
        ]);

        /* Product::create([
            'name' => '',
            'slug' => '',
            'details'=> '<p></p><br><p></p><br><p></p><br>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>',
            'price' => '',
            'description' => '',
            'quantity' => '',
            'featured' => '',
            'image' => '',
            'new_trend' => '1',
            'status' => '',
            'status_desc' => '',
        ]); */
    }
}
