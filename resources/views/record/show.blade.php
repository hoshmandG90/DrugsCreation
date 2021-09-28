<div>
    @section('title','Store')

    @if ($ShowForm)
    <form wire:submit.prevent="store" class="card card-danger  ">
        @csrf
        <div class="card-header text-center  mt-2 mx-auto">
            <h3 class="card-title font-bold ">بەشی دەستکاریکردنی تۆماری داتاکان</h3>
        </div>
        <div class="card-body">
            <!-- Date dd/mm/yyyy -->
            <div class="form-group">
                <label>زیادکردنی ناوی دەرمان</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-prescription-bottle-alt"></i></span>
                    </div>
                    <input wire:model="name_drug" type="text"
                        class="form-control @error('name_drug') is-invalid @enderror" placeholder="ناوی دەرمان">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <div class="form-group">
                <label>زیادکردنی جۆری دەرمان </label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pills"></i></span>
                    </div>
                    <input wire:model.defer="category" type="text"
                        class="form-control  @error('category') is-invalid @enderror" placeholder="جۆری دەرمان">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- phone mask -->
            <div class="form-group">
                <label>زیادکردنی تێبینی 📝</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <textarea wire:model.defer="note" class="form-control  @error('note') is-invalid @enderror" id="" cols="30"
                        placeholder="تێبینی بەکارهێنان" rows="10"></textarea>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->



        </div>
        <!-- /.card-body -->
       
        <div class="card-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-success w-50 rounded"><i class="nav-icon fas fa-plus-circle"></i>
                زیادکردن</button>
        </div>
    </form>
    @endif


    <div class="flex justify-content-end ">
        <span wire:click="$toggle('ShowForm')" class="btn btn-info "><i class="nav-icon fas fa-plus mr-2"></i>تۆمارکردنی
            ڕەچەتە</span>

    </div>



   <section class="py-1 bg-blueGray-50">
     <div class="w-full   px-4 mx-auto mt-4">
       <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
         <div class="rounded-t mb-0 px-4 py-3 border-0">
           <div class="flex flex-wrap items-center">
             <div class="relative w-full  max-w-full flex-grow flex-1">
                  <input type="text" wire:model="search" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="گەڕان">
             </div>
             
           </div>
         </div>
     
         <div class="block w-full overflow-x-auto">
           <table class="items-center bg-transparent w-full border-collapse ">
                
               @if ($records->IsNotEmpty())
             <thead>
               <tr >
                 <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                               ناوی دەرمان
                             </th>
               <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                               جۆری دەرمان </
                             </th>
                <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                تێبینی بەکارهێنان
                             </th>
               <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                               بەرواری زیادکردن
                             </th>
                             <th class="px-6 bg-blueGray-50 text-gray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            </th>
               </tr>
               
            
             </thead>
     
             <tbody>

                   
           
               @foreach ($records as $record)
           
               <tr>
                 <th class=" px-6 align-middle border  text-xs  p-4 text-left ">
                 {{$record->name_drug}}
                 </th>
                 <td class=" px-6 align-middle border  text-xs  p-4">
                 {{$record->category}}
                 </td>
                 <td class=" px-6 align-middle border  text-xs  p-4">
                {{Str::limit($record->note,20,'...')}}
                 </td>
                 <td class="border-t-0 px-6 align-middle border  text-xs  p-4">
                   <i class="fas fa-arrow-up text-orange-500 mr-4"></i>
                 {{$record->created_at->format('Y-m-d')}}
                 </td>
                 <td class=" px-6 align-middle border  text-xs  p-4">
                    <a href="#"  wire:click.prevent="SelecetdToUpadetd('{{$record->id}}')" title="دەستکاریکردن" data-bs-toggle="modal" data-bs-target="#editModel{{$record->id}}" class="text-gray-400 hover:text-gray-100  mx-2">
                         <i class="far fa-edit text-purple-400"></i>
                     </a>
                     <a href="#" wire:click.prevent="ConfirmRecordsRemoval('{{$record->id}}')" title="سرینەوە" class="text-gray-400 hover:text-gray-100  ml-2">
                         <i class="fas fa-trash-alt text-red-500"></i>
                     </a>  
                    </td>
             
               </tr>              
                  <!-- Edit Modal -->
                  <div  wire:ignore.self class="modal fade" id="editModel{{$record->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                         <form  wire:submit.prevent="update('{{$record->id}}')">
                              @csrf
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-white" id="exampleModalLabel">گۆرانکاری  تۆماری ڕەچەتە</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                          <input type="text" class="form-control my-2 rounded-lg " wire:model.defer="NewName" placeholder="">
                          <input type="text" class="form-control my-2 rounded-lg " wire:model.defer="NewCategory" placeholder="">

                          <textarea name=""  class="form-control my-2 rounded-lg " wire:model.defer="NewNote"id="" cols="8" rows="6"></textarea>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نەخێر</button>
                          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">بەڵی</button>
                        </div>
                      </div>
                      
                         </form>
                    </div>
                  </div>
             

               
               @endforeach
               @else
               <span class="d-flex justify-content-center my-2 text-red-400 ">هیچ داتایەك نەدۆزرایەوە</span>
        @endif
             </tbody>
     
           </table>
         </div>
       </div>
     </div>

     </section>
     
</div>
