// JavaScript Document *Ibrahim Najib

$( document ).ready(function() {
    'use strict';

    //Main slider
    $(".mainImage .owl-carousel").owlCarousel({
        items:1,
        smartSpeed:750,
        autoplay:true,
        autoplayHoverPause:true,
        loop:true,
        dots:true,
    });

    //News slider
    $(".news .owl-carousel").owlCarousel({
        items:1,
        smartSpeed:750,
        autoplay:false,
        autoplayHoverPause:true,
        loop:true,
        dots:true,
    });

    //partners slider
    $(".partners .owl-carousel").owlCarousel({
        items:5,
        smartSpeed:750,
        autoplay:true,
        margin:60,
        autoplayHoverPause:true,
        loop:true,
        dots:true,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:2,
            },
            480 : {
                items:3,
            },
            768 : {
                items:5,
            }
        }
    });

    //Same height
    if( $('.knowMore').length > 0 ){
        $('.statistics .col').responsiveEqualHeightGrid();  
        $('.knowMore .sameHeight').responsiveEqualHeightGrid();  
    }
    if( $('.knowMoreInner').length > 0 ){
        $('.statistics .col').responsiveEqualHeightGrid();  
        $('.knowMoreInner .sameHeight').responsiveEqualHeightGrid();  
    }
    if( $('.knowMoreInnerBlue').length > 0 ){
        $('.knowMoreInnerBlue .sameHeight').responsiveEqualHeightGrid();  
    }
    if( $('.bUnits').length > 0 ){
        $('.bUnits .sameHeight').responsiveEqualHeightGrid();  
    }
    if( $('.service').length > 0 ){
        $('.service .sameHeight').responsiveEqualHeightGrid();  
    }
    if( $('.knowMore_people').length > 0 ){
        $('.knowMore_people .sameHeight').responsiveEqualHeightGrid();  
    }
    if( $('.knowMore_services').length > 0 ){
        $('.knowMore_services .sameHeight').responsiveEqualHeightGrid();  
    }
    
    if( $('.news').length > 0 ){
        $('.news .sameHeight').responsiveEqualHeightGrid();        
    }
    if( $('.teamWarp').length > 0 ){
        $('.teamWarp .pTitle').responsiveEqualHeightGrid(); 
        $('.teamWarp .pContent').responsiveEqualHeightGrid(); 
        $('.teamWarp .teamBox').responsiveEqualHeightGrid();        
    }

    //Menu

    $('.menuBtn').on('click', function(e){
        e.preventDefault();
        $('.mainMenu').fadeIn('slow').addClass('on')
    });
    $('.closeMenu').on('click', function(e){
        e.preventDefault();
        $('.mainMenu').fadeOut('slow').removeClass('on')
    });
    $(document).keyup(function(e) {
        if (e.keyCode === 27) $('.closeMenu').click();   // esc
    });

    function newsImgPos(){
        if ($(window).width() <= 992) {
            $( ".news .shapeCol .item" ).each(function() {
                var col8 = $(this).find('.col-md-8');
                var col4 = $(this).find('.col-md-4');
                col8.insertAfter(col4);
            });
        } else{
            $( ".news .shapeCol .item" ).each(function() {
                var col8 = $(this).find('.col-md-8');
                var col4 = $(this).find('.col-md-4');
                col4.insertAfter(col8);
            });
        }
    }
    newsImgPos();
    
    
    // custom scrollbar
    $(".mainMenu .warp").mCustomScrollbar({
        theme:"minimal-dark"	
    });

    //team face image (make height === width)
    $('.teamBox').each(function(){
        var width = $(this).find('.face').outerWidth();
        $(this).find('.face').css("height",width+30);
    });

    // close collapse on click another
    $('.collapse').on('show.bs.collapse', function () {
        $('.collapse.in').each(function(){
            $(this).collapse('hide');
        });
    });
    $(document).click(function(e) {
        if ($(e.target).closest('.jobsBoard').length == 0) {
            $('.collapse').collapse('hide');	    
        }
    });


    $(window).on('resize', function(){
        newsImgPos();
    });
	
}); // Document ready

$(window).load(function() {
    
}); // window load

function initialize(pin ,markers) {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        scrollwheel: false,
        styles:[
            {"featureType": "administrative","elementType": "labels.text.fill","stylers": [{"color": "#444444"}]},
            {"featureType": "landscape","elementType": "all","stylers": [{"color": "#f2f2f2"}]},
            {"featureType": "poi","elementType": "all","stylers": [{"visibility": "off"}]},
            {"featureType": "road","elementType": "all","stylers": [{"saturation": -100},
            {"lightness": 45}]},
            {"featureType": "road.highway","elementType": "all","stylers": [{"visibility": "simplified"}]},
            {"featureType": "road.arterial","elementType": "labels.icon","stylers": [{"visibility": "off"}]},
            {"featureType": "transit","elementType": "all","stylers": [{"visibility": "off"}]},
            {"featureType": "water","elementType": "all","stylers": [{"color": "#ddd5cb"},{"visibility": "on"}]}
        ]
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);


                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Title here.</h3>' +
        '<p>12345 Salah Salem Rd. <br>Naser City</p>' +        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        
        marker = new google.maps.Marker({
            icon: pin,
            position: position,
            map: map,
            title: markers[i][0]
        });
        /*
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
            */
        // Don't zoom in too far on only one marker
            if (bounds.getNorthEast().equals(bounds.getSouthWest())) {
            var extendPoint1 = new google.maps.LatLng(bounds.getNorthEast().lat() + 0.01, bounds.getNorthEast().lng() + 0.01);
            var extendPoint2 = new google.maps.LatLng(bounds.getNorthEast().lat() - 0.01, bounds.getNorthEast().lng() - 0.01);
            bounds.extend(extendPoint1);
            bounds.extend(extendPoint2);
            }

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        google.maps.event.removeListener(boundsListener);
    });
    
}
