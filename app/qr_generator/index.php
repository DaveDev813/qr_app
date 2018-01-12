
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Rodave's QR generator</title>
    </head>
    <body>
        <iframe name="qr-iframe" src="app/qr_generator/qr_api.php" width="325px" height="325px" align="middle" frameborder="0" scrolling="no"></iframe>
        <div class="row">
            <form action="app/qr_generator/qr_api.php" target="qr-iframe" method="post">
                <div class="input-group">
                    <input type="text" name="qr_value" class="form-control" placeholder="Data to QR ...">
                    <span class="input-group-btn">
                        <input type="submit" value="Get QR" class="btn btn-outline-warning"></input>
                    </span>
                </div>
            </form>
        </div>
    </body>
</html>








