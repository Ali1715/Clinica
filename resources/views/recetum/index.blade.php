@extends('adminlte::page')

@section('template_title')
    Recetum
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recetum') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('receta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Indicaciones</th>
										<th>Recetaid</th>
										<th>Historial Clinicoid</th>
										<th>Medicamentoid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($receta as $recetum)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recetum->Indicaciones }}</td>
											<td>{{ $recetum->RecetaID }}</td>
											<td>{{ $recetum->Historial_clinicoID }}</td>
											<td>{{ $recetum->MedicamentoID }}</td>

                                            <td>
                                                <form action="{{ route('receta.destroy',$recetum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('receta.show',$recetum->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('receta.edit',$recetum->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $receta->links() !!}
            </div>
        </div>
    </div>
@endsection
