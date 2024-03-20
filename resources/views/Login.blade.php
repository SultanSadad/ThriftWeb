<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex h-screen justify-center items-center">
  <div class="bg-white rounded p-8 w-full max-w-md shadow-md">
    <img class="w-60 mx-auto mb-8" src="/image/logo.png" alt="Logo">
    <h3 class="text-2xl font-bold mb-6">Login</h3>
    <form id="form-login" action="#" class="w-full">
      <div class="mb-4">
        <label for="email" class="text-black font-bold">Email</label>
        <input type="email" id="email" name="email" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        <div id="email-error" class="text-red-500 text-sm"></div>
      </div>
      <div class="mb-4">
        <label for="password" class="text-black font-bold">Password</label>
        <input type="password" id="password" name="password" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        <div id="password-error" class="text-red-500 text-sm"></div>
      </div>
      <p class="mb-12">Belum punya akun? <a href="Register" class="font-bold">Daftar</a></p>
      <div class="flex justify-center items-center mb-16">
        <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-44 rounded focus:outline-none focus:shadow-outline">Masuk</button>
      </div>
    </form>
  </div>
</div>

<script>
  // JavaScript code here
</script>

</body>
</html>



  <script>
    const formLogin = document.getElementById('form-login');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('email-error');  
    const passwordError = document.getElementById('password-error');

    formLogin.addEventListener('submit', (event) => {
      event.preventDefault();

      // Validasi email
      if (!emailInput.value.trim()) {
        emailError.textContent = 'Email tidak boleh kosong';
        emailInput.classList.add('border-red-500');
        return;
      } else if (!validateEmail(emailInput.value)) {
        emailError.textContent = 'Email tidak valid';
        emailInput.classList.add('border-red-500');
        return;
      } else {
        emailError.textContent = '';
        emailInput.classList.remove('border-red-500');
      }

      // Validasi password
      if (!passwordInput.value.trim()) {
        passwordError.textContent = 'Password tidak boleh kosong';
        passwordInput.classList.add('border-red-500');
        return;
      } else if (passwordInput.value.length < 8) {
        passwordError.textContent = 'Password minimal 8 karakter';
        passwordInput.classList.add('border-red-500');
        return;
      } else {
        passwordError.textContent = '';
        passwordInput.classList.remove('border-red-500');
      }

      // Jika semua validasi berhasil, kirim form ke server
      // ...

    });

    function validateEmail(email) {
      const re = /^(([^
