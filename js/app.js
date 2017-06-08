$( function() {
    // show the collapsible element
    $("#collapseSubCat").collapse("show");
    $("#collapseCat").collapse("show");
    $("#collapsePrice").collapse("show");
    $("#colorMenu").collapse("show");
    $("#brand").collapse("show");
    
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

    // add to cart in AJAX
    $(".addCart").click(function( event ) {
        event.preventDefault();
        $.get($(this).attr('href'), {}, function(data){
            if(data.error) {
                alert(data.message);
            } else {
                if(confirm(data.message + '. Would you check your cart ? ')) {
                    location.href = 'cart.php?msg=' + encodeURIComponent(data.message);
                }
                else
                    $("#count").empty().append(data.count);
            }
        },'json');
       return false;
    });

    // change qty by the arrows
    $(".qty").change(function(event) {
        console.log($(this).val());
    });
    
    // change qty by submitting value
    $( "form" ).submit(function(event) {
        console.log($(this).val());
    });
    
});