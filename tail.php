<!-- footer -->
	<footer class="bg-colors py-5" style="background: gainsboro;">

		<div class="container py-xl-4">
			<div class="row footer-grids">
				<div class="col-lg-2 col-sm-4 footer-grid">
					<h3 class="mb-sm-4 mb-3 pb-lg-3" style="color: black">Home</h3>
					<ul class="list-links">
                            <li style="color: black" class="active"><a href="index.php" style="color: black">Home</a></li>
                            <li style="color: black"><a href="news.php" style="color: black">News</a></li>
                            <li style="color: black"><a style="color: black" href="events.php">Events</a></li>
                            <li style="color: black"><a style="color: black" href="departments.php">Departments</a></li>
                            <li style="color: black"><a style="color: black" href="activities.php">Activities</a></li>
                            
                        </ul>
				</div>
				<div class="col-lg-2 col-sm-4 footer-grid mt-sm-0 mt-4">
					<h3 class="mb-sm-4 mb-3 pb-lg-3" style="color: black"> Links</h3>
					 <ul class="list-links">
                            <li style="color: black"><a style="color: black" href="staff.php">Staff</a></li>
                            <li style="color: black"><a style="color: black" href="albums.php">Gallery</a></li>
                            <li style="color: black"><a style="color: black" href="links.php">Links</a></li>
                            <li style="color: black"><a style="color: black" href="#">Students Union</a></li>
                            <li style="color: black"><a style="color: black" href="contact.php">Contact</a></li>
                        </ul>
					</ul>
				</div>
					<div class="col-lg-4 col-sm-6 footer-grid mt-lg-0 mt-4">
					<h3 class="mb-sm-4 mb-3 pb-lg-3" style="color: black">Useful Links</h3>
                        <ul class="list-links">
                            <li style="color: black"><a style="color: black" href="links.php">Exam registration/Results</a></li>
                            <li style="color: black"><a style="color: black" href="links.php">syllabus and curriculum</a></li>
                            <li style="color: black"><a style="color: black" href="links.php">AICTE Approval</a></li>
                            <li style="color: black"><a style="color: black" href="links.php">AICTE Schemes and Scholarships</a></li>
                            
                        </ul>
				</div>
				
				<div class="col-lg-4 col-sm-6 footer-grid mt-lg-0 mt-4">
					<div class="address">
						<div class="row address-grid">
							<div class="col-md-3 col-sm-4 col-2 address-left text-center">
								<i class="fa fa-phone" style="color: black"></i>
							</div>
							<div class="col-md-9 col-sm-8 col-10 address-right">
								<p style="color: black"> 0491 257 2640</p>
							</div>
						</div>
						<div class="row address-grid my-3">
							<div class="col-md-3 col-sm-4 col-2 address-left text-center">
								<i style="color: black" class="fa fa-envelope"></i>
							</div>
							<div class="col-md-9 col-sm-8 col-10 address-right">
								<p>
									<a style="color: black" href="mailto:example@email.com">palakkadpolytechnic@gmail.com</a>
								</p>
								
							</div>
						</div>
						<div class="row address-grid">
							<div class="col-md-3 col-sm-4 col-2 address-left text-center">
								<i style="color: black" class="fa fa-map-marker"></i>
							</div>
							<div class="col-md-9 col-sm-8 col-10 address-right">
								<p style="color: black">Kodumbu (PO) <br> Palakkad-678582</p>
							</div>
						</div>
					</div><a href="https://muhammedfasl.ml" target="_blank" class="text-bl"></a></b>

				</div>
			
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright-w3ls py-4">
		<div class="container">
			<div class="row">
				<!-- copyright -->
				<p class="col-lg-8 copy-right-grids text-bl text-lg-left text-center mt-lg-2">© gptc-2019. All
					Rights Reserved | Design by <b><a href="https://muhammedfasil.ml" target="_blank" class="text-bl">Muhammed Fasil CHE-S6</a></b>
				</p>
				<!-- //copyright -->
				<!-- social icons -->
				<div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
					<ul>
						<li>
							<a href="#" class="rounded-circle">
								<span class="fa fa-facebook-f"></span>
							</a>
						</li>
						<li class="px-2">
							<a href="#" class="rounded-circle">
								<span class="fa fa-google-plus"></span>
							</a>
						</li>
						<li>
							<a href="#" class="rounded-circle">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li class="pl-2">
							<a href="#" class="rounded-circle">
								<span class="fa fa-dribbble"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //social icons -->
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<!-- <a href="#home" class="move-top text-center"></a> -->
	<!-- //move top icon -->
	<script type="text/javascript">$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});</script>
   
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
