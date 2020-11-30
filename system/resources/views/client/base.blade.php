<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blog Rico</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- Bootstrap 3.0.3 added, change to bootstrap.min.css and bootstrap-theme.min.css if you need the minified version -->

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{url('public')}}/css/animate.css" media="all"  />
        <link rel="stylesheet" href="{{url('public')}}/css/grid.css" media="all"  />
        <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" href="{{url('public')}}/css/bootstrap-theme.min.css" media="all" />
        <link rel="stylesheet" href="{{url('public')}}/css/hover.css" media="all" />
        <link rel="stylesheet" href="{{url('public')}}/css/cbxnewgridhover.css" media="all" />
        <link rel="stylesheet" href="{{url('public')}}/css/font-awesome.min.css" media="all" />
        <!-- <link rel="stylesheet" href="css/animate.css"> -->
        <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700|Raleway:400,300,500,700,600,900' rel='stylesheet' type='text/css'>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{url('public')}}/css/style.css" media="all" />

        <link rel="stylesheet" id="lz-switcher-style" href="{{url('public')}}/css/switcher-default.css" media="all" />


        <script src="{{url('public')}}/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- DNS Prefetch for Google Hosted libraries, Remove if you don't need that. -->
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    </head>
    <body>
    <!--[if lt IE 7]>
        <p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
        <![endif]-->
        <div class="cblzbody-wrapper">
            @include('client.section.header')
            @yield('content')
            @include('client.section.footer')
        <!-- End Your site ******* or ******* application content here -->
        </div><!-- lzbbones-body end here -->

        <!--  ####### site script content here ######## -->

        <script type="text/javascript" src="{{url('public')}}/js/vendor/jquery-1.11.1.min.js"></script>
        <!-- load if our contact form or email subscribe options is used -->
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <!-- if load google maps then load this api -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

        <!-- if load portfolio then load this plugin -->
        <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

        <script type="text/javascript" src="{{url('public')}}/js/grid.js"></script>

        <!-- wow effect plugin -->
        <script type="text/javascript" src="{{url('public')}}/js/wow.min.js"></script>

        <script type="text/javascript" src="{{url('public')}}/js/jquery.stellar.js"></script>

        <!-- load bootstrap js -->
        <script type="text/javascript" src="{{url('public')}}/js/bootstrap.min.js"></script>

        <!-- if use kk countdown plugin then use this plugin -->
        <script type="text/javascript" src="{{url('public')}}/js/kkcountdown.min.js"></script>

     <script type="text/javascript" src="{{url('public')}}/js/imagesloaded.pkgd.min.js"></script>

        <!-- Shuffle.min js -->
        <script src="{{url('public')}}/js/jquery.shuffle.min.js"></script>

        <!-- LZ Custom JS  -->
        <script type="text/javascript" src="{{url('public')}}/js/lz-custom.js"></script>

    </body>
</html>
