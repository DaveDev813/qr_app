
/**
 * Main js module
 */
$(function(){
    
    const main = $('main_app');
    
    function change_cont(_url){
       $.ajax({
           url: _url,
           success: function(data){
               $("#content").html(data);
           }
       });
    };
    
    $("button").on("click", function(){
        
        let id = $(this).attr('id');
        
        if(id == "generate"){
            $(".container").attr("data-active", "generate")
            change_cont("app/qr_generator/index.php");
        }
        else if (id == "scan"){
            $(".container").attr("data-active", "scan");
            $("#content").html("wala pa");
        }
        
    });
    
});

