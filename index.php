<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smart Home by IT@WU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <h4>Smart Home</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Dashboard</a></li>
      
      </ul><br>
    </div>

    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-12">
             
        </div>
      </div>
      <H3>Humidity and Temperature</H3>
       <div class="row">
            <div class="col-sm-6">
              <center><h4><span id="c_hum">0.00</span><h4>
              <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
           </center>
                </div>
            <div class="col-sm-6">
               <center><h4><span id="c_hum">0.00</span><h4> 
              <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </center>
                 </div>
            

      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>School of Informatics, WU, Thailand</p>
</footer>

<script>
  $(function(){
    
  });
</script>
  
</body>
</html>
