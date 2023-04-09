$(document).ready(function () {
    $("#addExpense").hide();
    $("#addIncome").hide();
  });
  $("#income").click(function () {
    $("#addExpense").hide();
    $("#addIncome").show();
  });
  $("#expense").click(function () {
    $("#addIncome").hide();
    $("#addExpense").show();
  });
  let flag=0;
let income = 0;
let totalExpense = 0;
let remaining = 0;
let expense = 0;
$("#addEnteredIncome").click(function () {
    income = $("#enterIncome").val();
   remaining += (income)*1;
    $("#showRemaining").val(remaining);
    $.ajax({
      url: "addIncome.php",
      type: "POST",
      data: "income=" + income,
      datatype: "number",
    }).done(function (result) {
      $("#showIncome").val(result);
    });
  });
  $("#addEnteredExpense").click(function () {
    expense = $("#enterExpense").val();
    let category = $("#selectExpense").val();
    totalExpense += expense * 1;
    remaining = (income - totalExpense)*1;
    if(expense=="")
    {
      $("#error").html("Please enter something!!!");
    }else {
      $("#error").html("");
      if (flag == 1) {
        $.ajax({
          url: "updatename.php",
          type: "POST",
          data: { Expense: expense, Category: category },
        }).done(function () {
          $("#showExpense").val(totalExpense);
          $("#showRemaining").val(remaining);
          display();
      
        });
      } else {
        $.ajax({
          url: "addExpense.php",
          type: "POST",
          data: { Expense: expense, Category: category },
        }).done(function () {
          $("#showExpense").val(totalExpense);
          $("#showRemaining").val(remaining);
          display();
        });
      }
    }
     
  });
  function display() {
    $.ajax({
      url: "display.php",
      type: "POST",
    }).done(function (result) {
      $("#tbody").html(result);
    });
  }
  
  function deleteExpense(id) {
    $.ajax({
      url: "delete.php",
      type: "POST",
      data: "id=" + id,
    }).done(function () {
      display();
    });
  }
  function edittask(id)
{ flag = 1;
    global = id; 
    console.log(id);
    $.ajax({
      url: "update.php",
      type: "POST",
      data: { Expense: expense, Category: category },
    }).done(function () {
      $("#showExpense").val(totalExpense);
      $("#showRemaining").val(remaining);
      display();
      console.log();
  
    });
    console.log(flag);
}
