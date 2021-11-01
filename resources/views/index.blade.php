<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Karyawan</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
  
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">

            
                <h1> CRUD Karyawan </h1>
                <button class="btn btn-primary" id="btnTambahKaryawan">Tambah Karyawan </button>
                <div id="read" class="mt-3"></div>

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

    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous">
</script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
    
    <script>

        $(document).ready(function(){
            read();
            
        });
        function read(){
            $.get("{{ url('read') }}", {}, function(data, status){

                $("#read").html(data);
            });
        }
        
        $("#btnTambahKaryawan").click(function(event){
            event.preventDefault();
            $.get("{{ url('create') }}", {}, function(data, status){
                $("#modalKaryawanLabel").html("Tambah Karyawan");
                $("#page").html(data);
                $("#modalKaryawan").modal("show");

            });           
        });
        

        

        
        

    </script>
</body>
</html>