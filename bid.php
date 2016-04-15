<!DOCTYPE html>
<html lang="en">

    <!--================================================================================
            Item Name: Materialize - Material Design Admin Template
            Version: 1.0
            Author: GeeksLabs
            Author URL: http://www.themeforest.net/user/geekslabs
    ================================================================================ -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title>Deterr - Bid</title>

        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->    
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
        <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!--<link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">-->
        <!--<link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">-->


    </head>

    <body>
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->

        <!-- START HEADER -->
        <header id="header" class="page-topbar">
            <!-- start header nav-->
            <div class="navbar-fixed">
                <nav class="cyan darken-2">
                    <div class="nav-wrapper">
                        <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="" alt="dexterr logo"></a> <span class="logo-text">Dexterr</span></h1>
                        <ul class="right hide-on-med-and-down">
                            <li class="search-out">
                                <input type="text" class="search-out-text">
                            </li>
                            <li>    
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>                              
                            </li>
                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                            </li>
                            <!-- Dropdown Trigger -->                        
                            <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end header nav-->

        </header>
        <!-- END HEADER -->

        <!-- START MAIN -->
        <div id="main">

            <!-- START WRAPPER -->
            <div class="wrapper">

                <!-- START LEFT SIDEBAR NAV-->
                <aside id="left-sidebar-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                                </div>
                                <div class="col col s8 m8 l8">
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                        </li>
                                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                        </li>
                                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                        </li>
                                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                        </li>
                                    </ul>
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                    <p class="user-roal">Dexterr</p>
                                </div>
                            </div>
                        </li>

                        <li class="bold"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Dashboard</a>
                        </li>

                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i>Progress Tracking</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="css-typography.html">Debtors</a>
                                            </li>                                        
                                            <li><a href="css-icons.html">Creditors</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="li-hover"><div class="divider"></div></li>
                        <li class="bold"><a href="sales.php" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i>Sales<span class="new badge">4</span></a>
                        </li>
                        <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i>Watch List</a>
                        </li>
                        <li class="li-hover"><div class="divider"></div></li>
                        <li class="bold"><a href="purchases.php" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i>Purchases/Bids<span class="new badge">4</span></a>
                        </li>
                        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>All Lists</a>
                        </li>
                        <li class="li-hover"><div class="divider"></div></li>
                        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>History</a>
                        </li>

                    </ul>
                    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
                </aside>
                <!-- END LEFT SIDEBAR NAV-->

                <!-- START CONTENT -->

                <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h5 class="breadcrumbs-nav">Sales</h5>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="purchases.php">Purchases</a></li>
                                    <li class="active">Bid</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs end-->

                <!--style="display:inline"-->

                <!--bid panel-->
                <div class="col s12 m12 l12">
                    <!--bid info-->
                    <div class="container">
                        <div id='info' class="row col s12 m12 l12">
                            <!--function displayDebtinfo() in dex.js-->
                        </div>
                    </div>
                    <!--bid info end-->
                    <!--bid tabs-->
                    <p></p>
                    <div class="row">
                        <div class="col s12 m8 l6">
                            <ul class="tabs z-depth-1" style="border: black">
                                <li class="tab col s3"><a  class="active white-text red darken-1 waves-effect waves-light" href="#bidTab"><i class="mdi-action-perm-identity"></i>Bid</a></li>
                                <li class="tab col s3"><a class="white-text blue darken-1 waves-effect waves-light" href="#historyTab" onclick="ry()"><i class="mdi-action-history"></i>Auction History</a></li>
                            </ul>
                        </div>
                        <!--bid info-->
                        <div id="bidTab" class="col s12 m12 l12">
                            <!--function displayBidInfo() in dex.js-->
                        </div>
                        <!--history-->
                        <div id="historyTab" class="col s12 m12 l12">
                            <table id="historyTables" class="responsive-table display" cellspacing="0" width="100%">
                                <!--function generateTables()/ dislpayHistory() in dex.js-->
                            </table>
                        </div>

                    </div>

                    <!--</div>-->
                </div>
                <!--bid panel end-->



                <!--END CONTENT-->

            </div>
            <!-- END WRAPPER -->

        </div>
        <!-- END MAIN -->

        <!-- START FOOTER -->
        <footer class="page-footer">
            <!--<div class="container">-->
            <!--                <div class="row">
                                <div class="col l6 s12">
                                    <h5 class="white-text">World Market</h5>
                                    <p class="grey-text text-lighten-4">World map, world regions, countries and cities.</p>
                                    <div id="world-map-markers"></div>
                                </div>
                                <div class="col l4 offset-l2 s12">
                                    <h5 class="white-text">Sales by Country</h5>
                                    <p class="grey-text text-lighten-4">A sample polar chart to show sales by country.</p>
                                    <div id="polar-chart-holder">
                                        <canvas id="polar-chart-country" width="200"></canvas>
                                    </div>
                                </div>
                            </div>-->
            <!--</div>-->
            <div class="footer-copyright">
                <div class="container">
                    Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.
                    <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->


        <!-- ================================================
        Scripts
        ================================================ -->

        <!-- jQuery Library -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
        <!--materialize js-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <!--scrollbar-->
        <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <!--dex js-->
        <script type="text/javascript" src="js/dex.js"></script>
        <!-- data-tables -->
        <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
        <!--data-tables end-->



        <script>
                                    $(document).ready(function () {
//                                        $('ul.tabs').tabs();
//                                        $('.tooltipped').tooltip({delay: 50});
                                        displayDebtInfo();
                                        displayBidInfo();
//                                        bidHistory();
                                        GenerateTable();
                                    });
        </script>  

        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="js/plugins.js"></script>
        <!--js scripts-->
        <!--        <script>
                    $('.datepicker').pickadate();
                </script>
                <script>
                    $(document).ready(function () {
                        $('input#input_text, textarea#textarea1').characterCounter();
                    });
                </script>-->
    </body>

</html>