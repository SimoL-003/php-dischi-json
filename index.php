<?php
require_once './script.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Disks List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>

<body>
    <main>
        <section class="py-5 bg-dark text-white">
            <div class="container">
                <h1 class="mb-4 fw-bold">Disks</h1>
                <!-- CARDS GRID -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    <?php
                    foreach ($disks_array as $disk) {
                        // Card
                        echo "
                            <div class='col'>
                                <div class='card h-100 bg-secondary border-0 shadow'>
                                    <img src='{$disk['cover_url']}'
                                        class='card-img-top object-fit-cover'
                                        style='height: 220px;'
                                        alt='{$disk['title']}'>
                                    <div class='card-body'>
                                        <h5 class='card-title fw-bold mb-1'>{$disk['title']}</h5>
                                        <p class='card-text text-white-50 mb-2'>{$disk['artist']}</p>
                                        <div class='d-flex gap-2'>
                                            <span class='badge bg-dark'>{$disk['year']}</span>
                                            <span class='badge bg-primary'>{$disk['genre']}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </section>

    </main>
</body>

</html>