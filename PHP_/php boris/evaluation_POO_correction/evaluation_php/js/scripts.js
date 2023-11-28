/*!
* Start Bootstrap - Shop Homepage v5.0.4 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project


$('input').on('change', function(){

    if( $(this).val().length > 0 ){

        console.log( $(this).val().length );
        $(this).css('border', '2px black solid');

    }else{

        console.log( $(this).val().length );
        $(this).css('border', '2px red solid');
    }

})



$('#validate').click(function(){

    $('input').each(function(){
        if( $(this).val().length > 0 ){
        
            console.log( $(this).val().length );
            $(this).css('border', '2px black solid');
    
        }else{
    
            console.log( $(this).val().length );
            $(this).css('border', '2px red solid');
        }
    })

})