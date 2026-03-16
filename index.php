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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main>
        <section class="min-h-screen bg-stone-50 py-16 px-6">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-light tracking-widest text-stone-800 uppercase mb-12">Disks</h1>

                <!-- CARDS GRID -->
                <div class="grid group grid-cols-1 gr sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                    <?php
                    foreach ($disks_array as $disk) {
                        $image = strlen($disk['cover_url']) > 0 ? $disk['cover_url'] : 'https://placehold.co/400?text=No+Cover';

                        echo "
                            <div class='border border-stone-200 rounded-sm'>
                                <div class='overflow-hidden rounded-t-sm mb-3'>
                                    <img src='$image'
                                        alt='{$disk['title']}'
                                        class='w-full aspect-square object-cover'>
                                </div>
                                <div class='px-3 pb-2 rounded-sm'>
                                    <h3 class='text-sm font-semibold text-stone-800 truncate'>{$disk['title']}</h3>
                                    <p class='text-sm text-stone-400 truncate mb-2'>{$disk['artist']}</p>
                                    <div class='flex items-center gap-2'>
                                        <span class='text-xs text-stone-400'>{$disk['year']}</span>
                                        <span class='text-stone-300'>·</span>
                                        <span class='text-xs text-stone-400 truncate'>{$disk['genre']}</span>
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