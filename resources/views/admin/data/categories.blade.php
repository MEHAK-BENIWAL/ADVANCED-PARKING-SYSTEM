<x-master-layout :sidebar="$sidebar">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".removeButton").click(function(){
          var aid = $(this).data('id');
          var aname = $(this).data('name');
          $('#removeID').val(aid);
          $('#removeModal').modal('show');
          $("#removeModal").toggle();
        });
      });
  
      $(document).ready(function(){
        $(".removeClose").click(function(){
          $('#removeModal').modal('fade');
          $("#removeModal").toggle();
        });
      });
    </script>
    {{-- model start --}}
      <div class="modal fade" id="removeModal">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content col-lg-8 col-md-10 col-sm-12">
              <div class="modal-header d-flex flex-column justify-content-center align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/6460/6460112.png" class="col-3">
                <h5 class="modal-title my-3" id="exampleModalLongTitle">Delete?</h5>
                <p>Are you sure want to delete this Category?</p>
              </div>
              <div class="modal-body d-flex justify-content-around">
                <form class="col-5" action="{{ route('removeCategory') }}" method="POST">
                  @csrf
                  <input type="hidden" id="removeID" name="id">
                  <button class="col-12 btn border border-danger m-0 shadow-lg btn-default btn-lg text-danger d-flex justify-content-center px-2 text-md" type="submit">
                    Yes,Delete
                  </button>
                </form>
                <button class="col-5 btn border border-secondary m-0 shadow-lg btn-default btn-lg text-secondary d-flex justify-content-center px-2 text-md removeClose" data-bs-dismiss="modal">
                  No,Cancel
                </button>
              </div>
          </div>
        </div>
    </div>
  
  {{-- model end --}}
  
    <script>
      $(document).ready(function(){
        $(".but").click(function(){
          $('#createModal').modal('show');
          $("#createModal").toggle();
        });
      });
  
      $(document).ready(function(){
        $(".close").click(function(){
          $('#createModal').modal('fade');
          $("#createModal").toggle();
        });
      });
    </script>
     <style>
      .checkbox
      {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.5); /* IE */
        -moz-transform: scale(1.5); /* FF */
        -webkit-transform: scale(1.5); /* Safari and Chrome */
        -o-transform: scale(1.5); /* Opera */
        transform: scale(1.5);
        padding: 10px;
      }
  
    
      .errorAlert{
        position: fixed;
        bottom: 80px;
        right: 100px;
        z-index: 999;
      }
    </style>
  
      <div class="container-fluid py-4">
        {{-- <x-input-error :messages="$errors->all()" class="text-danger" /> --}}
      
          <div class="errorAlert">
            @foreach ($errors->all() as $error)
              <x-flash_warning>
                {{ $error }}  
              </x-flash_warning>
            @endforeach
          </div>

        {{-- model start --}}
        <div class="modal fade" id="createModal">
          <div class="modal-dialog modal-md" role="document">
             <div class="modal-content col-lg-8 col-md-10 col-sm-12">
                <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLongTitle"><img src="https://cdn-icons-png.flaticon.com/512/10023/10023858.png" width="25px" height="25px" alt=""> Add Category</h5>
                   <img src="https://cdn-icons-png.flaticon.com/512/1828/1828665.png" style="cursor: pointer" class="but" width="25px" height="25px" alt="" data-bs-dismiss="modal">
                </div>              
                <form class="row m-3" action="{{route('addCategory')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="modal-body">
                        <label class="form-label">Category Name</label>
                        <div class="input-group input-group-outline mb-3">
                            <input type="text" name="category_name" class="form-control" required>
                        </div>                    
                    </div>
                    <div class="modal-body">
                        <label class="form-label">Description</label>
                        <div class="input-group input-group-outline mb-3">
                            <textarea name="description" class="form-control"></textarea>
                        </div>                    
                    </div>
                    <div class="col-12">
                      <div class="modal-body row justify-content-start">
                        <input type="submit" class="col-12 btn btn-md btn-success" value="Add">
                      </div>
                    </div>     
  
                </form>
             </div>
          </div>
       </div>
  
    {{-- model end --}}
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="d-flex flex-row justify-content-between align-items-center bg-gradient-{{$sidebar->sidebar}} shadow-{{$sidebar->sidebar}} border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3"><img class="mx-3" src="https://cdn-icons-png.flaticon.com/512/3418/3418139.png" width="25px" height="25px" alt="">Vehicle Categories</h6>
              <a href="javascript:void()" class="but btn btn-light mx-3 px-3 py-1"><i class="fa fa-plus"></i></a>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" id="transfer_table"> 
                <thead>
                  <tr>
                    {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> --}}
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated At</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $result)
                      <tr>
                          {{-- <td>
                            <h6 class="mx-3 text-sm text-center">{{ $result->id }}</h6>
                          </td> --}}
                          <td class="text-center text-xs">
                            {{$result->category_name}}
                          </td>
                          <td class="text-center text-xs">
                            @if ($result->description == '')
                                ---
                            @else
                                {{$result->description}}
                            @endif
                          </td>
                          <td class="text-center text-xs">
                            {{$result->created_at}}
                          </td>
                          <td class="text-center text-xs">
                            @if ($result->updated_at == '')
                                ---
                            @else
                                {{$result->updated_at}}
                            @endif
                          </td>
                          <td class="border-0">
                            <div class="d-flex flex-row justify-content-around align-items-center">
                                
                                <a id="cat-form" data-url="{{ route('cat',$result->id) }}" class="btn m-0 border border-warning shadow-lg btn-default text-warning d-flex justify-content-center px-2 text-md" type="submit">
                                    <i class="fas fa-light fa-pen-nib"></i>
                                </a>
                                <a data-id="{{ $result->id }}" class="removeButton btn m-0 border border-danger shadow-lg btn-default text-danger d-flex justify-content-center px-2 text-md">
                                  <i class="fas fa-light fa-trash fa-bounce"></i>
                                </a>
                            </div>
                          </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            {{-- @if ($categories->links()->paginator->lastPage() !== 1)
              <div class="pagination border-top border-secondary mt-3 d-flex justify-content-between align-items-center p-3">
                <a href="{!! $categories->links()->paginator->previousPageUrl()!!}" class="border border-secondary btn btn-sm btn-default">
                  Previous
                </a>
                <a href="{!! $categories->links()->paginator->nextPageUrl()!!}" class="border border-secondary btn btn-sm btn-default">
                  Next
                </a>
                <a href="categories?page={!! $categories->links()->paginator->lastPage()!!}" class="border border-secondary btn btn-sm btn-default">
                  Last
                </a>
              </div>
            @endif --}}
          </div>
        </div>
      </div>
    </div>
  

