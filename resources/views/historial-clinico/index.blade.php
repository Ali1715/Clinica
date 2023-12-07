@extends('adminlte::page')

@section('template_title')
    Historial Clinico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial Clinico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-clinicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Enf Actual</th>
										<th>Fecha Hora</th>
										<th>Hip Diagnostico</th>
										<th>Consultaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialClinicos as $historialClinico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $historialClinico->Enf_actual }}</td>
											<td>{{ $historialClinico->Fecha_hora }}</td>
											<td>{{ $historialClinico->Hip_diagnostico }}</td>
											<td>{{ $historialClinico->ConsultaID }}</td>

                                            <td>
                                                <form action="{{ route('historial-clinicos.destroy',$historialClinico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-clinicos.show',$historialClinico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-clinicos.edit',$historialClinico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historialClinicos->links() !!}
            </div>
        </div>
    </div>
@endsection
