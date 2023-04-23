<?php
$sitename = "$_SERVER[HTTP_HOST]";
$link = "https://www.resellerbytes.com";
$credit = "ResellerBytes";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keywords' content='coming soon page, ResellerBytes'>
    <meta name='description' content='This is a landing page created by ResellerBytes'>
    <meta name='copyright' content='<?php echo $sitename; ?>'>
    <meta name='language' content='EN'>
    <meta name='robots' content='index,follow'>
    <meta name='author' content='ResellerBytes, info@resellerbytes.com'>
    <meta name='designer' content='ResellerBytes'>
    <meta name='reply-to' content='support@resellerbytes.com'>
    <meta name='owner' content='DiligentCretors'>
    <meta name='url' content='http://www.resellerbytes.com'>
    <meta name='identifier-URL' content='http://www.resellerbytes.com'>
    <meta http-equiv='Cache-Control' content='no-cache'>
    <title>.:: <?php echo $sitename; ?> Proudly Hosted by <?php echo $credit; ?>! ::..</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="maintenance/layout.css">
</head>

<body>
    <div id="particles-js"></div>

    <section id="ResellerBytes">
        <div class="container">
            <div class="logo">
                <div class="credit">
                    <span>Proudly hosted by</span>
                </div>
                <a href="https://www.resellerbytes.com?utm_source=<?php echo $sitename; ?>&utm_medium=<?php echo $sitename; ?>&utm_campaign=hostedpage&utm_id=<?php echo $sitename; ?>"><img src="maintenance/logo.png" alt="<?php echo $credit; ?>"></a>
            </div>
            <div class="sitename">
                <div class="scale__container--js">
                    <h1 class="scale--js"><?php echo $sitename; ?></h1>
                </div>
            </div>

            <div class="content">
                <div class="scale__container--js">
                    <h2 class="scale--js">Coming Soon...</h2>
                </div>
            </div>

            <div class="nagivation">
                <a class="owner" href="https://portal.resellerbytes.com?utm_source=owner&utm_medium=<?php echo $sitename; ?>&utm_campaign=hostedpage&utm_id=<?php echo $sitename; ?>">Site Owner</a>
                <a class="visitor" href="https://www.resellerbytes.com?utm_source=visitor&utm_medium=<?php echo $sitename; ?>&utm_campaign=hostedpage&utm_id=<?php echo $sitename; ?>">Visitor</a>
            </div>
        </div>

        <div class="image">
            <img src="maintenance/small-background.jpg" class="responsive">
        </div>
    </section>

    <script src="maintenance/particles.min.js"></script>
    <script src="maintenance/app.js"></script>
    <script>
        function scaleHeader() {
            var scalable = document.querySelectorAll('.scale--js');
            var margin = 10;
            for (var i = 0; i < scalable.length; i++) {
                var scalableContainer = scalable[i].parentNode;
                scalable[i].style.transform = 'scale(1)';
                var scalableContainerWidth = scalableContainer.offsetWidth - margin;
                var scalableWidth = scalable[i].offsetWidth;
                scalable[i].style.transform = 'scale(' + scalableContainerWidth / scalableWidth + ')';
                scalableContainer.style.height = scalable[i].getBoundingClientRect().height + 'px';
            }
        }

        function debounce(func, wait, immediate) {
            var timeout;
            return function() {
                var context = this,
                    args = arguments;
                var later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        };
        var myScaleFunction = debounce(function() {
            scaleHeader();
        }, 250);
        myScaleFunction();
        window.addEventListener('resize', myScaleFunction);
    </script>
</body>

</html>