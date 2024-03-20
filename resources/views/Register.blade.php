<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="grid grid-cols-2 h-screen">
  <div class="col-span-1 flex items-center justify-center">
  <div class="flex flex-col items-center">
    <div class="order-1 mb-4">
        
        <img src="image/logo.png" alt="Logo" class="w-72">
    </div>
    <div class="order-2">
    <img src="image/register.jpeg" alt="Register Image">
    </div>
</div>

  </div>
  <div class="col-span-1 flex items-center justify-center">
    <div class="bg-white rounded p-8 w-full max-w-md shadow-md">
      <h1 class="text-center text-2xl font-bold mb-6">Registrasi</h1>
      <form id="form-login" action="#" class="w-full">
        <div class="mb-2">
          <label for="nama" class="text-black font-bold">Nama</label>
          <input type="nama" id="nama" name="nama" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="email" class="text-black font-bold">Alamat</label>
          <input type="alamat" id="alamat" name="alamat" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div id="" class="text-red-500 text-sm"></div>
        </div>
        
        <div class="mb-2">
          <label for="email" class="text-black font-bold">Email</label>
          <input type="email" id="email" name="email" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div id="email-error" class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="number" class="text-black font-bold">No Handphone</label>
          <input type="number" id="number" name="number" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="password" class="text-black font-bold">Password</label>
          <input type="password" id="email" name="password" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div id="password-error" class="text-red-500 text-sm"></div>
        </div>
        <!-- Tambahkan formulir lainnya di sini sesuai kebutuhan -->
      
        <div class="mb-2">
          <label for="password" class="text-black font-bold">Konfirmasi Password</label>
          <input type="password" id="password" name="password" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div id="password-error" class="text-red-500 text-sm"></div>
        </div>
        <div class="flex justify-center items-center mb-6">
          <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-40 rounded focus:outline-none focus:shadow-outline">Masuk</button>
        </div>
      </form>
      <p class="text-center">Sudah punya akun?<a href="Login" class="font-bold w">Register</a></p>
    </div>
  </div>
</div>

<script>
  // JavaScript code here
</script>

</body>
</html>
