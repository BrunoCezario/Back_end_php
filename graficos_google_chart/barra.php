<?php
include("conexao.php");
?>

<html>
  <head>
    <script type="text/javascript"
     src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ["Cidade","População",{ role: 'annotation' }],
      <?php
      
        $query = "Select * from dados_cidade";
       
        $select = $connection ->prepare($query);
        $select->execute();
        $rows = $select->fetchAll(PDO::FETCH_ASSOC);
       
        foreach ($rows as $row){
            $cidade  = $row["cidade"];
            $populacao  = $row["populacao"];

        ?> 
       
            ["<?php echo $cidade ?>", <?php echo $populacao?>,"<?php echo $cidade ?>"],

     <?php } ?>

        ]);

        var options = {
          title: 'Dados Populacionais',
          legend:{position:"bottom"}
        };

        var chart = new google.visualization.BarChart(document.getElementById('grafico'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="grafico" style="width: 900px; height: 500px;"></div>
  </body>
</html>
