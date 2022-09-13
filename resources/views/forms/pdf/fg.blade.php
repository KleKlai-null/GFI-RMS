<x-pdf-layout title="Finished Goods" :data="$data">
    <table id="meta">
        <tr>
            <td class="borderless">
                <h6>Batch No.</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->batch_no }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Pallet No.</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->pallet_no }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>Location</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->location }}</p>
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
