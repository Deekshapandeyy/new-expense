<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Expense Manager</title>
    <!-- <link  rel="stylesheet" href="./CSS/style.css"> -->
    <link rel="stylesheet" href="./CSS/style.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="wrapper__section">
            <button id="income" class="wrapper__btn"><b>Income</b></button>
            <button id="expense" class="wrapper__btn"><b>Expense</b></button>
        </div>
        <hr>
        <div class="wrapper__add">
            <div id="addIncome">
                <label for="income" class="wrapper__label">Income</label><br>
                <input type="number" id="enterIncome">
                <button id="addEnteredIncome" class="wrapper__addbtn">Add</button>
                
            </div>
            <div id="addExpense">
                <label for="expense" class="wrapper__label">Expense</label><br>
                <input type="number" id="enterExpense">
                <select id="selectExpense">
                    <option value="Grocery">Grocery</option>
                    <option value="Veggies">Veggies</option>
                    <option value="Travelling">Travelling</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                </select>
                <button id="addEnteredExpense" class="wrapper__addbtn">Add</button>
            </div>
        </div>
        <hr>
        <div class="wrapper__main">
            <br>
            <label for="income" id="showinc">Income</label> 
            <!-- <br><br> -->
            <input type="text" readonly="readonly" id="showIncome" class="wrapper__show">
            <!-- <br><br> -->
            <label for="expense" id="showexp">Expense</label> 
            <!-- <br><br> -->
            <input type="text" readonly="readonly" id="showExpense" class="wrapper__show">
            <br><br>
            <label for="remaining" id="showrem">Remaining</label> 
            <br>
            <input type="text" readonly="readonly" id="showRemaining" class="wrapper__show">
            <!-- <br><br> -->
        </div>
        <p id="error"></p>
        <hr><hr>
        <div class="wrapper__display">
            <table class="wrapper__table">
                <thead>
                    <tr>
                    <th>Category</th>
                    <th>Expense</th>
                    <th>Edit</th>
                    <th>Remove</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>

    </div>
</body>
<script src="./JS/script.js"></script>
<?php
// unset($_SESSION['income']);
// unset ($_SESSION['expenses']);
?>