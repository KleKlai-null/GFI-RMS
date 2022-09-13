<x-pdf-layout title="Fixed Asset" :data="$data">
    <table id="meta">
        <tr>
            <td class="borderless">
                <h6>Department</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->department }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="borderless">
                <h6>MR No.</h6>
            </td>
            <td class="borderless">
                <div>
                    <p class="sub">{{ $data->mr_no }}</p>
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
