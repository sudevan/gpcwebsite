<style type="text/css">
            .link{
                list-style: none;


            }
            .link>li>a:hover{
                  padding-top: 10px;
                  padding-bottom: 10px;
                  color: #dc3545;
            }
            .link2{
                list-style: none;
            }
            .link2>li>a{
                padding:10px;
            }
            .link2>li>a:hover{
                color: #dc3545;
            }
            .padding10{
              padding:10px
        }
        .display-block{
            display: block;
        }
        .social-icon{
            border:1px solid black;
            padding: 10px;
            margin: 5px
        }
        </style>
<footer>
    <div class="row bg-light" style="margin: 0">
        <div class="col-lg-4 px-lg-5">
           <h5  class="px-3 py-2">Sign up  For Our Newsletter</h5>
            <div class="input-group" >
             <input  class="px-lg-3 py-lg-2" type="text" name="" placeholder="Enter E-mail Address" >
                 <button class=" btn btn-danger px-lg-3 py-lg-2" style="border-radius: 0" ><span>GO</span></button>
            </div>
        </div>

        <div class="col-lg-3 px-lg-4">
            <h5  class="px-3 py-2">Navigation</h5>
            <ul class="link">
                <li ><a href="index.php" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-home" ></i></span>&nbsp;Home</a></li>

                <li><a href="photos.php" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-image"></i></span>&nbsp;Gallery</a></li>

                <li><a href="comingsoon.php" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-bank"></i></span>&nbsp;Departments</a></li>

                <li><a href="comingsoon.php" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-suitcase"></i></span>&nbsp;Placement</a></li>

                <li><a href="" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-ticket"></i></span>&nbsp;Admissions</a></li>

                <li><a href="comingsoon.php" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-user"></i></span>&nbsp;Administration</a></li>
            </ul>
        </div>
        <div class="col-lg-4">
            <ul class="link2">
                <li ><a href="index.php" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-phone" ></i></span>&nbsp; 0491 257 2640</a></li>

                <li><a href="mailto:palakkadpolytechnic@gmail.com" class="text-bl px-3 display-block"><span class="padding10"><i class="fa fa-envelope"></i></span>&nbsp;palakkadpolytechnic@gmail.com</a></li>

                <li><a href="" class="text-bl px-3 display-block"  ><span class="padding10"><i class="fa fa-map-marker"></i></span>&nbsp;&nbsp;Kodumbu(po), Palakkad</a></li>
            </ul>
        </div>
        
    </div>

    <div class="row" style="background-image: linear-gradient(#f8f9fa, white);margin: 0">
        <div class="col-lg-6 px-lg-5 py-lg-3">
            <h6 class="text-bl">&copy; GPTC PALAKKAD - All Rights Reserved</h6>
        </div>
        <div class="col-lg-6 px-lg-5 py-lg-3">
            <div class="float-lg-right">
                 <a href="#" class=" text-bl social-icon">
                    <span><i class="fa fa-facebook"></i></span>
                </a>
                 <a href="#" class="text-bl social-icon">
                    <span class="fa fa-google-plus"></span>
                </a>
                 <a href="#" class="text-bl social-icon">
                    <span class="fa fa-twitter"></span>
                </a>
                <a href="#" class="text-bl social-icon">
                    <span class="fa fa-dribbble"></span>
                </a>
               
            </div>
        </div>
        
    </div>
</footer>



















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
   
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
    <script src="js/bootnavbar.js" ></script>
    <script>
        $(function () {
            $('#main_navbar').bootnavbar();
        })
    </script>
