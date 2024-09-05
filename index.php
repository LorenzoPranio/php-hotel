<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>PHP Hotel</title>
</head>
<body class="bg-darkbrown">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="my-4 fw-bolder goldtext">Hotels</h1>
            </div>
            <table class="table table-striped table-hover">
                <thead class="bg-brown">
                    <tr>
                        <th scope="col"><h6 class="goldtext fw-bolder m-0">Nome</h6></th>
                        <th scope="col"><h6 class="goldtext fw-bolder m-0">Descrizione</h6></th>
                        <th scope="col"><h6 class="goldtext fw-bolder m-0">Parcheggio</h6></th>
                        <th scope="col"><h6 class="goldtext fw-bolder m-0">Voto</h6></th>
                        <th scope="col"><h6 class="goldtext fw-bolder m-0">Distanza dal Centro</h6></th>
                    </tr>
                </thead>
                <tbody class="bg-lightbrown">
                    <?php foreach ($hotels as $hotel){ ?>
                        <tr>
                            <td><?php echo $hotel['name'] ?></td>
                            <td><?php echo $hotel['description'] ?></td>
                            <td><?php echo $hotel['parking'] ? 'Sì' : 'No' ?></td>
                            <td><?php echo $hotel['vote'].'/5'.'<i class="fa-solid fa-star"></i>' ?></td>
                            <td><?php echo $hotel['distance_to_center'].'km' ?></td>    
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>