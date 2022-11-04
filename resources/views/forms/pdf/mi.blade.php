<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
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
            /* padding: 8px 0px; */
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
            grid-template: 150px / auto auto auto auto;
            grid-gap: 10px;
            padding: 10px;
            height: 45px;
        }
    
        .grid-container>div {
            text-align: center;
        }
    
        .grid-container1 {
            display: grid;
            grid-template: 150px / auto auto auto;
            grid-gap: 10px;
            padding: 10px;
            height: 45px;
        }
    
        .grid-container1>div {
            text-align: center;
        }
    
    
        #textCenter {
            margin-top: -88px;
            text-align: center;
            margin-bottom: 40px;
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
    
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    
        /* #meta td { text-align: left;  } */
        /* #meta td.meta-head { text-align: left; background: #eee; font-size: 15px } */
        /* #line { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 1 0 8px 0; margin: 1  8px 0; } */
    </style>
</head>

<body bgcolor="#f0f0f0">
    <div id="page-wrap">

        {{-- <h1 id="header">
            <img src="logo.png" width="170">
        </h1> --}}
        <h3 id="textCenter">Merchandise</h3>

        {{-- <div id="myDiv">
            <div id="">
                <h4 style="text-align: center;">HEADER INFORMATION</h4>
                <div>
                    <td class="borderless">
                        <h5>Document Series Number</h5>
                    </td>
                    <td class="borderless">
                        <h6>GFI-MI-0000000015</h6>
                    </td>
                </div>

                <div class="row">
                    <div class="column">
                        <td class="borderless">
                            <h6>Customer Name</h6>
                        </td>
                        <td class="borderless">
                            <p class="sub">asdsa</p>
                        </td>
                    </div>
                    <div class="column">
                        <td class="borderless">
                            <h6>
                                Pallet Number</h6>
                        </td>
                        <td class="borderless">
                            <p class="sub">asdsa</p>
                        </td>
                    </div>
                    <div class="column">
                        <td class="borderless">
                            <h6>
                                Warehouse Location</h6>
                        </td>
                        <td class="borderless">
                            <p class="sub">asdsa</p>
                        </td>
                    </div>
                    <div class="column">
                        <td class="borderless">
                            <h6>
                                Warehouse</h6>
                        </td>
                        <td class="borderless">
                            <p class="sub">asdsa</p>
                        </td>
                    </div>

                    <div class="column">
                        <td class="borderless">
                            <h6>
                                Profit Center</h6>
                        </td>
                        <td class="borderless">
                            <p class="sub">asdsa</p>
                        </td>
                    </div>
                    <div class="column">
                        <td class="borderless">
                            <h6>
                                Sub Profit Center</h6>
                        </td>
                        <td class="borderless">
                            <p class="sub">asdsa</p>
                        </td>
                    </div>
                    <div class="column">
                        <td class="borderless">
                            <h6>
                                Sales Order Number</h6>
                        </td>
                        <td class="borderless">
                            <p class="sub">asdsa</p>
                        </td>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"></div> --}}

        {{-- <div id="myDiv">
            <div id="">
                <h4 style="text-align: center;">ITEM DETAILS</h4>
                <table id="items">

                    <tr>
                        <th>
                            <h6>CODE</h6>
                        </th>
                        <th>
                            <h6>DESCRIPTION</h6>
                        </th>
                        <th>
                            <h6>QTY</h6>
                        </th>
                        <th>
                            <h6>UOM</h6>
                        </th>
                        <th>
                            <h6>REMARKS</h6>
                        </th>
                    </tr>

                    <tr class="item-row">
                    <tr>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                        <td>
                            <p class="sub">asdsa</p>
                        </td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div> --}}

        {{-- <div id="myDiv">
            <div id="">
                <h4 style="text-align: center;">AUTHORIZED SIGNATORIES</h4>
                <div id="">
                    <div class="grid-container">
                        <div class="item1">
                            <td class="borderless">
                                <h6>PREPARED BY</h6>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdsa</p>
                                </div>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdsa</p>
                                </div>
                            </td>
                        </div>
                        <div class="item2">
                            <td class="borderless">
                                <h6>CHECKED BY</h6>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdsa</p>
                                </div>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdsa</p>
                                </div>
                            </td>
                        </div>
                        <div class="item3">
                            <td class="borderless">
                                <h6>NOTED BY</h6>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdas</p>
                                </div>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdsa</p>
                                </div>
                            </td>
                        </div>
                        <div class="item4">
                            <td class="borderless">
                                <h6>APPROVED BY</h6>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdas</p>
                                </div>
                            </td>
                            <td class="borderless">
                                <div>
                                    <p class="sub">asdsa</p>
                                </div>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="myDiv">
            <h4 style="text-align: center;">WAREHOUSE SIGNATORIES</h4>
            <div id="terms">
                <div class="grid-container1">
                    <div id="">
                        <td class="borderless">
                            <h6>REQUESTED BY</h6>
                        </td>
                        <td class="borderless">
                            <div>
                                <p class="sub">asdas</p>
                            </div>
                        </td>
                        <td class="borderless">
                            <div>
                                <p class="sub">asdsa</p>
                            </div>
                        </td>
                    </div>
                    <div id="">
                        <td class="borderless">
                            <h6>RELEASED BY</h6>
                        </td>
                        <td class="borderless">
                            <div>
                                <p class="sub">asdas</p>
                            </div>
                        </td>
                        <td class="borderless">
                            <div>
                                <p class="sub">asdsa</p>
                            </div>
                        </td>
                    </div>
                    <div id="">
                        <td class="borderless">
                            <h6>RECEIVED BY</h6>
                        </td>
                        <td class="borderless">
                            <div>
                                <p class="sub">asdas</p>
                            </div>
                        </td>
                        <td class="borderless">
                            <div>
                                <p class="sub">asdsa</p>
                            </div>
                        </td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
