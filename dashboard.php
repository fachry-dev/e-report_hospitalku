<?php
ob_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$reports = query("SELECT * FROM reports");
$totalpasienrawatinap = query("SELECT COUNT(*) as total FROM reports WHERE status = 0");
$totalpasienrawatjalan = query("SELECT COUNT(*) as total FROM reports WHERE status =1");
$totalpasisensembuh = query("SELECT COUNT(*) as total FROM reports WHERE status = 2");
?>

<!-- component -->
<style>
  /* Compiled dark classes from Tailwind */
  .dark .dark\:divide-gray-700> :not([hidden])~ :not([hidden]) {
    border-color: rgba(55, 65, 81);
  }

  .dark .dark\:bg-gray-50 {
    background-color: rgba(249, 250, 251);
  }

  .dark .dark\:bg-gray-100 {
    background-color: rgba(243, 244, 246);
  }

  .dark .dark\:bg-gray-600 {
    background-color: rgba(75, 85, 99);
  }

  .dark .dark\:bg-gray-700 {
    background-color: rgba(55, 65, 81);
  }

  .dark .dark\:bg-gray-800 {
    background-color: rgba(31, 41, 55);
  }

  .dark .dark\:bg-gray-900 {
    background-color: rgba(17, 24, 39);
  }

  .dark .dark\:bg-red-700 {
    background-color: rgba(185, 28, 28);
  }

  .dark .dark\:bg-green-700 {
    background-color: rgba(4, 120, 87);
  }

  .dark .dark\:hover\:bg-gray-200:hover {
    background-color: rgba(229, 231, 235);
  }

  .dark .dark\:hover\:bg-gray-600:hover {
    background-color: rgba(75, 85, 99);
  }

  .dark .dark\:hover\:bg-gray-700:hover {
    background-color: rgba(55, 65, 81);
  }

  .dark .dark\:hover\:bg-gray-900:hover {
    background-color: rgba(17, 24, 39);
  }

  .dark .dark\:border-gray-100 {
    border-color: rgba(243, 244, 246);
  }

  .dark .dark\:border-gray-400 {
    border-color: rgba(156, 163, 175);
  }

  .dark .dark\:border-gray-500 {
    border-color: rgba(107, 114, 128);
  }

  .dark .dark\:border-gray-600 {
    border-color: rgba(75, 85, 99);
  }

  .dark .dark\:border-gray-700 {
    border-color: rgba(55, 65, 81);
  }

  .dark .dark\:border-gray-900 {
    border-color: rgba(17, 24, 39);
  }

  .dark .dark\:hover\:border-gray-800:hover {
    border-color: rgba(31, 41, 55);
  }

  .dark .dark\:text-white {
    color: rgba(255, 255, 255);
  }

  .dark .dark\:text-gray-50 {
    color: rgba(249, 250, 251);
  }

  .dark .dark\:text-gray-100 {
    color: rgba(243, 244, 246);
  }

  .dark .dark\:text-gray-200 {
    color: rgba(229, 231, 235);
  }

  .dark .dark\:text-gray-400 {
    color: rgba(156, 163, 175);
  }

  .dark .dark\:text-gray-500 {
    color: rgba(107, 114, 128);
  }

  .dark .dark\:text-gray-700 {
    color: rgba(55, 65, 81);
  }

  .dark .dark\:text-gray-800 {
    color: rgba(31, 41, 55);
  }

  .dark .dark\:text-red-100 {
    color: rgba(254, 226, 226);
  }

  .dark .dark\:text-green-100 {
    color: rgba(209, 250, 229);
  }

  .dark .dark\:text-blue-400 {
    color: rgba(96, 165, 250);
  }

  .dark .group:hover .dark\:group-hover\:text-gray-500 {
    color: rgba(107, 114, 128);
  }

  .dark .group:focus .dark\:group-focus\:text-gray-700 {
    color: rgba(55, 65, 81);
  }

  .dark .dark\:hover\:text-gray-100:hover {
    color: rgba(243, 244, 246);
  }

  .dark .dark\:hover\:text-blue-500:hover {
    color: rgba(59, 130, 246);
  }

  /* Custom style */
  .header-right {
    width: calc(100% - 3.5rem);
  }

  .sidebar:hover {
    width: 16rem;
  }

  @media only screen and (min-width: 768px) {
    .header-right {
      width: calc(100% - 16rem);
    }
  }
