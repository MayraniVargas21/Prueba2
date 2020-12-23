<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                    <h4>Nuevo Producto</h4>
            </div>
            
            <div class="modal-body">
            <form action="{{ action ('ProductoController@store')}}" method="POST">
            @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Añade Nombre" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="precio">Precio</label>
                        <input type="name" name="precio" class="form-control" placeholder="Añade Precio" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="stock">Stock</label>
                        <input type="text" name="stock" class="form-control" placeholder="Añade Stock" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="unidad_medida">Unidad de medida</label>
                        <input type="name" name="unidad_medida" class="form-control" placeholder="Añade Unidad" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="total">Total</label>
                        <input type="name" name="total" class="form-control" placeholder="Total" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Guardar</button> 
            </div>
         </form>
            
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    
	$("input[name=precio]").change(function(){  
        $("input[name=stock]").change(function(){
            var precio =$("input[name=precio]").val(); 
            var stock =$("input[name=stock]").val();
            var total= precio*stock;
            console.log(total);
            $('input[name=total]').val(total);
        });
		
	});
});
</script>