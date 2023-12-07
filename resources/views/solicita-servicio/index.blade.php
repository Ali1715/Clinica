@extends('adminlte::page')

@section('template_title')
    Solicita Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Solicita Servicio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('solicita-servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Servicioid</th>
										<th>Citaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitaServicios as $solicitaServicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $solicitaServicio->ServicioID }}</td>
											<td>{{ $solicitaServicio->CitaID }}</td>

                                            <td>
                                                <form action="{{ route('solicita-servicios.destroy',$solicitaServicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('solicita-servicios.show',$solicitaServicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('solicita-servicios.edit',$solicitaServicio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $solicitaServicios->links() !!}
            </div>
        </div>
    </div>
@endsection
