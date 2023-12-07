@extends('adminlte::page')

@section('template_title')
    Cirujium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cirujium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cirujia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Fecha Hora</th>
										<th>Sala</th>
										<th>Cirujiaid</th>
										<th>Pacienteid</th>
										<th>Equipoid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cirujia as $cirujium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cirujium->Fecha_hora }}</td>
											<td>{{ $cirujium->Sala }}</td>
											<td>{{ $cirujium->CirujiaID }}</td>
											<td>{{ $cirujium->PacienteID }}</td>
											<td>{{ $cirujium->EquipoID }}</td>

                                            <td>
                                                <form action="{{ route('cirujia.destroy',$cirujium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cirujia.show',$cirujium->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cirujia.edit',$cirujium->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cirujia->links() !!}
            </div>
        </div>
    </div>
@endsection
