class UI {
  constructor() {
    this.budgetFeedback = document.querySelector(".budget-feedback");
    this.expenseFeedback = document.querySelector(".expense-feedback");
    this.budgetForm = document.getElementById("budget-form");
    this.budgetInput = document.getElementById("budget-input");
    this.budgetAmount = document.getElementById("budget-amount");
    this.expenseAmount = document.getElementById("expense-amount");
    this.balance = document.getElementById("balance");
    this.balanceAmount = document.getElementById("balance-amount");
    this.expenseForm = document.getElementById("expense-form");
    this.expenseInput = document.getElementById("expense-input");
    this.amountInput = document.getElementById("amount-input");
    this.expenseList = document.getElementById("expense-list");
    this.itemList = [];
    this.itemID = 0;
  }
//submit badget method
   submitBudgetForm(){
   const value= this.budgetInput.value;
    if(value==''||value<0)  {
        this.budgetFeedback.classList.add("showItem");
        this.budgetFeedback.innerHTML='<p>القيم لا يجب ان تكون فارغة او سلبية</p>';
        const self=this;
        //console.log(this);

        setTimeout(function() {
          self.budgetFeedback.classList.remove('showItem');
        },4000);

      }else {
      this.budgetAmount.textContent=value;
      this.budgetInput.value="";
      this.showBalance();
     } 
    }

   //show balance method
  showBalance(){
    const expense =this.totalExpense();
    const total = parseInt(this.budgetAmount.textContent) - expense;
    this.balanceAmount.textContent=total;
    if (total<0){

      this.balance.classList.remove('showGreen','showBlack');
      this.balance.classList.add('showRed');
    }
    else if (total > 0){

      this.balance.classList.remove('showRed', 'showBlack');
      this.balance.classList.add('showGreen');
    }
    else if (total === 0) {

      this.balance.classList.remove('showRed', 'showGreen');
      this.balance.classList.add('showBlack');
    }
  }
//submit expense form
submitExpenseForm(){
  const expenseValue=this.expenseInput.value;
  const amountValue=this.amountInput.value;
  if(expenseValue === "" || amountValue=== "" || amountValue < 0)
  {
    this.expenseFeedback.classList.add("showItem");
    this.expenseFeedback.innerHTML='<p>القيم لا يجب ان تكون فارغة او سلبية </p>';
    const self = this;
    setTimeout(function () {
      self.expenseFeedback.classList.remove("showItem");
    }, 4000);
  }
  else{
    let amount=parseInt(amountValue);
    this.expenseInput.value="";
    this.amountInput.value="";

let expense={
  id:this.itemID,
  title:expenseValue,
  amount:amount,

}
this.itemID++;
this.itemList.push(expense);
this.addExpense(expense);
this.showBalance();
//show balance

  }

}
//add expense
addExpense(expense){
  const div=document.createElement('div');
  div.classList.add('expense');
  div.innerHTML=`
  <div class="expense-item sidebar">  
  <table class="table table-bordered">
  <tbody>
    <tr>
    <td>  <h5 class="expense-title mb-0  list-item">${expense.title}</h5></td>
    <td>  <h5 class="expense-amount mb-0 list-item">${expense.amount}</h5></td>
    <td>  <div class="expense-icons list-item">
       <a href="#" class="edit-icon mx-2" data-id="${expense.id}" style="color:#16aba0;">
       <i class="fas fa-edit"></i>
       </a>
       <a href="#" class="delete-icon" data-id="${expense.id}" style="color:#e83434;">
       <i class="fas fa-trash"></i>
       </a>
     </div></td>
   </div>
    `;
 this.expenseList.appendChild(div);
}


//total Expense 
  totalExpense() {
    let total = 0;
    if(this.itemList.length >0){
     total=this.itemList.reduce(function(acc,curr){
       acc +=curr.amount;
    return acc;
     },0)
    }
    this.expenseAmount.textContent = total;
    return total;
  }
  // edit element
editExpense(element){
let id= parseInt(element.dataset.id);
let parent = element.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
console.log(parent);
//remove from dom
this.expenseList.removeChild(parent);
//remove frome dom
let expense =this.itemList.filter(function(item){
  return item.id ===id;
});
//show value
this.expenseInput.value = expense[0].title;
this.amountInput.value =  expense[0].amount;
//remove form list
let tempList =this.itemList.filter(function(item){
  return item.id !==id;
});
this.itemList=tempList;
this.showBalance();
  }
  //delete element
  deleteExpense(element){
    let id= parseInt(element.dataset.id);
    let parent = element.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
    //remove from dom
    this.expenseList.removeChild(parent);
    //remove form list
    let tempList =this.itemList.filter(function(item){
      return item.id !==id;
    });
    this.itemList=tempList;
    this.showBalance();

  }
   } 


function eventListeners(){
  const budgetForm =document.getElementById("budget-form");
  const expenseForm =document.getElementById("expense-form");
  const expenseList =document.getElementById("expense-list");
  
    //new instance of ui class
    const ui=new UI();
    
  //budget form submit
    budgetForm.addEventListener("submit",function(event){
        event.preventDefault();
        ui.submitBudgetForm();
    })
    
    //expense form submit
  expenseForm.addEventListener("submit",function(event){
        event.preventDefault();
        ui.submitExpenseForm();
    })
    
    //expense List click
    expenseList.addEventListener("click",function(event){
        if(event.target.parentElement.classList.contains('edit-icon')){
ui.editExpense(event.target.parentElement);
        }
        else if(event.target.parentElement.classList.contains('delete-icon')){
          ui.deleteExpense(event.target.parentElement);
        }
    });
}     
    
document.addEventListener('DOMContentLoaded',function(){
    eventListeners();
})

