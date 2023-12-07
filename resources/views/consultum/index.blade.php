@extends('adminlte::page')

@section('template_title')
    Consultum
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consultum') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consulta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Diagnostico</th>
										<th>Fechahora</th>
										<th>Instrucciones</th>
										<th>Motivo</th>
										<th>Observacion</th>
										<th>Consultaid</th>
										<th>Citaid</th>
										<th>Pacienteid</th>
										<th>Doctorid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consulta as $consultum)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consultum->Diagnostico }}</td>
											<td>{{ $consultum->Fechahora }}</td>
											<td>{{ $consultum->Instrucciones }}</td>
											<td>{{ $consultum->Motivo }}</td>
											<td>{{ $consultum->Observacion }}</td>
											<td>{{ $consultum->ConsultaID }}</td>
											<td>{{ $consultum->CitaID }}</td>
											<td>{{ $consultum->PacienteID }}</td>
											<td>{{ $consultum->DoctorID }}</td>

                                            <td>
                                                <form action="{{ route('consulta.destroy',$consultum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consulta.show',$consultum->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consulta.edit',$consultum->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $consulta->links() !!}
            </div>
        </div>
    </div>
@endsection
