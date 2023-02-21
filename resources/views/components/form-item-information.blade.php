<div>
    <div class="hr-text">Item's Information</div>

    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table table-striped">
                    <thead>
                        <tr>
                            <th>Code</th>
                            @if ($type != 'uom')
                                <th>Serial Number</th>
                            @endif
                            <th>Description</th>
                            <th>Qty</th>
                            <th>UOM</th>
                            <th>GL Accounts</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{!! $item->item_code !!}</td>
                                @if ($type != 'uom')
                                    <td class="text-muted">{!! $item->serial_no !!}</td>
                                @endif
                                <td class="text-muted">{!! $item->item_description !!}</td>
                                <td class="text-muted">{!! $item->qty !!}</td>
                                <td class="text-muted">{!! $item->uom !!}</td>
                                <td class="text-muted">{!! $item->gl_accounts !!}</td>
                                <td>{{ $item->remarks }}</td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
