<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
  </style>
</head>

<body>
  <nav class="bg-blue-950 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div class="text-white font-semibold text-xl">
        <a href="#">Metamorphosis</a>
      </div>

      <div class="flex space-x-4">
        <a href="#" class="text-white hover:text-gray-300">Login</a>
        <a href="#" class="text-white hover:text-gray-300">Register</a>
      </div>
    </div>
  </nav>
  <center> <h1 class="text-gray-700 font-bold text-4xl mt-10">Metamorphosis</h1></center>
  <div class="flex min-h-screen flex-col items-center justify-center">
    <div class="bg-white shadow-md rounded px-7 pt-0 pb-12 mb-0 flex flex-col w-full max-w-md">
      <div class="mb-4">
        <h1 class="text-gray-700 font-bold text-2xl">Masuk</h1>
      </div>
      <form action="#">
        <div class="mb-4">
          <label for="email" class="text-gray-700 font-bold">Email</label>
          <input type="email" id="email" name="email"
            class="border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
          <label for="password" class="text-gray-700 font-bold">Password</label>
          <input type="password" id="password" name="password"
            class="border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
          <button type="submit"
            class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Masuk</button>
          <P>Belum punya akun? <a href="" class="font-bold">Daftar</a></P>
        </div>
      </form>
    </div>
  </div>
</body>

</html>