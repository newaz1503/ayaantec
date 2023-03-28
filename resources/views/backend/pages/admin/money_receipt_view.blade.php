<!DOCTYPE html>
<html>
	
<head>
	<title>
		Lettethead
	</title>
	 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Oswald:wght@600&family=Roboto&display=swap');
        </style>
	<link rel="stylesheet" href="{{asset('receipt/css/normalize.css') }}">
        <link rel="stylesheet" href="{{asset('receipt/css/main.css') }}">
        
        
	<style>
            body{
                font-family: 'Gideon Roman', cursive;
                font-family: 'Oswald', sans-serif;
                font-family: 'Roboto', sans-serif;
            }
        </style>
	
	
</head>
<body width="90%" onload="window.print()">
		<form action="" method="get" class="container">
            <div class="header">
                <div class="cash-receipt left">
                    <img style="height: 50px; margin-left: 20px;" src="{{asset('receipt/logo.png') }}" alt="" srcset=""><br>
                   <div style="margin-left: 27px; font-size: smaller;">
                    Ayaan Tech Limited.<br/>
                    Nikeoton Gulshan-1 Dhaka. <br/>
                    connct@ayaantech.com <br/>
                    +88 01973198574
                   </div>
                </div>
                <div class="medium left">
                    <div class="right">
                        <label for="receipt-no">Receipt Number:</label>
                        <input class="no-style input-receipt-no" id="receipt-no" type="text" value="{{$rnumber}}">
                    </div>
                    <div class="right"> 
                        <label for="date">Date:</label>
                        <input class="no-style input-date" id="date" type="text" value="{{$date}}">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content">
                <div>
                    <label for="received-from">Received From</label>
                    <input type="text" class="no-style text-center" id="received-from input-received-from" value="{{$to}}" style="text-align: center"> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                    <label for="amount">the amount of </label>
                    <input type="text" class="no-style text-center" id="amount input-amount" value="BDT {{$amount}}" style="margin-left: 15px">
                </div>
                <div style="margin-top: 10px;">
                    <label for="for">For</label>
                    <input type="text" id="for" class="no-style input-for" value="{{$for}}" style="text-align: center; ">
                </div>
                <div class="payment" style="margin-top: 20px;">
                    <div class="money left" style="display:flex; flex-direction: column; gap:10px">
                        <span class="left">
                            <label for="balance">Billing Amount:</label>
                            <input type="text" class="no-style input-balance" id="balance" value="BDT {{$current_balance}}" style="text-align: center; ">
                        </span>
                        <span class="left">
                            <label for="payment">Paid Amount:</label>
                            <input type="text" class="no-style input-payment text-center" id="payment"  value="BDT {{$payable_amount}}" style="text-align: center; margin-left:16px">
                        </span>
                        <span class="clear">
                            <label for="due">Balance Due: <label>
                            <input type="text" class="no-style input-due" id="due"  value="BDT {{$due}}" style="text-align: center; margin-left:3px">
                        </span>
                    </div>
                    <table class="right" cellspacing="0" cellpadding="3" style="border: none !important;">
                        <tr>
                            <td><input type="checkbox" id="cash" value="cash" @if($method == 'cash') checked @endif></td>
                            <td><label for="cash">Cash</label></td>
                        <tr>
                            <td><input type="checkbox" value="cheque" @if($method == 'cheque') checked @endif></td>
                            <td><label for="cheque">Cheque<label></td>
                        <tr>
                            <td><input id="money-order" type="checkbox" value="money-order" @if($method == 'money_order') checked @endif></td>
                            <td><label for="money-order">Money Order</label></td>
                        </tr>
                        <tr>
                            <td><input id="money-order" type="checkbox" value="mfs" @if($method == 'mfs') checked @endif></td>
                            <td><label for="money-order">Mobile Banking</label></td>
                        </tr>
                        <tr>
                            <td><input id="money-order" type="checkbox" value="bank_transfer" @if($method == 'bank_transfer') checked @endif></td>
                            <td><label for="money-order">Bank Transfer</label></td>
                        </tr>
                    </table>
                </div>
            <div class="clear left" style="margin-top: 10px;">
                <label for="received">Electronic reciept, Signature not required.</label>
            </div>
            <div class="clear right" style="margin-top: 10px;">
                <label for="received">Received By:</label>
                <input id="received" type="text" class="no-style"  value="{{$receiver}}" style="text-align: center; ">
            </div>
            <div class="clear"></div>
            </div>


        </form>    

</body>

</html>
