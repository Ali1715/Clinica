@extends('adminlte::page')

@section('template_title')
    Indicadorhclinico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Indicadorhclinico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('indicadorhclinicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Valor</th>
										<th>Historial Clinicoid</th>
										<th>Tipo Indid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($indicadorhclinicos as $indicadorhclinico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $indicadorhclinico->Nombre }}</td>
											<td>{{ $indicadorhclinico->Valor }}</td>
											<td>{{ $indicadorhclinico->Historial_clinicoID }}</td>
											<td>{{ $indicadorhclinico->Tipo_indID }}</td>

                                            <td>
                                                <form action="{{ route('indicadorhclinicos.destroy',$indicadorhclinico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('indicadorhclinicos.show',$indicadorhclinico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('indicadorhclinicos.edit',$indicadorhclinico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $indicadorhclinicos->links() !!}
            </div>
        </div>
    </div>
@endsection
