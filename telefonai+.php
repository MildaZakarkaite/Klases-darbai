<!--PHP - Sukurti masyva kuriame bus telefonu firmos o jose aprasyta: Pavadinimas telefono, kaina,
nuotrauka. (bent 6vnt telefonu).
HTML/CSS - sukurti centre 3x2 telefono korteles ir atvaizduoti informacija forich’o
pagalba  -->

<?php
$phones = [
    'iPhones' => [
        [
        'name' => 'iPhone SE',
        'price' => 600,
        'img' => 'https://www.topocentras.lt/media/catalog/product/cache/2/thumbnail/400x400/85e4522595efc69f496374d01ef2bf13/p/i/pilkaspriekis_196751_1516262940.jpg',
        ], 
        [
        'name' => 'iPhone X',
        'price' => 1200,
        'img' => 'https://www.topocentras.lt/media/catalog/product/cache/2/thumbnail/400x400/85e4522595efc69f496374d01ef2bf13/i/p/iphone7_rozine_171031_1484982540_2.jpg',
        ], 
        [
        'name' => 'iPhone 7s',
        'price' => 700,
        'img' => 'https://www.topocentras.lt/media/catalog/product/cache/2/thumbnail/400x400/85e4522595efc69f496374d01ef2bf13/r/o/rose_221671_1548417757.jpg',
        ],       
        ],
        'Samsung' => [
        [
        'name' => 'Samsung Galaxy',
        'price' => 850,
        'img' => 'https://www.topocentras.lt/media/catalog/product/cache/2/thumbnail/400x400/85e4522595efc69f496374d01ef2bf13/b/l/black_196795_1516273748.jpg',
        ], 
        [
        'name' => 'Samsung Galaxy S',
        'price' => 1200,
        'img' => 'https://www.ideal.lt/media/catalog/product/cache/1/image/800x/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone6splus-spgry-pureangles_ww-en-screen.png',
        ],   
        [
        'name' => 'Samsung Galaxy X',
        'price' => 1200,
        'img' => 'https://www.ideal.lt/media/catalog/product/cache/1/image/800x/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone6s-pure-angles-gld_ww-en-screen.png',
        ],    
        ],

    ];
//   var_dump($phone);
  ?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <style>
        body {
            height: 90vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #gallery {
            width: 90vw;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .card {
            width: 25vw;
            background-color: red;
            border-radius: 35px;
            padding: 10px;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        img {
            max-width: 30%;
            max-height: 30%;
            border-radius: 35%;
        }
    </style>
</head>

<body>
    <section id="gallery">
    <?php foreach ($phones as $brand): ?>
    <?php foreach ($brand as $phone): ?>
        <div class="card">
            <img src="<?php print $phone['img'];?>">
            <h3><?php print $phone['name']; ?></h3>
            <h4><?php print $phone['price'] . 'Eur'; ?></h4>
        </div>
    <?php endforeach; ?>
    <?php endforeach; ?>
    </section>
</body>
</html>