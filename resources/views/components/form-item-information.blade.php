<div>
    <div class="hr-text">Item's Information</div>

    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table table-striped">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>{{ ($type == 'uom') ? 'Uom' : 'Serial no.' }}</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{!! $item->item_code !!}</td>
                                <td class="text-muted">{!! $item->item_description !!}</td>
                                <td class="text-muted">{!! $item->qty !!}</td>
                                <td class="text-muted">{!! ($type == 'uom') ? $item->uom : $item->serial_no !!}</td>
                                <td>{!! $item->remarks !!}</td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
