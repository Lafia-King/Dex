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
        <title>Dexterr - Dashboard</title>

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
        <!--<link href="js/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">-->
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
                        <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="" alt="dexterr logo"></a> <span class="logo-text">Materialize</span></h1>
                        <ul class="right hide-on-med-and-down">
                            <li class="search-out">
                                <input type="text" class="search-out-text">
                            </li>
                            <li>    
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>                              
                            </li>
                            <!--                            <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                                                        </li>-->
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
                <section id="content">

                    <!--updates-->
                    <!--                <div id="card-stats">
                                        <div class="row">
                                            <div class="col s12 m6 l3">
                                                <div class="card">
                                                    <div class="card-content  green white-text">
                                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                                        <h4 class="card-stats-number">566</h4>
                                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                                        </p>
                                                    </div>
                                                    <div class="card-action  green darken-2">
                                                        <div id="clients-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3">
                                                <div class="card">
                                                    <div class="card-content purple white-text">
                                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                                        <h4 class="card-stats-number">$8990.63</h4>
                                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                                        </p>
                                                    </div>
                                                    <div class="card-action purple darken-2">
                                                        <div id="sales-compositebar"></div>
                    
                                                    </div>
                                                </div>
                                            </div>                            
                                            <div class="col s12 m6 l3">
                                                <div class="card">
                                                    <div class="card-content blue-grey white-text">
                                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                                        <h4 class="card-stats-number">$806.52</h4>
                                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                                        </p>
                                                    </div>
                                                    <div class="card-action blue-grey darken-2">
                                                        <div id="profit-tristate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3">
                                                <div class="card">
                                                    <div class="card-content deep-purple white-text">
                                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                                        <h4 class="card-stats-number">1806</h4>
                                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                                        </p>
                                                    </div>
                                                    <div class="card-action  deep-purple darken-2">
                                                        <div id="invoice-line"></div>
                                                    </div>
                                                </div>
                                            </div>                            
                                        </div>
                                    </div>-->
                    <!--updates end-->

                    <!--summaries-->
                    <div class="row">
                        <div class="col s12 m6 l3"><p>
                            <div>Current transaction</div>
                            <div class="card light-blue" style="margin-top: -1px;">
                                <div class="card-action">
                                    <span>$13,402,853,260</span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3"><p>
                            <div>Next Due</div>
                            <div class="card pink" style="margin-top: -1px;">
                                <div class="card-action">
                                    <span>$13,402,853,260</span>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l3"><p>
                            <div>Most Recent</div>
                            <div class="card purple" style="margin-top: -1px;">
                                <div class="card-action">
                                    <span>$13,402,853,260</span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3"><p>
                            <div>All-time Total</div>
                            <div class="card teal" style="margin-top: -1px;">
                                <div class="card-action">
                                    <span>$13,402,853,260</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--summaries end-->

                    <div class="row col s12 m12 l8">
                        <div class="row col s12 m12 l8">
                            <ul class="tabs">
                                <li class="tab col s1"><a class="white-text light-blue darken-1 waves-effect waves-light" href="#tab1"><i class="mdi-action-perm-identity"></i>Tab 1</a></li>
                                <li class="tab col s1"><a class="white-text pink darken-1 waves-effect waves-light" href="#test2"><i class="mdi-action-perm-identity"></i>In Progress</a></li>
                                <li class="tab col s1"><a class="white-text purple darken-1 waves-effect waves-light" href="#test3"><i class="mdi-action-perm-identity"></i>Upcoming</a></li>
                                <li class="tab col s1"><a class="white-text teal darken-1 waves-effect waves-light" href="#test4"><i class="mdi-action-perm-identity"></i>Paid</a></li>
                            </ul>
                        </div>
                        <!--tab1-->
                        <div id="tab1" class="col s12 m12 l12">
                            <table id="example" class="responsive-table display" cellspacing="0" width="100%">
                                <thead>
                                    <tr style="background-color: lightblue">
                                        <th>Debtor</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Due</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr style="background-color: lightblue">
                                        <th>Debtor</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Due</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--tab1 end-->
                        <!--tab2-->
                        <div id="test2" class="col s12">
                            Test 2
                        </div>
                        <!--tab2 end-->
                        <!--tab3-->
                        <div id="test3" class="col s12">
                            Test 3
                        </div>
                        <!--tab3 end-->
                        <!--tab4-->
                        <div id="test4" class="col s12">
                            Test 4
                        </div>
                        <!--tab4 end-->
                    </div>

                    <div id="work-collections" class="seaction">
                        <div class="row">
                            <!--sold-->
                            <div class="col s12 m12 l6">
                                <!--<h4 class="header">Debts Sold</h4>-->
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-file-folder circle light-blue"></i>
                                        <span class="collection-header">Debts Sold</span>
                                        <p>Your Favorites</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s6">
                                                    <p class="collections-title">Last 30 days</p>
                                                    <p class="collections-content">AEC Company</p>
                                                </div>
                                                <div class="col s3">
                                                    <span class="task-cat cyan">Development</span>
                                                </div>
                                                <div class="col s3">
                                                    <div id="project-line-1"></div>
                                                </div>
                                            </div></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s6">
                                                    <p class="collections-title">Debts on bid</p>
                                                    <p class="collections-content">iSocial App</p>
                                                </div>
                                                <div class="col s3">
                                                    <span class="task-cat grey darken-3">UI/UX</span>
                                                </div>
                                                <div class="col s3">
                                                    <div id="project-line-2"></div>
                                                </div>
                                            </div></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s6">
                                                    <p class="collections-title">Closed bids</p>
                                                    <p class="collections-content">MediTab</p>
                                                </div>
                                                <div class="col s3">
                                                    <span class="task-cat teal">Marketing</span>
                                                </div>
                                                <div class="col s3">
                                                    <div id="project-line-3"></div>
                                                </div>
                                            </div></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s6">
                                                    <p class="collections-title">Closed debts</p>
                                                    <p class="collections-content">True Line</p>
                                                </div>
                                                <div class="col s3">
                                                    <span class="task-cat green">SEO</span>
                                                </div>
                                                <div class="col s3">
                                                    <div id="project-line-4"></div>
                                                </div>
                                            </div></a>
                                    </li>
                                </ul>
                            </div>
                            <!--sold ends-->

                            <!--purchased-->
                            <div class="col s12 m12 l6">
                                <!--                            <h4 class="header">Debts Purchased</h4>-->
                                <ul id="issues-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-bug-report red circle"></i>
                                        <span class="collection-header">Debts Purchased</span>
                                        <p>Assigned to you</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s7">
                                                    <p class="collections-title">Last 30 days</p>
                                                    <p class="collections-content">Web Project</p>
                                                </div>
                                                <div class="col s2">
                                                    <span class="task-cat pink accent-2">P1</span>
                                                </div>
                                                <div class="col s3">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 70%"></div>   
                                                    </div>                                                
                                                </div>
                                            </div></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s7">
                                                    <p class="collections-title">Bidding in progress</p>
                                                    <p class="collections-content">API Project </p>
                                                </div>
                                                <div class="col s2">
                                                    <span class="task-cat yellow darken-4">P2</span>
                                                </div>
                                                <div class="col s3">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 40%"></div>   
                                                    </div>                                                
                                                </div>
                                            </div></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s7">
                                                    <p class="collections-title">Bids won</p>
                                                    <p class="collections-content">New Project </p>
                                                </div>
                                                <div class="col s2">                                                
                                                    <span class="task-cat light-green darken-3">P3</span>
                                                </div>
                                                <div class="col s3">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 95%"></div>   
                                                    </div>                                                
                                                </div>
                                            </div></a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#"><div class="row">
                                                <div class="col s7">
                                                    <p class="collections-title">Debts closed</p>
                                                    <p class="collections-content">SAP Project</p>
                                                </div>
                                                <div class="col s2">
                                                    <span class="task-cat pink accent-2">P1</span>
                                                </div>
                                                <div class="col s3">
                                                    <div class="progress">
                                                        <div class="determinate" style="width: 10%"></div>   
                                                    </div>                                                
                                                </div>
                                            </div></a>
                                    </li>
                                </ul>
                            </div>
                            <!--purchased ends-->
                        </div>
                    </div>


                </section>
                <!-- END CONTENT -->

                <!-- START RIGHT SIDEBAR NAV-->
                <aside id="right-sidebar-nav">
                    <ul id="chat-out" class="side-nav rightside-navigation">
                        <li class="li-hover">
                            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                            <div id="right-search" class="row">
                                <form class="col s12">
                                    <div class="input-field">
                                        <i class="mdi-action-search prefix"></i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Search</label>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="li-hover">
                            <ul class="chat-collapsible" data-collapsible="expandable">
                                <li>
                                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                                    <div class="collapsible-body recent-activity">
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="#">just now</a>
                                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="#">Yesterday</a>
                                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="#">5 Days Ago</a>
                                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="#">Last Week</a>
                                                <p>Jessy Jay open a new store at S.G Road.</p>
                                            </div>
                                        </div>
                                        <div class="recent-activity-list chat-out-list row">
                                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                            </div>
                                            <div class="col s9 recent-activity-list-text">
                                                <a href="#">5 Days Ago</a>
                                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                                    <div class="collapsible-body sales-repoart">
                                        <div class="sales-repoart-list  chat-out-list row">
                                            <div class="col s8">Target Salse</div>
                                            <div class="col s4"><span id="sales-line-1"></span>
                                            </div>
                                        </div>
                                        <div class="sales-repoart-list chat-out-list row">
                                            <div class="col s8">Payment Due</div>
                                            <div class="col s4"><span id="sales-bar-1"></span>
                                            </div>
                                        </div>
                                        <div class="sales-repoart-list chat-out-list row">
                                            <div class="col s8">Total Delivery</div>
                                            <div class="col s4"><span id="sales-line-2"></span>
                                            </div>
                                        </div>
                                        <div class="sales-repoart-list chat-out-list row">
                                            <div class="col s8">Total Progress</div>
                                            <div class="col s4"><span id="sales-bar-2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                                    <div class="collapsible-body favorite-associates">
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Eileen Sideways</p>
                                                <p class="place">Los Angeles, CA</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Zaham Sindil</p>
                                                <p class="place">San Francisco, CA</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Renov Leongal</p>
                                                <p class="place">Cebu City, Philippines</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Weno Carasbong</p>
                                                <p>Tokyo, Japan</p>
                                            </div>
                                        </div>
                                        <div class="favorite-associate-list chat-out-list row">
                                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                            </div>
                                            <div class="col s8">
                                                <p>Nusja Nawancali</p>
                                                <p class="place">Bangkok, Thailand</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
                <!-- END RIGHT SIDEBAR NAV-->

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
        <!--dex js-->
        <script type="text/javascript" src="js/dex.js"></script>
        <!--prism-->
        <script type="text/javascript" src="js/prism.js"></script>
        <!--scrollbar-->
        <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <!-- data-tables -->
        <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
        <!--data-tables end-->
        <!--sweetalert -->
        <!--<script type="text/javascript" src="js/plugins/sweetalert/sweetalert.min.js"></script>-->   
        <!--sweetalert-->

        <script>
            $(document).ready(function () {
                $('ul.tabs').tabs();
                dashboard();
            });
        </script>
<!--        <script>
            "use strict";
            $('.btn-success').click(function () {
                swal("Good job!", "You clicked the button!", "success");
            });
        </script>-->

        <!--                 chartist 
                        <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
                
                         chartjs 
                        <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
                        <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>
                
                         sparkline 
                        <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
                        <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
                
                        jvectormap
                        <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                        <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                        <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>-->


        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="js/plugins.js"></script>

        <!-- Toast Notification -->
        <script type="text/javascript">
            // Toast Notification
            $(window).load(function () {
                setTimeout(function () {
                    Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
                }, 3000);
                setTimeout(function () {
                    Materialize.toast('<span>You can swipe me too!</span>', 3000);
                }, 5500);
                setTimeout(function () {
                    Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
                }, 18000);
            });

        </script>
    </body>

</html>