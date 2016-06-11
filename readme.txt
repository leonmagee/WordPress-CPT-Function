# Simple-Google-Map

### Map for one location
```php
class simple_google_map {}
```
Output a google map with a marker at coordinates.

If the latitude and longitude have been set, the marker and map centering will use that. If not, it will use Google's geocode feature to extract the location from the address string.

The output will include the Googe Map API script.

Usage:

```php
if ( ( $lat && $long ) || $combined_address ) {

    $google_map = new hji_google_map( $lat, $long, get_the_title(), $combined_address );

    $google_map->output_map();
}
```

------------------------------------

### Map for multiple locations
```php
class simple_google_map_group {}
```

This class allows you to pass an array of property data and then create multiple marker on a single map. It will auto-center based on the different lat and longs that are entered. It will get the latitude and longitude using Geocode from the address if the defaults are not set. The marker will link to the entered url.
The JavaScript is written here so the map can be generated from the callback within the `geocode` method.

Usage:

```php

 $array = array( array(
      'lat' => '32.8085134',
      'long' => '-96.8170723',
      'address' => '4210 Fairmount St. Dallas TX 75219',
      'url' => 'http://www.marker-links-to-this-url.com'
      )
 );

$google_map = new simple_google_map_group( $array );

$google_map->output_map();
```

### Warning
You must give the `#map` div a height attribute or the map will not be visible!