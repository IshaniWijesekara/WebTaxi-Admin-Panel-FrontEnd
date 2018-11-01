<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zeon IT (M04)
 * Date: 9/20/2018
 * Time: 12:11 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        #map{
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>

    <div id="map">

    </div>
`
    <script>
        function initMap() {
//            var location = {latitude: -25.363 , longitude:131.044};
            var map= new google.maps.Map(document.getElementById("map") , {
                zoom:4,
                center:location
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHcYfhIoi7xvlH4GzTzf1If5mYGzqKB9o&callback=initMap">

    </script>
</body>
</html>