<!-- Update Modal -->
<div class="modal fade" id="categoryEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header d-flex justify-content-between align-items-center">
        <h5 class="modal-title" id="exampleModalLabel"><img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" width="25px" height="25px" alt="">Update Category Details</h5>
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828665.png" style="cursor: pointer;" width="25px" height="25px" alt="" data-bs-dismiss="modal">
    </div>
    <div class="modal-body">     
        <form class="row m-3" action="{{route('updateCategory')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <input type="hidden" name="id" id="category-id">
            <div class="modal-body">
                <label class="form-label">Category Name</label>
                <div class="input-group input-group-outline mb-3">
                    <input type="text" id="category-category_name" name="category_name" class="form-control" required>
                </div>                    
            </div>
            <div class="modal-body">
                <label class="form-label">Description</label>
                <div class="input-group input-group-outline mb-3">
                    <textarea id="category-description" name="description" class="form-control"></textarea>
                </div>                    
            </div>
            <div class="col-12">
            <div class="modal-body row justify-content-start">
                <input type="submit" class="col-12 btn btn-md btn-success" value="Add">
            </div>
            </div>     

        </form>       
    </div>
    </div>
</div>
</div>    
<script>
  $(document).ready(function () {

      $('#transfer_table').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ],
          info: true,
          ordering: false,
          paging: true,
          pagingType: 'full_numbers'
      } );
  });
</script>
    <script type="text/javascript">

        $(document).ready(function () {
            
            /* When click show form */
            $('body').on('click', '#cat-form', function () {
                var userURL = $(this).data('url');
                
                $.get(userURL, function (data) {
                    $('#categoryEditModal').modal('show');
                    $('#category-id').val(data[0][0].id);
                    $('#category-category_name').val(data[0][0].category_name);
                    $('#category-description').val(data[0][0].description);
                })
            });
        });
        
        </script>
        
 
  </x-master-layout>