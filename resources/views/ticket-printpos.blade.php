<html>

<head>
    <style>
        #invoice-POS {
            /* box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); */
            padding: 2mm;
            margin: 0 auto;
            width: 44mm;
            background: #FFF;
            font-family: monospace;
        }

        #invoice-POS ::selection {
            background: #f31544;
            color: #FFF;
        }

        #invoice-POS ::moz-selection {
            background: #f31544;
            color: #FFF;
        }

        #invoice-POS h1 {
            font-size: 1.5em;
            color: #222;
        }

        #invoice-POS h2 {
            font-size: 1rem;
        }

        #invoice-POS h3 {
            font-size: 1.2em;
            font-weight: 300;
            line-height: 2em;
        }

        #invoice-POS p {
            /* font-size: .7em; */
            color: #000;
            line-height: 1.2em;
        }

        #invoice-POS #top,
        #invoice-POS #mid,
        #invoice-POS #bot {
            /* Targets all id with 'col-' */
            border-bottom: 1px solid #EEE;
        }


        #invoice-POS #mid {
            /* min-height: 80px; */
        }

        #invoice-POS #bot {
            min-height: 50px;
        }

        #invoice-POS #top .logo {
            height: 90px;
            width: 90px;
            background: url('{{secure_asset('pos/logo1.png')}}') no-repeat;
            background-size: 90px 90px;
        }

        #invoice-POS #top .logo2 {
            height: 30px;
            width: 90px;
            background: url('{{secure_asset('pos/logo2.png')}}') no-repeat;
            background-size: 90px 30px;
        }

        #invoice-POS .clientlogo {
            float: left;
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
            background-size: 60px 60px;
            border-radius: 50px;
        }

        #invoice-POS .info {
            display: block;
            margin-left: 0;
        }

        #invoice-POS .title {
            float: right;
        }

        #invoice-POS .title p {
            text-align: right;
        }

        #invoice-POS table {
            width: 100%;
            border-collapse: collapse;
        }

        #invoice-POS .tabletitle {
            font-size: .5em;
            background: #EEE;
        }

        #invoice-POS .tabletitle td{
            padding: 5px 0px;
        }

        #invoice-POS .tabletitle h2 {
            margin: 0px;
        }

        #invoice-POS .service {
            border-bottom: 1px solid #EEE;
        }

        #invoice-POS .item {
            width: 24mm;
        }

        #invoice-POS .itemtext {
            font-size: .9rem;
        }

        #invoice-POS #legalcopy {
            margin-top: 5mm;
        }


    </style>
</head>

<body>

    <div id="invoice-POS">

        <center id="top">
            <div class="info">
                <h2 style="font-size: 1.3rem">BIÊN NHẬN #{{ $ticket->id }}</h2>
            </div>
            <!--End Info-->
        </center>
        <!--End InvoiceTop-->

        <div id="mid">
            <div class="info">
                <p>
                    <span style="font-size: 1.1rem; text-transform: uppercase; font-weight: bold">{{ $ticket->client->name }}</span></br>
                    SĐT: {{ PhoneFormat($ticket->client->phone) }}</br>
                    NS: {{ date("d/m/Y", strtotime($ticket->client->birthday)) }}</br>
                </p>
            </div>
        </div>
        <!--End Invoice Mid-->

        <div id="bot">

            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <td class="item">
                            <h2>Yêu Cầu Khách Hàng</h2>
                        </td>
                    </tr>

                    <tr class="service">
                        <td class="tableitem">
                            <p class="itemtext">{{$ticket->address}}</p>
                        </td>
                    </tr>
                    <tr class="tabletitle">
                        <td class="item">
                            <h2>THÔNG TIN MÁY</h2>
                        </td>
                    </tr>

                    <tr class="service">
                        <td class="tableitem">
                            <p class="itemtext">{{$ticket->description}} 
                                - length {{$ticket->length}} 
                                - width {{$ticket->width}} 
                                - HDD {{$ticket->manager}}
                                - Phụ kiện {{$ticket->other}}
                                - Tình trạng {{$ticket->note}}
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <!--End Table-->

            <div id="legalcopy">
                * Vui lòng mang theo phiếu này khi đến nhận máy!
                <p class="legal"><strong>Chân thành cảm ơn sự tin tưởng của quý khách!</strong> 
                </p>
            </div>
            <div id="legalcopy">
                <p class="legal"><strong>Xác nhận nhân viên</strong> 
                <p style="height: 99px"></p>
                </p>
            </div>
            <div id="legalcopy">
                <p class="legal"><strong>Xác nhận khách hàng</strong> 
                <p style="height: 135px"></p>
                </p>
            </div>
            <center><p>Website: eduking.edu.vn<br>Phone: 0888.730.108</p></center>

        </div>
        <!--End InvoiceBot-->
    </div>
    <!--End Invoice-->
</body>

</html>