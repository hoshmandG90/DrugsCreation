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


    <div class="flex justify-content-end mb-3">
        <span wire:click="$toggle('ShowForm')" class="btn btn-info "><i class="nav-icon fas fa-plus mr-2"></i>تۆمارکردنی
            ڕەچەتە</span>

    </div>




    <table class="table text-gray-400   text-sm">
        <thead class="bg-gray-800 text-gray-500">
            <tr class="text-white text font-bold ">
                <th class="p-3 ">ناوی دەرمان</th>
                <th class="p-3 text-left">جۆری دەرمان</th>
                <th class="p-3 text-left">تێبینی</th>
                <th class="p-3 text-left">بەرواری زیادکردن</th>
                <th class="p-3 text-left"></th>
            </tr>
        </thead>
        <tbody>
             @foreach ($records as $record)
                 
            
            <tr class="bg-gray-800 s">
                <td class="">

                    <span><i class="nav-icon fas fa-capsules mr-2 "></i> {{$record->name_drug}}</span>
                      
                       
                    
                </td>
                <td class="p-3">
                    {{$record->category}}
                </td>
                <td class="p-3 font-bold">
                  {{Str::limit($record->note, 20, '...') }}
                </td>
                <td class="p-3">
                    <span class="bg-gray-400 px-4 text-gray-50 py-2 rounded-md px-2">{{$record->created_at->format('Y-m-d')}}</span>
                </td>
                <td class="p-3 ">

                    <a href="#"  wire:click.prevent="SelecetdToUpadetd('{{$record->id}}')" data-toggle="modal" data-target="#editModels{{$record->id}}" title="دەستکاریکردن" class="text-gray-400 hover:text-gray-100  mx-2">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="#" wire:click.prevent="ConfirmRecordsRemoval('{{$record->id}}')" title="سرینەوە" class="text-gray-400 hover:text-gray-100  ml-2">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <div class="modal fade" id="editModels{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self >
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
               <form wire:submit.prevent="update('{{$record->id}}')">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">گۆرانکاری لە تۆماری ڕەچەتە</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                    <div class="form-group">
                         <label>زیادکردنی ناوی دەرمان</label>

                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-prescription-bottle-alt"></i></span>
                             </div>
                             <input wire:model="NewName" type="text"
                                 class="form-control @error('NewName') is-invalid @enderror" placeholder="ناوی دەرمان">
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
                             <input wire:model.defer="NewCategory" type="text"
                                 class="form-control  @error('NewCategory') is-invalid @enderror" placeholder="جۆری دەرمان">
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
                             <textarea wire:model.defer="NewNote" class="form-control  @error('NewNote') is-invalid @enderror" id="" cols="10"
                                 placeholder="تێبینی بەکارهێنان" rows="5"></textarea>
                         </div>
                         <!-- /.input group -->
                     </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">  <i class="nav-icon fas fa-times"></i> داخستن</button>
                     <button  class="btn btn-warning" id="close"  >
                         <i class="nav-icon fas fa-save"></i> گۆرانکاری</button>
                   </div>
                 </div>
               </form>
               </div>
             </div>
            @endforeach
           
        </tbody>
    </table>

   <!-- Modal -->

  
</div>
