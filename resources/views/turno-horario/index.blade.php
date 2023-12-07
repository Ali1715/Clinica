@extends('adminlte::page')

@section('template_title')
    Turno Horario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Turno Horario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('turno-horarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Estado</th>
										<th>Fecha Hora</th>
										<th>Turnoid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($turnoHorarios as $turnoHorario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $turnoHorario->Estado }}</td>
											<td>{{ $turnoHorario->Fecha_hora }}</td>
											<td>{{ $turnoHorario->TurnoID }}</td>

                                            <td>
                                                <form action="{{ route('turno-horarios.destroy',$turnoHorario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('turno-horarios.show',$turnoHorario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('turno-horarios.edit',$turnoHorario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $turnoHorarios->links() !!}
            </div>
        </div>
    </div>
@endsection
