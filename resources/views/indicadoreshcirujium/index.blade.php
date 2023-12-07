@extends('adminlte::page')

@section('template_title')
    Indicadoreshcirujium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Indicadoreshcirujium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('indicadoreshcirujia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Indicadoreshcirujiaid</th>
										<th>Historial Cirujiaid</th>
										<th>Tipo Indid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($indicadoreshcirujia as $indicadoreshcirujium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $indicadoreshcirujium->Nombre }}</td>
											<td>{{ $indicadoreshcirujium->Valor }}</td>
											<td>{{ $indicadoreshcirujium->IndicadoreshcirujiaID }}</td>
											<td>{{ $indicadoreshcirujium->Historial_cirujiaID }}</td>
											<td>{{ $indicadoreshcirujium->Tipo_indID }}</td>

                                            <td>
                                                <form action="{{ route('indicadoreshcirujia.destroy',$indicadoreshcirujium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('indicadoreshcirujia.show',$indicadoreshcirujium->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('indicadoreshcirujia.edit',$indicadoreshcirujium->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $indicadoreshcirujia->links() !!}
            </div>
        </div>
    </div>
@endsection
