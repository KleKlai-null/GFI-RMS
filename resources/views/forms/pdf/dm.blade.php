<x-pdf title="Direct Material" :data="$data">
    <table id="meta">
        <tr>
            <td class="borderless">
                <h6>Purpose</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->purpose }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Customer Name</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->customer_name }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Order No.</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->order_no }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Product Name</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->product_name }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Date</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->created_at->format('F d, Y') }}</p>
                </div>
            </td>
        </tr>
    </table>

    <div>
        <div id="logo">
            <img src="data:image/png;base64, {!! $qrcode !!}">
            <br />
            <span class="text-muted">{{ $data->document_series_no }}</span>
        </div>
    </div>
</x-pdf>
