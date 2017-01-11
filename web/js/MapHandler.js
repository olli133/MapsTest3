/**
 * Created by Olive on 15.12.2016.
 */
var map;
function initMap()
{
    map = new google.maps.Map(document.getElementById('map'),
        {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
}