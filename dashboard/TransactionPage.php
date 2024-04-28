<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
        function toggleSaveAmountField() {
            var saveOption = document.getElementById("save_option").value;
            var specificAmountField = document.getElementById("specific_amount_field");

            if (saveOption === "amount") {
                specificAmountField.style.display = "block";
            } else {
                specificAmountField.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/dashboard/HomePage.php">Maze Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/HomePage.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard/TransactionPage.php">Make a Transaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/HistoryPage.php">Transaction History <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

        
    <div class="container mt-4">
        <h1>Transaction Page</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="transaction_type">Transaction Type</label>
                <select class="form-control" id="transaction_type" name="transaction_type" onchange="toggleForm()">
                    <option value="none">Select Transaction Type</option>
                    <option value="deposit">Deposit</option>
                    <option value="transfer">Transfer</option>
                </select>
            </div>
            <div id="transaction_form" style="display: none;">
    </div>
            <div id="deposit_form" style="display: none;">
                <div class="form-group">
                    <label for="amount">Amount to Deposit</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
                </div>
                <div class="form-group">
                    <label for="save_option">Save to Savings</label>
                    <select class="form-control" id="save_option" name="save_option" onchange="toggleSaveAmountField()">
                        <option value="none">No Savings</option>
                        <option value="percentage">Save Percentage</option>
                        <option value="amount">Save Specific Amount</option>
                    </select>
                </div>
                <div class="form-group" id="specific_amount_field" style="display: none;">
                    <label for="specific_amount">Specific Amount to Save</label>
                    <input type="text" class="form-control" id="specific_amount" name="specific_amount" placeholder="Enter specific amount">
                </div>
                <button type="submit" class="btn btn-danger">Deposit</button>
            </div>
            <div id="transfer_form" style="display: none;">
                <!-- Transfer form code here -->
                <div class="form-group">
                    <label for="amount">Amount to Transfer</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
                </div>
                <div class="form-group">
                    <label for="save_option">Transfer From</label>
                    <select class="form-control" id="save_option" name="save_option" onchange="toggleSaveAmountField()">
                        <option value="none">Transfer From</option>
                        <option value="percentage">Checking</option>
                        <option value="amount">Savings</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="save_option">Transfer To</label>
                    <select class="form-control" id="save_option" name="save_option" onchange="toggleSaveAmountField()">
                        <option value="none">Transfer To</option>
                        <option value="percentage">Checking</option>
                        <option value="amount">Savings</option>
                    </select>
                <div class="form-group" id="specific_amount_field" style="display: none;">
                    <label for="specific_amount">Specific Amount to Save</label>
                    <input type="text" class="form-control" id="specific_amount" name="specific_amount" placeholder="Enter specific amount">
                </div>
                <button type="submit" class="btn btn-danger">Deposit</button>
                
            </div>
        </form>
    </div>

    <script>
        function toggleForm() {
            var transactionType = document.getElementById("transaction_type").value;
            var depositForm = document.getElementById("deposit_form");
            var transferForm = document.getElementById("transfer_form");

            if (transactionType === "deposit") {
                depositForm.style.display = "block";
                transferForm.style.display = "none";
            } else if (transactionType === "transfer") {
                depositForm.style.display = "none";
                transferForm.style.display = "block";
            }else {
                depositForm.style.display = "none";
                transferForm.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

