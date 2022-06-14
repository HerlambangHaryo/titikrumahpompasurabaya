<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>xCenter the map on a clicked feature</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<div id="map"></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic3VwZXJhcnlhIiwiYSI6ImNrd3VuNHI0ZjB6OGsycm1oZmllcHAxaTEifQ.fF5_b3TtuYUKHWFg1mLSkw';

    const map = new mapboxgl.Map({
        container: 'map',
        style: "mapbox://styles/mapbox/streets-v9",
        center: [112.740972, -7.271391],
        zoom: 11.5 
    });
 
    map.on('load', () => {
        // Add a GeoJSON source with 3 points.

        map.addSource('points', 
        {
            'type': 'geojson',
            'data': 
            {
                'type': 'FeatureCollection',
                'features': 
                [
                    @foreach($data as $row)
                    {
                        'type': 'Feature',
                        'properties': {},
                        'geometry': 
                        {
                            'type': 'Point',
                            'coordinates': [{{$row->longitude}}, {{$row->latitude}}]
                        },
                        'properties': {
                            'title': '{{$row->nama_lokasi}}'
                        }
                    }
                    @endforeach
                ]
            }
        });

        // Add a circle layer
        map.addLayer({
            'id': 'circle',
            'type': 'circle',
            'source': 'points',
            'paint': {
                'circle-color': '#4264fb',
                'circle-radius': 8,
                'circle-stroke-width': 2,
                'circle-stroke-color': '#ffffff'
            }
        });
         
        // Center the map on the coordinates of any clicked circle from the 'circle' layer.
        map.on('click', 'circle', (e) => {
            map.flyTo({
                center: e.features[0].geometry.coordinates
            });
        });
         
        // Change the cursor to a pointer when the it enters a feature in the 'circle' layer.
        map.on('mouseenter', 'circle', () => {
            map.getCanvas().style.cursor = 'pointer';
        });
         
        // Change it back to a pointer when it leaves.
        map.on('mouseleave', 'circle', () => {
            map.getCanvas().style.cursor = '';
        });
    });
</script>
 
</body>
</html>