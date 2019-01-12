<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smart Home by IT@WU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Smart Home</a> 
    </nav>

    <div class="row">
            <div class="col-md-12">
                <ul id="tabsJustified" class="nav nav-tabs">
                    <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase active">Light</a></li>
                    <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase ">Temperture</a></li>
                    <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">Humidity</a></li>
                </ul>
                <br/>
                <div id="tabsJustifiedContent" class="tab-content">
                    <div id="home1" class="tab-pane fade active">
                        Home
                             <img src="map.png" width="50%" />
                    </div>
                    <div id="profile1" class="tab-pane fade show">
                        <div class="row">
                            <div class="col-sm-6">
                                <center><h3><span id="c_temp">0.00</span> *C<h3> 
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div id="messages1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <center><h3><span id="c_hum">0.00</span> %<h3>
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>  
    Last update: <span id="last_update" ></span> 

</div>

</body>
</html>