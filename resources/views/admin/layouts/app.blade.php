<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    




    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="page-container">
        @include('admin.layouts.sidebar')
        
        <div class="page-content">
           @includeIf('admin.layouts.header')

            @yield('content')

            @includeIf('admin.layouts.footer')
        </div>
    </div>

    <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

    <div class="avesta-settings">
        <a id="avestaSettingsShow" href="#" class="avesta-settings-link"><i data-feather="settings" class="wd-20"></i></a>
        <div class="avesta-settings-body">
            <div class="pd-y-20">
                <img src="/assets/images/logo-dark.png" class="d-block" alt="">
                <span class="tx-10 tx-uppercase tx-spacing-1">Template Customizer</span>
            </div>
            <div class="pd-y-20 bd-t">
                <label class="tx-10 tx-uppercase tx-bold tx-spacing-1 mg-b-15">Skin Mode</label>
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name tx-spacing-1">Default Skin</span>
                        <a href="#" class="avesta-mode avesta-mode-default active" data-title="default-skin"></a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Light Skin</span>
                        <a href="#" class="avesta-mode avesta-mode-light" data-title="light-skin">
                            <span class="demo-color-palet-1"></span>
                            <span class="demo-color-palet-2"></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name tx-spacing-1">Cool Skin</span>
                        <a href="#" class="avesta-mode avesta-mode-cool" data-title="cool-skin">
                            <span class="bg-primary"></span>
                            <span class="bg-primary"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pd-y-20 bd-t">
                <label class="tx-10 tx-uppercase tx-bold tx-spacing-1 mg-b-15">Navigation Skin</label>
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Default</span>
                        <a href="#" class="avesta-demo-customizer avesta-demo-customizer-default active" data-title="default">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Light</span>
                        <a href="#" class="avesta-demo-customizer avesta-demo-customizer-light" data-title="light">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Blue Purple</span>
                        <a href="#" class="avesta-demo-customizer avesta-demo-customizer-bluepurple" data-title="bluepurple">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <span class="avesta-demo-customizer-name">Gradient</span>
                        <a href="#" class="avesta-demo-customizer avesta-demo-customizer-gradient" data-title="gradient">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pd-y-20 bd-t">
                <label class="tx-10 tx-uppercase tx-bold tx-spacing-1 mg-b-15">Font Family Mode</label>
                <div class="row font-customize">
                    <div class="col-12"><a href="#" id="setFontBase" class="active-font">IBM Plex Sans</a></div>
                    <div class="col-12"><a href="#" id="setFontRoboto">Roboto</a></div>
                    <div class="col-12"><a href="#" id="setFontPoppins">Poppins</a></div>
                    <div class="col-12"><a href="#" id="setFontOpenSans">Open Sans</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/plugins/moment/moment.min.js"></script>
    <script src="/assets/plugins/popper/popper.js"></script>
    <script src="/assets/plugins/feather/feather.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/typeahead/typeahead.js"></script>
    <script src="/assets/plugins/typeahead/typeahead-active.js"></script>
    <script src="/assets/plugins/pace/pace.min.js"></script>
    <script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/plugins/highlight/highlight.min.js"></script>
    <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/assets/plugins/jqvmap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/plugins/jqvmap/gdp-data.js"></script>
    <script src="/assets/plugins/jqvmap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/plugins/chartist/chartist.js"></script>
    <script src="/assets/plugins/apex-chart/apexcharts.min.js"></script>
    <script src="/assets/plugins/apex-chart/irregular-data-series.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/assets/plugins/flot/sampledata.js"></script>
    <script src="/assets/js/dashboard/sales-dashboard-init.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="/assets/js/avesta.js"></script>
    <script src="/assets/js/avesta-customizer.js"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/plugins/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('assets/plugins/dropzone.js/dropzone.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
    <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>

 
    <!-- Custom Script -->
    <script>
        
        $(document).ready(function () {
            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                markerStyle: {
                    initial: {
                        fill: '#2e2e2e',
                        stroke: '#2e2e2e',
                        "fill-opacity": 1,
                        "stroke-width": 15,
                        "stroke-opacity": 0.2
                    }
                },
                markers: [
                    { latLng: [37.18, -93.35], name: 'United States' },
                    { latLng: [20.59, 78.96], name: 'India' },
                    { latLng: [-25.27, 133.77], name: 'Australia' },
                    { latLng: [-38.41, -63.61], name: 'Argentina' },
                    { latLng: [61.52, 105.31], name: 'Russia' },
                    { latLng: [-30.55, 22.93], name: 'South Africa' },
                ],
                focusOn: { x: 0, y: 0, scale: 1 },
                series: {
                    regions: [{
                        values: {
                            US: 'rgba(148, 77, 255, 0.3)',
                            AU: 'rgba(255, 228, 17, 0.3)',
                            IN: 'rgba(8, 210, 111, 0.3)',
                            AR: 'rgba(252, 79, 104, 0.3)',
                            RU: 'rgba(129, 206, 246, 0.3)',
                            ZA: 'rgba(252, 79, 104, 0.3)',
                        }
                    }]
                },
                regionStyle: { initial: { fill: '#e9eff9' } }
            });

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#dashboardDate').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#dashboardDate').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: $('body').attr('dir') === 'rtl' || $('html').attr('dir') === 'rtl' ? 'left' : 'right'
            }, cb);

            cb(start, end);

            $('#dashboardDate').each(function () {
                var obj = $(this).data('daterangepicker');
                var _updateCalendars = obj.updateCalendars;
                obj.updateCalendars = function () {
                    _updateCalendars.call(obj);
                    obj.container.find('.prev > i').each(function () { this.className = 'ion ion-ios-arrow-back' });
                    obj.container.find('.next > i').each(function () { this.className = 'ion ion-ios-arrow-forward' });
                    obj.container.find('.daterangepicker_input > i').each(function () { this.className = 'ion ion-md-calendar' });
                    obj.container.find('.calendar-time > i').each(function () { this.className = 'ion ion-md-time' });
                };
            });
        });


        $(function(){
           'use strict'
         
           $('#datepicker1').datepicker();
         
           $('#datepicker2').datepicker({
             showOtherMonths: true,
             selectOtherMonths: true
           });
         
           $('#datepicker3').datepicker({
             showOtherMonths: true,
             selectOtherMonths: true,
             changeMonth: true,
             changeYear: true
           });
         
           $('#datepicker4').datepicker();
           $('#datepicker88').datepicker();
         
           $('#datepicker5').datepicker({
             showButtonPanel: true
           });
         
           $('#datepicker6').datepicker({
             numberOfMonths: 2
           });
         
           var dateFormat = 'mm/dd/yy',
           from = $('#dateFrom')
           .datepicker({
             defaultDate: '+1w',
             numberOfMonths: 2
           })
           .on('change', function() {
             to.datepicker('option','minDate', getDate( this ) );
           }),
           to = $('#dateTo').datepicker({
             defaultDate: '+1w',
             numberOfMonths: 2
           })
           .on('change', function() {
             from.datepicker('option','maxDate', getDate( this ) );
           });
         
           function getDate( element ) {
             var date;
             try {
               date = $.datepicker.parseDate( dateFormat, element.value );
             } catch( error ) {
               date = null;
             }
         
             return date;
           }
         });

//          $('#summernote').summernote({
//  placeholder: 'Hello bootstrap 4',
//  tabsize: 2,
//  height: 70
// });

$('.textarea').summernote({
 placeholder: '',
 tabsize: 2,
 height: 70
});

new MultiSelectTag('staff', {

    placeholder: 'Nothing selected',  
    tagColor: {
        textColor: '#327b2c',
        borderColor: '#92e681',
        bgColor: '#eaffe6',
    },
 
})

new MultiSelectTag('client', {

placeholder: 'Nothing selected',  
tagColor: {
    textColor: '#327b2c',
    borderColor: '#92e681',
    bgColor: '#eaffe6',
},

})

$('#price-input').formatter({
           'pattern': '$ {{9999}}.{{99}}',
           'persistent': true
         });
         
    </script>
</body>
</html>
