<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Gambar</title>
   <script href="https://cdn.tailwindcss.com/3.4.1/tailwind.min.css"></script>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="flex justify-between">
        <div>
            <h1 class="text-3xl font-bold mb-6">Gambar</h1>
            <img src="{{ asset('images/yukino.png') }}" alt="Karakter dari anime oregairu" class="mb-4"><br>
            <img src="{{ asset('images/fontaine.png') }}" alt="Salah satu wilayah di game Genshin Impact">
        </div>
    </div>
</body>
</html>
