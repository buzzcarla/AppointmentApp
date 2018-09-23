<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
   
    <!-- SPECIFIC CSS -->
    <link href="css/date_picker.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<style type="text/css">
		

	</style>

</head>

<body>

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
    <?php 
        echo '<input type="text" id="doc_id" value="'.$_GET['docid'].'" hidden>';
        echo '<input type="text" id="user_id" value="'.$_GET['userid'].'" hidden>';
        echo '<input type="text" id="clin_name" value="'.$_GET['cliname'].'" hidden>';
        echo '<input type="text" id="clin_add" value="'.$_GET['clinadd'].'" hidden>';
        echo '<input type="text" id="doc_fname" value="'.$_GET['docfname'].'" hidden>';
        echo '<input type="text" id="doc_mname" value="'.$_GET['docmname'].'" hidden>';
        echo '<input type="text" id="doc_lname" value="'.$_GET['doclname'].'" hidden>';
        echo '<input type="text" id="clin_start" value="'.$_GET['start'].'" hidden>';
        echo '<input type="text" id="clin_end" value="'.$_GET['end'].'" hidden>';
       
    ?>
	<div id="page">		
	<header class="header_sticky">	
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile-->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index.php" title="Findoctor">Finding Doctors</a></h1>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					<ul id="top_access">
						<li><a href="login.html"><i class="pe-7s-user"></i></a></li>
						<li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<nav id="menu" class="main-menu">
						<ul>
							<li>
								<span><a href="index.php">Home</a></span>
							</li>
							<li>
								<span><a href="#0">Register</a></span>
								<ul>
									<li><a href="register-doctor.html">Register Doctor</a></li>
									<li><a href="register.html">Register User</a></li>
								</ul>
							</li>
							<li>
								<span><a href="login.html">Login</a></span>
							</li>
							<li>
								<li><a href="listall.php">Doctor List</a></li>
							</li>
						</ul>
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
	
	
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home ></a></li>
					<li><a href="#">Doctor List ></a></li>
					<li>Book an Appointment</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="img/doctor_listing_2.jpg" alt="" class="img-fluid">
						</figure>
						<small>Primary care - Internist</small>
                        <?php 
						echo '<h1>Dr. '.$_GET['docfname'].' '.$_GET['doclname'].'</h1>
                                <div>
                                    <img style="max-height: 100px; width: auto;" src="https://thumbs.dreamstime.com/b/male-doctor-icon-doing-ok-hand-sign-vector-illustration-81961335.jpg">
                                </div>
                                <ul class="statistic">
                                    <li>4 years in Practice</li>
                                </ul>
                                <ul class="contacts">
                                    <li><h6>Address</h6>'.$_GET['clinadd'].'</li>
                                    <li><h6>Phone</h6><a>'.$_GET['tele'].'</a></li>
                                </ul>';
                        ?>
						<div class="text-center"><a  href="https://www.google.com/maps/dir/Mandaue+City,+Cebu/LH+Prime+Medical+Clinic+Basak+Mactan,+Lapu-Lapu+City,+Cebu/@10.3170571,123.9294577,7127m/data=!3m2!1e3!4b1!4m13!4m12!1m5!1m1!1s0x33a99889680ceefd:0xa9f911a1f5dda572!2m2!1d123.9415518!2d10.3402623!1m5!1m1!1s0x33a999f9a2431d03:0x4957877e437e6d01!2m2!1d123.9662371!2d10.2926005" class="btn_1 outline" target="_blank"><i class="icon_pin"></i> View on map</a></div>
					</div>
				</aside>
				<!-- /asdide -->
				
				<div class="col-xl-9 col-lg-8">

					<div class="tabs_styled_2">
						<!-- <ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book">Book an appointment</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">General info</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a>
							</li>
						</ul> -->
						<!--/nav-tabs -->
                
						<div class="tab-content">

							<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
								<p class="lead add_bottom_30">To book an appointment with the selected doctor, please input or choose from the available dates and time.</p>
								<form>
									<div class="main_title_3">
										<h3><strong>1</strong>Select your date</h3>
									</div>
									<div class="form-group add_bottom_45">
										<div id="my-calendar"></div>
										<input type="hidden" id="my_hidden_input">
										<ul class="legend">
											<li><strong></strong>Available</li>
											<li><strong></strong>Not available</li>
										</ul>

                                        <input id="datePicker" type="date" />
									</div>
									<div class="main_title_3" style="margin-bottom: 4%;">
										<h3><strong>2</strong>Select your time</h3>
									</div>
									<div class="row justify-content-center add_bottom_45" style="margin-left: 33%; margin-bottom: 4%;">
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio1" name="radio_time" value="09:30" onclick="updateTime(this)">
													<label for="radio1">09.30am</label>
												</li>
												<li>
													<input type="radio" id="radio2" name="radio_time" value="10:00" onclick="updateTime(this)">
													<label for="radio2">10.00am</label>
												</li>
												<li>
													<input type="radio" id="radio3" name="radio_time" value="10:30" onclick="updateTime(this)">
													<label for="radio3">10.30am</label>
												</li>
												<li>
													<input type="radio" id="radio4" name="radio_time" value="11:00" onclick="updateTime(this)">
													<label for="radio4">11.00am</label>
												</li>
												<li>
													<input type="radio" id="radio5" name="radio_time" value="11:30" onclick="updateTime(this)">
													<label for="radio5">11.30am</label>
												</li>
												<li>
													<input type="radio" id="radio6" name="radio_time" value="12:00" onclick="updateTime(this)">
													<label for="radio6">12.00pm</label>
												</li>
											</ul>
										</div>
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio7" name="radio_time" value="13:30" onclick="updateTime(this)">
													<label for="radio7">01.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio8" name="radio_time" value="14:00" onclick="updateTime(this)">
													<label for="radio8">02.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio9" name="radio_time" value="14:30" onclick="updateTime(this)">
													<label for="radio9">02.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio10" name="radio_time" value="15:00" onclick="updateTime(this)">
													<label for="radio10">03.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio11" name="radio_time" value="15:30" onclick="updateTime(this)">
													<label for="radio11">03.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio12" name="radio_time" value="16:00" onclick="updateTime(this)">
													<label for="radio12">04.00pm</label>
												</li>
                                                <input type="text" id="booktime">
											</ul>
										</div>
									</div>
									<!-- /row -->
									
									<div class="main_title_3" style="margin-bottom: 4%;">
										<h3><strong>3</strong>Select visit</h3>
									</div>
									<ul class="treatments clearfix">
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Consultation" class="css-checkbox" id="visit1" name="check" onclick="onlyOne(this)">
												<label for="visit1" class="css-label">Consultation</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Follow-up visit" class="css-checkbox" id="visit2" name="check" onclick="onlyOne(this)">
												<label for="visit2" class="css-label">Follow-up Visit</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Treatment visit" class="css-checkbox" id="visit3" name="check" onclick="onlyOne(this)">
												<label for="visit3" class="css-label">Treatment Visit</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Icontinence visit"  class="css-checkbox" id="visit4" name="check" onclick="onlyOne(this)">
												<label for="visit4" class="css-label">Icontinence visit</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Prescription"  class="css-checkbox" id="visit5" name="check" onclick="onlyOne(this)">
												<label for="visit5" class="css-label">Prescription</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Other" class="css-checkbox" id="visit6" name="check" onclick="onlyOne(this)">
												<label for="visit6" class="css-label">Other</label>
											</div>
										</li>
                                        <input type="text" hidden id="visit_type">
									</ul>
								</form>					
								<hr>
								<p class="text-center"><button style="margin-left: 40%; margin-top: 5%;"  class="btn_1 medium book">Book Now</button></p>
							</div>
							<!-- /tab_1 -->
						</div>
						<!-- /tab-content -->
					</div>
					<!-- /tabs_styled -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						<a href="index.php" title="Findoctor">
							<img src="img/icon.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="#0">About us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#0">FAQ</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Doctors</a></li>
						<li><a href="#0">Clinics</a></li>
						<li><a href="#0">Specialization</a></li>
						<li><a href="#0">Join as a Doctor</a></li>
						<li><a href="#0">Download App</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="/cdn-cgi/l/email-protection#2a43444c456a4c43444e45495e455804494547"><i class="icon_mail_alt"></i> <span class="__cf_email__" data-cfemail="1e767b726e5e7877707a717d6a716c307d7173">[email&#160;protected]</span></a></li>
					</ul>
					<div class="follow_us">
						<h5>Follow us</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2017 Findoctor</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop">
		<img class="topArrow" src="./img/up_arrow.png">
	</div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
   	
	<!-- SPECIFIC SCRIPTS -->
    <script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
			todayHighlight: true,
			daysOfWeekDisabled: [0],
			weekStart: 1,
			format: "yyyy-mm-dd",
			datesDisabled: ["2017/10/20", "2017/11/21", "2017/12/21", "2018/01/21", "2018/02/21", "2018/03/21"],
		});
	</script>
     
