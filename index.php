<?php
require('require/class.Connection.php');
require('require/class.Spotter.php');

$title = "Home";
require('header.php');
?>

<div id="live-map"></div>
<div id="aircraft_ident"></div>

<div id="sidebar" class="sidebar collapsed">
    <!-- Nav tabs -->
    <ul class="sidebar-tabs" role="tablist">
	<li><a href="#" onclick="zoomInMap(); return false;" title="Zoom in"><i class="fa fa-plus"></i></a></li>
	<li><a href="#" onclick="zoomOutMap(); return false;" title="Zoom out"><i class="fa fa-minus"></i></a></li>
	<li><a href="#" onclick="getUserLocation(); return false;" title="Plot your Location"><i class="fa fa-map-marker"></i></a></li>
	<li><a href="#" onclick="getCompassDirection(); return false;" title="Compass Mode"><i class="fa fa-compass"></i></a></li>

	<li><a href="#home" role="tab" title="Layers"><i class="fa fa-bars"></i></a></li>
	<li><a href="#settings" role="tab" title="Settings"><i class="fa fa-gear"></i></a></li>
    </ul>

    <!-- Tab panes -->
    <div class="sidebar-content active">
	<div class="sidebar-pane" id="home">
	    <h1>Weather</h1>
		<ul>
		<li><a class="button weatherprecipitation" onclick="showWeatherPrecipitation(); return false;" title="Weather Precipitation">Weather Precipitation</a></li>
		<li><a class="button weatherrain" onclick="showWeatherRain(); return false;" title="Weather Rain">Weather Rain</a></li>
		<li><a class="button weatherclouds" onclick="showWeatherClouds(); return false;" title="Weather Clouds">Weather Clouds</a></li>
                </ul>
                <br />
		<h1>Others Layers</h1>
		<ul><li><a class="button waypoints" onclick="showWaypoints(); return false;" title="Waypoints">Waypoints</a></li></ul>
		<ul><li><a class="button airspace" onclick="showAirspace(); return false;" title="Airspace">Airspace</a></li></ul>
<?php
    if (isset($globalNOTAM) && $globalNOTAM) {
?>
		<ul><li><a class="button notam" onclick="showNotam(); return false;" title="NOTAM">NOTAM</a></li></ul>
<?php
    }
?>
        </div>
        <div class="sidebar-pane" id="settings">
	    <h1>Settings</h1>
	    <form>
		<ul>
		    <li><a class="button flightpopup" onclick="flightPopup(); return false;" title="Flight info as Popup" />Display flight info as popup</a></li>
		    <li><a class="button flightpath" onclick="flightPath(); return false;" title="Show all flights path" />Display flight path</a></li>
		</ul>
	    </form>
	    <p>Any change in settings reload page</p>
    	</div>
    </div>
</div>
<!--
<a class="button weatherradar" href="#" onclick="showWeatherRadar(); return false;" title="Weather Radar"><i class="fa fa-bullseye"></i></a>
<a class="button weathersatellite" href="#" onclick="showWeatherSatellite(); return false;" title="Weather Satellite"><i class="fa fa-globe"></i></a>
-->
<script>
    if (getCookie('flightpath') == 'true') $(".flightpath").addClass("active");
    if (getCookie('flightpopup') == 'true') $(".flightpopup").addClass("active");
</script>
<?php
require('footer.php');
?>