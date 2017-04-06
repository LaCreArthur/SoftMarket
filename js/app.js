$(document).ready( function() {

    // Update values in the price slider
    var $slider = $("#slider-range");
    var $min    = $("#amountMin");
    var $max    = $("#amountMax");
    $slider.slider({
        range: true,
        min: 100,
        max: 10000,
        values: [ 100, 10000 ],
        slide: function( event, ui ) {
            $min.val( "$" + ui.values[ 0 ]);
            $max.val( "$" + ui.values[ 1 ]);
        }
    });
    $min.val( "$" + $slider.slider( "values", 0 ));
    $max.val( "$" + $slider.slider( "values", 1 ));

    // create a bottom space when an article is added

} );