<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <style type="text/css">
    #mapa { height: 900px; }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=(LLAVE---AQUI)&callback=initMap"></script>
    <script type="text/javascript">
    function initialize() {
      var marcadores = [

        ['ubicacion uno', latitud, -longitud],
        ['ubicacion dos', latitud, -longitud]

      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 14,
        center: new google.maps.LatLng(LATITUD, -LONGITUD),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="mapa"></div>
  </body>
</html>
