<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link href="{{ asset('grapesjs/css/grapes.min.css') }}" rel="stylesheet">
    <script src="{{ asset('grapesjs/js/grapes.min.js') }}"></script>
    <script src="{{ asset('grapesjs/js/grapesjs-preset-webpage.js') }}"></script>
    <script src="{{ asset('grapesjs/js/grapesjs-preset-newsletter.js') }}"></script>
    <script src="{{ asset('grapesjs/js/grapesjs-navbar.js') }}"></script>
    <script src="{{ asset('grapesjs/js/grapesjs-plugin-forms.js') }}"></script>
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
        {!! $page->content !!}
    </div>
    <div id="blocks"></div>


    <script type="text/javascript">
        window.onload = () => {
            const projectId = '{{$page->id}}'
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
                    'grapesjs-plugin-forms'
                ],
                pluginsOpts: {

                },
                canvas: {

                },
                storageManager: {
                    type: 'local', // Type of the storage, available: 'local' | 'remote'
                    autosave: true, // Store data automatically
                    autoload: true, // Autoload stored data on init
                    stepsBeforeSave: 1, // If autosave enabled, indicates how many changes are necessary before store method is triggered
                    options: {
                        local: { // Options for the `local` type
                            key: projectId, // The key for the local storage
                        },
                    }
                }

            });
        };
    </script>
</body>

</html>
