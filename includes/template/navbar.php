<?php include 'includes/template/messages.php'; ?>

<nav id="nav" class="navbar navbar-expand-lg navbar-light py-2">
    <div class="container-fluid">
        <a class="navbar-brand title-brand" href="homepage.php">
            <img class="dark-logo nav-logo" src="<?php echo $config['url_app']; ?>layout/logo/llogo11.png" alt="FC" style="">
            <span class="font-head">ميزانيتك</span>
        </a>
        <div class="small-notifications dropdown mr-auto"></div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link font-head" href="homepage.php">الرئيسية</a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link font-head" href="bugdet.php">حساباتك</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link font-head" href="about.php">تعرف علينا</a>
                </li>
               
                <li class="nav-item ">
                    <a class="nav-link font-head" href="contact.php">تواصل معنا</a>
              

            </ul>

            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                    <form class="navbar-form btnS" action="register" method="post">
                        <input type="hidden" name="_token" value="MUcTQAfceRUfwg5hPwPBdmVcIj4LaM4QNEeq2E2J">
                        
                        <button type="button" class="btn btn-outline-info" type="submit">
                            تسجيل دخول
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

