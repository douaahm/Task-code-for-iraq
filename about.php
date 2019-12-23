<?php
ob_start();
session_start();
$title = "الصفحة الرئيسية";
require __DIR__ . '/init.php';
?>
<link href="<?php $config['url_app']; ?>layout/css/grid.css?v=" rel="stylesheet">
<link href="<?php $config['url_app']; ?>layout/css/me.css?v=" rel="stylesheet">
<style>
    .head {
    background: -webkit-linear-gradient(left, #02aea5, #1ec088);
    background: linear-gradient(to right, #25c481, #00aca6);
    height: 39vh;
    }
    a:visited {
        text-decoration: none;
        color:white;
    }
    a:hover {
        text-decoration: none;
        color:white;
    }

    a:link {
        text-decoration: none;
    }

    .astyle {
        color: white;
        font-size: 22px;
        text-decoration: none;
        text-transform: uppercase;
        cursor: pointer;
    }

    .arrow {
        border: 1px solid;
        padding: 4px;
        font-size: 18px;
        margin: 4px;
        text-align: center;
        color: #feca57;
    }

   
    .fa-long-arrow-alt-left:before {
        content: "\f30a";
    }

.container{
   width:100%;
}
.container h1{
    font-size: 36px;
}
.mission{
   padding:5% 0;
   width:100%;
   height:auto;
   background-color:#fff;
}
.mission .left{
    width: 100%;
    display: inline-block;
    text-align: center;
}
.mission .right{
   width:50%;
   display:inline-block;
}
.mission .left h1{
    text-align: center;
    color: #feca57;
    margin: 20px 0 20px 0;
}
.mission .left hr{
    width: 30%;
    border-top: 1px solid #e9ecef;
    border-bottom: none;
}
.mission .left p{
   font-size:1rem;
   margin:40px auto;
   width:100%;
}

.about{
   padding:5% 0;
   width:100%;
   height:auto;
   background-color:#fff;
}
.about .right{
   width:50%;
   display:inline-block;
}
.about .left{
   float:left;
   width:50%;
   padding-top: 14px;
   display:inline-block;
}
.about .left img{
   width:100%;
   
}
.about .right h1{
    text-align: center;
    color: #feca57;
    margin: 45px 0 20px 0;
}

.about .right hr{
    width: 69%;
    border-top: 1px solid #e9ecef;
    border-bottom: none;
}
.about .right p{
   font-size:1rem;
   margin:40px auto;
   width:100%;
}


.team{
   width:100%;
   margin:auto;
   over-flow:hidden;
}
.team h1{
   text-align:center;
   color: #feca57;
   
}
.team h1 hr{
    width: 30%;
    border-top: 1px solid #e9ecef;
    border-bottom: none;
   margin-bottom:57px;
}
.clear{
    clear: both;			
}
/* media */
@media(max-width:1200px){
   .mission .right p{
      font-size:.8rem;
      margin:20px auto;
   }
   .about .left p{
      font-size:.8rem;
      margin:20px auto;
   }
}

@media(max-width:992px){
   .about .left{
   width:100%; 
}
   .about .right{
   width:100%; 
}
      .mission .left{
   width:100%; 
}  
}

.center{
   
    text-align: center;
    
}

.component-margin-standard>.component-margin {
        margin-top: 70px;
    }

    .cgmt-treatment-shadow {
        box-shadow: 0 10px 20px 0 rgba(57, 58, 61, .15);
    }

    .cgmt-bgcolor-white {
        background-color: #fff;
    }

    .cgmt-bgcolor-teal02 {
        background-color: #00a6a4;
    }
</style>
<section class="head">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="head-about text-center">
                    <h2 class="h1 text-center" style="color: white;padding-top: 87px;">تعرف علينا</h2>

                    <div align="center" style="padding-top: 10px;">
                        <a class="astyle" href="homepage.php"> الرئيسية</a>
                        <i class="fas fa-long-arrow-alt-left arrow"></i>
                        <a class="astyle" href="about.php"> تعرف علينا </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--start about section-->
<div class="container">
   <div class="about">
      <div class="right">
         <h1>تعرف علينا</h1>
         <hr>
         <p>
         مقـوّر : ويميـل إلى التربيع المزوي في زوايـاه وتكثـر المسـتقيمات المسطحة في أجزائه وكان يستعمل بنقش أخبار الملوك وما يتصل بحياتهم الخاصة .
                    ويعتقد أن هذا الخط هو خط الكوفة الأول وهو أصل الأقلام العربية المخترعـة فيما بعد وكان منتشـراً في الحيرة والرها ونصيبين
                    مقـوّر : ويميـل إلى التربيع المزوي في زوايـاه وتكثـر المسـتقيمات المسطحة في أجزائه وكان يستعمل بنقش أخبار الملوك وما يتصل بحياتهم الخاصة .
                    ويعتقد أن هذا الخط هو خط الكوفة الأول وهو أصل الأقلام العربية المخترعـة فيما بعد وكان منتشـراً في الحيرة والرها ونصيبين 
        </p>
      </div>
      <div class="left">
         <img src="layout/imgs/tt.jpg" style="height: 337px;">
      </div>
      <div class="clear"></div>
   </div>
   <div class="mission"> 
        <div class="left">
          <h1>اهدافنا </h1>
         <hr>
         <p>
             
         مقـوّر : ويميـل إلى التربيع المزوي في زوايـاه وتكثـر المسـتقيمات المسطحة في أجزائه وكان يستعمل بنقش أخبار الملوك وما يتصل بحياتهم الخاصة .
                    ويعتقد أن هذا الخط هو خط الكوفة الأول وهو أصل الأقلام العربية المخترعـة فيما بعد وكان منتشـراً في الحيرة والرها ونصيبين

                    مقـوّر : ويميـل إلى التربيع المزوي في زوايـاه وتكثـر المسـتقيمات المسطحة في أجزائه وكان يستعمل بنقش أخبار الملوك وما يتصل بحياتهم الخاصة .
                    ويعتقد أن هذا الخط هو خط الكوفة الأول وهو أصل الأقلام العربية المخترعـة فيما بعد وكان منتشـراً في الحيرة والرها ونصيبين
                    مقـوّر : ويميـل إلى التربيع المزوي في زوايـاه وتكثـر المسـتقيمات المسطحة في أجزائه وكان يستعمل بنقش أخبار الملوك وما يتصل بحياتهم الخاصة .
                    ويعتقد أن هذا الخط هو خط الكوفة الأول وهو أصل الأقلام العربية المخترعـة فيما بعد وكان منتشـراً في الحيرة والرها ونصيبين

                    مقـوّر : ويميـل إلى التربيع المزوي في زوايـاه وتكثـر المسـتقيمات المسطحة في أجزائه وكان يستعمل بنقش أخبار الملوك وما يتصل بحياتهم الخاصة .
                    ويعتقد أن هذا الخط هو خط الكوفة الأول وهو أصل الأقلام العربية المخترعـة فيما بعد وكان منتشـراً في الحيرة والرها ونصيبين
                 
         </p>
      </div>
      <div class="clear"></div>
      
   </div>
   
</div>
<div class="team">
         <h1>فريقنا  <hr> </h1>
        
<!-- start team section -->
<section class="component-margin hero-cms grid" data-com-id="com-cms-cg-mktg-component-grid|c4jch9PNp|1.0.0" data-com-type="component" data-template-id="grid" data-com-version="1.0.3" data-instance-version="1.0.0" data-auto-sel="c4jch9PNp" style="padding-bottom: 78px;">
<div class="grid__1-0-3__grid__container">
  <div class="grid__1-0-3__grid__collapse">
    <div class="grid__1-0-3__grid__content grid__1-0-3__grid__content_left center">
      <ul class="grid__1-0-3__grid__items grid__1-0-3__grid__items__3-column">
      
        <li class="
          grid__1-0-3__grid__item
          cgmt-bgcolor-white
          cgmt-treatment-shadow">
          <div class="grid__1-0-3__grid__item_top-border cgmt-bgcolor-teal02"></div>
          <div class="
            grid__1-0-3__grid__item_content">
            
              <img class="grid__1-0-3__grid__img-large lazyloaded" data-src="https://digitalasset.intuit.com/IMAGE/A1pcB4LPb/grid-image-1-budgets.jpg" alt="" src="layout/imgs/grid-image-1-budgets.jpg">
              <h4 class=" center
                grid__1-0-3__grid__item_subheading
                cgmt-sub-heading-3
                cgmt-weight-bold
                cgmt-color-gray01">دعاءهاشم مجيد</h4>
              <p class=" 
                grid__1-0-3__grid__item_copy
                cgmt-body-copy-2
                cgmt-weight-normal
                cgmt-color-gray01">مصممة ومطورة مواقع بأستخدام عدد من اللغات البرمجية تصميم واجهات مواقع وربطها مع السيرفرات </p>
            <br>
   <a href="#" style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-facebook-f"></i></a>
    <a href="#" style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-twitter"></i></a>
    <a href="#" style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-google"></i></a>
    <a href="#" style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-youtube"></i></a>
<br>
<br>

            
          </div>
        </li>  
      
        <li class="
          grid__1-0-3__grid__item
          cgmt-bgcolor-white
          cgmt-treatment-shadow">
          <div class="grid__1-0-3__grid__item_top-border cgmt-bgcolor-teal02"></div>
          <div class="
            grid__1-0-3__grid__item_content
            
            
            
              
                
              
            
            ">
            
              <img class="grid__1-0-3__grid__img-large lazyloaded" data-src="https://digitalasset.intuit.com/IMAGE/A5r00qyD9/grid-image-2-money.jpg" alt="" src="layout/imgs/grid-image-2-money.jpg">
            
            
            
            
            
              <h4 class="grid__1-0-3__grid__item_subheading
                cgmt-sub-heading-3 center
                cgmt-weight-bold
                cgmt-color-gray01">البرمجة من اجل العراق</h4>
            
            
              <p class="grid__1-0-3__grid__item_copy
                cgmt-body-copy-2
                cgmt-weight-normal
                cgmt-color-gray01">مبادرة غير ربحية لأجل دعم الشباب  بمجموعة من المهام والدروس لكافة المجالات التقنية</p>
                <br>
     <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-facebook-f"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-twitter"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-google"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-linkedin-in"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-youtube"></i></a>
    <br>  <br>
          </div>
        </li> 
        <li class="grid__1-0-3__grid__item cgmt-bgcolor-white
          cgmt-treatment-shadow">
          <div class="grid__1-0-3__grid__item_top-border cgmt-bgcolor-teal02"></div>
          <div class="grid__1-0-3__grid__item_content">
            
              <img class="grid__1-0-3__grid__img-large lazyloaded" data-src="https://digitalasset.intuit.com/IMAGE/A1nnAKk3N/grid-image-3-one-step.jpg" alt="" src="layout/imgs/grid-image-3-one-step.jpg">
              <h4 class="
                grid__1-0-3__grid__item_subheading
                cgmt-sub-heading-3
                cgmt-weight-bold center
                cgmt-color-gray01">محمد عيسى</h4>
              <p class="center grid__1-0-3__grid__item_copycgmt-body-copy-2cgmt-weight-normal cgmt-color-gray01">مطور مواقع محترف وصاحب مبادرة البرمجة من اجل العراق </p>
              <br>
           
    <a href="#" style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-facebook-f"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-twitter"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-google"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-linkedin-in"></i></a>
    <a href="#"  style="color: #222f3e;font-size: 20px; padding-left: 10px;"><i class="fab fa-youtube"></i></a>
    <br> <br>
            
          </div>
        </li>  
      
      </ul>
    </div>
  </div>
</div>

</section>
<!-- /end team section -->



<?php
require_once 'includes/template/footer.php';
ob_end_flush();
?>