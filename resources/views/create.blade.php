<div class="modal-body">
    <form id="ajaxform">
         <div class="mb-3">
             <label for="full_name" class="col-form-label">Nama Lengkap :</label>
             <input type="text" class="form-control" id="full_name" name="full_name" required>
         </div>
         <div class="mb-3">
             <label for="birth_place" class="col-form-label">Tempat Lahir :</label>
             <input type="text" class="form-control" id="birth_place" name="birth_place">
        </div>
         <div class="mb-3">
             <label for="birth_date" class="col-form-label">Tanggal Lahir :</label>
             <input type="text" class="form-control" id="birth_date" name="birth_date">
        </div>
         <div class="mb-3">
             <label for="hp" class="col-form-label">Nomor Handphone :</label>
             <input type="text" class="form-control" id="hp" name="hp">
        </div>
         <div class="mb-3">
             <label for="email" class="col-form-label">Email :</label>
             <input type="text" class="form-control" id="email" name="email">
         </div>
         <div class="mb-3">
             <label for="departement" class="col-form-label">Departement :</label>
             <input type="text" class="form-control" id="departement" name="departement">
        </div>
     </form>
 
 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-success" id="btnSaveTambahKaryawan"> SAVE </button>
 </div>

 <script> 
    $("#btnSaveTambahKaryawan").click(function(){        

            let full_name = $("#full_name").val();
            let birth_place = $("#birth_place").val();
            let birth_date = $("#birth_date").val();
            let email = $("#email").val();
            let hp = $("#hp").val();
            let departement = $("#departement").val();
            $.ajax({
                url: "{{ url('store') }}",
                type:"post",
                
                data:{
                full_name:full_name,
                email:email,
                hp:hp,
                birth_place:birth_place,
                birth_date:birth_date,
                departement:departement,                
                },
                success:function(response){
                
                console.log(response);
                if(response) {
                    $('.success').text(response.success);
                    $("#ajaxform")[0].reset();                   
                    
                }
                },
                error: function(error) {
                console.log(error);                
                }
                //
            });
            $("#modalKaryawan").modal("hide");
            read();


        });
</script>