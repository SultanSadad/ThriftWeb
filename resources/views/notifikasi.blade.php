<!DOCTYPE html>
<html>
<head>
    <title>Data Notifikasi</title>
    <link href="https://cdn.tailwindcss.com/3.4.1/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/style104.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative bg-white shadow-lg sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pesan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($data as $notifikasi)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $notifikasi['id'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $notifikasi['pesan'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
