<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smart Home by IT@WU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <script src="https://momentjs.com/downloads/moment.min.js"></script>
</head>
<body>
<div class="container-fluid">
  <div class="row content">
     <H4>Home</H4>
        <div class="col-sm-12">
            <center>
             <img src="map.PNG" width="80%"> </img>
            </center>
        </div>
      </div>
      <br/>
      <H4>Humidity and Temperature</H4>
       <div class="row">
            <div class="col-sm-6">
              <center><h3><span id="c_hum">0.00</span> %<h3>
              <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
           </center>
                </div>
            <div class="col-sm-6">
               <center><h3><span id="c_temp">0.00</span> *C<h3> 
              <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </center>
           </div>
           Last update: <span id="last_update" ></span> 

      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>School of Informatics, WU, Thailand</p>
</footer>

<script>
  
  function show_date(){
    var now = moment().format("dddd, MMMM Do, YYYY, h:mm:ss A");
    $('#c_time').text(now);
    setTimeout(show_date, 1000);

  }
  function getLastValue(){
    var url = "https://api.thingspeak.com/channels/666956/feeds.json?results=1";
    $.getJSON( url, {
      format: "json"
    })
      .done(function( feedback ) {
        $("#c_hum").text(feedback.feeds[0].field1);
        $("#c_temp").text(feedback.feeds[0].field2);
        $("#last_update").text(feedback.feeds[0].created_at);
    });
        setTimeout(getLastValue, 10000);
    
  }
  $(function(){
    show_date();
    getLastValue();
  });
</script>
  
</body>
</html>
