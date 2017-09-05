<!DOCTYPE html>
<html>
<head>

	<?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
		<?= isset($title) ? strip_tags($title) : $this->fetch('title') ?>
        | Ponteon
    </title>

	<?php
    echo  $this->Html->meta('icon');

	echo $this->Html->css([
		'/css/bootstrap.min.css',
		'/font-awesome/css/font-awesome.css',
		'/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css',

		'/css/plugins/toastr/toastr.min.css',

		'/js/plugins/gritter/jquery.gritter.css',

		'/css/plugins/chosen/bootstrap-chosen.css',

		'/css/plugins/iCheck/custom.css',

		'/css/plugins/switchery/switchery.css',

		'/css/plugins/sweetalert/sweetalert.css',


		'/css/plugins/dropzone/basic.css',
		'/css/plugins/dropzone/dropzone.css',

		'/css/plugins/datapicker/datepicker3.css',

		'/css/plugins/select2/select2.min.css',

		'/css/plugins/blueimp/css/blueimp-gallery.min.css',

		'/css/plugins/dataTables/datatables.min.css',
		'/css/plugins/footable/footable.core.css',

		'/css/animate.css',
		'/css/style.css',
		'/css/custom.css',
	]);

	echo $this->fetch('meta');

	echo $this->fetch('css');

	?>
</head>

<body>
<div id="wrapper">

	<?= $this->element('menu.main'); ?>

    <div id="page-wrapper" class="gray-bg dashbard-1">

		<?= $this->element('menu.bar') ?>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>
	                <?= isset($title) ? strip_tags($title) : $this->fetch('title') ?>
                </h2>
                <!--<ol class="breadcrumb">
                    <li>
                        <a href="index.html">This is</a>
                    </li>
                    <li class="active">
                        <strong>Breadcrumb</strong>
                    </li>
                </ol>-->
            </div>
            <div class="col-sm-8">
                <div class="title-action">
					<?= $this->fetch('titleAction') ?>
                    <!--                    <a href="" class="btn btn-primary">This is action area</a>-->
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">

			<?= $this->Flash->render() ?>
			<?= $this->fetch('content'); ?>

        </div>

        <div class="footer">
            <div class="pull-right">

            </div>
            <div>
                <strong>Desenvolvido por </strong><a href="http://richellyitalo.com/pt/faco-seu-projeto/" target="_blank">Richelly Italo</a>
            </div>
        </div>

    </div>
</div>

<?php

echo $this->element('vars');

echo $this->Html->script([
	// Mainly scripts
	'/js/jquery-2.1.1.js',
	'/js/underscore-min.js',
	'/js/bootstrap.min.js',
	'/js/plugins/metisMenu/jquery.metisMenu.js',
	'/js/plugins/slimscroll/jquery.slimscroll.min.js',

	// Flot
	'/js/plugins/flot/jquery.flot.js',
	'/js/plugins/flot/jquery.flot.tooltip.min.js',
	'/js/plugins/flot/jquery.flot.spline.js',
	'/js/plugins/flot/jquery.flot.resize.js',
	'/js/plugins/flot/jquery.flot.pie.js',

	// Peity
	'/js/plugins/peity/jquery.peity.min.js',
	'/js/demo/peity-demo.js',

	// Custom and plugin javascript
	'/js/plugins/chosen/chosen.jquery.js',
	'/js/inspinia.js',
	'/js/plugins/pace/pace.min.js',

	// jQuery UI -> Bugando o tooltip do bootstrap
	//'/js/plugins/jquery-ui/jquery-ui.min.js',

	// Gitter
	'/js/plugins/gritter/jquery.gritter.min.js',

	// Sparkline
	'/js/plugins/sparkline/jquery.sparkline.min.js',
	'/js/demo/sparkline-demo.js',

	// ChartJS
	'/js/plugins/chartJs/Chart.min.js',

	// iCheck
	'/js/plugins/iCheck/icheck.min.js',

	// Toastr
	'/js/plugins/toastr/toastr.min.js',

	// Dropzone
	'/js/plugins/dropzone/dropzone.js',

	// Mask
	'/js/plugins/mask/jquery.mask.min.js',

	//Datepicker
	'/js/plugins/datapicker/bootstrap-datepicker.js',
	'/js/plugins/datapicker/bootstrap-datepicker.pt-BR.min.js',

	//Daterangepicker
	'/js/plugins/daterangepicker/daterangepicker.js',

	// Select2
	'/js/plugins/select2/select2.full.min.js',

	// TouchSpin
	'/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js',


	// Switchery
	'/js/plugins/switchery/switchery.js',

	// Gallery
	'/js/plugins/blueimp/jquery.blueimp-gallery.min.js',

	// Mask
	'/js/plugins/json-functions/json-functions.js',

	'/js/plugins/jquery-validator/jquery.validate.min.js',
	'/js/plugins/jquery-validator/additional-methods.min.js',
	'/js/plugins/jquery-validator/localization/messages_pt_BR.min.js',
	'/js/plugins/jquery-mask-plugin/dist/jquery.mask.min.js',

	'/js/plugins/dataTables/datatables.min.js',

	'/js/plugins/footable/footable.all.min.js',

	'/js/plugins/sweetalert/sweetalert.min.js',
]);

$this->append('script', $this->element('load_module'));

echo $this->fetch('script');

?>


<!--<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

        }, 1300);


        var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        ];
        var data2 = [
            [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#d5d5d5'
                },
                colors: ["#1ab394", "#1C84C6"],
                xaxis:{
                },
                yaxis: {
                    ticks: 4
                },
                tooltip: false
            }
        );

        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [300,50,100],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [70,27,85],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    });
</script>-->

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<?= $this->fetch('script') ?>

</body>
</html>
