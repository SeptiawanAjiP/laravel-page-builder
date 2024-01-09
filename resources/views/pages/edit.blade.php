<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link href="{{asset('grapesjs/css/grapes.min.css')}}" rel="stylesheet">
    <script src="{{asset('grapesjs/js/grapes.min.js')}}"></script>
    <script src="{{asset('grapesjs/js/grapes-preset-webpage.js')}}"></script>
    <script src="https://unpkg.com/grapesjs-preset-newsletter"></script>
    <script src="https://unpkg.com/grapesjs-navbar"></script>
    <script src="https://unpkg.com/grapesjs-plugin-forms"></script>
    <script src="https://unpkg.com/grapesjs-image-plugin"></script>
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
        {!!$page->content!!}
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
                    'grapesjs-preset-webpage',
                    'grapesjs-preset-newsletter',
                    'grapesjs-navbar',
                    'grapesjs-plugin-forms',
                    'grapesjs-image-plugin'
                ],
                pluginsOpts: {
                    'grapesjs-image-plugin': {}
                }

            });
        };
    </script>
</body>

</html>
