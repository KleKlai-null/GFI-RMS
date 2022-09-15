<x-pdf title="Service Call" :data="$data">
    <div class="divTable" style="margin-top: 15px; ">
        <div class="divTableBody">
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Date</div>
                <div class="divTableCell">{{ $data->created_at->format('F d, Y') }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Customer Name</div>
                <div class="divTableCell">{{ $data->customer_name }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Contact Person</div>
                <div class="divTableCell">{{ $data->contact_number }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Phone No.</div>
                <div class="divTableCell">{{ $data->phone_no }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Item No.</div>
                <div class="divTableCell">{{ $data->item_no }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Description</div>
                <div class="divTableCell">{{ $data->description }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">MFR Serial No.</div>
                <div class="divTableCell">{{ $data->mfr_serial_no }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Serial No.</div>
                <div class="divTableCell">{{ $data->serial_no }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Subject</div>
                <div class="divTableCell">{{ $data->subject }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Origin</div>
                <div class="divTableCell">{{ $data->origin }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Problem Type</div>
                <div class="divTableCell">{{ $data->problem_type }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Assigned To</div>
                <div class="divTableCell">{{ $data->assigned_to }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Priority</div>
                <div class="divTableCell">{{ $data->priority }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Call Type</div>
                <div class="divTableCell">{{ $data->call_type }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Technician</div>
                <div class="divTableCell">{{ $data->created_at->format('F d, Y') }}</div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell" style="font-weight: bold;">Remarks</div>
                <div class="divTableCell">{{ $data->remarks }}</div>
            </div>
        </div>
    </div>

    <div>
        <div id="logo">
            <img src="data:image/png;base64, {!! $qrcode !!}">
            <br />
            <span class="text-muted">{{ $data->document_series_no }}</span>
        </div>
    </div>
</x-pdf>
