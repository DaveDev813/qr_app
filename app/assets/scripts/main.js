
/**
 * Main js module
 */
$(function(){
    
    const main = $('#main_app');
    const notif = $("#notif"); 
    
    function _notif(val){
        notif.find(".modal-body").html("<p>"+val+"</p>").promise().done(function(){
            notif.modal("show");
            setTimeout(function(){
                notif.modal("hide");
            }, 2000);
        });
    }
    
    function scann(){
        
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
        main.find("#qrval").val(content);
        _notif("QR has been scanned");
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
          _notif("No cameras found.");
        }
      }).catch(function (e) {
        console.error(e);
      });
    }
    
    function change_cont(_url, callback){
       $.ajax({
           url: _url,
           success: function(data){
               $("#content").html(data).promise().done(function(){
                   callback();
               });
           }
       });
    };
    
    $("button").on("click", function(){
        
        let id = $(this).attr('id');
        
        if(id == "generate"){
            $(".container").attr("data-active", "generate")
            change_cont("app/qr_generator/index.php", function(){});
        }
        else if (id == "scan"){
            $(".container").attr("data-active", "scan");
            change_cont("app/qr_scanner/index.php", scann);
        }
        
    });
    
    notif.modal({
        backdrop: false,
        show: false
    });
    
});

