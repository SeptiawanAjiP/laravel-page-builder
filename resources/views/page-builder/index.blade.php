<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://unpkg.com/grapesjs-preset-webpage"></script>
    <script src="https://unpkg.com/grapesjs-preset-newsletter"></script>
    <script src="https://unpkg.com/grapesjs-navbar"></script>
    <script src="https://unpkg.com/grapesjs-plugin-forms"></script>
    <script src="https://unpkg.com/grapesjs-image-plugin"></script>
    <script src="https://unpkg.com/grapesjs-blocks-flexbox@1.0.1/dist/index.js"></script>
    <script src="https://unpkg.com/grapesjs-blocks-basic@1.0.2/dist/index.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body>

    <div id="gjs" style="height:0px; overflow:hidden">

    </div>


    <script type="text/javascript">
        window.onload = () => {
            window.editor = grapesjs.init({
                height: '100%',
                showOffsets: true,
                noticeOnUnload: false,
                storageManager: false,
                container: '#gjs',
                fromElement: true,
                plugins: [
                    'gjs-blocks-basic',
                    'grapesjs-preset-webpage',
                    'grapesjs-preset-newsletter',
                    'grapesjs-navbar',
                    'grapesjs-plugin-forms',
                    'grapesjs-image-plugin',
                    'grapesjs-blocks-flexbox',
                    'grapesjs-blocks-bootstrap4'
                ],
                pluginsOpts: {
                    'gjs-blocks-basic': {
                        flexGrid: true
                    },
                    'grapesjs-image-plugin': {}
                    'grapesjs-blocks-flexbox': {
                        // options
                    }
                },
                canvas: {
                    styles: [
                        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
                    ],
                    scripts: [
                        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'
                    ]
                }

            });
        };
    </script>
</body>

</html>
