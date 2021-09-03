/**
 * File Name : style.css
 * Description: Main Layout of Site
 * Author: Rahul Saini
 * URL: https://www.irahulsaini.com
 * Copyright: irahulsaini.com
*/
window.addEventListener('load',function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        nav:false,
        loop:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });   
    $('form._rscf').submit(function(e){
        e.preventDefault();
        $submit = $('.btn-send',this);
        $response = $('.response',this);
        $submit.attr('disabled',1);
        $response.html('<i class="fa fa-sync fa-spin"></i>');
        $.ajax({
            url:'/api/send_query',
            type:'post',
            data:$(this).serializeArray(),
            success:function(response){
                if(response.status == 1){
                    $response.html('<div class="alert alert-success mt-2">Thank You! Your Message has sent.</div>')
                }else{
                    $response.html('<div class="alert alert-danger mt-2">Error: '+response.message+'</div>');
                    $submit.removeAttr('disabled');
                }
            },
            error:function(){
                $response.html('<div class="alert alert-danger mt-2">Error: Server Error</div>');
                $submit.removeAttr('disabled');
            }
        })
    }) 
}); 