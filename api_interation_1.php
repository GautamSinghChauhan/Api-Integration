<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
<table class="table table-striped table-bordered table-hover table-condensed">
   <thead>
      <tr>
         <th>Location</th>
         <th>Confirmed Cases (Indian)</th>
         <th>Confirmed Cases (Foreign)</th>
         <th>Discharged</th>
         <th>Deaths</th>
         <th>Total Confirmed</th>
      </tr>
   </thead>
   <tbody id="table-body"></tbody>
</table>

    <script>

$.get("https://api.rootnet.in/covid19-in/stats/latest", function(data) {
  $.each(data.data.regional, function(index, value) {
   var row = "<tr>";
   row += "<td>" + value.loc + "</td>";
   row += "<td>" + value.confirmedCasesIndian + "</td>";
   row += "<td>" + value.confirmedCasesForeign + "</td>";
   row += "<td>" + value.discharged + "</td>";
   row += "<td>" + value.deaths + "</td>";
   row += "<td>" + value.totalConfirmed + "</td>";
   row += "</tr>";
   $("#table-body").append(row);
});

});


    </script>



</body>
</html>
