<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script type="text/javascript" src="assets/instascan.min.js"></script>
  </head>
  <body>
    <video id="preview"></video>
    <h1>Value: <strong id="qrvalue"></strong></h1>
    <script src="assets/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
        $('#qrvalue').html(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
          $('#qrvalue').html('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
    
  </body>
</html>