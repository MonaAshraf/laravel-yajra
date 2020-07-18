@extends('owner.layouts.myhome')

 @section('table1')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$title}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {!! $dataTable->table(['class'=>'table table-bordered table-striped' ],true) !!}

              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->


@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@endpush
