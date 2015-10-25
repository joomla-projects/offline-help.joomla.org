<?php ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
    <head>
        <title>Joomla! Help Site</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow" />
        <meta name="author" content="Joomla!" />
        <meta name="description" content="Joomla! is the mobile-ready and user-friendly way to build your website. Choose from thousands of features and designs. Joomla! is free and open source." />
        <meta property="og:image" content="https://cdn.joomla.org/images/joomla-org-og.jpg" />
        <meta property="og:site_name" content="Joomla! Help Site" />
       	<meta name="twitter:card" content="summary" />
       	<meta name="twitter:site" content="@joomla" />
        <meta name="twitter:title" content="Joomla! Help Site" />
       	<meta name="twitter:description" content="The Platform Millions of Websites Are Built On" />
       	<meta name="twitter:image" content="https://cdn.joomla.org/images/joomla-org-og.jpg" />

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->
        <script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <script src="media/bootstrap.min.js" type="text/javascript"></script>
        <link href="//cdn.joomla.org/template/css/v3_template.min.css?v1.3.0" rel="stylesheet" media="all" />
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
        <style type="text/css">
            h1, h2, h3, h4, h5, h6, .site-title {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    </head>
    <body class="site">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="nav-collapse">
                        <ul id="nav-joomla" class="nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span aria-hidden="true" class="icon-joomla"></span> Joomla!<sup>&reg;</sup> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="https://www.joomla.org">
                                            <span aria-hidden="true" class="icon-joomla"></span> Joomla! Home
                                        </a>
                                    </li>
                                    <li class="divider"><span></span></li>
                                    <li class="nav-header"><span>Recent News</span></li>
                                    <li><a href="https://www.joomla.org/announcements.html">Announcements</a></li>
                                    <li><a href="http://community.joomla.org/blogs/community.html">Blogs</a></li>
                                    <li><a href="http://magazine.joomla.org/">Magazine</a></li>
                                    <li class="divider"><span></span></li>
                                    <li class="nav-header"><span>Support Joomla!</span></li>
                                    <li><a href="https://volunteers.joomla.org">Contribute</a></li>
                                    <li><a href="http://shop.joomla.org">Shop Joomla Gear</a></li>
                                    <li><a href="https://www.joomla.org/sponsorship">Sponsorship</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.joomla.org/about-joomla.html">About Joomla!</a>
                                    <li><a href="https://www.joomla.org/core-features.html">Core Features</a>
                                    <li><a href="https://www.joomla.org/about-joomla.html">The Software</a></li>
                                    <li><a href="https://www.joomla.org/about-joomla/the-project.html">The Project</a></li>
                                    <li><a href="https://www.joomla.org/about-joomla/the-project/leadership-team.html">Leadership</a></li>
                                    <li><a href="http://opensourcematters.org">Open Source Matters</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Community <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://community.joomla.org">Joomla! Community Portal</a></li>
                                    <li><a href="https://events.joomla.org/">Joomla! Events</a></li>
                                    <li><a href="http://community.joomla.org/user-groups.html">Joomla! User Groups</a></li>
                                    <li><a href="https://volunteers.joomla.org">Joomla! Volunteers Portal</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Support <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://forum.joomla.org">Joomla! Forum</a></li>
                                    <li><a href="https://docs.joomla.org">Joomla! Documentation</a></li>
                                    <li><a href="http://issues.joomla.org">Joomla! Issue Tracker</a></li>
                                    <li><a href="http://resources.joomla.org">Joomla! Resources</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Read <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://magazine.joomla.org">Joomla! Magazine</a></li>
                                    <li><a href="http://community.joomla.org/connect.html">Joomla! Connect</a></li>
                                    <li><a href="https://www.joomla.org/mailing-lists.html">Joomla! Mailing Lists</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Extend <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://extensions.joomla.org">Extension Directory</a></li>
                                    <li><a href="http://community.joomla.org/showcase">Showcase Directory</a></li>
                                    <li><a href="http://resources.joomla.org">Resource Directory</a></li>
                                    <li><a href="http://community.joomla.org/translations.html">Translations</a></li>
                                    <li><a href="http://ideas.joomla.org">Idea Pool</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Developers <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://developer.joomla.org">Developer Site</a></li>
                                    <li><a href="https://docs.joomla.org">Documentation</a></li>
                                    <li><a href="https://docs.joomla.org/Bug_Squad">Joomla! Bug Squad</a></li>
                                    <li><a href="https://api.joomla.org">Joomla! API</a></li>
                                    <li><a href="http://joomlacode.org">JoomlaCode</a></li>
                                    <li><a href="http://framework.joomla.org">Joomla! Framework</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="nav-international" class="nav pull-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span aria-hidden="true" class="icon-earth"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://community.joomla.org/translations.html">Translations</a></li>
                                    <li><a href="https://demo.joomla.org/multilingual">Multilingual Demo</a></li>
                                    <li><a href="https://docs.joomla.org/Translations_Working_Group">Translation Working Group</a></li>
                                    <li><a href="http://forum.joomla.org/viewforum.php?f=11">Translations Forum</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <header class="header">
            <div class="container">
                <div class="row-fluid">
                    <div class="span7">
                        <h1 class="page-title">Joomla! Help Site</h1>
                    </div>
                    <div class="span5">
                        <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                                <a href="https://www.joomla.org/download.html" class="btn btn-large btn-warning">Download</a>
                            </div>
                            <div class="btn-group">
                                <a href="https://demo.joomla.org" class="btn btn-large btn-primary">Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="subnav-wrapper">
            <div class="subnav">
                <div class="container">
                    <ul class="nav menu nav-pills">
                        <li>
                            <a href="//help.joomla.org">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="body">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="alert alert-info">
                            <h4>Help Site Offline</h4>
                            <p>The Joomla Help Site has been taken offline.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer center">
            <div class="container">
	            <hr />
                <div class="social">
                    <ul class="soc">
                        <li><a href="https://twitter.com/joomla" target="_blank" class="soc-twitter2" title="Follow Us on Twitter"></a></li>
                        <li><a href="https://www.facebook.com/joomla" target="_blank" class="soc-facebook" title="Joomla! on Facebook"></a></li>
                        <li><a href="https://plus.google.com/+joomla/posts" target="_blank" class="soc-google" title="Joomla! on Google+"></a></li>
                        <li><a href="https://www.youtube.com/user/joomla" target="_blank" class="soc-youtube3" title="Joomla's YouTube Channel"></a></li>
                        <li><a href="https://www.linkedin.com/company/joomla" target="_blank" class="soc-linkedin" title="Joomla! on Linkedin"></a></li>
                        <li><a href="https://www.pinterest.com/joomla" target="_blank" class="soc-pinterest" title="Joomla's Pintrest Board"></a></li>
                        <li><a href="https://github.com/joomla" target="_blank" class="soc-github3 soc-icon-last" title="Joomla's GitHub"></a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <ul class="nav-inline">
                        <li><a href="https://www.joomla.org"><span>Home</span></a></li>
                        <li><a href="https://www.joomla.org/about-joomla.html"><span>About</span></a></li>
                        <li><a href="http://community.joomla.org"><span>Community</span></a></li>
                        <li><a href="http://forum.joomla.org"><span>Forum</span></a></li>
                        <li><a href="http://extensions.joomla.org"><span>Extensions</span></a></li>
                        <li><a href="http://resources.joomla.org"><span>Resources</span></a></li>
                        <li><a href="https://docs.joomla.org"><span>Docs</span></a></li>
                        <li><a href="http://developer.joomla.org"><span>Developer</span></a></li>
                        <li><a href="http://shop.joomla.org"><span>Shop</span></a></li>
                    </ul>

                    <ul class="nav-inline">
                        <li><a href="https://www.joomla.org/accessibility-statement.html">Accessibility Statement</a></li>
                        <li><a href="https://www.joomla.org/privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="https://www.rochen.com/joomla-hosting" target="_blank">Joomla Hosting by Rochen</a></li>
                    </ul>

                    <p>&copy; 2005 - 2015 <a href="http://www.opensourcematters.org">Open Source Matters, Inc.</a> All rights reserved.</p>
                </div>
            </div>
        </div>

        <script type="text/javascript">
       		jQuery(document).ready(function($) {
       			var navTop;
       			var isFixed = false;

       			$('.hasTooltip').tooltip();
       			processScrollInit();
       			processScroll();

       			function processScrollInit() {
       				if ($('.subnav-wrapper').length) {
       					navTop = $('.subnav-wrapper').length && $('.subnav-wrapper').offset().top - 30;

       					// Fix the container top
       					$('.body .container-main').css('top', $('.subnav-wrapper').height() + $('nav.navbar').height());

       					// Only apply the scrollspy when the toolbar is not collapsed
       					if (document.body.clientWidth > 480) {
       						$('.subnav-wrapper').height($('.subnav').height());
       						$('.subnav').affix({
       							offset: {top: $('.subnav').offset().top - $('nav.navbar').height()}
       						});
       					}
       				}
       			}

       			function processScroll() {
       				if ($('.subnav-wrapper').length) {
       					var scrollTop = $(window).scrollTop();
       					if (scrollTop >= navTop && !isFixed) {
       						isFixed = true;
       						$('.subnav-wrapper').addClass('subhead-fixed');

       						// Fix the container top
       						$('.body .container-main').css('top', $('.subnav-wrapper').height() + $('nav.navbar').height());
       					} else if (scrollTop <= navTop && isFixed) {
       						isFixed = false;
       						$('.subnav-wrapper').removeClass('subhead-fixed');
       					}
       				}
       			}
       		});
       	</script>
    </body>
</html>
