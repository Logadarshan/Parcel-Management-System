@extends('layouts.app')

@section('content')
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;

        }

        .center {
            text-align: center;
        }

        th,
        td {
            padding-bottom: 15px;
            padding-top: 15px;
        }

        td {
            font-size: 16px;

        }

    </style>
    <script>
        const parcelData = [];

        parcelData.push('{{ $months[0]->month }}');
        parcelData.push('{{ $months[1]->month }}');
        parcelData.push('{{ $months[2]->month }}');
        parcelData.push('{{ $months[3]->month }}');
        parcelData.push('{{ $months[4]->month }}');
        parcelData.push('{{ $months[5]->month }}');
        parcelData.push('{{ $months[6]->month }}');
        parcelData.push('{{ $months[7]->month }}');
        parcelData.push('{{ $months[8]->month }}');
        parcelData.push('{{ $months[9]->month }}');
        parcelData.push('{{ $months[10]->month }}');
        parcelData.push('{{ $months[11]->month }}');

        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Parcels and Mails (2021)',
                backgroundColor: 'rgb(0, 0, 0)',
                borderColor: 'rgb(0, 0, 0)',
                data: [parcelData[0], parcelData[1], parcelData[2], parcelData[3], parcelData[4],
                    parcelData[5], parcelData[6], parcelData[7], parcelData[8], parcelData[9],
                    parcelData[10], parcelData[11]
                ],
                tension: 0.1,
                fill: false
            }]
        };
        const config = {
            type: 'line',
            data,
            options: {}
        };

    </script>

    <div class="container-fluid mt-5" style="width:60%; border:1px solid black;">
        <div>
            <table style="width:100%; margin-left:auto; margin-right:auto; border:1px solid white;">
                <tr style="border-bottom:1px solid black;">
                    <th colspan="3">
                        <h3 class="center" style="margin-top:3px; margin-bottom:0px;">Student Good List Report</h3>
                    </th>
                </tr>
                <tr>
                    <td class="center">Good List Details</td>

                </tr>
                <tr class="center">

                    <td> Student ID {{ $uid }} </td>


                    <td>Total Parcel received with in a month</td>
                </tr>
                <tr>
                    <table style="border:1px solid white ;width:100%;">
                        <tr>
                            <td>Jan</td>
                            <td>Feb</td>
                            <td>March</td>
                            <td>April</td>
                            <td>May</td>
                            <td>Jun</td>
                            <td>July</td>
                            <td>Aug</td>
                            <td>Sep</td>
                            <td>Oct</td>
                            <td>Nov</td>
                            <td>Dec</td>
                        </tr>
                        <tbody>
                            <tr>
                                <td>{{ $months[0]->month }}</td>
                                <td>{{ $months[1]->month }}</td>
                                <td>{{ $months[2]->month }}</td>
                                <td>{{ $months[3]->month }}</td>
                                <td>{{ $months[4]->month }}</td>
                                <td>{{ $months[5]->month }}</td>
                                <td>{{ $months[6]->month }}</td>
                                <td>{{ $months[7]->month }}</td>
                                <td>{{ $months[8]->month }}</td>
                                <td>{{ $months[9]->month }}</td>
                                <td>{{ $months[10]->month }}</td>
                                <td>{{ $months[11]->month }}</td>
                            </tr>
                        </tbody>
                    </table>
                </tr>

            </table>
        </div>
        <div style="float:right;">
            <div style="margin-top:15px;">
                <a href="/Good-list/report/qrcode"><button class="dt-button" type="button">Save QR Code</button></a>
                <button type="button" class="dt-button" onClick="javascript:window.history.back();">OK</button>
            </div>
        </div>
    </div>
@endsection
