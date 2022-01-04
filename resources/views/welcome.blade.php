<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olympus E-commece Tienda Virtual</title>
</head>
<body>
<div class="page-preview">
</div>
    <div class="page-preview-body">
        <iframe id="livePreviewFrame" src="https://website300651.nicepage.io/es/Page-2.html?version=0634edf3-5618-42ee-8534-209083ce1219" width="1057" height="640" style="width:100%;"></iframe>
    </div>
</div>
<a style="position:absolute;top:17px;left:10px;" href="/"><img alt="NicePage.com" src="//csite.nicepage.com/Images/logo-w.png"></a>

<script>
    if (window.parent) {
        var _w = 0, _h = 0;
        var updateFormSize = function () {
            var form = $('form.shaped-form-extended,form.shaped-form');
            var w = form.outerWidth(true);
            var h = form.outerHeight(true);
            if (Math.abs(_w - w) > 5 || Math.abs(_h - h) > 5) {
                _w = w;
                _h = h;
                var msg = { key: 'login-frame-size', width: w, height: h };
                window.parent.postMessage(msg, "*");
            }
            setTimeout(updateFormSize, 300);
        }
        updateFormSize();
    }
</script>

</body>
</html>
