<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
     <style type="text/css">
         .dropdown-menu {
    margin-top: 0;
}
.dropdown-menu .dropdown-toggle::after {
    vertical-align: middle;
    border-left: 4px solid;
    border-bottom: 4px solid transparent;
    border-top: 4px solid transparent;
}
.dropdown-menu .dropdown .dropdown-menu {
    left: 100%;
    top: 0%;
    margin:0 20px;
    border-width: 0;
}

.dropdown-menu > li a:hover,
.dropdown-menu > li.show {
    background: #007bff;
    color: white;
}
.dropdown-menu > li.show > a{
    color: white;
}

@media (min-width: 768px) {
    .dropdown-menu .dropdown .dropdown-menu {
        margin:0;
        border-width: 1px;
    }
}
     </style>
    <title>Multi level hover dropdown Navbar for bootstrap 4</title>
    <meta name="description" content="Multi level hover dropdown Navbar for bootstrap 4">
    <meta name="keywords" content="Multi level hover dropdown Navbar for bootstrap 4">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <div class="dropdown-divider"></div>
                        <li></li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li></li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li class="nav-item dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <div class="dropdown-divider"></div>
                                                <li></li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        (function($) {
    var defaults={
        sm : 540,
        md : 720,
        lg : 960,
        xl : 1140,
        navbar_expand: 'lg'
    };
    $.fn.bootnavbar = function() {

        var screen_width = $(document).width();

        if(screen_width >= defaults.lg){
            $(this).find('.dropdown').hover(function() {
                $(this).addClass('show');
                $(this).find('.dropdown-menu').first().addClass('show').addClass('animated fadeIn').one('animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd', function () {
                    $(this).removeClass('animated fadeIn');
                });
            }, function() {
                $(this).removeClass('show');
                $(this).find('.dropdown-menu').first().removeClass('show');
            });
        }

        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
          if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
          }
          var $subMenu = $(this).next(".dropdown-menu");
          $subMenu.toggleClass('show');

          $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
          });

          return false;
        });
    };
})(jQuery);
    </script>
    <script>
        $(function () {
            $('#main_navbar').bootnavbar();
        })
    </script>
</body>

</html>