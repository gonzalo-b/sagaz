<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sagaz - Nuevo Contacto</title>
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Raleway:400,300,500,700);
        body {margin: 0; padding: 0; min-width: 100%!important;
            font-family: 'Raleway', "Helvetica Neue",Helvetica,Arial,sans-serif;}
        .content {width: 100%; max-width: 600px;}
        .header h1 {
            text-transform: uppercase;
            font-size: 250%;
            color: black;
            font-weight: 300;
            cursor: pointer;
            letter-spacing: 1px;
        }
        .header h1 span {
            color: #37a0e6;
        }
        .header{
            width: 100%;
            text-align: center;
        }
        .messageBox{
            width: 90%;
            margin: 0px auto;
        }
        .messageBox a{
            text-transform: uppercase;
            color: #37a0e6;
            text-decoration: none;
        }
    </style>
</head>
<body >
<div class="header">
    <h1>
       SAGAZ ESTUDIO
    </h1>
</div>
<div class="messageBox">
    <p> Recibimos un nuevo contacto: </p>
    </br>
    <p> <strong>NOMBRE:</strong> {{$firstname . ' '. $lastname}} </p>
    <p> <strong>EMAIL:</strong> {{$email}} </p>
    <p> <strong>TELEFONO:</strong> {{$phone}} </p>
    <p> <strong>MENSAJE:</strong> {{$mensaje}} </p>
</div>

</body>
</html>