<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trade Station</title>
        <meta name="description" content="The World's First Social B2B Platform">
        <meta name="keywords" content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
        <meta name="author" content="Hazem Zaki">
        <meta name="categories" content="E-Commerce">
        <meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
        <link href="<?php echo asset_url(); ?>images/home.ico" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo asset_url(); ?>css/station.css" rel="stylesheet">
        <link href="<?php echo asset_url(); ?>css/index.css" rel="stylesheet">
        <script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/wb.carousel.effects.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.2dtransform.js"></script>
        <script src="<?php echo asset_url(); ?>js/wb.carousel.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/searchindex.js"></script>
        <script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
        <script>
            var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
            var searchDatabase = new SearchDatabase();
            var searchResults_length = 0;
            var searchResults = new Object();
            function searchPage(features)
            {
                var element = document.getElementById('SiteSearch1');
                if (element.value.length != 0 || element.value != " ")
                {
                    var value = unescape(element.value);
                    var keywords = value.split(" ");
                    searchResults_length = 0;
                    for (var i = 0; i < database_length; i++)
                    {
                        var matches = 0;
                        var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
                        for (var j = 0; j < keywords.length; j++)
                        {
                            var pattern = new RegExp(keywords[j], "i");
                            var result = words.search(pattern);
                            if (result >= 0)
                            {
                                matches++;
                            } else
                            {
                                matches = 0;
                            }
                        }
                        if (matches == keywords.length)
                        {
                            searchResults[searchResults_length++] = searchDatabase[i];
                        }
                    }
                    var wndResults = window.open('about:blank', '', features);
                    setTimeout(function ()
                    {
                        var results = '';
                        var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Search results<\/title><\/head>';
                        html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
                        html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
                        for (var n = 0; n < searchResults_length; n++)
                        {
                            var page_keywords = searchResults[n].keywords;
                            results = results + '<strong><a style="color:#0000FF" target="_parent" href="' + searchResults[n].url + '">' + searchResults[n].title + '<\/a><\/strong><br>Keywords: ' + page_keywords + '<br><br>\n';
                        }
                        if (searchResults_length == 0)
                        {
                            results = 'No results';
                        } else
                        {
                            html = html + searchResults_length;
                            html = html + ' result(s) found for search term: ';
                            html = html + value;
                            html = html + '<br><br>';
                        }
                        html = html + results;
                        html = html + '<\/span>';
                        html = html + '<\/body><\/html>';
                        wndResults.document.write(html);
                    }, 100);
                }
                return false;
            }
            function searchParseURL()
            {
                var url = decodeURIComponent(window.location.href);
                if (url.indexOf('?') > 0)
                {
                    var terms = '';
                    var params = url.split('?');
                    var values = params[1].split('&');
                    for (var i = 0; i < values.length; i++)
                    {
                        var param = values[i].split('=');
                        if (param[0] == 'q')
                        {
                            terms = unescape(param[1]);
                            break;
                        }
                    }
                    if (terms != '')
                    {
                        var element = document.getElementById('SiteSearch1');
                        element.value = terms;
                        searchPage('');
                    }
                }
            }
            function ValidateOffer_for_you_post_in_RT_Business(theForm)
            {
                var regexp;
                if (theForm.Editbox1.value == "")
                {
                    alert("Please Enter The Contact Name");
                    theForm.Editbox1.focus();
                    return false;
                }
                if (theForm.Editbox1.value.length < 2)
                {
                    alert("Please Enter The Contact Name");
                    theForm.Editbox1.focus();
                    return false;
                }
                if (theForm.Editbox1.value.length > 20)
                {
                    alert("Please Enter The Contact Name");
                    theForm.Editbox1.focus();
                    return false;
                }
                if (theForm.Combobox1.selectedIndex < 0)
                {
                    alert("Please Select Your Price Terms");
                    theForm.Combobox1.focus();
                    return false;
                }
                if (theForm.Editbox7.value == "")
                {
                    alert("Please Enter A Valid Email");
                    theForm.Editbox7.focus();
                    return false;
                }
                if (theForm.Editbox7.value.length < 10)
                {
                    alert("Please Enter A Valid Email");
                    theForm.Editbox7.focus();
                    return false;
                }
                if (theForm.Editbox7.value.length > 30)
                {
                    alert("Please Enter A Valid Email");
                    theForm.Editbox7.focus();
                    return false;
                }
                if (theForm.Combobox2.selectedIndex < 0)
                {
                    alert("Please Select Your Business Type");
                    theForm.Combobox2.focus();
                    return false;
                }
                if (theForm.Combobox2.selectedIndex == 0)
                {
                    alert("Please Select Your Business Type");
                    theForm.Combobox2.focus();
                    return false;
                }
                if (theForm.Combobox3.selectedIndex < 0)
                {
                    alert("Please Select Your Business Type");
                    theForm.Combobox3.focus();
                    return false;
                }
                if (theForm.Combobox3.selectedIndex == 0)
                {
                    alert("Please Select Your Business Type");
                    theForm.Combobox3.focus();
                    return false;
                }
                if (theForm.Combobox4.selectedIndex < 0)
                {
                    alert("Please Select Your Business Type");
                    theForm.Combobox4.focus();
                    return false;
                }
                if (theForm.Combobox4.selectedIndex == 0)
                {
                    alert("Please Select Your Business Type");
                    theForm.Combobox4.focus();
                    return false;
                }
                return true;
            }
            function ValidateOffer_for_you_post_in_RT_Business(theForm)
            {
                var regexp;
                regexp = /^[-+]?\d*\.?\d*$/;
                if (!regexp.test(theForm.Editbox3.value))
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox3.focus();
                    return false;
                }
                if (theForm.Editbox3.value.length < 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox3.focus();
                    return false;
                }
                if (theForm.Editbox3.value.length > 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox3.focus();
                    return false;
                }
                regexp = /^[-+]?\d*\.?\d*$/;
                if (!regexp.test(theForm.Editbox2.value))
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox2.focus();
                    return false;
                }
                if (theForm.Editbox2.value.length < 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox2.focus();
                    return false;
                }
                if (theForm.Editbox2.value.length > 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox2.focus();
                    return false;
                }
                regexp = /^[-+]?\d*\.?\d*$/;
                if (!regexp.test(theForm.Editbox4.value))
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox4.focus();
                    return false;
                }
                if (theForm.Editbox4.value.length < 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox4.focus();
                    return false;
                }
                if (theForm.Editbox4.value.length > 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox4.focus();
                    return false;
                }
                regexp = /^[-+]?\d*\.?\d*$/;
                if (!regexp.test(theForm.Editbox5.value))
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox5.focus();
                    return false;
                }
                if (theForm.Editbox5.value.length < 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox5.focus();
                    return false;
                }
                if (theForm.Editbox5.value.length > 0)
                {
                    alert("Please Enter The Valid Code");
                    theForm.Editbox5.focus();
                    return false;
                }
                if (theForm.Editbox6.value.length < 0)
                {
                    alert("Set your password (  6-14 letters ) including ( A,a,1_/)..");
                    theForm.Editbox6.focus();
                    return false;
                }
                if (theForm.Editbox6.value.length > 0)
                {
                    alert("Set your password (  6-14 letters ) including ( A,a,1_/)..");
                    theForm.Editbox6.focus();
                    return false;
                }
                if (theForm.Editbox8.value.length < 0)
                {
                    alert("Set your password (  6-14 letters ) including ( A,a,1_/)..");
                    theForm.Editbox8.focus();
                    return false;
                }
                if (theForm.Editbox8.value.length > 0)
                {
                    alert("Set your password (  6-14 letters ) including ( A,a,1_/)..");
                    theForm.Editbox8.focus();
                    return false;
                }
                return true;
            }
            $(document).ready(function ()
            {
                var Carousel8Opts =
                        {
                            delay: 6000,
                            duration: 500,
                            easing: 'swing',
                            mode: 'fade',
                            direction: '',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel8").carouseleffects(Carousel8Opts);
                $("#Carousel8_back a").click(function ()
                {
                    $('#Carousel8').carouseleffects('prev');
                });
                $("#Carousel8_next a").click(function ()
                {
                    $('#Carousel8').carouseleffects('next');
                });
                var Carousel9Opts =
                        {
                            delay: 4500,
                            duration: 500,
                            easing: 'swing',
                            mode: 'fade',
                            direction: '',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel9").carouseleffects(Carousel9Opts);
                $("#Carousel9_back a").click(function ()
                {
                    $('#Carousel9').carouseleffects('prev');
                });
                $("#Carousel9_next a").click(function ()
                {
                    $('#Carousel9').carouseleffects('next');
                });
                var Carousel10Opts =
                        {
                            delay: 4000,
                            duration: 300,
                            easing: 'swing',
                            mode: 'fade',
                            direction: '',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel10").carouseleffects(Carousel10Opts);
                $("#Carousel10_back a").click(function ()
                {
                    $('#Carousel10').carouseleffects('prev');
                });
                $("#Carousel10_next a").click(function ()
                {
                    $('#Carousel10').carouseleffects('next');
                });
                var Carousel4Opts =
                        {
                            delay: 4000,
                            duration: 20,
                            easing: 'easeInSine',
                            mode: 'blind',
                            direction: 'vertical',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel4").carouseleffects(Carousel4Opts);
                var Carousel5Opts =
                        {
                            delay: 5000,
                            duration: 20,
                            easing: 'easeInSine',
                            mode: 'blind',
                            direction: 'vertical',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel5").carouseleffects(Carousel5Opts);
                searchParseURL();
                var Carousel3Opts =
                        {
                            delay: 5000,
                            duration: 300,
                            easing: 'easeInOutBounce',
                            mode: 'rotate',
                            direction: '',
                            pagination: true,
                            pagination_img_default: '<?php echo asset_url(); ?>images/Carousel-footer3.png',
                            pagination_img_active: '<?php echo asset_url(); ?>images/Carousel-footer2.png',
                            start: 0
                        };
                $("#Carousel3").carouseleffects(Carousel3Opts);
                var Carousel1Opts =
                        {
                            delay: 4500,
                            duration: 500,
                            easing: 'easeInOutBounce',
                            mode: 'forward',
                            direction: '',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel1").carousel(Carousel1Opts);
                $("#Carousel1_back a").click(function ()
                {
                    $('#Carousel1').carousel('prev');
                });
                $("#Carousel1_next a").click(function ()
                {
                    $('#Carousel1').carousel('next');
                });
                var Carousel2Opts =
                        {
                            delay: 4000,
                            duration: 500,
                            easing: 'easeInOutBounce',
                            mode: 'fade',
                            direction: '',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel2").carouseleffects(Carousel2Opts);
                $("#Carousel2_back a").click(function ()
                {
                    $('#Carousel2').carouseleffects('prev');
                });
                $("#Carousel2_next a").click(function ()
                {
                    $('#Carousel2').carouseleffects('next');
                });
                $("#Layer_Details3").stickylayer({orientation: 9, position: [0, 0], delay: 500, keepOriginalPos: true});
                var Carousel6Opts =
                        {
                            delay: 4000,
                            duration: 500,
                            easing: 'easeInOutBounce',
                            mode: 'fade',
                            direction: '',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel6").carouseleffects(Carousel6Opts);
                $("#Carousel6_back a").click(function ()
                {
                    $('#Carousel6').carouseleffects('prev');
                });
                $("#Carousel6_next a").click(function ()
                {
                    $('#Carousel6').carouseleffects('next');
                });
                var Carousel7Opts =
                        {
                            delay: 4000,
                            duration: 500,
                            easing: 'easeInOutBounce',
                            mode: 'fade',
                            direction: '',
                            pagination: false,
                            start: 0
                        };
                $("#Carousel7").carouseleffects(Carousel7Opts);
                $("#Carousel7_back a").click(function ()
                {
                    $('#Carousel7').carouseleffects('prev');
                });
                $("#Carousel7_next a").click(function ()
                {
                    $('#Carousel7').carouseleffects('next');
                });
                $("#Layer254").stickylayer({orientation: 7, position: [0, 15], delay: 0});
                $("#Layer_Details2").stickylayer({orientation: 9, position: [0, 0], delay: 500, keepOriginalPos: true});
                $("#Layer_Details").stickylayer({orientation: 9, position: [0, 0], delay: 500, keepOriginalPos: true});
                $("#Layer_Details4").stickylayer({orientation: 9, position: [0, 0], delay: 0, keepOriginalPos: true});
                $("#Layer_buyer").stickylayer({orientation: 9, position: [0, 0], delay: 0, keepOriginalPos: true});
            });
        </script>
    </head>
    <body>