</style>
<div x-data="setup()" :class="{ 'dark': isDark }">
  <div class="flex flex-col flex-1 w-full overflow-y-auto  shadow-lg bg-white rounded-md text-black dark:text-white">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
      <div class="bg-blue-500 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-blue-700 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $totalpasienrawatinap[0]['total'] ?></p>
          <p>Pasien</p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $totalpasienrawatjalan[0]['total'] ?>
          </p>
          <p>Rawat Jalan </p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $totalpasisensembuh[0]['total'] ?>
          </p>
          <p>Pasien Sembuh</p>
        </div>
      </div>
    </div>
    <div class="col-span-12 mt-5">
      <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
        <div class="bg-white p-4 shadow-lg rounded-lg">
          <h1 class="font-bold text-base text-[#1A1A1D]">Daftar Pasien</h1>
          <div class="mt-4">
            <div class="flex flex-col">
              <div class="-my-2 overflow-x-auto">
                <div class="py-2 align-middle inline-block min-w-full">
                  <div
                    class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead>
                        <tr>
                          <th
                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex cursor-pointer">
                              <span class="mr-2">title</span>
                            </div>
                          </th>
                          <th
                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex cursor-pointer">
                              <span class="mr-2">content</span>
                            </div>
                          </th>
                          <th
                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex cursor-pointer">
                              <span class="mr-2">thumbnail</span>
                            </div>
                          </th>
                          <th
                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex cursor-pointer">
                              <span class="mr-2">status</span>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        foreach ($reports as $report) :
                        ?>
                          <tr>
                            <td
                              class="px-6 py-4 text-[#1A1A1D] no-wrap text-sm leading-5">
                              <p><?php echo $report['title'] ?></p>
                              <p class="text-xs text-gray-400"> pasien baru
                              </p>
                            </td>
                            <td
                              class="px-6 py-4 text-[#1A1A1D] no-wrap text-sm leading-5">
                              <p><?php echo html_entity_decode(html_entity_decode($report['content'])) ?></p>
                            </td>
                            <td
                              class="px-6 py-4 text-[#1A1A1D] no-wrap text-sm leading-5">
                              <p><?php echo $report['thumbnail'] ?></p>

                            </td>
                            <td
                              class="px-6 py-4 text-[#1A1A1D] no-wrap text-sm leading-5">
                              <div class="flex space-x-4">
                                <a href="#" class="text-blue-500 hover:text-blue-600">
                                  <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 mr-1"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                  </svg>
                                  <p>Edit</p>
                                </a>
                                <a href="#">

                                  <div class="flex <?= $report['status'] == 2 ? 'text-green-500' : 'text-yellow-500' ?>">
                                    <?php
                                    if ($report['status'] == 2) : ?>

                                      <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                    <?php else: ?>
                                      <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
                                        <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
                                      </svg>
                                    <?php endif ?>
                                    <p><?= $report['status'] == 2 ? 'Laporan Selesai' : 'Laporan di proses' ?></p>
                                  </div>
                                  <a href="../utils/functions.php?id=<?= $report['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">
                                    <svg class="w-6 h-6  text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                      <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="text-md text-[#1A1A1D] font-medium ">hapus laporan</p>

                                  </a>

                                </a>
                              </div>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- component -->
    <div class="block">
      <div class="container px-4 py-4 mx-auto">
        <h3 class="block text-xl text-gray-700 font-semibold mb-3"></h3>
        <div class="flex">
          <div class="w-1/2">
            <div class="rounded-md p-6 bg-white shadow">
              <div class="mb-2 pb-2">
                <h3 class="font-semibold text-lg text-gray-600">Tingkat Kesembuhan Pasien DBD di Beberapa Negara</h3>
                <p class="text-sm text-gray-500">Data Hospitalku</p>
              </div>
              <div id="chartdiv" class="w-full" style="height: 240px"></div>
            </div>
          </div>
          <div class="w-1/2 ml-4">
            <div class="rounded-md p-6 bg-white shadow">
              <div class="mb-2 pb-2">
                <h3 class="font-semibold text-lg text-gray-600">Kontribusi Divisi Terhadap Profit Rumah Sakit</h3>
                <p class="text-sm text-gray-500">analisis Hospitalku</p>
              </div>
              <div id="chartdiv2" class="w-full" style="height: 240px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

    <script>
      function bar_chart(selector, data) {
        // Themes begin
        // Themes end
        am4core.useTheme(am4themes_animated);

        // Create chart instance
        var chart = am4core.create(selector, am4charts.XYChart);

        // Add data
        chart.data = data;

        // Create axes

        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "country";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;

        categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
          if (target.dataItem && target.dataItem.index & 2 == 2) {
            return dy + 25;
          }
          return dy;
        });

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.dataFields.valueY = "visits";
        series.dataFields.categoryX = "country";
        series.name = "Visits";
        series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
        series.columns.template.fillOpacity = .8;

        var columnTemplate = series.columns.template;
        columnTemplate.strokeWidth = 2;
        columnTemplate.strokeOpacity = 1;
      }

      function radar_chart(selector, data) {
        // Themes begin
        // Themes end
        am4core.useTheme(am4themes_animated);

        // Create chart instance
        var chart = am4core.create(selector, am4charts.RadarChart);


        chart.data = data;

        // Make chart not full circle
        chart.startAngle = -90;
        chart.endAngle = 180;
        chart.innerRadius = am4core.percent(20);

        // Set number format
        chart.numberFormatter.numberFormat = "#.#'%'";

        // Create axes
        var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "category";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.grid.template.strokeOpacity = 0;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.fontWeight = 500;
        categoryAxis.renderer.labels.template.adapter.add("fill", function(fill, target) {
          return (target.dataItem.index >= 0) ? chart.colors.getIndex(target.dataItem.index) : fill;
        });
        categoryAxis.renderer.minGridDistance = 10;

        var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.grid.template.strokeOpacity = 0;
        valueAxis.min = 0;
        valueAxis.max = 100;
        valueAxis.strictMinMax = true;

        // Create series
        var series1 = chart.series.push(new am4charts.RadarColumnSeries());
        series1.dataFields.valueX = "full";
        series1.dataFields.categoryY = "category";
        series1.clustered = false;
        series1.columns.template.fill = new am4core.InterfaceColorSet().getFor("alternativeBackground");
        series1.columns.template.fillOpacity = 0.08;
        series1.columns.template.cornerRadiusTopLeft = 20;
        series1.columns.template.strokeWidth = 0;
        series1.columns.template.radarColumn.cornerRadius = 20;

        var series2 = chart.series.push(new am4charts.RadarColumnSeries());
        series2.dataFields.valueX = "value";
        series2.dataFields.categoryY = "category";
        series2.clustered = false;
        series2.columns.template.strokeWidth = 0;
        series2.columns.template.tooltipText = "{category}: [bold]{value}[/]";
        series2.columns.template.radarColumn.cornerRadius = 20;

        series2.columns.template.adapter.add("fill", function(fill, target) {
          return chart.colors.getIndex(target.dataItem.index);
        });

        // Add cursor
        chart.cursor = new am4charts.RadarCursor();
      }

      am4core.ready(function() {
        bar_chart("chartdiv", [{
          "country": "indonesia",
          "visits": 2021
        }, {
          "country": "China",
          "visits": 1882
        }, {
          "country": "Japan",
          "visits": 1809
        }]);

        radar_chart("chartdiv2", [{
          "category": "Research",
          "value": 80,
          "full": 100
        }, {
          "category": "Human Resources",
          "value": 68,
          "full": 100
        }]);
      }); // end am4core.ready()
    </script>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<script>
  const setup = () => {
    const getTheme = () => {
      if (window.localStorage.getItem('dark')) {
        return JSON.parse(window.localStorage.getItem('dark'))
      }
      return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
    }

    const setTheme = (value) => {
      window.localStorage.setItem('dark', value)
    }

    return {
      loading: true,
      isDark: getTheme(),
      toggleTheme() {
        this.isDark = !this.isDark
        setTheme(this.isDark)
      },
    }
  }
