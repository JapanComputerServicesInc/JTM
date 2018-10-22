<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100" rel="stylesheet">

    <!-- Styles -->
    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    {{--
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css') }}"> {{--
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lineicons/style.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">


    <script src="{{ asset('js/chart-master/Chart.js') }}"></script>


</head>

<body>
    <div id="app">
        <section id="container">
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="{{route('terminal_index')}}" class="logo"><b>JCS Terminal Management</b></a>
                <!--logo end-->
                {{-- <div class="nav notify-row" id="top_menu"> --}}
                    <!--  notification start -->
                    {{-- <ul class="nav top-menu"> --}}
                        <!-- settings start -->
                        <!--<li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-tasks"></i>
                                <span class="badge bg-theme">4</span>
                            </a>
                            <ul class="dropdown-menu extended tasks-bar">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 4 pending tasks</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">DashGum Admin Panel</div>
                                            <div class="percent">40%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Database Update</div>
                                            <div class="percent">60%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Product Development</div>
                                            <div class="percent">80%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Payments Sent</div>
                                            <div class="percent">70%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only">70% Complete (Important)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <!--<li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-theme">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Zac Snider</span>
                                        <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hi mate, how is everything?
                                        </span>
                                    </a>
                                </li>-->
                        <!-- <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Divya Manian</span>
                                        <span class="time">40 mins.</span>
                                        </span>
                                        <span class="message">
                                         Hi, I need your help with this.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Dan Rogers</span>
                                        <span class="time">2 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Love your new Dashboard.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Dj Sherman</span>
                                        <span class="time">4 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Please, answer asap.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- inbox dropdown end -->
                    {{-- </ul> --}}
                    <!--  notification end -->
                {{-- </div> --}}
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li>
                            @if (!Auth::guest())
                                <button type="button" class="btn btn-theme02"  onclick="event.preventDefault();
                                                         document.getElementById('resister').submit();">Resister</button>
                                <form id="resister" action="{{ route('register') }}" style="display: none;">
                                </form>
                                <button type="button" class="btn btn-theme" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Logout</button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            @endif
                        </li>
                    </ul>
                </div>

            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
          MAIN SIDEBAR MENU
          *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><img src="{{asset('images/sub-dog.jpg')}}" class="img-circle" width="100"></a></p>
                        <h5 class="centered">Welcome To JTM!!</h5>
                        @if (Auth::guest())
                        @else
                            <li class="mt">
                                <a href="{{route('terminal_new')}}">
                                  <i class="fas fa-tachometer-alt"></i>
                                  <span>新規</span>
                              </a>
                            </li>
                        @endif

                        <li class="sub-menu active">
                            <a href="{{route('terminal_index')}}">
                              <i class="fa fa-desktop"></i>
                              <span>一覧</span>
                            </a>
                        </li>

                        @if (Auth::guest())
                        @else
                            <li class="sub-menu">
                                <a href="javascript:;" class="dcjq-parent"><i class="fa fa-cogs"></i><span>端末管理</span></a>
                                <ul class="sub">
                                    <li><a href="{{route('employee_index')}}">社員名簿</a></li>
                                    <li><a href="{{route('department_index')}}">部署</a></li>
                                    <li><a href="{{route('depository_index')}}">保管場所</a></li>
                                    <li><a href="{{route('terminal_info_index')}}">端末情報</a></li>
                                    <li><a href="{{route('office_index')}}">office情報</a></li>
                                </ul>
                            </li>
                        @endif

                      {{-- <li class="sub-menu">
                          <a href="javascript:;" >
                              <i class="fa fa-book"></i>
                              <span>Extra Pages</span>
                          </a>
                          <ul class="sub">
                              <li><a  href="blank.html">Blank Page</a></li>
                              <li><a  href="login.html">Login</a></li>
                              <li><a  href="lock_screen.html">Lock Screen</a></li>
                          </ul>
                      </li> --}}
                      <!--
                      <li class="sub-menu">
                          <a href="javascript:;" >
                              <i class="fa fa-tasks"></i>
                              <span>Forms</span>
                          </a>
                          <ul class="sub">
                              <li><a  href="form_component.html">Form Components</a></li>
                          </ul>
                      </li>
                      <li class="sub-menu">
                          <a href="javascript:;" >
                              <i class="fa fa-th"></i>
                              <span>Data Tables</span>
                          </a>
                          <ul class="sub">
                              <li><a  href="basic_table.html">Basic Table</a></li>
                              <li><a  href="responsive_table.html">Responsive Table</a></li>
                          </ul>
                      </li>
                      <li class="sub-menu">
                          <a href="javascript:;" >
                              <i class=" fa fa-bar-chart-o"></i>
                              <span>Charts</span>
                          </a>
                          <ul class="sub">
                              <li><a  href="morris.html">Morris</a></li>
                              <li><a  href="chartjs.html">Chartjs</a></li>
                          </ul>
                      </li>
 -->
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <section id="main-content">
                <section class="wrapper">
                    @yield('content')
                </section>
            </section>
        </section>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/jquery-1.8.3.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>

    <!--common script for all pages-->
    <script src="{{ asset('js/common-scripts.js')}}"></script>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}" type="text/javascript"></script>
    @if (Session::has('sweet_alert.alert'))
    <script>
        swal({
            text: "{!! Session::get('sweet_alert.text') !!}",
            title: "{!! Session::get('sweet_alert.title') !!}",
            timer: {!!Session::get('sweet_alert.timer') !!},
            icon: "{!! Session::get('sweet_alert.icon') !!}",
            closeOnClickOutside: false,
            // more options
        });
    </script>
    @endif
    {{-- <script>
        /*---LEFT BAR ACCORDION----*/

        $(function() {
            $('.selectpicker').selectpicker();
            $('#nav-accordion').dcAccordion({
                eventType: 'click',
                autoClose: true,
                saveState: true,
                disableLink: true,
                speed: 'slow',
                showCount: false,
                autoExpand: true,
                //        cookie: 'dcjq-accordion-1',
                classExpand: 'dcjq-current-parent'
            });
        });

        var Script = function () {


        //    sidebar dropdown menu auto scrolling

            jQuery('#sidebar .sub-menu > a').click(function () {
                var o = ($(this).offset());
                diff = 250 - o.top;
                if(diff>0)
                    $("#sidebar").scrollTo("-="+Math.abs(diff),500);
                else
                    $("#sidebar").scrollTo("+="+Math.abs(diff),500);
            });



            //    sidebar toggle

            $(function() {
                function responsiveView() {
                    var wSize = $(window).width();
                    if (wSize <= 768) {
                        $('#container').addClass('sidebar-close');
                        $('#sidebar > ul').hide();
                    }

                    if (wSize > 768) {
                        $('#container').removeClass('sidebar-close');
                        $('#sidebar > ul').show();
                    }
                }
                $(window).on('load', responsiveView);
                $(window).on('resize', responsiveView);
            });

            $('.fa-bars').click(function() {
                if ($('#sidebar > ul').is(":visible") === true) {
                    $('#main-content').css({
                        'margin-left': '0px'
                    });
                    $('#sidebar').css({
                        'margin-left': '-210px'
                    });
                    $('#sidebar > ul').hide();
                    $("#container").addClass("sidebar-closed");
                } else {
                    $('#main-content').css({
                        'margin-left': '210px'
                    });
                    $('#sidebar > ul').show();
                    $('#sidebar').css({
                        'margin-left': '0'
                    });
                    $("#container").removeClass("sidebar-closed");
                }
            });

            // custom scrollbar
            $("#sidebar").niceScroll({
                styler: "fb",
                cursorcolor: "#4ECDC4",
                cursorwidth: '3',
                cursorborderradius: '10px',
                background: '#404040',
                spacebarenabled: false,
                cursorborder: ''
            });

            $("html").niceScroll({
                styler: "fb",
                cursorcolor: "#4ECDC4",
                cursorwidth: '6',
                cursorborderradius: '10px',
                background: '#404040',
                spacebarenabled: false,
                cursorborder: '',
                zindex: '1000'
            });
            // widget tools

                jQuery('.panel .tools .fa-chevron-down').click(function () {
                    var el = jQuery(this).parents(".panel").children(".panel-body");
                    if (jQuery(this).hasClass("fa-chevron-down")) {
                        jQuery(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
                        el.slideUp(200);
                    } else {
                        jQuery(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
                        el.slideDown(200);
                    }
                });

                jQuery('.panel .tools .fa-times').click(function () {
                    jQuery(this).parents(".panel").parent().remove();
                });


            //    tool tips

                $('.tooltips').tooltip();

            //    popovers

                $('.popovers').popover();



            // custom bar chart

                if ($(".custom-bar-chart")) {
                    $(".bar").each(function () {
                        var i = $(this).find(".value").html();
                        $(this).find(".value").html("");
                        $(this).find(".value").animate({
                            height: i
                        }, 2000)
                    })
                }

        }();
    </script> --}}
    @yield('scripts')
    @yield('scripts2')
    @yield('scripts3')

    <script>
    $(function() {
        function responsiveView() {
            var wSize = $(window).width();
            if (wSize <= 768) {
                $('#container').addClass('sidebar-close');
                $('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                $('#container').removeClass('sidebar-close');
                $('#sidebar > ul').show();
            }
        }
        $(window).on('load', responsiveView);
        $(window).on('resize', responsiveView);

        $('#no_user').bind('click', function() {
            $(this.form).find("textarea, :text, select").val("");
        });
    });
    </script>
</body>

</html>