</body>
</html>

<script type="text/javascript">
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
    document.getElementById("visit_type").value = checkbox.value;
}

function updateTime(radio) {
    document.getElementById("booktime").value = radio.value;
}
if (typeof jQuery == 'undefined') {
    throw new Error('jQuery is not loaded');
}

$(document).ready( function() {
    var now = new Date();
 
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;


   $('#datePicker').val(today);
   $('#datePicker').attr('min', today); 
});

$( ".book" ).click(function() {
    if($("#datePicker").val() && $("#booktime").val() && $("#visit_type").val()){
       var datepart = $("#datePicker").val().split('-');
       var string= datepart[2]+ "-"+datepart[1]+"-"+datepart[0]+" " + $("#booktime").val();
        var dateTimeParts = string.split(' '),
            timeParts = dateTimeParts[1].split(':'),
            dateParts = dateTimeParts[0].split('-'),
            date;
        
        date = new Date(dateParts[2], parseInt(dateParts[1], 10) - 1, dateParts[0], timeParts[0], timeParts[1]).getTime();
        var type = $("#visit_type").val();
        var docid = $("#doc_id").val();
        var userid = $("#user_id").val();
        var clinname = $("#clin_name").val();
        var clinadd = $("#clin_add").val();
        var fname = $("#doc_fname").val();
        var mname = $("#doc_mname").val();
        var lname = $("#doc_lname").val();
        var clinstart = $("#clin_start").val();
        var clinend = $("#clin_end").val();
        date = date/1000;
        document.location.href = 'booking-page.php?docid='+docid+'&userid='+userid+'&clinname='+clinname+'&clinadd='+clinadd+'&docfname='+fname+'&docmname='+mname+'&doclname='+lname+'&start='+clinstart+'&end='+clinend+'&timestamp='+date+'&type='+type;
    } else {
        alert("some fields are empty");
    }

});
/**
 * Create calendar
 *
 */
