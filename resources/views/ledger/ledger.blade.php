@extends('admin.layouts.master')
@section('title', 'Ledger')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <a class="btn btn-primary btn-sm mt-3 rounded-pill p-2" href="{{ route('ledger.create') }}"><b>
                    ADD Ledger</b> <i class="fas fa-user-plus"></i></a>
            <a href="" class="btn btn-danger p-2" onclick="window.print()">Print File</a>

            <!-- Trigger the modal with a button -->
            {{-- <button type="button" class="btn btn-info btn-lg">Open Modal</button> --}}

            <!-- Modal -->

            <div class="card mt-4" style="border-radius : 25px">
                <div class="card-header">
                    <h1 class="mt-3 "><b> <i>Ledger</i> </b> <i class="fas fa-user-tie"></i> </h1>

                    <div class="mt-3">

                    </div>
                    {{-- flash sms --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif


                    {{-- <button onclick="window.print()" class="btn btn-success">PRINT REPORT<i
                            class="fas fa-print"></i></button> --}}
                </div>
                <div class="table-responsive">
                    
                    <table class="table table-bordered table-striped table-hover text-center" id="mytable">
                        <thead>
                            <tr>
                                <th><i class="fas fa-list-ol"></i> ID</th>
                                <th>Purpose1 <i class="fas fa-marker"></i></th>
                                <th>Purpose2 <i class="fas fa-highlighter"></i></th>
                                <th>IN <i class="fas fa-money-bill-wave-alt"></i></th>
                                <th>OUT <i class="fas fa-money-bill-wave"></i></th>
                                <th class="sum">Balance <i class="fas fa-money-bill-wave"></i></th>
                                <th>Date <i class="fas fa-calendar-alt"></i></th>
                                
                                <th>ACTION <i class="fas fa-info-circle"></i></th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>


            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center bg-primary">
                            <h4> <i class="fas fa-money-bill-wave"></i> Total Balance</h4>
                    </div>
                    <div class="col-sm-4 bg-warning text-center balance_col">
                        
                    </div>
                
                </div>
            </div>
                    </section>
                    </div>
        @endsection
        @section('scripts')
            <script>
                $(document).ready(function() {

                   
var table = $("#mytable").DataTable({

    processing: true,
    serverSide: true,
    responsive: true,
    ajax: "{{ route('ledger.index') }}",

    columns: [{
                                data: 'id',
                                name: 'id'
                            },
                            {
                                data: 'purpose1',
                                name: 'purpose1'
                            },
                            {
                                data: 'purpose2',
                                name: 'purpose2'
                            },
                            {
                                data: 'debit',
                                name: 'debit'
                            },
                            {
                                data: 'credit',
                                name: 'credit'
                            },
                            {
                                data: 'savings',
                                name: 'savings'
                            },
                            {
                                data: 'date',
                                name: 'date'
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ],

 "initComplete": function (settings, json) {
 var api = this.api();
 CalculateTableSummary(this);
},
		"footerCallback": function ( row, data, start, end, display ) {
    		var api = this.api(), data;	 
     CalculateTableSummary(this);
     return ;		
			}
});



function CalculateTableSummary(table) {
    try {

        var intVal = function (i) {
            return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '') * 1 :
                    typeof i === 'number' ?
                        i : 0;
        };

        var api = table.api();
        api.columns(".sum").eq(0).each(function (index) {
            var column = api.column(index,{page:'current'});

            var sum = column
               .data()
               .reduce(function (a, b) {
                   return intVal(a) + intVal(b);
               }, 0);
             
               $(".balance_col").text(sum);          
        });
    } catch (e) {
        console.log('Error in CalculateTableSummary');
        console.log(e)
    }
}    
});
                


                $(document).on('click', '.dlt', function() {
                    var id = $(this).data('id');
                    if (confirm("Are you sure you want to Delete this Ledger record")) {
                        $.ajax({
                            type: "DELETE",
                            url: "ledger/" + id,
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                $('#myTable').DataTable().ajax.reload();
                            }
                        });
                    }
                });

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Page Refreshed',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        @endsection
