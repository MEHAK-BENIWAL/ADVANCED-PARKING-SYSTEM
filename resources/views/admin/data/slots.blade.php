<x-master-layout :sidebar="$sidebar">

    @php
        $categories = \App\Models\Categories::all();
    @endphp
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".removeButton").click(function(){
          var aid = $(this).data('id');
          
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
                <p>Are you sure want to delete this Slot?</p>
              </div>
              <div class="modal-body d-flex justify-content-around">
                <form class="col-5" action="{{ route('removeSlot') }}" method="POST">
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
                   <h5 class="modal-title" id="exampleModalLongTitle"><img src="https://cdn-icons-png.flaticon.com/512/10023/10023858.png" width="25px" height="25px" alt=""> Add Slot</h5>
                   <img src="https://cdn-icons-png.flaticon.com/512/1828/1828665.png" style="cursor: pointer" class="but" width="25px" height="25px" alt="" data-bs-dismiss="modal">
                </div>              
                <form class="row m-3" action="{{route('addSlot')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="col-12">
                      <div class="modal-body">
                          <label class="form-label">Vehicle Category</label>
                          <div class="input-group input-group-outline mb-3">
                              <select name="category_id" class="form-control" required>
                                  <option value="">== select ==</option>
                                  @foreach ($categories as $category)
                                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                                  @endforeach
                              </select>
                          </div>                    
                      </div>
                        <div class="modal-body">
                            <label class="form-label">Slot Name</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" name="slot_name" class="form-control" required>
                            </div>                    
                        </div>

                        
                        <div class="modal-body">
                            <label class="form-label">Slot Price</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" name="slot_price" class="form-control" required>
                            </div>                    
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Status</label>
                            <div class="input-group input-group-outline mb-3">
                                <select name="status" class="form-control" required>
                                    <option value="">== select ==</option>
                                    <option value="0">Available</option>
                                    <option value="1">Not Available</option>
                                </select>
                            </div>                    
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
              <h6 class="text-white text-capitalize ps-3"><img class="mx-3" src="https://cdn-icons-png.flaticon.com/512/9835/9835748.png" width="25px" height="25px" alt="">Parking Slots</h6>
              <a href="javascript:void()" class="but btn btn-light mx-3 px-3 py-1"><i class="fa fa-plus"></i></a>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" id="transfer_table">
                <thead>
                  <tr>
                    {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>                     --}}
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vehicle Category</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Slot Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated At</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($slots as $result)
                    
                      <tr>
                        
                          <td class="text-center text-xs">
                            {{$result->vehical_category}}
                          </td>
                          <td class="text-center text-xs">
                            {{$result->slot_name}}
                          </td>
                          <td class="text-center text-xs">
                            @if ($result->status == 0)
                                <span class="bg-gradient-success text-white py-2 px-3 rounded">
                                    Available
                                </span>    
                            @else
                                <span class="bg-gradient-danger text-white py-2 px-3 rounded">
                                    Not Available
                                </span>
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
                                {{-- <a href="{{ route('variantSlots',$result->slot_id) }}" class="btn m-0 border border-dark shadow-lg btn-default text-dark d-flex justify-content-center px-2 text-md">
                                  Variants
                                </a>   --}}
                                <a id="slot-form" data-url="{{ route('slot',$result->id) }}" class="btn m-0 border border-warning shadow-lg btn-default text-warning d-flex justify-content-center px-2 text-md">
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
            {{-- @if ($slots->links()->paginator->lastPage() !== 1)
              <div class="pagination border-top border-secondary mt-3 d-flex justify-content-between align-items-center p-3">
                <a href="{!! $slots->links()->paginator->previousPageUrl()!!}" class="border border-secondary btn btn-sm btn-default">
                  Previous
                </a>
                <a href="{!! $slots->links()->paginator->nextPageUrl()!!}" class="border border-secondary btn btn-sm btn-default">
                  Next
                </a>
                <a href="slots?page={!! $slots->links()->paginator->lastPage()!!}" class="border border-secondary btn btn-sm btn-default">
                  Last
                </a>
              </div>
            @endif --}}
          </div>
        </div>
      </div>
    </div>


{{-- show info modal --}}

<div class="modal fade" id="slotInfoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-center">
        <h5 class="modal-title" id="exampleModalLabel"><img src="https://cdn-icons-png.flaticon.com/512/6592/6592963.png" width="25px" height="25px" alt="">Slot Details</h5>
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828665.png" style="cursor: pointer;" width="25px" height="25px" alt="" data-bs-dismiss="modal">
      </div>
      <div class="modal-body">
            <div class="col-12 row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <p class="text-sm">Slot Name: <span id="show-slot_name" class="fw-bold"></span> </p>
                <p class="text-sm">Category Name: <span id="show-category_name" class="fw-bold"></span> </p>
                <p class="text-sm">Brand Name: <span id="show-brand_name" class="fw-bold"></span> </p>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <p class="text-sm">Price: <span id="show-price" class="fw-bold"></span> </p>
                {{-- <p class="text-sm">Quantity: <span id="show-quantity" class="fw-bold"></span> </p> --}}
                <p class="text-sm">Description: <span id="show-description" class="fw-bold"></span> </p>
              </div>
            </div>
            <div class="col-12 row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <img id="show-slot_image1" width="150" height="150" class="rounded m-3">
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <img id="show-slot_image2" width="150" height="150" class="rounded m-3">
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <img id="show-slot_image3" width="150" height="150" class="rounded m-3">
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <img id="show-slot_image4" width="150" height="150" class="rounded m-3">
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <img id="show-slot_image5" width="150" height="150" class="rounded m-3">
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

<!-- Update Modal -->
<div class="modal fade" id="slotEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header d-flex justify-content-between align-items-center">
        <h5 class="modal-title" id="exampleModalLabel"><img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" width="25px" height="25px" alt="">Update Slot Details</h5>
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828665.png" style="cursor: pointer;" width="25px" height="25px" alt="" data-bs-dismiss="modal">
    </div>
    <div class="modal-body">              
      <form class="row m-3" action="{{route('updateSlot')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="hidden" name="id" id="slot-id">
          <input type="hidden" name="slot_id" id="slot-slot_id">
            <div class="col-12">
                <div class="modal-body">
                    <label class="form-label">Vehicle Category</label>
                    <div class="input-group input-group-outline mb-3">
                        <select name="category_id"  id="slot-category_id" class="form-control" required>
                            <option value="">== select ==</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>                    
                </div>
                <div class="modal-body">
                    <label class="form-label">Slot Name</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" id="slot-slot_name" name="slot_name" class="form-control">
                    </div>                    
                </div>
                <div class="modal-body">
                    <label class="form-label">Slot Price</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" id="slot-slot_price" name="slot_price" class="form-control">
                    </div>                    
                </div>
                <div class="modal-body">
                    <label class="form-label">Status</label>
                    <div class="input-group input-group-outline mb-3">
                        <select name="status" class="form-control" required>
                            <option value="">== select ==</option>
                            <option value="0">Available</option>
                            <option value="1">Not Available</option>
                        </select>
                    </div>                    
                </div>
            </div>
        <div class="col-12">
          <div class="modal-body row justify-content-start">
            <input type="submit" class="col-12 btn btn-md btn-success" value="Update">
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
            $('body').on('click', '#slot-form', function () {
                var userURL = $(this).data('url');
                
                $('#slot_images_update').html('');

                $.get(userURL, function (data) {
                    $('#slotEditModal').modal('show');
                    $('#slot-id').val(data[0][0].id);
                    $('#slot-slot_id').val(data[0][0].slot_id);
                    $('#slot-slot_name').val(data[0][0].slot_name);
                    $('#slot-slot_price').val(data[0][0].slot_price);
                    $('#slot-category_id').val(data[0][0].category_id);                    
                })
            });
        });
        
    </script>
        
 
  </x-master-layout>