<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Add Film</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main>
        <section class="min-h-screen bg-stone-50 py-16 px-6">
            <div class="max-w-7xl mx-auto">

                <div class="flex items-center justify-between mb-12">
                    <h1 class="text-4xl font-light tracking-widest text-stone-800 uppercase">Add Disk</h1>
                    <a href="./index.php"
                       class="text-sm tracking-widest uppercase text-stone-400 hover:text-stone-800 transition-colors duration-300">
                        ← Back
                    </a>
                </div>

                <form action="./script.php"
                      method="POST"
                      class="max-w-lg flex flex-col gap-6">

                    <div class="flex flex-col gap-1">
                        <label for="title"
                               class="text-xs tracking-widest uppercase text-stone-400">Title*</label>
                        <input type="text"
                               id="title"
                               name="title"
                               required
                               class="border-b border-stone-300 bg-transparent py-2 text-stone-800 outline-none focus:border-stone-800 transition-colors duration-300">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="artist"
                               class="text-xs tracking-widest uppercase text-stone-400">Artist*</label>
                        <input type="text"
                               id="artist"
                               name="artist"
                               required
                               class="border-b border-stone-300 bg-transparent py-2 text-stone-800 outline-none focus:border-stone-800 transition-colors duration-300">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="year"
                               class="text-xs tracking-widest uppercase text-stone-400">Year</label>
                        <input type="number"
                               id="year"
                               name="year"
                               class="border-b border-stone-300 bg-transparent py-2 text-stone-800 outline-none focus:border-stone-800 transition-colors duration-300">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="cover-url"
                               class="text-xs tracking-widest uppercase text-stone-400">Cover (url)</label>
                        <input type="text"
                               id="cover-url"
                               name="cover-url"
                               class="border-b border-stone-300 bg-transparent py-2 text-stone-800 outline-none focus:border-stone-800 transition-colors duration-300">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="genre"
                               class="text-xs tracking-widest uppercase text-stone-400">Genre</label>
                        <input type="text"
                               id="genre"
                               name="genre"
                               class="border-b border-stone-300 bg-transparent py-2 text-stone-800 outline-none focus:border-stone-800 transition-colors duration-300">
                    </div>

                    <button type="submit"
                            class="mt-4 self-start text-sm tracking-widest uppercase text-stone-50 bg-stone-800 px-8 py-3 hover:bg-stone-600 transition-colors duration-300 hover:cursor-pointer">
                        Add Disk
                    </button>

                </form>
            </div>
        </section>
    </main>
</body>

</html>