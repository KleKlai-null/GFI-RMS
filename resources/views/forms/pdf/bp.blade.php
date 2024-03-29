<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css" media="all">
        * {
            margin: 0;
            padding: 0;
        }
        body {
            font: 14px/1.4 Arial, serif;
        }
        #page-wrap {
            width: 680px;
            margin: 0 auto;
        }
        textarea {
            border: 0;
            font: 14px Georgia, Serif;
            overflow: hidden;
            resize: none;
        }
        table {
            border-collapse: collapse;
        }
        table td,
        table th {
            border: 1px solid black;
            padding: 1px;
        }
        table td.borderless,
        table th.borderless {
            border: 0px solid black;
            padding: 1px;
        }
        table.borderless {
            border: 0px solid black;
            padding: 1px;
        }
        #header {
            height: 70px;
            width: 100%;
            margin: 20px 0;
            color: white;
            font: bold 15px Arial, Sans-Serif;
            text-decoration: uppercase;
            letter-spacing: 15px;
            padding: 8px 0px;
        }
        #address {
            width: 250px;
            height: 150px;
            float: left;
        }
        #customer {
            overflow: hidden;
        }
        #logo {
            text-align: right;
            float: right;
            position: relative;
            margin-top: -15px;
            max-width: 570px;
            max-height: 130px;
        }
        #items {
            clear: both;
            width: 100%;
            margin: 5px 0 0 0;
            border: 1px solid black;
        }
        #items th {
            background: #eee;
        }
        #items textarea {
            width: 80px;
            height: 50px;
        }
        #items tr.item-row td {
            /* border: 0; */
            vertical-align: top;
        }
        #items td.description {
            width: 300px;
        }
        #items td.item-name {
            width: 175px;
        }
        #items td.description textarea,
        #items td.item-name textarea {
            width: 100%;
        }
        #items td.total-line {
            border-right: 0;
            text-align: right;
        }
        #items td.total-value {
            border-left: 0;
            padding: 10px;
        }
        #items td.total-value textarea {
            height: 20px;
            background: none;
        }
        #items td.balance {
            background: #eee;
        }
        #items td.blank {
            /* border: 0; */
        }
        #terms {
            text-align: left;
            margin: 15px 0 0 0;
        }
        p.sub {
            font-size: 10px;
        }
        #meta {
            margin-top: 0px;
            width: 300px;
            float: left;
        }
        #footer {
            margin-top: 0px;
            width: 230px;
            float: right;
        }

        .grid-container {
            display: grid;
            grid-template: 150px / auto auto auto auto auto;
            grid-gap: 10px;
            padding: 10px;
            height: 45px;
        }
        .grid-container > div {
            text-align: center;
        }

        .grid-container1 {
            display: grid;
            grid-template: 150px / auto auto auto;
            grid-gap: 10px;
            padding: 10px;
            height: 45px;
        }
        .grid-container1 > div {
            text-align: center;
        }

        #textCenter {
            margin-top: -88px;
            text-align: center;
            margin-bottom: 20;
        }

        #textLeft {
            margin-top: 40px;
            /* margin-bottom: 40px; */
        }

        .contentText {
            text-align: center;
            margin-top: -15px;
            font-size: 10px;
        }

        #marginTop {
            margin-top: -140px;
            margin-left: 110px;
        }

        #myDiv {
            margin-top: -10px;
            background-color: rgb(255, 255, 255);
            border-radius: 5px;
            border-spacing: 10px;
            padding-top: 10px;
            padding-right: 10px;
            padding-left: 10px;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }
        .column {
            float: left;
            width: 25%;
            margin-top: 10px;
        }

        .column1 {
            float: left;
            width: 50%;
            /* max-width: auto; */
            /* margin-top: 10px; */
        }

        .column2{
            float: left;
            width: 33.33%;
            margin-top: 10px;
        }

        .column3{
            float: left;
            width: 33.33%;
            margin-top: 10px;
            margin-left: 120px;
        }

        .column4{
            float: left;
            width: 33.33%;
            margin-top: 10px;
            margin-left: 240px;
        }

        .column5{
            float: left;
            width: 50%;
            margin-left: -10px;
        }

        .column6{
            float: left;
            width: 50%;
            margin-top: 10px;
        }

        .column7{
            float: left;
            width: 50%;
            margin-top: 10px;
            margin-left: 120px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .checkboxes label {
            display: inline-block;
            padding-right: 10px;
            white-space: nowrap;
            }
            .checkboxes input {
            vertical-align: middle;
            }
            .checkboxes label span {
            vertical-align: middle;
            }
        .inp {
            border:none;
            border-bottom: 1px solid #000000;
            padding: 5px 10px;
            outline: none;
            width: 90px;
        }

        .inp2 {
            border:none;
            border-bottom: 1px solid #000000;
            padding: 5px 10px;
            outline: none;
            width: 240px;
        }

        .inp3 {
            border:none;
            border-bottom: 1px solid #000000;
            padding: 5px 10px;
            outline: none;
            width: 130px;
        }

        .meta1{
            margin-top: 10px;
            float: left;
        }

        .meta2{
            margin-top: 10px;
            float: right;
        }

        .meta3{
            margin-top: 10px;
            float: left;
        }

        /* #meta td { text-align: left;  } */
        /* #meta td.meta-head { text-align: left; background: #eee; font-size: 15px } */
        /* #line { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 1 0 8px 0; margin: 1  8px 0; } */
    </style>
</head>

<body >
    <div id="page-wrap">

        <h1 id="header">
            <img src="data:image/jpeg;base64,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5hEDKnnxSfDfhshgaLa42rQCQkI/jWpgH+o9KjhUgK7Eld8VEOFcJKmS6Sns/bc1qre8jdw2azrg6tf49wmp652w00xltddxmpk98xp/crvxky8eH4O567tizbN+pwz/w1NcB2XInvIZvGI8wiI1YW6v8Ad27Nfr9T/St4MOprxb9rrxb9rrxb9rqxoLcLdmq1OuwZYsGIsN/StWorHuDeTDNEpUTHQoQUJMHLrErGJyHg89uy71MyuHLotJhWSK5CJo0zBwffCSCSV4t+11YllxbM3Wjeq16MMi3jw3lgxYb8OJanmhySMEmRjL4BYSH5DrjOasiMXkBpytr7FjwzeLoA3MPlUKdAQl2nLJHJcvD358nvRQRqe4yr8xIm6lIAPHgwYw2kI8dWRMCZuArD1CPEGYXnugthaZZNOszkYR5YzgOIaFgUhxd6udWVNZnM39TDNEpUTHQoQUJMHLrErGJyHg89uy71MyuH+HElWTaMefqFsDBrtU6J4cW6S0wQJg5wQUla9jaLZDjDglszqy1f9wbybmx61g2eHry7/TPiOxddgxavGBDiw3pfdivuvrwV/FpEu02ej22Lr9ZrMHvhw3YK8F/xa8F/xa8F/wAWoUcWNegYMeHjw3rd5any3ZWpWzseDGalhxa1L68F/wAWvBf8WoLiuIwkDV47xUeFrSqfDdio6o3oCmBBiu47r64taDgferlaN0/rbGu6ZixPqMi/dQ7J01UddRebJBD5qJolxnGBewY9WpCooWG9MV19919RXwfwJZuHHgJC261dERwjbejoKlcSXEPbIuS3ItSmwbxSRG9sRVb0HCibdBMAybKwtdmN9xYtYNPylkoaR9RhVREbrsRd5VnI7ti6/WazB74cN2CnYhRNTDNEpUTHQoQUJMHLrErGJyHg89uy71MyuHX33X14L/i14L/i14L/AItWijOyLqNXq8fvixX46biDE1W5NdfhMyxYtYPf14L/AIteC/4teC/4tdUM9mL/AGTS68y8oANWSC2dZpHxyXBvdMecG/PabbsuVZm61b1uoR9km8eG8ceHFfhxJXi37XotRWPcG8m6cGqYBnh68e8qA48aTtzbmx6x4nOBiLvuXRaTCskVyETRpmDg++EkEkrxb9rqxLLi2ZutG9Vr0YZFvHhvLBiw34cS6CyG2rMuZk9B5KLnzkrayFqQzj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"
                width="170">
        </h1>
        <h3 id="textCenter">Business Partner Information Sheet</h3>
        
        <div class="row">
            <div class="column">
                <div>
                    <div class="borderless">
                        <h5>Document Number</h5>
                    </div>
                    <div class="borderless"><h6>{{$data->document_series_no}}</h6></div>
                </div>
            </div>
            <div class="column">
                <div>
                    <div class="borderless">
                        <h5>Date Processed</h5>
                    </div>
                    <div class="borderless"><h6>{{$data->date_processed}}</h6></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <div class="borderless"><h6>BP Type</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->bp_type_customer) ? 'checked' : '' }} > <span style="font-size:10px">Customer</span></label><br/>
                    <label><input type="checkbox" {{ ($data->bp_type_supplier) ? 'checked' : '' }}> <span style="font-size:10px">Supplier</span></label>
                </div>
            </div>
            <div class="column">
                <div class="borderless"><h6>Document Purpose</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->document_purpose_new_registration) ? 'checked' : '' }}> <span style="font-size:10px">New Registration</span></label><br/>
                    <label><input type="checkbox" {{ ($data->document_purpose_information_update) ? 'checked' : '' }}> <span style="font-size:10px">Information Update</span></label>
                </div>
            </div>
            <div class="column">
                <div class="borderless"><h6>Status Update</h6></div>
                    <div class="checkboxes">
                        <label><input type="checkbox" {{ ($data->status_update_active) ? 'checked' : '' }}> <span style="font-size:10px">Active</span></label><br/>
                        <label><input type="checkbox" {{ ($data->status_update_inactive) ? 'checked' : '' }}> <span style="font-size:10px">Inactive</span></label>
                    </div>
            </div>
            <div class="column">
                <div class="borderless">
                    <h6>Date from</h6>
                </div>
                <div class="borderless">
                    <span style="font-size:10px">{{$data->date_from}}</span>
                </div>
                <div class="borderless"><h6>Date to</h6></div>
                <div class="borderless">
                    <span style="font-size:10px">{{$data->date_to}}</span>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
        <h5 style="text-align: left">Primary Information</h5>
        <div class="row">
            <div class="column">
                <div class="borderless"><h6>Registered Name</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->registered_name}}</span></label>
                </div>
                <div class="borderless"><h6>Trade Name</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->trade_name}}</span></label>
                </div>
                <div class="borderless"><h6>Email Address</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->email_address}}</span></label>
                </div>
            </div>
            <div class="column">
                <div class="borderless"><h6>Billing Address</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->billing_address}}</span></label>
                </div>
                <div class="borderless"><h6>Shipping Address</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->shipping_address}}</span></label>
                </div>
                <div class="borderless"><h6>Website</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->website}}</span></label>
                </div>
            </div>
            <div class="column">
                <div class="borderless"><h6>Tax ID No.</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->tax_id_no}}</span></label>
                </div>
                <div class="borderless"><h6>Telephone No.</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->telephone_no}}</span></label>
                </div>
                <div class="borderless"><h6>Registration Date</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->registration_date}}</span></label>
                </div>
            </div>
            <div class="column">
                <div class="borderless"><h6>Fax No.</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->fax_no}}</span></label>
                </div>
                <div class="borderless"><h6>Mobile No.</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->mobile_no}}</span></label>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
        <div class="row">
            <div class="column2">
                <div class="borderless"><h6>Type of Business</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->type_of_business_corporation) ? 'checked' : '' }}> <span style="font-size:10px">Corporation</span></label><br/>
                    <label><input type="checkbox" {{ ($data->type_of_business_partnership) ? 'checked' : '' }}> <span style="font-size:10px">Partnership</span></label><br/>
                    <label><input type="checkbox" {{ ($data->type_of_business_government) ? 'checked' : '' }}> <span style="font-size:10px">Goverment</span></label><br/>
                    <label><input type="checkbox" {{ ($data->type_of_business_single_proprietorship) ? 'checked' : '' }}> <span style="font-size:10px">Single Proprietorship</span></label><br/>
                    <label><input type="checkbox" {{ ($data->type_of_business_individual_private) ? 'checked' : '' }}> <span style="font-size:10px">Individual/Private</span></label><br/>
                    <label><input type="checkbox" {{ ($data->type_of_business_others) ? 'checked' : '' }}> <span style="font-size:10px">Others</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->type_of_business_others}}"></span></label>
                </div>
            </div>
            <div class="column2">
                <div class="borderless"><h6>Currency</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->currency_php) ? 'checked' : '' }}> <span style="font-size:10px">PHP</span></label><br/>
                    <label><input type="checkbox" {{ ($data->currency_usd) ? 'checked' : '' }}> <span style="font-size:10px">USD</span></label><br/>
                    <label><input type="checkbox" {{ ($data->currency_euro) ? 'checked' : '' }}> <span style="font-size:10px">EURO</span></label><br/>
                    <label><input type="checkbox" {{ ($data->currency_yen) ? 'checked' : '' }}> <span style="font-size:10px">YEN</span></label><br/>
                    <label><input type="checkbox" {{ ($data->currency_gbp) ? 'checked' : '' }}> <span style="font-size:10px">GBP</span></label><br/>
                    <label><input type="checkbox" {{ ($data->currency_others) ? 'checked' : '' }}> <span style="font-size:10px">Others</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->currency_others}}"></span></label>
                </div>
            </div>
            <div class="column2">
                <div class="borderless"><h6>Business Partner Group</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->business_partner_group_trade) ? 'checked' : '' }}> <span style="font-size:10px">Trade</span></label><br/>
                    <label><input type="checkbox" {{ ($data->business_partner_group_non_trade) ? 'checked' : '' }}> <span style="font-size:10px">Non-Trade</span></label><br/>
                    <label><input type="checkbox" {{ ($data->business_partner_group_related_party) ? 'checked' : '' }}> <span style="font-size:10px">Related Party</span></label><br/>
                    <label><input type="checkbox" {{ ($data->business_partner_group_employee) ? 'checked' : '' }}> <span style="font-size:10px">Employee</span></label><br/>
                    <label><input type="checkbox" {{ ($data->business_partner_group_others) ? 'checked' : '' }}> <span style="font-size:10px">Others</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->business_partner_group_others}}"></span></label>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
        <div class="row">
            <div class="column2">
                <div class="borderless"><h6>Payment Terms</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->payment_terms_cash_on_deliveryc) ? 'checked' : '' }}> <span style="font-size:10px">Cash on Delivery</span></label><br/>
                    <label><input type="checkbox" {{ ($data->payment_terms_cash_with_orders) ? 'checked' : '' }}> <span style="font-size:10px">Cash with Order</span></label><br/>
                    <label><input type="checkbox" {{ ($data->payment_terms_days_month_end) ? 'checked' : '' }}> <span style="font-size:10px">Days Month End</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->payment_terms_days_month_end}}"></span></label><br/>
                    <label><input type="checkbox" {{ ($data->payment_terms_days_after_delivery) ? 'checked' : '' }}> <span style="font-size:10px">Days After Delivery</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->payment_terms_days_after_delivery}}"></span></label><br/>
                    <label><input type="checkbox" {{ ($data->payment_terms_others) ? 'checked' : '' }}> <span style="font-size:10px">Others</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->payment_terms_others}}"></span></label>
                </div>
            </div>
            <div class="column2">
                <div class="borderless"><h6>Payment Method</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->payment_methods_cash) ? 'checked' : '' }}> <span style="font-size:10px">Cash</span></label><br/>
                    <label><input type="checkbox" {{ ($data->payment_methods_check) ? 'checked' : '' }}> <span style="font-size:10px">Check</span></label><br/>
                    <label><input type="checkbox" {{ ($data->payment_methods_electronic_bank_transfer) ? 'checked' : '' }}> <span style="font-size:10px">Electronic Bank Transfer</span></label><br/>
                    <label><input type="checkbox" {{ ($data->payment_methods_others) ? 'checked' : '' }}> <span style="font-size:10px">Others</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->payment_methods_others}}"></span></label>
                </div>
            </div>
            <div class="column2">
                <div class="borderless"><h6>Bank Details--</h6></div>
                <div class="borderless"><h6>Bank Name</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->bank_name}}</span></label>
                </div>
                <div class="borderless"><h6>Bank Address</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->bank_address}}</span></label>
                </div>
                <div class="borderless"><h6>Account Name</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->account_name}}</span></label>
                </div>
                <div class="borderless"><h6>Account No.</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->account_no}}</span></label>
                </div>
                <div class="borderless"><h6>Swift Code</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->swift_code}}</span></label>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
        <div class="row">
            <div class="column2">
                <div class="borderless"><h6>Control Accounts--</h6></div>
                <div class="borderless"><h6>Account Receivable/Payable</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->accouts_receivable_payable}}</span></label>
                </div>
                <div class="borderless"><h6>Down Payment Clearing Account</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->down_payment_clearing_account}}</span></label>
                </div>
                <div class="borderless"><h6>Down Payment Interim Account</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->donw_payment_interim_account}}</span></label>
                </div>
            </div>
            <div class="column2">
                <div class="borderless"><h6>Withholding Tax</h6></div>
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->withholding_tax) ? 'checked' : '' }}> <span style="font-size:10px">Subject to WTax</span></label><br/>
                </div>
            </div>
            <div class="column2">
                <div class="borderless"><h6>WTax Codes Allowed</h6></div>
                <div class="borderless"><h6>WTax Codes</h6></div>
                <div class="checkboxes">
                    <label><span style="font-size:10px">{{$data->wtax_codes_allowed}}</span></label>
                </div>
            </div>
        </div>
        <div style="clear:both"></div><br/>
        <h5 style="text-align: left">Tax Group</h5>
        <div class="row">
            <div class="column">
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->tax_group_capital_goods) ? 'checked' : '' }}> <span style="font-size:10px">Capital Goods 12%</span></label>
                    <label><input type="checkbox" {{ ($data->tax_group_non_capital_goods) ? 'checked' : '' }}> <span style="font-size:10px">Non-Capital Goods 12%</span></label>
                </div>
            </div>
            <div class="column">
                    <div class="checkboxes">
                        <label><input type="checkbox" {{ ($data->tax_group_services) ? 'checked' : '' }}> <span style="font-size:10px">Services 12%</span></label><br/>
                        <label><input type="checkbox" {{ ($data->tax_group_importations) ? 'checked' : '' }}> <span style="font-size:10px">Importations</span></label><br/>
                    </div>
            </div>
            <div class="column">
                    <div class="checkboxes">
                        <label><input type="checkbox" {{ ($data->tax_group_non_taxable) ? 'checked' : '' }}> <span style="font-size:10px">Non-Taxable</span></label><br/>
                        <label><input type="checkbox" {{ ($data->tax_group_zero_rated) ? 'checked' : '' }}> <span style="font-size:10px">Zero Rated 0%</span></label><br/>
                    </div>
            </div>
            <div class="column">
                <div class="checkboxes">
                    <label><input type="checkbox" {{ ($data->tax_group_exempt) ? 'checked' : '' }}> <span style="font-size:10px">Exempt</span></label><br/>
                    <label><input type="checkbox" {{ ($data->tax_group_others) ? 'checked' : '' }}> <span style="font-size:10px">Others</span><span style="font-size:8px"><input type="text" class="inp" value="{{$data->tax_group_others}}"></span></label><br/>
                </div>
        </div>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div style="clear:both"></div>
        <h5 style="text-align: left" id="textLeft">Certification/Standard Accreditation</h5>

        <table id="items">
            <thead>
                <tr>
                    <th><h6>Certification</h6></th>
                    <th><h6>Organization Certifying</h6></th>
                    <th><h6>Certificate Date</h6></th>
                    <th><h6>Expiry Date</h6></th>
                </tr>
            </thead>
            <tbody class="item-row">
                @forelse ($data->certifications as $item)
                    <tr>
                        <td><span style="font-size:10px">{!! $item->certification_name  !!}</span></td>
                        <td><span style="font-size:10px">{!! $item->organization_certifying_body !!}</span></td>
                        <td><span style="font-size:10px">{!! $item->certificate_date !!}</span></td>
                        <td><span style="font-size:10px">{!! $item->expiry_date !!}</span></td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        <div style="clear:both"></div><br/>
        <h5 style="text-align: left">Contact Persons</h5>

        <table id="items">
            <thead>
                <tr>
                    <th><h6>Name</h6></th>
                    <th><h6>Position</h6></th>
                    <th><h6>Email Address</h6></th>
                    <th><h6>Phone No.</h6></th>
                </tr>
            </thead>
            <tbody class="item-row">
                @forelse ($data->contactpersons as $item)
                    <tr>
                        <td><span style="font-size:10px">{!! $item->name  !!}</span></td>
                        <td><span style="font-size:10px">{!! $item->position !!}</span></td>
                        <td><span style="font-size:10px">{!! $item->email_address_contacts !!}</span></td>
                        <td><span style="font-size:10px">{!! $item->phone_no !!}</span></td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        <div class="row">
            <div class="column2">
                <label><span style="font-size:8px"><input type="text" class="inp2" value="{{$data->remarks_signatory}}"/></span></label>
                <label><p style="text-align: left; font-size:8px">Remarks Signatory</p></label>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <label><span style="font-size:8px"><input class="inp3" type="text" value="{{$data->full_name}}"/></span></label>
                <label><p style="text-align: left; font-size:8px">Full Name</p></label>
            </div>
            <div class="column">
                <label><span style="font-size:8px"><input class="inp3" type="text" value="{{$data->position}}"/></span></label>
                <label><p style="text-align: left; font-size:8px">Position</p></label>
            </div>
            <div class="column">
                <label><span style="font-size:8px"><input class="inp3" type="text" value="{{$data->date}}"/></span></label>
                <label><p style="text-align: left; font-size:8px">Date</p></label>
            </div>
            <div class="column">
                <label><span style="font-size:8px"><input class="inp3" type="text" value="{{$data->signature}}"/></span></label>
                <label><p style="text-align: left; font-size:8px">Signature</p></label>
            </div>
        </div>

        <br/>
        <h3 style="text-align: center">***** APPROVAL ROUTING *****</h3>
        <div class="row">
            <div class="meta1">
                <div class="column1"><div class="borderless"><p style="font-size:8px">1.  Operations</p></div>
                    <div class="column6">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->operations_SOPN}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Signature Over Printed Name</p></label>
                    </div>
    
                    <div class="column7">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->operations_date}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Date</p></label>
                    </div>
    
                    <div class="column4"><label><h6>Status</h6>
                        <input type="checkbox" {{ ($data->approvalrouting->operations_status === 'Passed') ? 'checked' : '' }}> <span style="font-size:8px">Passed</span><br/>
                        <input type="checkbox" {{ ($data->approvalrouting->operations_status === 'Rejected') ? 'checked' : '' }}> <span style="font-size:8px">Rejected</span>
                    </label></div>
                </div>
            </div>
            <div class="meta2">
                <div class="column1"><div class="borderless"><p style="font-size:8px">4. Corporate Finance</p></div>
                    <div class="column6">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->corporate_finance_SOPN}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Signature Over Printed Name</p></label>
                    </div>
    
                    <div class="column7"> 
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->corporate_finance_date}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Date</p></label>
                    </div>
    
                    <div class="column4"><label><h6>Status</h6>
                        <input type="checkbox" {{ ($data->approvalrouting->corporate_finance_status === 'Passed') ? 'checked' : '' }}> <span style="font-size:8px">Passed</span><br/>
                        <input type="checkbox" {{ ($data->approvalrouting->corporate_finance_status === 'Rejected') ? 'checked' : '' }}> <span style="font-size:8px">Rejected</span>
                    </label></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="meta1">
                <div class="column1"><div class="borderless"><p style="font-size:8px">2. Supply Chain/Human Resource</p></div>
                    <div class="column6">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->supply_chain_human_resource_SOPN}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Signature Over Printed Name</p></label>
                    </div>
    
                    <div class="column7">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->supply_chain_human_resource_date}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Date</p></label>
                    </div>
    
                    <div class="column4"><label><h6>Status</h6>
                        <input type="checkbox" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Passed') ? 'checked' : '' }}> <span style="font-size:8px">Passed</span><br/>
                        <input type="checkbox" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Rejected') ? 'checked' : '' }}> <span style="font-size:8px">Rejected</span>
                    </label></div>
                </div>
            </div>
            <div class="meta2">
                <div class="column1"><div class="borderless"><p style="font-size:8px">5. Audit</p></div>
                    <div class="column6">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->audit_SOPN}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Signature Over Printed Name</p></label>
                    </div>
    
                    <div class="column7">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->audit_date}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Date</p></label>
                    </div>
    
                    <div class="column4"><label><h6>Status</h6>
                        <input type="checkbox" {{ ($data->approvalrouting->audit_status === 'Passed') ? 'checked' : '' }}> <span style="font-size:8px">Passed</span><br/>
                        <input type="checkbox" {{ ($data->approvalrouting->audit_status === 'Rejected') ? 'checked' : '' }}> <span style="font-size:8px">Rejected</span>
                    </label></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="meta1">
                <div class="column1"><div class="borderless"><p style="font-size:8px">3. Finance</p></div>
                    <div class="column6">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->finance_SOPN}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Signature Over Printed Name</p></label>
                    </div>
    
                    <div class="column7">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->finance_date}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Date</p></label>
                    </div>
    
                    <div class="column4"><label><h6>Status</h6>
                        <input type="checkbox" {{ ($data->approvalrouting->finance_status === 'Passed') ? 'checked' : '' }}> <span style="font-size:8px">Passed</span><br/>
                        <input type="checkbox" {{ ($data->approvalrouting->finance_status === 'Rejected') ? 'checked' : '' }}> <span style="font-size:8px">Rejected</span>
                    </label></div>
                </div>
            </div>
            <div class="meta2">
                <div class="column1"><div class="borderless"><p style="font-size:8px">6. System Administrator</p></div>
                    <div class="column6">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->system_administrator_SOPN}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Signature Over Printed Name</p></label>
                    </div>
    
                    <div class="column7">
                        <label><span style="font-size:8px"><input class="inp" type="text" value="{{$data->approvalrouting->system_administrator_date}}"/></span></label>
                        <label><p style="text-align: center; font-size:6px">Date</p></label>
                    </div>
    
                    <div class="column4"><label><h6>Status</h6>
                        <input type="checkbox" {{ ($data->approvalrouting->system_administrator_status === 'Passed') ? 'checked' : '' }}> <span style="font-size:8px">Passed</span><br/>
                        <input type="checkbox" {{ ($data->approvalrouting->system_administrator_status === 'Rejected') ? 'checked' : '' }}> <span style="font-size:8px">Rejected</span>
                    </label></div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <div style="text-align: right"><span style="font-size:10px">Document Number : </span><span style="font-size:8px"><input class="inp" type="text" value="{{$data->documenttable->document_no_page_2}}"/></span></div>
        <h4 style="text-align: left">Checklist of Requirements*</h4>
        <span style="font-size:12px">Please indicate (✓) in the Submitted column if the corresponding document is attached in this form. Items marked with asterisk (*) are required documents to process the registration.</span>

        <div class="row">
            <table class="table table-bordered">
                <colgroup>
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 10%;">
                <col span="1" style="width: 10%;">
                </colgroup>
                
                
                <thead>
                    <tr>
                        <th scope="col"><h5>Document Name</h5></th>
                        <th scope="col"><h5>Individual</h5></th>
                        <th scope="col"><h5>Corporation</h5></th>
                        <th scope="col"><h5>Cooperative</h5></th>
                        <th scope="col"><h5>Submitted</h5></th>
                        <th scope="col"><h5>Reason, if not submitted</h5></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >Latest Business Permit<span style="color:red">*</span></td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox"  {{ ($data->documenttable->DN_1_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_1_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_1_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox"  {{ ($data->documenttable->DN_1_submitted) ? 'checked' : '' }} >
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_1_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >DTI Certificate<span style="color:red">*</span></td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_2_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_2_corporation) ? 'checked' : '' }} >
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_2_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_2_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_2_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >Articles of Incorporation/Cooperation & by laws</td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_3_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_3_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_3_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox"  {{ ($data->documenttable->DN_3_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_3_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >BIR Registration Form 2303<span style="color:red">*</span></td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_4_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_4_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_4_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox"  {{ ($data->documenttable->DN_4_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_4_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >Sample Photocopy of BIR Primary Doc. (OR/SI)</td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_5_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_5_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_5_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox"  {{ ($data->documenttable->DN_5_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_5_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >Certificate of Tax Exemption<span style="color:red">*</span></td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox"  {{ ($data->documenttable->DN_6_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_6_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_6_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_6_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_6_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >Certification (Person Authorized to Transact Business)</td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_7_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_7_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_7_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_7_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_7_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >Photocopy of Valid ID of Authorized Representative(s)</td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_8_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_8_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_8_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_8_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_8_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >Latest BIR-stamped Audited Financial Statement</td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_9_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_9_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_9_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_9_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_9_RNS}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td >Latest General Information Sheet (GIS)</td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_10_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_10_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_10_cooperative) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_10_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_10_RNS}}</span>
                        </td>
                    </tr>      
                    <tr>
                        <td style='border:none; font-size:10px'>Additional Document, If Applying for Credit Line</td>
                    </tr>
                    <tr>
                        <td >Credit Application Form<span style="color:red">*</span></td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox"  {{ ($data->documenttable->DN_11_individual) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_11_corporation) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td style="background-color: rgb(236, 236, 236)">
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_11_cooperative) ? 'checked' : '' }} >
                            </div>
                        </td>
                        <td >
                            <div class="datagrid-content">
                                <input type="checkbox" {{ ($data->documenttable->DN_11_submitted) ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td >
                            <span style="font-size:10px">{{$data->documenttable->DN_11_RNS}}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
