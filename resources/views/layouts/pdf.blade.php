<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDF</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/pdf/css/form.css') }}">
</head>

<body>

    <div id="page-wrap">

        <h1 id="header">
            <img src="http://127.0.0.1:8000/asset/images/gfi_logo.svg" width="170">
        </h1>
        <h3 id="textCenter">{{ $title }}</h3>

        {{ $slot }}

        <div style="clear:both"></div>

        @if(!empty($data->items))
            <table id="items">
                <thead>
                    <tr>
                        <th>Item Code</th>
                        <th>Item Description</th>
                        <th>Qty</th>
                        <th>{{ ($has_serial) ? 'Serial no.' : 'UOM' }}</th>
                        <th>{{ (isset($data->withdrawal_slip_no)) ? 'Reason' : 'Remarks' }}</th>
                    </tr>
                </thead>
                <tbody class="item-row">
                    @foreach ($data->items as $item)
                        <tr>
                            <td>{!! $item->item_code !!}</td>
                            <td style="word-wrap: break-word; max-width: 150px;">{!! $item->item_description !!}</td>
                            <td>{!! $item->qty !!}</td>
                            <td class="text-muted">{!! $item->uom ?? $item->serial_no !!}</td>
                            <td>{!! $item->remarks ?? $item->reason !!}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        @endif

        <table id="signature">
            <thead>
                <tr>
                    <th>Prepared by</th>
                    <th>Approved by</th>
                    <th>Released by</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data->prepared_by }}</td>
                    <td>{{ $data->approved_by }}</td>
                    <td>{{ $data->released_by }}</td>
                </tr>
            </tbody>
        </table>
        <table id="signature">
            <thead>
                <tr>
                    <th>Noted by</th>
                    <th>Checked by</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data->noted_by }}</td>
                    <td>{{ $data->checked_by }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
