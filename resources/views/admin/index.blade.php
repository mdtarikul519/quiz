<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from colorlib.com/polygon/elaadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 06:17:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('admin') }}/images/favicon.png">
    <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/pe-icon-7-filled.css">
    <link href="{{ asset('admin') }}/assets/weather/css/weather-icons.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/calendar/fullcalendar.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/style.css">
    <link href="{{ asset('admin') }}/assets/css/charts/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <style type="text/css">
        .notifyjs-corner {
            z-index: 10000 !important;
        }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
    <meta name="robots" content="noindex, nofollow">
    {{-- <script nonce="606c1fc9-c863-40ef-9401-b5b7f55349a2">
        (function(w, d) {
            ! function(bg, bh, bi, bj) {
                bg[bi] = bg[bi] || {};
                bg[bi].executed = [];
                bg.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bg.zaraz.q = [];
                bg.zaraz._f = function(bk) {
                    return function() {
                        var bl = Array.prototype.slice.call(arguments);
                        bg.zaraz.q.push({
                            m: bk,
                            a: bl
                        })
                    }
                };
                for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
                bg.zaraz.init = () => {
                    var bn = bh.getElementsByTagName(bj)[0],
                        bo = bh.createElement(bj),
                        bp = bh.getElementsByTagName("title")[0];
                    bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                    bg[bi].x = Math.random();
                    bg[bi].w = bg.screen.width;
                    bg[bi].h = bg.screen.height;
                    bg[bi].j = bg.innerHeight;
                    bg[bi].e = bg.innerWidth;
                    bg[bi].l = bg.location.href;
                    bg[bi].r = bh.referrer;
                    bg[bi].k = bg.screen.colorDepth;
                    bg[bi].n = bh.characterSet;
                    bg[bi].o = (new Date).getTimezoneOffset();
                    if (bg.dataLayer)
                        for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({
                                ...bu[1],
                                ...bv[1]
                            }))))) zaraz.set(bt[0], bt[1], {
                            scope: "page"
                        });
                    bg[bi].q = [];
                    for (; bg.zaraz.q.length;) {
                        const bw = bg.zaraz.q.shift();
                        bg[bi].q.push(bw)
                    }
                    bo.defer = !0;
                    for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz
                        .startsWith("_zaraz_"))).forEach((by => {
                        try {
                            bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                        } catch {
                            bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                        }
                    }));
                    bo.referrerPolicy = "origin";
                    bo.src = "https://colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(
                        bg[bi])));
                    bn.parentNode.insertBefore(bo, bn)
                };
                ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script> --}}
</head>

