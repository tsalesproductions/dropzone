<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Example: Drag and Drop File Upload using jQuery and PHP</h2>	
        <div class="file_upload dropzone js-dropzone-upload" data-input="upload">
            <input type="hidden" name="upload"/>
            <div class="dz-message needsclick">
                <strong>Solte os arquivos aqui ou clique para fazer o upload.</strong><br />
            </div>
        </div>
        <hr>
        <div class="file_upload dropzone js-dropzone-upload" data-input="upload">
            <input type="hidden" name="upload"/>
            <div class="dz-message needsclick">
                <strong>Solte os arquivos aqui ou clique para fazer o upload.</strong><br />
            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="dropzone/dropzone.css" />
    <script type="text/javascript" src="dropzone/dropzone.js"></script>
    <script type="text/javascript" src="dropzone/dropzone-function.js"></script>
</body>
</html>