</script>
<!-- flowbite -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- delete -->
<?php
// Start output buffering at the top of the file
ob_start();

$conn = new mysqli('127.0.0.1', 'root', '', 'lapor_pak');

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  $sql = "DELETE FROM reports WHERE id = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt) {
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
      echo "Data berhasil dihapus!";
      header("Location: index.php?page=dashboard");
      exit;
    } else {
      echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
  } else {
    echo "Terjadi kesalahan: " . $conn->error;
  }
}

$conn->close();

// End output buffering and clean any output if necessary
ob_end_flush();
?>


<!-- end delete -->
<script>
  function data() {

    return {

      isSideMenuOpen: false,
      toggleSideMenu() {
        this.isSideMenuOpen = !this.isSideMenuOpen
      },
      closeSideMenu() {
        this.isSideMenuOpen = false
      },
      isNotificationsMenuOpen: false,
      toggleNotificationsMenu() {
        this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
      },
      closeNotificationsMenu() {
        this.isNotificationsMenuOpen = false
      },
      isProfileMenuOpen: false,
      toggleProfileMenu() {
        this.isProfileMenuOpen = !this.isProfileMenuOpen
      },
      closeProfileMenu() {
        this.isProfileMenuOpen = false
      },
      isPagesMenuOpen: false,
      togglePagesMenu() {
        this.isPagesMenuOpen = !this.isPagesMenuOpen
      },

    }
  }
</script>