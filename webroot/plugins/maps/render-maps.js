

(function($) {



    /*

     *  render_map

     *

     *  This function will render a Google Map onto the selected jQuery element

     *

     *  @type	function

     *  @date	8/11/2013

     *  @since	4.3.0

     *

     *  @param	$el (jQuery element)

     *  @return	n/a

     */



    function render_map( $el ) {



        // var

        var $markers = $el.find('.marker');



        // vars

        var args = {

            zoom		: 10,

            // center		: new google.maps.LatLng(0, 0), // para usar aqui descomente onde tem fitBounds( bounds )

            center 		: new google.maps.LatLng(-4.996383,-37.386646),

            mapTypeId	: google.maps.MapTypeId.ROADMAP

        };



        // create map

        console.log($el[0]);

        var map = new google.maps.Map( $el[0], args);



        // add a markers reference

        map.markers = [];



        // add markers

        $markers.each(function(){



            add_marker( $(this), map );



        });



        // center map

        center_map( map );



    }



    /*

     *  add_marker

     *

     *  This function will add a marker to the selected Google Map

     *

     *  @type	function

     *  @date	8/11/2013

     *  @since	4.3.0

     *

     *  @param	$marker (jQuery element)

     *  @param	map (Google Map object)

     *  @return	n/a

     */



    function add_marker( $marker, map ) {

        // var themeDir = Wp.themedir,
        //     pivotImageUrl = themeDir + '/assets/img/pivot.png';

        pivotImageUrl = '';

        // var

        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

        if ( $marker.attr('data-pivot') )
        {
            pivotImageUrl = $marker.attr('data-pivot');
        }

        // create marker

        var marker = new google.maps.Marker({

            animation	: google.maps.Animation.DROP,

            position	: latlng,

            map			: map,

            icon		: pivotImageUrl

        });



        // add to array

        map.markers.push( marker );



        // if marker contains HTML, add it to an infoWindow

        if( $marker.html() )

        {

            // create info window

            var infowindow = new google.maps.InfoWindow({

                content		: $marker.html()

            });



            // show info window when marker is clicked

            google.maps.event.addListener(marker, 'mouseover', function() {



                infowindow.open( map, marker );



            });

            google.maps.event.addListener(marker, 'mouseout', function() {



                infowindow.close( map, marker );



            });

        }



    }



    /*

     *  center_map

     *

     *  This function will center the map, showing all markers attached to this map

     *

     *  @type	function

     *  @date	8/11/2013

     *  @since	4.3.0

     *

     *  @param	map (Google Map object)

     *  @return	n/a

     */



    function center_map( map ) {



        // vars

        var bounds = new google.maps.LatLngBounds();



        // loop through all markers and create bounds

        $.each( map.markers, function( i, marker ){



            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );



            bounds.extend( latlng );



        });



        // only 1 marker?

        if( map.markers.length == 1 )

        {

            // set center of map

            map.setCenter( bounds.getCenter() );

            map.setZoom( 16 );

        }

        else

        {

            // fit to bounds

            // map.fitBounds( bounds );



        }



    }



    /*

     *  document ready

     *

     *  This function will render each map when the document is ready (page has loaded)

     *

     *  @type	function

     *  @date	8/11/2013

     *  @since	5.0.0

     *

     *  @param	n/a

     *  @return	n/a

     */



    $(document).ready(function(){


        /**
         *
         <div class="acf-map">
         * <div class="marker" data-lat="-4.902663"
         data-lng="-37.366626"
         data-pivot="http://coopyfrutas.com/wp-content/uploads/2015/06/pivot-norfruit1.png">
         <img src="http://coopyfrutas.com/wp-content/uploads/2015/06/norfruit.jpg" alt="" width="118" height="78" />
         <p class="address">Sitio Aroeira, S/N - Zona Rural - Mossoró/RN</p>
         </div>
         </div>
         */
        $('.mapGoogle').each(function(){



            render_map( $(this) );



        });



    });



})(jQuery);