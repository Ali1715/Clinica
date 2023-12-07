@extends('adminlte::page')

@section('template_title')
    Equipo Cirujia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Equipo Cirujia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('equipo-cirujias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Equipoid</th>
										<th>Usuarioid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipoCirujias as $equipoCirujia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $equipoCirujia->EquipoID }}</td>
											<td>{{ $equipoCirujia->UsuarioID }}</td>

                                            <td>
                                                <form action="{{ route('equipo-cirujias.destroy',$equipoCirujia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('equipo-cirujias.show',$equipoCirujia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipo-cirujias.edit',$equipoCirujia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $equipoCirujias->links() !!}
            </div>
        </div>
    </div>
@endsection
