@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            </div>
                </br>
                <h1 class="page-header">Visualizar Insumos</h1>
              <div class="row">                                           
                    <div class="col-md-12">
                      <div class="alert alert-danger" role="alert"> Não existe insumo cadastrados para a maquina {{ $maquinas }} !</td>
                    </div>
              </div> 
             
        </form>

        
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection