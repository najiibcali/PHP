
<?php

function calculateDeposit($Opening_Balance,$Transaction_Amount){
    $Deposit_Balance = $Opening_Balance + $Transaction_Amount;
    return $Deposit_Balance;
}

function calculateWithdrawal($Opening_Balance,$Transaction_Amount){
    $Withdrawal_Balance = $Opening_Balance - $Transaction_Amount;
    return $Withdrawal_Balance;
}

function calculateTransactionFee($balance){
    if($balance >= 500){
        return $balance - 5;
    }
    else {
        return $balance - 2;
    }
}

function calculateInterest($balance){
    $AccountType = $_POST['Account_Type'];
    $Account_Duration = $_POST['Account_Duration'];
    $Interest = $balance * 5 * $Account_Duration;
    return $Interest;
}

function calculateTotalCharges(){
    $Total_Charges = calculateTransactionFee();
}

function calculateFinalBalance($Deposit,$Total_Charges){
    $Opening_Balance =  $_POST['Opening_Balance'];
    $FinalBalance = $Opening_Balance + $Deposit - $Total_Charges;
    return $FinalBalance;
}

function checkAccountStatus($balance){
   if($balance >= 1000){
    return "High Balance";
    }
    else if($balance >= 500){
        return "Medium Balance";
    }
    else if($balance <500){
        return "Low Balance";
    }
}

function calculateFutureBalance($FinalBalance,$Interest){
    $Balance = $FinalBalance + $Interest;
    return $Balance;
}

?>