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
  <script src="https://momentjs.com/downloads/moment.min.js"></script>

</head>
<style>
    .light-icon{
        position: absolute; 
        width:25px;
        z-index:2;
    }
</style>
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
                    <div id="home1" class="tab-pane fade active show">

                    <div class="row">
                        <div class="col-md-6">
                            <div style="position: relative;left: 0px;top: 0px;width: 450px;">
                                <div style="position: absolute; left: 0px; top: 0px;">
                                    <img src="map.png" width="450px" />                                
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px;width:450px;z-index:1;">
                                    <a id="light-restroom" class="light" href="#" onclick="return false;">
                                        <img id="img_restroom" class="light-icon" src="red_light.png" style="left: 70px; top: 50px;" /> </a>

                                    <a id="light-livingroom1" class="light"  href="#" onclick="return false;" >
                                        <img id="img_light-livingroom1" class="light-icon" src="red_light.png" style="left: 100px; top: 175px;" /> </a>
                                    <a id="light-livingroom2" class="light"  href="#" onclick="return false;">
                                        <img id="img_light-livingroom2" class="light-icon" src="red_light.png" style="left: 10px; top: 260px;" /> </a>
                                    <a id="light-livingroom3" class="light"  href="#" onclick="return false;" >
                                        <img id="img_light-livingroom3" class="light-icon" src="red_light.png" style="left: 165px; top: 260px;" /> </a>

                                    <a id="light-bedroom1" class="light"  href="#" onclick="return false;" >
                                        <img id="img_light-bedroom1" class="light-icon" src="red_light.png" style="left: 325px; top: 175px;" /> </a>
                                    <a id="light-bedroom2"  class="light"  href="#" onclick="return false;" >
                                        <img id="img_light-bedroom2" class="light-icon" src="red_light.png" style="left: 258px; top: 270px;" /> </a>
                                    <a id="light-bedroom3" class="light"  href="#" onclick="return false;" >
                                        <img id="img_light-bedroom3" class="light-icon" src="red_light.png" style="left: 403px; top: 270px;" /> </a>

                                    <a id="light-kitchen" class="light"  href="#" onclick="return false;" >
                                        <img id="img_light-kitchen" class="light-icon" src="red_light.png" style="left: 250px; top: 50px;" /> </a>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <img id="gas_mon" src="black_fire.jpg" width="100px"alt=""/><br/> Gas Monitoring


                        </div>
                        <div class="col-3">
                            
                        </div>
                    </div>
                        
                    </div>
                    <div id="profile1" class="tab-pane fade ">
                        <div class="row">
                            <div class="col-sm-6">
                                <center><h3>Temperture: <span id="c_temp">0.00</span> *C<h3> 
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                                </center>
                                <br/>
                                Last update: <span id="last_update1" ></span> 
                            </div>
                        </div>
                    </div>
                    <div id="messages1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <center><h3>Humidity: <span id="c_hum">0.00</span> %<h3>
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/666956/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                                </center>
                                <br/>
                                Last update: <span id="last_update2" ></span> 
                            </div>
                        </div>
                    </div>
                    <div id="config" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="ip_address" placeholder="IP Address"/> <button class="btn btn-success"> Connect </button>
                                <br/>
                                Status: <span  class="badge badge-danger" id="server_status"> disconnected </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>  
    

</div>

</body>
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
        console.log(JSON.stringify(feedback.feeds[0]));
        $("#c_hum").text(feedback.feeds[0].field1);
        $("#c_temp").text(feedback.feeds[0].field2);
        var tt = moment(feedback.feeds[0].created_at).format("dddd, MMMM Do, YYYY, h:mm:ss A");
        if(feedback.feeds[0].field4 == 1){
            $("#gas_mon").attr('src', 'red_fire.png');
            $("#gas_mon").attr('width', '100px');
        }else{
            $("#gas_mon").attr('src', ' black_fire.jpg');
            $("#gas_mon").attr('width', '100px');
        }
        //$("#last_update").text(feedback.feeds[0].created_at);
        $("#last_update1").text(tt);
        $("#last_update2").text(tt);
    });
        setTimeout(getLastValue, 15000);
    
  }

  function light_click(){
      var id = this.id;
      console.log(id);
      var url = "http://192.168.43.35";
      if(id == "light-livingroom2"){
          url += "/LV2ON";
          $.get(url, function(data) {
            alert(data);
          });
      }
      if(id == "light-livingroom3"){
          
          url += "/LV2OFF";
          $.get(url, function(data) {
            alert(data);
          });
      }
        
    }
  $(function(){
    //show_date();
    getLastValue();
    $("a.light").click(light_click);
  });
</script>


</html>