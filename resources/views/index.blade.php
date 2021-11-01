<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Karyawan</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">

            
                <h1> CRUD Karyawan </h1>
                <button class="btn btn-primary" id="btnTambahKaryawan">Tambah Karyawan </button>


            </div>
        </div>
    </div>

    <!-- Modal 1-->
    <div class="modal fade" id="modalKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKaryawanLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="page">

                
               
                
            </div>
            
        </div>
    </div>
    </div>
    <!--- End Modal 1--->

    <!-- Modal 2-->
    <!--div class="modal fade" id="modalKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div-->
    <!--End Modal 2-->
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous">
</script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <script>
        // $(document).ready(function(){
            

        // });

        // function create(){

        //     $("#modalKaryawan").modal("show");
        // }

        $("#btnTambahKaryawan").click(function(){
            $.get("{{ url('create') }}", {}, function(data, status){
                $("#modalKaryawanLabel").html("Tambah Karyawan");
                $("#page").html(data);
                $("#modalKaryawan").modal("show");

            });           
        });

        function store(){
            
        }

        
        

    </script>
</body>
</html>