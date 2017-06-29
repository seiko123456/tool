<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" >
<meta charset="UTF-8" >
<title>What day is the date?</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet" >
<style>
    body {
        background: #EEE;
        padding: 12px;
    }

    h1 {
        font-size: 36px;
        margin: 18px 0;
    }

    input[type=text] {
        font-size: 36px;
        width: 96%;
    }

    p {
        font-size: 36px;
        margin: 18px 0;
    }
</style>
</head>
<body>
<h1>What day is the date?</h1>
<input type="text" />
<p></p>
<script>
(function() {
    var input = document.querySelector('input'),
        p = document.querySelector('p'),
        date = new Date();

    input.value = date.toISOString().slice(0, 10).replace(/-/g, '');

    var calculate = function() {
        var value = input.value;

        date.setFullYear(value.substr(0, 4) ^ 0, (value.substr(4, 2) ^ 0) - 1, value.substr(6, 2) ^ 0);

        var answer = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        ][date.getDay()];
        
        p.innerHTML = answer;
    };

    calculate();

    input.addEventListener('input', calculate, false);
})();
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Whatday -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821434700708607"
     data-ad-slot="2132839991"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-6851063-2', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>