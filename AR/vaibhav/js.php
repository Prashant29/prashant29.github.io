
<head>
    <title>Gyanchat AR (Web Demo)</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="demo-styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Loads <model-viewer> for modern browsers: -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js">
    </script>

    <!-- Loads <model-viewer> for old browsers like IE11: -->
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js">
    </script>

    <!-- The following libraries and polyfills are recommended to maximize browser support -->
    <!-- NOTE: you must adjust the paths as appropriate for your project -->

    <!-- 🚨 REQUIRED: Web Components polyfill to support Edge and Firefox < 63 -->
    <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script>

    <!-- 💁 OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
    <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>

    <!-- 💁 OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
    <script src="https://unpkg.com/resize-observer-polyfill@1.5.1/dist/ResizeObserver.js"></script>

    <!-- 💁 OPTIONAL: Fullscreen polyfill is required for experimental AR features in Canary -->
    <!--<script src="https://unpkg.com/fullscreen-polyfill@1.0.2/dist/fullscreen.polyfill.js"></script>-->

    <!-- 💁 OPTIONAL: Include prismatic.js for Magic Leap support -->
    <script src="https://unpkg.com/@magicleap/prismatic@0.18.2/prismatic.min.js"></script>