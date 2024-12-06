<<<<<<< HEAD
<aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
      <div class="flex-grow">
        <div class="px-4 py-6 text-center border-b">
          <h1 class="text-xl font-bold leading-none"><span class="text-blue-500">Dashboard</span> hospitalku</h1>
        </div>
        <div class="p-4">
          <ul class="space-y-1">
            <li>
              <a href="javascript:void(0)" class="flex items-center bg-blue-500 rounded-xl font-bold text-sm text-white py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                </svg>laporan masuk
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" class="flex bg-white hover:bg-blue-400 rounded-xl hover:text-white font-bold text-sm text-gray-900 py-3 px-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.707 8.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
              </svg>laporan selesai 
              </a>
            </li>
<!-- Sidebar -->
<aside class="scrollbar fixed top-0 left-0 z-40 w-72 lg:w-56 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 lg:translate-x-0" aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white">
        <!-- Menu (It's for mobile) -->
        <ul class="space-y-0.5 inline lg:hidden">
            <?php if ($_SESSION['role_name'] !== 'masyarakat'): ?>
                <li>
                    <a href="index.php?page=dashboard" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-gray-800  dark:text-gray-600 group-hover:text-white transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                        </svg>

                        <span class="ml-3 group-hover:text-white">Dashboard</span>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['role_name'] === 'superadmin'): ?>
                <li>
                    <a href="index.php?page=users" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-gray-800  dark:text-gray-600 group-hover:text-white transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        </svg>

                        <span class="ml-3 group-hover:text-white">Users</span>
                    </a>
                </li>
            <?php endif ?>
            <li>
              <a href="javascript:void(0)" class="flex bg-white hover:bg-blue-400 rounded-xl hover:text-white font-bold text-sm text-gray-900 py-3 px-4">
              <svg  xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="text-lg mr-4" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 9h6m-6 3h6m-6 3h6M6.996 9h.01m-.01 3h.01m-.01 3h.01M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
              </svg>list laporan 
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" class="flex bg-white hover:bg-blue-400 rounded-xl hover:text-white font-bold text-sm text-gray-900 py-3 px-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="text-lg mr-4" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
              </svg>User
              </a>
            </li>
<<<<<<< HEAD
          </ul>
        </div>
      </div>
      <div class="p-4">
        <button id="button"  class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
            <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>
        </button> <span class="font-bold text-sm ml-2">Logout</span>
      </div>
=======
        </ul>

        <!-- Menu (It's for Lablet and Desktop) -->
        <ul class="hidden lg:inline space-y-0.5">
            <?php if ($_SESSION['role_name'] !== 'masyarakat'): ?>
                <li>
                    <a href="index.php?page=dashboard" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-gray-800  dark:text-gray-600 group-hover:text-white transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                        </svg>

                        <span class="ml-3 group-hover:text-white">Dashboard</span>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['role_name'] === 'superadmin'): ?>

                <li>
                    <a href="index.php?page=users" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-gray-800  dark:text-gray-600 group-hover:text-white transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        </svg>


                        <span class="ml-3 group-hover:text-white">Users</span>
                    </a>
                </li>
            <?php endif ?>
            <li>
                <a href="index.php?page=reports" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                    <svg class="w-6 h-6 text-gray-800  dark:text-gray-600 group-hover:text-white transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z" clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3 group-hover:text-white">Reports</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=list" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                    <svg class="w-6 h-6 text-gray-800  dark:text-gray-600 group-hover:text-white transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                    </svg>

                    <span class="ml-3 group-hover:text-white">Report list</span>
                </a>
            </li>
        </ul>
    </div>
  </aside>
  <script>
    document.getElementById("button").addEventListener("click", function() {
        // Panggil file logout PHP untuk mengakhiri sesi dan mengarahkan ke halaman login
        window.location.href = "/auth/login.php";
    });
</script>