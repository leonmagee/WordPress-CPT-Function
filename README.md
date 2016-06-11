# Create Custom Post Type

#### Usage (put in functions.php)
```php
/**
 * Create New Custom Post Types
 */
include_once( 'lib/mm_create_wp_cpt.php' );

mm_create_wp_cpt::create_post_type('testimonials', 'Testimonial', 'Testimonials', 'testimonials', 'format-quote' );

mm_create_wp_cpt::create_post_type('press-release', 'Press Release', 'Press Releases', 'press-release', 'rss' );
```


#### Icons
A Complete list of icons is available here:
```
https://developer.wordpress.org/resource/dashicons/#id
```
