<div class="row">
        <div class="col-md-6 mb-3">
            <label>Buscar Produto</label>
            <input type="text" id="q" name="term" data-action="{{ route('search-autocomplete') }}" class="form-control">
            <div class="col-md-6 mb-3">
            <button class=" btn btn-primary add_field_button">Adicionar</button>
        </div>
    </div>
</div>

    <hr>

    <div class="row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nome do Produto</label>
      <input type="text" id="nome_produto" name="nome_produto" class="form-control"  required="">
    </div>
  
    <div class="col-md-1 mb-3">
      <label for="validationDefault02">Qtd</label>
      <input type="text" id="qtd1" name="qtd1" class="form-control" onblur="calcular();"  required="">
    </div>

    <div class="col-md-1 mb-3">
      <label for="validationDefault02">Valor</label>
      <input type="text" id="valor1" name="valor1" class="form-control" onblur="calcular();"  required="">
    </div>

    <div class="col-md-2 mb-3">
      <label for="validationDefault02">Total</label>
      <input type="text" id="total1" name="total1" class="form-control" onblur="calcular();"  required="">
    </div>

    <div class="col-md-1 mb-3">
        <label for="validationDefault02">IPI</label>
        <input type="text" id="ipi1" name="ipi1" class="form-control" id="validationDefault02"  required="">
    </div>

    <div class="col-md-2 mb-3">
            <label for="validationDefault02">Prazo de Entrega</label>
            <input type="text" id="prazo1" name="prazo1" class="form-control" id="validationDefault02"  required="">
    </div>
    
    <div class="col-md-1 mb-3">
        <label for="validationDefault02"></label>
        <button class="btn btn-danger remove_field">Remover</button>
    </div>
  </div>