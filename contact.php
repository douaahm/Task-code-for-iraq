<?php
ob_start();
session_start();
$title = "الصفحة الرئيسية";
require __DIR__ . '/init.php';
?>
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
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

    h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    margin-bottom: 20px;
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;
}

  
</style>
<section class="head">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="head-about text-center">
                    <h2 class="h1 text-center" style="color: white;padding-top: 87px;"> تواصل معنا</h2>
                    <div align="center" style="padding-top: 10px;">
                        <a class="astyle" href="homepage.php"> الرئيسية</a>
                        <i class="fas fa-long-arrow-alt-left arrow"></i>
                        <a class="astyle" href="contact.php">  تواصل معنا </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- start contact form -->
<div class="container">

<div class="row">

    <div class="col-xl-10 offset-xl-1 py-5">

        <h4 style="text-align: center;">ابقى على تواصل معنا    
        </h4>

        <h6 class="lead" style="text-align: center;">ان كان لديك اي سؤال تستطيع ارساله لنا وسنجيب عن تسأولاتك على الفور</h6>
<br>

        <form id="contact-form" class="my-login-validation col-xl-12 offset-xl-0 " novalidate="" style="
    /* text-align: center; */
">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
									<label for="name">*الاسم الاول</label>
									<input id="name" type="text" class="form-control" name="name" required="" autofocus="">
									<div class="invalid-feedback right">
									الرجاء ادخال الاسم الاول
									</div>
								</div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
									<label for="name">*الاسم الاخير</label>
									<input id="name" type="text" class="form-control" name="name" required="" autofocus="">
									<div class="invalid-feedback right">
									الرجاء ادخال الاسم الاخير
									</div>
								</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group right">
									<label for="email"> *البريد الالكتروني</label>
									<input id="email" type="email" class="form-control" name="email" required="">
									<div class="invalid-feedback right">
										بريدك الالكتروني غير فعال
									</div>
								</div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">*الرجاء  حدد ما تحتاج</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="الرجاء حدد حاجتك">
                                <option value=""></option>
                                <option value="Request quotation">الطلب الاول </option>
                                <option value="Request order status">الطلب الثاني</option>
                                <option value="Request copy of an invoice">الطلب الثالث </option>
                                <option value="Other">اخرى</option>
                            </select>
                            <div class="invalid-feedback right">
							  الرجاء حدد ما تحتاج
									</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">*الرسالة</label>
                            <textarea id="form_message" name="message" class="form-control" rows="4" required="required" data-error="ارجوك,اترك لنا رسالة"></textarea>
                            <div class="invalid-feedback right">
							  الرجاء اكتب رسالتك لنا
									</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block" style="color: white;background-color: #feca57;border-color: #feca57;}">
										ارسال رسالة
									</button>
                      
                </div>
            </div>

        </form>

    </div>
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>

</div>
<!-- /.container-->
<!-- /end form -->

<?php
require_once 'includes/template/footer.php';
ob_end_flush();

?>