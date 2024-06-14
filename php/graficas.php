<?php
include 'conexion_be.php';
?>

<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current',{
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        <?php
          $SQL = "SELECT * FROM productos";
          $consulta = mysqli_query($conexion, $SQL);
          while ($resultado = mysqli_fetch_assoc($consulta)){
            echo "['" .$resultado['nombre']."', " .$resultado['stock']."],";
          }
        ?>
      ]);

      var options = {
        title: 'Grafica'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
  <style>
    #chart-container {
      width: 100%;
      height:100%;
      margin: 0 auto; /* Centrar horizontalmente */
    }
  </style>
</head>

<body>
  <div id="chart-container">
    <div id="piechart" style="width: 100%; height: 100%;"></div>
  </div>
</body>

</html>