$.fn.zabuto_calendar = function (options) {
    var opts = $.extend({}, $.fn.zabuto_calendar_defaults(), options);
    var languageSettings = $.fn.zabuto_calendar_language(opts.language);
    opts = $.extend({}, opts, languageSettings);

    this.each(function () {
        var $calendarElement = $(this);
        $calendarElement.attr('id', "zabuto_calendar_" + Math.floor(Math.random() * 99999).toString(36));

        $calendarElement.data('initYear', opts.year);
        $calendarElement.data('initMonth', opts.month);
        $calendarElement.data('monthLabels', opts.month_labels);
        $calendarElement.data('weekStartsOn', opts.weekstartson);
        $calendarElement.data('navIcons', opts.nav_icon);
        $calendarElement.data('dowLabels', opts.dow_labels);
        $calendarElement.data('showToday', opts.today);
        $calendarElement.data('showDays', opts.show_days);
        $calendarElement.data('showPrevious', opts.show_previous);
        $calendarElement.data('showNext', opts.show_next);
        $calendarElement.data('cellBorder', opts.cell_border);
        $calendarElement.data('jsonData', opts.data);
        $calendarElement.data('ajaxSettings', opts.ajax);
        $calendarElement.data('legendList', opts.legend);
        $calendarElement.data('actionFunction', opts.action);
        $calendarElement.data('actionNavFunction', opts.action_nav);

        drawCalendar();

        function drawCalendar() {
            var dateInitYear = parseInt($calendarElement.data('initYear'));
            var dateInitMonth = parseInt($calendarElement.data('initMonth')) - 1;
            var dateInitObj = new Date(dateInitYear, dateInitMonth, 1, 0, 0, 0, 0);
            $calendarElement.data('initDate', dateInitObj);

            var tableClassHtml = ($calendarElement.data('cellBorder') === true) ? ' table-bordered' : '';

            $tableObj = $('<table class="table' + tableClassHtml + '"></table>');
            $tableObj = drawTable($calendarElement, $tableObj, dateInitObj.getFullYear(), dateInitObj.getMonth());

            $legendObj = drawLegend($calendarElement);

            var $containerHtml = $('<div class="zabuto_calendar" id="' + $calendarElement.attr('id') + '"></div>');
            $containerHtml.append($tableObj);
            $containerHtml.append($legendObj);

            $calendarElement.append($containerHtml);

            var jsonData = $calendarElement.data('jsonData');
            if (false !== jsonData) {
                checkEvents($calendarElement, dateInitObj.getFullYear(), dateInitObj.getMonth());
            }
        }

        function drawTable($calendarElement, $tableObj, year, month) {
            var dateCurrObj = new Date(year, month, 1, 0, 0, 0, 0);
            $calendarElement.data('currDate', dateCurrObj);

            $tableObj.empty();
            $tableObj = appendMonthHeader($calendarElement, $tableObj, year, month);
            $tableObj = appendDayOfWeekHeader($calendarElement, $tableObj);
            $tableObj = appendDaysOfMonth($calendarElement, $tableObj, year, month);
            checkEvents($calendarElement, year, month);
            return $tableObj;
        }

        function drawLegend($calendarElement) {
            var $legendObj = $('<div class="legend" id="' + $calendarElement.attr('id') + '_legend"></div>');
            var legend = $calendarElement.data('legendList');
            if (typeof(legend) == 'object' && legend.length > 0) {
                $(legend).each(function (index, item) {
                    if (typeof(item) == 'object') {
                        if ('type' in item) {
                            var itemLabel = '';
                            if ('label' in item) {
                                itemLabel = item.label;
                            }

                            switch (item.type) {
                                case 'text':
                                    if (itemLabel !== '') {
                                        var itemBadge = '';
                                        if ('badge' in item) {
                                            if (typeof(item.classname) === 'undefined') {
                                                var badgeClassName = 'badge-event';
                                            } else {
                                                var badgeClassName = item.classname;
                                            }
                                            itemBadge = '<span class="badge ' + badgeClassName + '">' + item.badge + '</span> ';
                                        }
                                        $legendObj.append('<span class="legend-' + item.type + '">' + itemBadge + itemLabel + '</span>');
                                    }
                                    break;
                                case 'block':
                                    if (itemLabel !== '') {
                                        itemLabel = '<span>' + itemLabel + '</span>';
                                    }
                                    if (typeof(item.classname) === 'undefined') {
                                        var listClassName = 'event';
                                    } else {
                                        var listClassName = 'event-styled ' + item.classname;
                                    }
                                    $legendObj.append('<span class="legend-' + item.type + '"><ul class="legend"><li class="' + listClassName + '"></li></u>' + itemLabel + '</span>');
                                    break;
                                case 'list':
                                    if ('list' in item && typeof(item.list) == 'object' && item.list.length > 0) {
                                        var $legendUl = $('<ul class="legend"></u>');
                                        $(item.list).each(function (listIndex, listClassName) {
                                            $legendUl.append('<li class="' + listClassName + '"></li>');
                                        });
                                        $legendObj.append($legendUl);
                                    }
                                    break;
                                case 'spacer':
                                    $legendObj.append('<span class="legend-' + item.type + '"> </span>');
                                    break;

                            }
                        }
                    }
                });
            }

            return $legendObj;
        }

        function appendMonthHeader($calendarElement, $tableObj, year, month) {
            var navIcons = $calendarElement.data('navIcons');
            var $prevMonthNavIcon = $('<span><span class="glyphicon glyphicon-chevron-left"></span></span>');
            var $nextMonthNavIcon = $('<span><span class="glyphicon glyphicon-chevron-right"></span></span>');
            if (typeof(navIcons) === 'object') {
                if ('prev' in navIcons) {
                    $prevMonthNavIcon.html(navIcons.prev);
                }
                if ('next' in navIcons) {
                    $nextMonthNavIcon.html(navIcons.next);
                }
            }

            var prevIsValid = $calendarElement.data('showPrevious');
            if (typeof(prevIsValid) === 'number' || prevIsValid === false) {
                prevIsValid = checkMonthLimit($calendarElement.data('showPrevious'), true);
            }

            var $prevMonthNav = $('<div class="calendar-month-navigation"></div>');
            $prevMonthNav.attr('id', $calendarElement.attr('id') + '_nav-prev');
            $prevMonthNav.data('navigation', 'prev');
            if (prevIsValid !== false) {
                prevMonth = (month - 1);
                prevYear = year;
                if (prevMonth == -1) {
                    prevYear = (prevYear - 1);
                    prevMonth = 11;
                }
                $prevMonthNav.data('to', {year: prevYear, month: (prevMonth + 1)});
                $prevMonthNav.append($prevMonthNavIcon);
                if (typeof($calendarElement.data('actionNavFunction')) === 'function') {
                    $prevMonthNav.click($calendarElement.data('actionNavFunction'));
                }
                $prevMonthNav.click(function (e) {
                    drawTable($calendarElement, $tableObj, prevYear, prevMonth);
                });
            }

            var nextIsValid = $calendarElement.data('showNext');
            if (typeof(nextIsValid) === 'number' || nextIsValid === false) {
                nextIsValid = checkMonthLimit($calendarElement.data('showNext'), false);
            }

            var $nextMonthNav = $('<div class="calendar-month-navigation"></div>');
            $nextMonthNav.attr('id', $calendarElement.attr('id') + '_nav-next');
            $nextMonthNav.data('navigation', 'next');
            if (nextIsValid !== false) {
                nextMonth = (month + 1);
                nextYear = year;
                if (nextMonth == 12) {
                    nextYear = (nextYear + 1);
                    nextMonth = 0;
                }
                $nextMonthNav.data('to', {year: nextYear, month: (nextMonth + 1)});
                $nextMonthNav.append($nextMonthNavIcon);
                if (typeof($calendarElement.data('actionNavFunction')) === 'function') {
                    $nextMonthNav.click($calendarElement.data('actionNavFunction'));
                }
                $nextMonthNav.click(function (e) {
                    drawTable($calendarElement, $tableObj, nextYear, nextMonth);
                });
            }

            var monthLabels = $calendarElement.data('monthLabels');

            var $prevMonthCell = $('<th></th>').append($prevMonthNav);
            var $nextMonthCell = $('<th></th>').append($nextMonthNav);

            var $currMonthLabel = $('<span>' + monthLabels[month] + ' ' + year + '</span>');
            $currMonthLabel.dblclick(function () {
                var dateInitObj = $calendarElement.data('initDate');
                drawTable($calendarElement, $tableObj, dateInitObj.getFullYear(), dateInitObj.getMonth());
            });

            var $currMonthCell = $('<th colspan="5"></th>');
            $currMonthCell.append($currMonthLabel);

            var $monthHeaderRow = $('<tr class="calendar-month-header"></tr>');
            $monthHeaderRow.append($prevMonthCell, $currMonthCell, $nextMonthCell);

            $tableObj.append($monthHeaderRow);
            return $tableObj;
        }

        function appendDayOfWeekHeader($calendarElement, $tableObj) {
            if ($calendarElement.data('showDays') === true) {
                var weekStartsOn = $calendarElement.data('weekStartsOn');
                var dowLabels = $calendarElement.data('dowLabels');
                if (weekStartsOn === 0) {
                    var dowFull = $.extend([], dowLabels);
                    var sunArray = new Array(dowFull.pop());
                    dowLabels = sunArray.concat(dowFull);
                }

                var $dowHeaderRow = $('<tr class="calendar-dow-header"></tr>');
                $(dowLabels).each(function (index, value) {
                    $dowHeaderRow.append('<th>' + value + '</th>');
                });
                $tableObj.append($dowHeaderRow);
            }
            return $tableObj;
        }

        function appendDaysOfMonth($calendarElement, $tableObj, year, month) {
            var ajaxSettings = $calendarElement.data('ajaxSettings');
            var weeksInMonth = calcWeeksInMonth(year, month);
            var lastDayinMonth = calcLastDayInMonth(year, month);
            var firstDow = calcDayOfWeek(year, month, 1);
            var lastDow = calcDayOfWeek(year, month, lastDayinMonth);
            var currDayOfMonth = 1;

            var weekStartsOn = $calendarElement.data('weekStartsOn');
            if (weekStartsOn === 0) {
                if (lastDow == 6) {
                    weeksInMonth++;
                }
                if (firstDow == 6 && (lastDow == 0 || lastDow == 1 || lastDow == 5)) {
                    weeksInMonth--;
                }
                firstDow++;
                if (firstDow == 7) {
                    firstDow = 0;
                }
            }

            for (var wk = 0; wk < weeksInMonth; wk++) {
                var $dowRow = $('<tr class="calendar-dow"></tr>');
                for (var dow = 0; dow < 7; dow++) {
                    if (dow < firstDow || currDayOfMonth > lastDayinMonth) {
                        $dowRow.append('<td></td>');
                    } else {
                        var dateId = $calendarElement.attr('id') + '_' + dateAsString(year, month, currDayOfMonth);
                        var dayId = dateId + '_day';

                        var $dayElement = $('<div id="' + dayId + '" class="day" >' + currDayOfMonth + '</div>');
                        $dayElement.data('day', currDayOfMonth);

                        if ($calendarElement.data('showToday') === true) {
                            if (isToday(year, month, currDayOfMonth)) {
                                $dayElement.html('<span class="badge badge-today">' + currDayOfMonth + '</span>');
                            }
                        }

                        var $dowElement = $('<td id="' + dateId + '"></td>');
                        $dowElement.append($dayElement);

                        $dowElement.data('date', dateAsString(year, month, currDayOfMonth));
                        $dowElement.data('hasEvent', false);

                        if (typeof($calendarElement.data('actionFunction')) === 'function') {
                            $dowElement.addClass('dow-clickable');
                            $dowElement.click(function () {
                                $calendarElement.data('selectedDate', $(this).data('date'));
                            });
                            $dowElement.click($calendarElement.data('actionFunction'));
                        }

                        $dowRow.append($dowElement);

                        currDayOfMonth++;
                    }
                    if (dow == 6) {
                        firstDow = 0;
                    }
                }

                $tableObj.append($dowRow);
            }
            return $tableObj;
        }

        /* ----- Modal functions ----- */

        function createModal(id, title, body, footer) {
            var $modalHeaderButton = $('<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>');
            var $modalHeaderTitle = $('<h4 class="modal-title" id="' + id + '_modal_title">' + title + '</h4>');

            var $modalHeader = $('<div class="modal-header"></div>');
            $modalHeader.append($modalHeaderButton);
            $modalHeader.append($modalHeaderTitle);

            var $modalBody = $('<div class="modal-body" id="' + id + '_modal_body">' + body + '</div>');

            var $modalFooter = $('<div class="modal-footer" id="' + id + '_modal_footer"></div>');
            if (typeof(footer) !== 'undefined') {
                var $modalFooterAddOn = $('<div>' + footer + '</div>');
                $modalFooter.append($modalFooterAddOn);
            }

            var $modalContent = $('<div class="modal-content"></div>');
            $modalContent.append($modalHeader);
            $modalContent.append($modalBody);
            $modalContent.append($modalFooter);

            var $modalDialog = $('<div class="modal-dialog"></div>');
            $modalDialog.append($modalContent);

            var $modalFade = $('<div class="modal fade" id="' + id + '_modal" tabindex="-1" role="dialog" aria-labelledby="' + id + '_modal_title" aria-hidden="true"></div>');
            $modalFade.append($modalDialog);

            $modalFade.data('dateId', id);
            $modalFade.attr("dateId", id);

            return $modalFade;
        }

        /* ----- Event functions ----- */

        function checkEvents($calendarElement, year, month) {
            var jsonData = $calendarElement.data('jsonData');
            var ajaxSettings = $calendarElement.data('ajaxSettings');

            $calendarElement.data('events', false);

            if (false !== jsonData) {
                return jsonEvents($calendarElement);
            } else if (false !== ajaxSettings) {
                return ajaxEvents($calendarElement, year, month);
            }

            return true;
        }

        function jsonEvents($calendarElement) {
            var jsonData = $calendarElement.data('jsonData');
            $calendarElement.data('events', jsonData);
            drawEvents($calendarElement, 'json');
            return true;
        }

        function ajaxEvents($calendarElement, year, month) {
            var ajaxSettings = $calendarElement.data('ajaxSettings');

            if (typeof(ajaxSettings) != 'object' || typeof(ajaxSettings.url) == 'undefined') {
                alert('Invalid calendar event settings');
                return false;
            }

            var data = {year: year, month: (month + 1)};

            $.ajax({
                type: 'GET',
                url: ajaxSettings.url,
                data: data,
                dataType: 'json'
            }).done(function (response) {
                var events = [];
                $.each(response, function (k, v) {
                    events.push(response[k]);
                });
                $calendarElement.data('events', events);
                drawEvents($calendarElement, 'ajax');
            });

            return true;
        }

        function drawEvents($calendarElement, type) {
            var jsonData = $calendarElement.data('jsonData');
            var ajaxSettings = $calendarElement.data('ajaxSettings');

            var events = $calendarElement.data('events');
            if (events !== false) {
                $(events).each(function (index, value) {
                    var id = $calendarElement.attr('id') + '_' + value.date;
                    var $dowElement = $('#' + id);
                    var $dayElement = $('#' + id + '_day');

                    $dowElement.data('hasEvent', true);

                    if (typeof(value.title) !== 'undefined') {
                        $dowElement.attr('title', value.title);
                    }

                    if (typeof(value.classname) === 'undefined') {
                        $dowElement.addClass('event');
                    } else {
                        $dowElement.addClass('event-styled');
                        $dayElement.addClass(value.classname);
                    }

                    if (typeof(value.badge) !== 'undefined' && value.badge !== false) {
                        var badgeClass = (value.badge === true) ? '' : ' badge-' + value.badge;
                        var dayLabel = $dayElement.data('day');
                        $dayElement.html('<span class="badge badge-event' + badgeClass + '">' + dayLabel + '</span>');
                    }

                    if (typeof(value.body) !== 'undefined') {
                        var modalUse = false;
                        if (type === 'json' && typeof(value.modal) !== 'undefined' && value.modal === true) {
                            modalUse = true;
                        } else if (type === 'ajax' && 'modal' in ajaxSettings && ajaxSettings.modal === true) {
                            modalUse = true;
                        }

                        if (modalUse === true) {
                            $dowElement.addClass('event-clickable');

                            var $modalElement = createModal(id, value.title, value.body, value.footer);
                            $('body').append($modalElement);

                            $('#' + id).click(function () {
                                $('#' + id + '_modal').modal();
                            });
                        }
                    }
                });
            }
        }

        /* ----- Helper functions ----- */

        function isToday(year, month, day) {
            var todayObj = new Date();
            var dateObj = new Date(year, month, day);
            return (dateObj.toDateString() == todayObj.toDateString());
        }

        function dateAsString(year, month, day) {
            d = (day < 10) ? '0' + day : day;
            m = month + 1;
            m = (m < 10) ? '0' + m : m;
            return year + '-' + m + '-' + d;
        }

        function calcDayOfWeek(year, month, day) {
            var dateObj = new Date(year, month, day, 0, 0, 0, 0);
            var dow = dateObj.getDay();
            if (dow == 0) {
                dow = 6;
            } else {
                dow--;
            }
            return dow;
        }

        function calcLastDayInMonth(year, month) {
            var day = 28;
            while (checkValidDate(year, month + 1, day + 1)) {
                day++;
            }
            return day;
        }

        function calcWeeksInMonth(year, month) {
            var daysInMonth = calcLastDayInMonth(year, month);
            var firstDow = calcDayOfWeek(year, month, 1);
            var lastDow = calcDayOfWeek(year, month, daysInMonth);
            var days = daysInMonth;
            var correct = (firstDow - lastDow);
            if (correct > 0) {
                days += correct;
            }
            return Math.ceil(days / 7);
        }

        function checkValidDate(y, m, d) {
            return m > 0 && m < 13 && y > 0 && y < 32768 && d > 0 && d <= (new Date(y, m, 0)).getDate();
        }

        function checkMonthLimit(count, invert) {
            if (count === false) {
                count = 0;
            }
            var d1 = $calendarElement.data('currDate');
            var d2 = $calendarElement.data('initDate');

            var months;
            months = (d2.getFullYear() - d1.getFullYear()) * 12;
            months -= d1.getMonth() + 1;
            months += d2.getMonth();

            if (invert === true) {
                if (months < (parseInt(count) - 1)) {
                    return true;
                }
            } else {
                if (months >= (0 - parseInt(count))) {
                    return true;
                }
            }
            return false;
        }
    }); // each()

    return this;
};

