<?php
ob_start();
session_start();
$title = "الصفحة الرئيسية";
require __DIR__ . '/init.php';
?>
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
    :root {
    --mainWhite: #f5f5f5f5;
    --mainDark: #333333;
    --mainGreen: #4ba29c;
    --mainRed: #333333;
    --mainBlue: #333333;
}


.budget-feedback,
.expense-feedback {
  display: none;
}

.budget-form {
  border: 0.15rem solid lightgray;
    padding: 2rem;
    border-radius: 1.25rem;
}

.expense-form {
  border: 0.15rem solid lightgray;
    padding: 2rem;
    border-radius: 1.25rem;
}
.budget-submit {
  background: transparent;
  border: 0.1rem solid var(--mainGreen);
  color: var(--mainGreen);
}
.expense-submit {
  background: transparent;
  border: 0.1rem solid var(--mainGreen);
  color: var(--mainGreen);
}
.expense-submit:hover {
  background: var(--mainGreen);
  color: var(--mainWhite);
}
.budget-submit:hover {
  background: var(--mainGreen);
  color: var(--mainWhite);
}



.expense-amount,
.expense-title {
  color: rgb(51, 51, 51);
  font-size: 17px;
}
.edit-icon {
  color: var(--mainBlue);
  cursor: pointer;
  font-size: 1rem;
  text-decoration: none !important;
}
.delete-icon {
  color: var(--mainRed);
  cursor: pointer;
  font-size: 1rem;
  text-decoration: none !important;
}
.edit-icon:hover {
  color: var(--mainBlue);
}
.delete-icon:hover {
  color: var(--mainRed);
}
.showItem {
  display: block;
}
.info-title {
  font-size: 1.5rem;
}
.budget {
  font-size: 1.6rem;
  color: var(--mainGreen);
}
.expense {
  font-size: 1.6rem;
  color: var(--mainRed);
}
.balance {
  font-size: 1.6rem;
}
.budget-icon,
.expense-icon,
.balance-icon {
  font-size: 2.5rem;
  color: var(--mainBlue);
}
.showRed {
  color: var(--mainRed);
}
.showGreen {
  color: var(--mainGreen);
}
.showBlack {
  color: var(--mainDark);
}
@media screen and (min-width: 992px) {
  .budget {
    font-size: 2.6rem;
    color: var(--mainGreen);
  }
  .expense {
    font-size: 2.6rem;
    color: var(--mainRed);
  }
  .balance {
    font-size: 2.6rem;
  }
  .budget-icon,
  .expense-icon,
  .balance-icon {
    font-size: 3.5rem;
    color: var(--mainBlue);
  }
}

.expense-item {
  height: 59px;
}
.budget-input{
  text-align: right;
}
code, samp, var, [type="email"], [type="file"], [type="number"], [type="password"], [type="tel"], [type="url"] {
   
    direction: rtl;
}
.expense-input{
  text-align: right;
}
</style>
<section class="head">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="head-about text-center">
                    <h2 class="h1 text-center" style="color: white;padding-top: 87px;">احسب ميزانيتك</h2>
                    <div align="center" style="padding-top: 10px;">
                        <a class="astyle" href="homepage.php"> الرئيسية</a>
                        <i class="fas fa-long-arrow-alt-left arrow"></i>
                        <a class="astyle" href="budget.php"> احسب ميزانيتك  </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start budget -->
<div class="container-fluid" style="margin-top:40px;">
<div class="col-sm-8 col-12 col-md-12 text-center">
    <h4 >قم بحساب ميزانيتك</h4>
    <h6> اكتب راتبك الشهري ومصروفاتك سواءيوما كانت ام شهريا لترى كم المتبقي لديك في ميزانيك الشهرية لتستطيع بذلك السيطرة عللى دخلك </div>
    
    <div class="row" style="margin-top:40px;">
    <div class="col-md-5 my-3">
        <!-- budget feedback -->
        <div class="budget-feedback alert alert-danger text-capitalize">budget feedback</div>
        <!-- budget form -->
        <form id="budget-form" class=" budget-form">
            <h5 class="text-capitalize">الرجاء ادخال الراتب الشهري</h5>
            <div class="form-group">
                <input type="number" class="form-control budget-input " id="budget-input" >
            </div>
            <!-- submit button -->
            <button type="submit" class="btn text-capitalize budget-submit" id="budget-submit">احسب</button>
        </form>
    </div>
     <div class="col-md-7">
      <!-- app info -->
      <div class="row my-3">
       <div class="col-4 text-center mb-2">
        <h6 class="text-uppercase info-title">الراتب</h6>
        <span class="budget-icon"><i class="fas fa-money-bill-alt"></i></span>
        <h4 class="text-uppercase mt-2 budget" id="budget"><span id="budget-amount">0</span><span> IQ </span></h4>
       </div>
       <div class="col-4 text-center">
        <h6 class="text-uppercase info-title">المصاريف</h6>
        <span class="expense-icon"><i class="far fa-credit-card"></i></span>
        <h4 class="text-uppercase mt-2 expense" id="expense"><span> IQ </span><span id="expense-amount">0</span></h4>
       </div>
       <div class="col-4 text-center">
        <h6 class="text-uppercase info-title">الميزانية</h6>
        <span class="balance-icon"><i class="fas fa-dollar-sign"></i></span>
        <h4 class="text-uppercase mt-2 balance" id="balance"> <span> IQ </span><span id="balance-amount">0</span></h4>
       </div>
      </div>
     </div>
    </div>

    <div class="row">
    
    <div class="col-md-5 my-3">
        <!-- expense feedback -->
        <div class="expense-feedback alert alert-danger text-capitalize">expense feedback</div>
        <!-- expense form -->
        <form id="expense-form" class=" expense-form">
            <h5 class="text-capitalize">الرجاء ادخال عنوان المصاريف</h5>
            <div class="form-group">
                <input type="text" class="form-control expense-input" id="expense-input">
            </div>
            <h5 class="text-capitalize">الرجاء ادخال المقدار المالي</h5>
            <div class="form-group">
                <input type="number" class="form-control expense-input" id="amount-input">
            </div>
            <!-- submit button -->
            <button type="submit" class="btn text-capitalize expense-submit" id="expense-submit">اضافة </button>
        </form>
    </div>
    
    <div class="col-md-7 my-3">
      <!-- expense list -->
      <div class="expense-list" id="expense-list">

       <div >
       <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col"><h5 class="list-item"> # </h5></th>
      <th scope="col"><h5 class="list-item">عنوان المصاريف </h5></th>
      <th scope="col"><h5 class="list-item">قيمة المصاريف</h5></th>
      <th scope="col"><h5 class="list-item"><h5>الأعدادات </h5></th>
    </tr>
  </thead>
</table >
       
       </div>
       <!-- single expense -->

       <!-- <div class="expense">
        <div class="expense-item d-flex justify-content-between align-items-baseline">

         <h6 class="expense-title mb-0 text-uppercase list-item">- title</h6>
         <h5 class="expense-amount mb-0 list-item">amount</h5>

         <div class="expense-icons list-item">

          <a href="#" class="edit-icon mx-2" data-id="${expense.id}">
           <i class="fas fa-edit"></i>
          </a>
          <a href="#" class="delete-icon" data-id="${expense.id}">
           <i class="fas fa-trash"></i>
          </a>
         </div>
        </div>

       </div> -->

       <!-- end of single expense -->

      </div>
     </div>
</div>  




   </div>
  </div>
 </div>


<!-- /end budget -->


<div style="margin-top:20px"></div>
<?php
require_once 'includes/template/footer.php';
ob_end_flush();
?>