<x-pdf-layout title="Maintenance, Repairs and Operations" :data="$data">
    <table id="meta">
        <tr>
            <td class="borderless">
                <h6>Profit Center</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->profit_center }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Sub Profit Center</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->sub_profit_center }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Cost Center</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->cost_center }}</p>
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
</x-pdf-layout>