/**
 * Default settings
 *
 * @returns object
 *   language:          string,
 *   year:              integer,
 *   month:             integer,
 *   show_previous:     boolean|integer,
 *   show_next:         boolean|integer,
 *   cell_border:       boolean,
 *   today:             boolean,
 *   show_days:         boolean,
 *   weekstartson:      integer (0 = Sunday, 1 = Monday),
 *   nav_icon:          object: prev: string, next: string
 *   ajax:              object: url: string, modal: boolean,
 *   legend:            object array, [{type: string, label: string, classname: string}]
 *   action:            function
 *   action_nav:        function
 */
$.fn.zabuto_calendar_defaults = function () {
    var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var settings = {
        language: false,
        year: year,
        month: month,
        show_previous: true,
        show_next: true,
        cell_border: false,
        today: false,
        show_days: true,
        weekstartson: 1,
        nav_icon: false,
        data: false,
        ajax: false,
        legend: false,
        action: false,
        action_nav: false
    };
    return settings;
};

/**
 * Language settings
 *
 * @param lang
 * @returns {{month_labels: Array, dow_labels: Array}}
 */
$.fn.zabuto_calendar_language = function (lang) {
    if (typeof(lang) == 'undefined' || lang === false) {
        lang = 'en';
    }

    switch (lang.toLowerCase()) {
     

        case 'en':
            return {
                month_labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                dow_labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
            };
            break;

     
    }

};


   $(document).ready(function () {
    $("#my-calendar").zabuto_calendar({
      legend: [
        {type: "text", label: "Special event", badge: "00"},
        {type: "block", label: "Regular event", classname: "purple"},
        {type: "spacer"},
        {type: "text", label: "Bad"},
        {type: "list", list: ["grade-1", "grade-2", "grade-3", "grade-4"]},
        {type: "text", label: "Good"}
      ],
      ajax: {
        url: "show_data.php?grade=1"
      }
    });
  });

</script>