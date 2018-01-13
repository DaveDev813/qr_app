
<!DOCTYPE html>
<html lang="en" >
    <head>
      <title>Rodave's QR generator</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="app/assets/css/style.css" type="text/css">
    </head>
    <body>
      <div id="main_app">
        <div class="container">
          <div class="card">
              
            <div id="title"> <h1> SIMPLE QR APP </h1> </div>
                
            <div id="content"><img id="default" src="app/assets/images/TECH.png"></div>
              
            <div class="row" id="control">
                <div class="col-6">
                  <button id="generate" type="button" class="btn btn-outline-success">Generate</button>
                </div>
                <div class="col-6">
                  <button id="scan" type="button" class="btn btn-outline-success">Scan</button>
                </div>
            </div>
              
          </div>
        </div>
          
        <div id="notif" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>notif</p>
              </div>
              <div class="modal-footer">
                <button type="button" id="close" class="btn btn-warning" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <script src="app/assets/scripts/jquery-3.2.1.min.js"></script>
      <script src="app/assets/scripts/tether.min.js"></script>
      <script src="app/assets/scripts/bootstrap.min.js"></script>
      <script src="app/assets/scripts/instascan.min.js"></script>
      <script src="app/assets/scripts/main.js"></script>
    </body>
</html>