<body>

    @include('admin.layouts.sidber')

    <div id="right-panel" class="right-panel">

        @include('admin.layouts.header')

        <div class="content pb-0">

            @yield('content')



        </div>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/vendor/jquery-2.1.4.min.js"></script>
        <style type="text/css">
            .notifyjs-corner {
                z-index: 10000 !important;
            }
        </style>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
        @if (session()->has('success'))
            <script type="text/javascript">
                $(function() {
                    $.notify("{{ session()->get('success') }}", {
                        globalposition: 'top right',
                        className: 'success'
                    });
                });
            </script>
        @endif
        @if (session()->has('error'))
            <script type="text/javascript">
                $(function() {
                    $.notify("{{ session()->get('error') }}", {
                        globalposition: 'top right',
                        className: 'error'
                    });
                });
            </script>
        @endif
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/popper.min.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/plugins.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/main.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/lib/chart-js/Chart.bundle.js"></script>

        <script src="https://colorlib.com/polygon/elaadmin/assets/js/lib/chartist/chartist.min.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/lib/chartist/chartist-plugin-legend.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/lib/flot-chart/jquery.flot.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/lib/flot-chart/jquery.flot.spline.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/weather/js/jquery.simpleWeather.min.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/weather/js/weather-init.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/js/lib/moment/moment.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/calendar/fullcalendar.min.js"></script>
        <script src="https://colorlib.com/polygon/elaadmin/assets/calendar/fullcalendar-init.js"></script>

        {{-- <script>
            jQuery(document).ready(function($) {
                "use strict";

                // Pie chart flotPie1 
                var piedata = [{
                        label: "Desktop visits",
                        data: [
                            [1, 32]
                        ],
                        color: '#5c6bc0'
                    },
                    {
                        label: "Tab visits",
                        data: [
                            [1, 33]
                        ],
                        color: '#ef5350'
                    },
                    {
                        label: "Mobile visits",
                        data: [
                            [1, 35]
                        ],
                        color: '#66bb6a'
                    }
                ];

                $.plot('#flotPie1', piedata, {
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            innerRadius: 0.65,
                            label: {
                                show: true,
                                radius: 2 / 3,
                                threshold: 1
                            },
                            stroke: {
                                width: 0
                            }
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                });

                // Pie chart flotPie1  End




                var cellPaiChart = [{
                        label: "Direct Sell",
                        data: [
                            [1, 65]
                        ],
                        color: '#5b83de'
                    },
                    {
                        label: "Channel Sell",
                        data: [
                            [1, 35]
                        ],
                        color: '#00bfa5'
                    }
                ];
                $.plot('#cellPaiChart', cellPaiChart, {
                    series: {
                        pie: {
                            show: true,
                            stroke: {
                                width: 0
                            }
                        }
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        hoverable: true,
                        clickable: true
                    }

                });















                // Line Chart  #flotLine5
                var newCust = [
                    [0, 3],
                    [1, 5],
                    [2, 4],
                    [3, 7],
                    [4, 9],
                    [5, 3],
                    [6, 6],
                    [7, 4],
                    [8, 10]
                ];

                var plot = $.plot($('#flotLine5'), [{
                    data: newCust,
                    label: 'New Data Flow',
                    color: '#fff'
                }], {
                    series: {
                        lines: {
                            show: true,
                            lineColor: '#fff',
                            lineWidth: 2
                        },
                        points: {
                            show: true,
                            fill: true,
                            fillColor: "#ffffff",
                            symbol: "circle",
                            radius: 3
                        },
                        shadowSize: 0
                    },
                    points: {
                        show: true,
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        show: false
                    }
                });

                // Line Chart  #flotLine5 End





                // Traffic Chart using chartist
                if ($('#traffic-chart').length) {
                    var chart = new Chartist.Line('#traffic-chart', {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        series: [
                            [0, 18000, 35000, 25000, 22000, 0],
                            [0, 33000, 15000, 20000, 15000, 300],
                            [0, 15000, 28000, 15000, 30000, 5000]
                        ]
                    }, {
                        low: 0,
                        showArea: true,
                        showLine: false,
                        showPoint: false,
                        fullWidth: true,
                        axisX: {
                            showGrid: true
                        }
                    });

                    chart.on('draw', function(data) {
                        if (data.type === 'line' || data.type === 'area') {
                            data.element.animate({
                                d: {
                                    begin: 2000 * data.index,
                                    dur: 2000,
                                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect
                                        .height()).stringify(),
                                    to: data.path.clone().stringify(),
                                    easing: Chartist.Svg.Easing.easeOutQuint
                                }
                            });
                        }
                    });
                }
                // Traffic Chart using chartist End




                //Traffic chart chart-js 
                if ($('#TrafficChart').length) {
                    var ctx = document.getElementById("TrafficChart");
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                            datasets: [{
                                    label: "Visit",
                                    borderColor: "rgba(4, 73, 203,.09)",
                                    borderWidth: "1",
                                    backgroundColor: "rgba(4, 73, 203,.5)",
                                    data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                                },
                                {
                                    label: "Bounce",
                                    borderColor: "rgba(245, 23, 66, 0.9)",
                                    borderWidth: "1",
                                    backgroundColor: "rgba(245, 23, 66,.5)",
                                    pointHighlightStroke: "rgba(245, 23, 66,.5)",
                                    data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                                },
                                {
                                    label: "Targeted",
                                    borderColor: "rgba(40, 169, 46, 0.9)",
                                    borderWidth: "1",
                                    backgroundColor: "rgba(40, 169, 46, .5)",
                                    pointHighlightStroke: "rgba(40, 169, 46,.5)",
                                    data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                intersect: false
                            },
                            hover: {
                                mode: 'nearest',
                                intersect: true
                            }

                        }
                    });
                }
                //Traffic chart chart-js  End 



                // Bar Chart #flotBarChart
                $.plot("#flotBarChart", [{
                    data: [
                        [0, 18],
                        [2, 8],
                        [4, 5],
                        [6, 13],
                        [8, 5],
                        [10, 7],
                        [12, 4],
                        [14, 6],
                        [16, 15],
                        [18, 9],
                        [20, 17],
                        [22, 7],
                        [24, 4],
                        [26, 9],
                        [28, 11]
                    ],
                    bars: {
                        show: true,
                        lineWidth: 0,
                        fillColor: '#ffffff8a'
                    }
                }], {
                    grid: {
                        show: false
                    }
                });
                // Bar Chart #flotBarChart End

            }); // End of Document Ready 
        </script> --}}
        <div id="container">
        </div>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
            integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
            data-cf-beacon='{"rayId":"7cbb2d87cf30bc2d","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
            crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/polygon/elaadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 06:17:46 GMT -->

</html>
