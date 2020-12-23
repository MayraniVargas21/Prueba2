<div class="modal fade" id="update">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                    <h3>Modificar</h3>
                </div>
            
                <form role="modal" action ="/producto/" id="editarp" method="POST">
                    @csrf
                    @method('PUT')

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="id">Id</label>
                            <input hidden type="number" name="id" id="id" class="form-control" placeholder="Id" readonly style="background:white">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tel">Precio</label>
                            <input type="number" name="preciou" id="precio" class="form-control" pattern="\d{10}" placeholder="Precio" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tel">Stock</label>
                            <input type="number" name="stocku" id="stock" class="form-control" placeholder="Stock" required>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="modificar" type="submit">Modificar</button>  
                </div>
            </form>
        </div>
    </div>
</div>


<script>


    $(document).on('click', '#editbtn', function(){
        $('#update').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

            $('#id').val(data[0].trim());
            $('#nombre').val(data[1].trim());
            $('#precio').val(data[2].trim());
            $('#stock').val(data[3].trim());
            $('#total').val(data[4].trim());
            
        });
        
        

    $('#editarp').on('submit', function(e) {
        e.preventDefault();

        var id = $('#id').val();

        $.ajax({
            type: "PUT",
            url: "/producto/"+ id,
            data: $('#editarp').serialize(),
            success: function(response) {

                $('#update').modal('hide');
                window.location.reload();
            },
            error: function(error) {
                console.log(error);
            }
            
        });
    });
</script>