@extends('app')

@section('content')
<div class="col-xs-8">
<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Comandos</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>  </th>
                    <th> Download</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comandos as $comando)
                  <tr>
                    <td> {{ $comando->getName() }} </td>
                    <td> {{ $comando->getDescription() }} </td>
                    <td class="col-xs-6">
                        <table class="no-padding no-marging table-condensed col-xs-12" >
                        @foreach($comando->getOptions() as $oneOption)
                            <tr>
                                <td class="col-xs-3">
                                    <a class="label label-info col-xs-12" style="margin: 3px">
                                        {{ $oneOption[0] }}
                                    </a>
                                </td>
                                <td>
                                    {{ $oneOption[3] }}
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
      </div>
    Necesito que sean comandos para que sea cros repos.
    
@endsection
