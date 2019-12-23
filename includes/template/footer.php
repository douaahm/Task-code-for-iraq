<!-- Footer -->

<style>
    /*==================== 
	Footer 
====================== */


    /* Copy Right Footer */
    .footer-copyright {
        background:  #16aba0;;
        padding: 5px 0;
    }

    .footer-copyright p {
        color: #ece8e8;
        margin: 2px 0 0;
    }

</style>
<!-- start footer -->

<footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light ">
      
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>حقوق النشر لكلية الهندسة© 2016. جميع الحقوق محفوظة. </p>

                </div>
            </div>
        </div>
    </div>
            </div>
      
</footer>
<!--/end of footer  -->
<!-- Footer -->

<!-- jQuery -->
<script src="<?php echo $config['url_app']; ?>layout/js/jquery.js?v="></script>
<script src="<?php echo $config['url_app']; ?>layout/js/custom.js?v="></script>
<script src="<?php echo $config['url_app']; ?>layout/js/contact.js?v="></script>
<script src="<?php echo $config['url_app']; ?>layout/js/app.js?v="></script>
<script src="<?php echo $config['url_app']; ?>layout/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $config['url_app']; ?>layout/js/bootstrap.min.js?v="></script>

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

</script>
<!-- Twitter universal website tag code -->
<script>
    ! function(e, t, n, s, u, a) {
        e.twq || (s = e.twq = function() {
                s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
            }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
            a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
    }(window, document, 'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init', 'o182i');
    twq('track', 'PageView');

</script>






<script type="text/javascript">
    $(window).on('load', function() {

        setTimeout(function() {
            $('#registerModal').modal('show');
        }, 2000);

        normalizeSlideHeights();

    });

    var headerTop;
    var header = $('.header');

    let size = '';

    function introHeader(x) {
        let windowHeight = window.innerHeight;
        let navHeight = document.getElementById("nav").offsetHeight;
        headerTop = 0 - navHeight;
        header.css('top', headerTop);
    }

    function screenWidth(maxWidth) {
        if (maxWidth.matches) {
            size = 'small';
        } else {
            size = 'big';
        }
    }

    var x = window.matchMedia("(max-width: 767px)");
    let maxWidth_991 = window.matchMedia("(max-width: 991px)");
    introHeader(x);
    screenWidth(maxWidth_991);

    $(window).on("orientationchange resize", function() {
        introHeader(x);
        screenWidth(maxWidth_991);
        normalizeSlideHeights()
    });


    $('#navbarSupportedContent').on('hide.bs.collapse', function() {
        header.css('top', headerTop);
    });

    $('#navbarSupportedContent').on('show.bs.collapse', function() {
        header.css('top', 'auto');
    });


    //setting min-height of the carousel
    function normalizeSlideHeights() {
        $('.carousel').each(function() {
            var items = $('.carousel-item', this);
            normalizing(items);
        });

        function normalizing(items) {
            // reset the height
            items.css('min-height', 0);
            // set the height
            var maxHeight = Math.max.apply(null,
                items.map(function() {
                    return $(this).outerHeight()
                }).get());
            items.css('min-height', maxHeight + 'px');
        }
        return false;
    }


    $('.featured-course').hover(function() {
        $(this).animate({
            'right': '15px'
        }, 300);
        $(this).removeClass('shadow').addClass('shadow-sm');
    }, function() {
        $(this).animate({
            'right': '0px'
        }, 150);
        $(this).removeClass('shadow-sm').addClass('shadow');
    });

    $('.featured-course-right').hover(function() {
        $(this).animate({
            'left': '15px'
        }, 300);
        $(this).removeClass('shadow').addClass('shadow-sm');
    }, function() {
        $(this).animate({
            'left': '0px'
        }, 150);
        $(this).removeClass('shadow-sm').addClass('shadow');
    });

    $('#review-text').keyup(function() {
        var len = $(this).val().length;
        $('#counter').text('200 / ' + len);
    });

    let navBar = $('#nav');
    let bellIcon = $('#bell-icon');

    $(window).bind('scroll', function() {

        let currentScrollVal = $(window).scrollTop();
        let beforeSwitchingPoint = 200;
        let switchingPoint = 400;

        let classesOnSticky = 'sticky-nav shadow-sm';


        if (currentScrollVal > beforeSwitchingPoint) {
            navBar.addClass(classesOnSticky);


            if (currentScrollVal > switchingPoint) {
                navBar.addClass('sticky-nav-top');
            }
        } else if (currentScrollVal < switchingPoint) {

            navBar.removeClass(classesOnSticky);
            navBar.removeClass('sticky-nav-top');

        }


    });

</script>

</body>

</html>
