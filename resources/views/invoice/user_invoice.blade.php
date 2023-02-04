<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <meta charset="utf-8">
        <title>Invoice</title>
        <style>
            .body{
                max-width: 100%;
                padding: 3%;
                margin-left:0cm;
                border: 1px solid black;
            }
        </style>
</head>
<body>
<div>
<div class="body">
        <div style="text-align: center">
            <h3 style="margin: 0;">DHAMMA SCHOOL</h3>
                
            
            <h5 style="margin: 0;">dhammaschool@example.com</h5>

                
            
           
        </div>
        <div class="content">
            <div style="margin: -2px;">
                <div style="float: left;">
                    <p>Invoice Number:- INVO-{{Session('invoiceNo')}} </p>
                </div>
                <div style="float: right;">
                    <p style="margin-right: 20px;">
                        Date: {{Session('date')}}
                    </p>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="centre" style="text-align: center;">
                <h3>Invoice</h3>
            </div>
            <div>
                <p>Name: {{Session('user_name')}}</p>
            </div>
            <hr/>
            <div style="padding: 30px 0px 30px 0px;">
                <p class="amount">Amount
                    <span style="float: right;">{{Session('amount')}}</span>
                </p>
            </div>
            <hr/>
            <p>Payment with Stripe</p>
        </div>


</div><br></div>

</body>
</html>