<div class="mx-20">
    <div class=" flex sm:flex-row flex-col">
  
        <div  class="p-2 md:w-40 ">
            <div class="flex items-center p-2  rounded-lg shadow-xs cursor-pointer hover:bg-orange-500 hover:text-gray-100" style="background-color:lightsalmon ">
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                  </svg>
              
                <div>
                  <p class=" text-xs font-medium ml-2 ">
                    ڕاپۆرت 
                  </p>
                  
                </div>
            </div>
        </div>
        
    </div>
    <div class=" shadow-md rounded my-2">
        <table class=" items-center w-full table-auto">
            @if ($Stocks->IsNotEmpty())
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ناوی نەخۆش</th>

                    <th class="py-3 px-6 text-left">ناوی دەرمان</th>
                    <th class="py-3 px-6 text-left">جۆری دەرمان</th>
                    <th class="py-3 px-6 text-left">ژمارەی دانە</th>

                    <th class="py-3 px-6 text-left">ژمارەی پسوڵە</th>
                    <th class="py-3 px-6 text-left">بەرواری زیادکردن</th>


                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($Stocks as $stock)


                <tr class="border-b border-gray-200 hover:bg-gray-100 ">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="mr-2">
                                <img class="img-fluid w-6 h-7 " src="{{asset('assets/img/patinets.svg')}}"
                                    alt="">

                            </div>
                            <span class="font-medium">{{$stock->patinet_name}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->name_medicine}} </span>
                        </div>
                    </td>

                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->types}} </span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->count}} </span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class=" items-center">

                            <span>{{$stock->invoice_id}} </span>
                        </div>
                    </td>

                    <td class="py-3 px-6 text-left">
                        <div class=" truncate items-center">

                            <span>{{$stock->created_at->format("Y-m-d")}} </span>
                        </div>
                    </td>

              
                 
                </tr>

                @endforeach


            </tbody>

            @else
            <a class="flex items-center justify-center mt-2 text-red-400 mb-2">هیچ داتایەك نەدۆزرایەوە</a>
            @endif
        </table>
        <div class="bg-gray-200 text-gray-600  px-2 py-2 uppercase text-sm leading-normal">
            <span>{{$Stocks->links()}}</span>
        </div>
    </div>

</div>
