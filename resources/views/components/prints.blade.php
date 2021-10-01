<div>
    <div  class="w-96  bg-white shadow-xl w-full m-auto z-10" style="width: 412px; height: auto;">
        <div id="receipt-content" class="text-left w-full text-sm p-6 ">
          <div class="text-center">
            <h1 class="items-center" style="font-family: sans-serif">دکتۆر مەحمەد</h1>
            <span style="font-size:10px" class=" text-center">سلێمانی ئۆرزی-نزیك سابونکەران</span>
            <span class=" items-center w-full "><p>0750 105 51 06</p></span>
            <span class=" items-center w-full "><p>{{$LastDate->created_at->format('Y-m-d')}} </p></span>
    
              <div class="items-center w-full "><p>ژمارەی پسوڵە :{{$LastDate->invoice_id}}</p></div>
          </div>
          <div class="flex mt-4 text-xs">
            <div class="flex-grow">Powerred By: <span x-text="receiptNo">Hoshmand Kamal</span></div>
            <div class="space-x-1">{{$LastDate->created_at->format('Y/m/d')}} <span>{{$LastDate->created_at->format(' m.d')}}</span></div>
          </div>
          <hr class="my-2">
          <div>
            <table class=" text-xs w-full">
              <thead class="">
                <tr class="border border-gray-200 ">
                  <th class="py-1 mx-2 ">ناوی نەخۆش</th>
                  <th class="py-1 mx-3  text-center">جۆر</th>
                  <th class="py-1 mx-3 text-center">ژ</th>
    
                  <th class="py-1 mx-3  ">تێبینی</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($invoices as $invoice)
                    
              
                  <tr class="border border-gray-200 ">
                    <td class="py-2 border border-gray-200  mx-5 px-1  truncate">{{$invoice->patinet_name}}</td>
                    <td class="py-2 border border-gray-200 mx-5 px-1 text-left">{{$invoice->types}}</td>
                    <td class="py-2 border border-gray-200 mx-5 px-1" >{{$invoice->count}}</td>
                    <td class="py-2 border border-gray-200 mx-5 px-1 text-justify  "> <p >{{$invoice->note}}.</p>
                      </td>
                  </tr>
                  @endforeach
                  
            
             
              
                </tbody>
            </table>
            <div class="p-4 w-full  mt-3 items-center text-center">
              <span  style="font-size:12px">بە هیوای تەندروست باشتر</span>
            </div>
          </div>
          <hr class="my-2 font-weight-300">
          <div class="text-muted w-full  mt-3 text-left ">
            <span  style="font-size:10px" class="text-muted font-bold">Powerred By ZingSoft Co Database 0751 131 95 37</span>
          </div>
        </div>
      
      </div>
</div>
