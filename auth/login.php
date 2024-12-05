<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <title>Document</title>
</head>


<body>
    <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
  <div class="mx-auto max-w-lg">
    <h1 class="text-center text-2xl font-bold text-[#4A628A] sm:text-3xl">Hospital<span class="text-[#7AB2D3]">KU</span></h1>

    <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
    Hospitalku melayani dengan sepenuh hati tanpa batas 
    Mulailah perjalanan kesehatan Anda bersama kami hari ini! 🌟
    </p>

    <form action="../utils/auth.php" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
      <p class="text-center text-lg font-medium">selamat datang  <br>
      <span class="font-bold text-lg text-blue-500">Hospitalku</span></p>

      <div>
        <div class="relative">
        <input type="text" name="username" 
        class="form-style w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-md"
        placeholder="username" 
        id="logemail" autocomplete="off">

        </div>
      </div>

      <div>
        <label for="password" class="sr-only" >Password</label>

        <div class="relative">
        <input type="password" name="password" 
        class="form-style w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-md" 
        placeholder="************" 
        id="logpass" autocomplete="off" required>
        </div>
      </div>
      <button 
      class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
      type="submit" name="submit" class="btn mt-4">Submit</button>
    </form>
  </div>
</div>
<?php
                if (isset($_GET['notification'])) {
                    echo $_GET['notification'];
                }
                ?>

<!-- Pesan error jika login gagal -->
<?php if (isset($error)) { ?>
    <p style="color: red; text-align: center;"><?php echo $error; ?></p>
<?php } ?>

</body>

</html>