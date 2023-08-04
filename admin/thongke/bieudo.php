<table>
<h1 class="text-center mt-3">Biểu đồ</h1>

<div id="piechart" class="text-center"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Loại Hàng', 'Số lượng sản phẩm'],
  <?php
            $tong_loai = count($listtk);
            $i = 1;
            foreach ($listtk as $thongke) {
                extract($thongke);
                if ($i == $tong_loai) $dauphay = "";
                else $dauphay = ",";
                echo "['" . $thongke['category_name'] . "'," . $thongke['countsp'] . "]" . $dauphay;
                $i += 1;
            }
            ?>

        ]);
        var options = {
            'title': 'Thống kê sản phẩm',
            'width': 900,
            'height': 700
        };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</table>