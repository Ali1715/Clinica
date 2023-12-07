@extends('adminlte::page')

@section('template_title')
    Historial Cirujia Rgistro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial Cirujia Rgistro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-cirujia-rgistros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Historial Cirujiaid</th>
										<th>Cirujiaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialCirujiaRgistros as $historialCirujiaRgistro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $historialCirujiaRgistro->Historial_cirujiaID }}</td>
											<td>{{ $historialCirujiaRgistro->CirujiaID }}</td>

                                            <td>
                                                <form action="{{ route('historial-cirujia-rgistros.destroy',$historialCirujiaRgistro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-cirujia-rgistros.show',$historialCirujiaRgistro->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-cirujia-rgistros.edit',$historialCirujiaRgistro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $historialCirujiaRgistros->links() !!}
            </div>
        </div>
    </div>
@endsection
