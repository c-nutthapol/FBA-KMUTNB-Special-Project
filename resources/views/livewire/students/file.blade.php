@php use Carbon\Carbon; @endphp
<div>
   <div class="-mx-3 flex flex-wrap">
      <div class="w-full max-w-full flex-none px-3">
         <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
               class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
               <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                  <i class="bi bi-file-earmark-medical-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
               </div>
               <h5 class="mb-0 tracking-wide dark:text-slate-300">
                  ประวัติการแนบไฟล์
               </h5>
            </div>
            <div class="flex-auto p-6">
               <div class="overflow-x-auto p-0">
                  <table
                     class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600">
                     <thead class="align-bottom">
                        <tr class="text-black dark:text-slate-300">
                           <th
                              class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                              ชื่อไฟล์
                           </th>
                           <th
                              class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                              วันที่แนบไฟล์
                           </th>
                           <th
                              class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                              แก้ไข
                           </th>
                           <th
                              class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                              ดาวน์โหลด
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @forelse ($this->Request as $file)
                           <tr>
                              <td
                                 class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                 <h6 class="mb-0 leading-normal dark:text-slate-300">
                                    {{ $file->title }}
                                 </h6>
                              </td>
                              <td
                                 class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                 <span class="inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                    <i class="bi bi-calendar2-week-fill"></i>
                                    {{ dateThai($file->created_at) }}
                                 </span>
                                 <span
                                    class="ml-2 inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                    <i class="bi bi-clock-fill"></i>
                                    {{ Carbon::parse($file->created_at)->format('H:i') }}
                                    น.
                                 </span>
                              </td>
                              <td
                                 class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                 <span>
                                    <label wire:click="$set('fId','{{ $file->id }}')">
                                       <input
                                          class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                                          id="file_input" wire:model="file" type="file">
                                    </label>
                                 </span>
                              </td>
                              <td
                                 class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                 <a href="/storage/{{ $file->path }}" download
                                    class="btn from-blue-500 to-violet-500 text-white">
                                    <div class="flex flex-row items-center gap-2">
                                       <i class="bi bi-download leading-0"></i>
                                       <span class="block">โหลดเอกสาร</span>
                                    </div>
                                 </a>
                              </td>
                           </tr>
                        @empty
                        @endforelse

                     </tbody>
                  </table>
               </div>
            </div>
         </div>

      </div>
   </div>
   <!-- View Modal -->
   {{--    <div id="viewModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" --}}
   {{--         class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full" --}}
   {{--         wire:ignore.self> --}}
   {{--        <div class="relative w-full h-full max-w-6xl md:h-auto"> --}}
   {{--            <!-- Modal content --> --}}
   {{--            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700"> --}}
   {{--                <!-- Modal header --> --}}
   {{--                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600"> --}}
   {{--                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-slate-300"> --}}
   {{--                        <i class="bi bi-eye leading-0"></i> ดูข้อเสนอแนะ --}}
   {{--                    </h3> --}}
   {{--                    <button type="button" --}}
   {{--                            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" --}}
   {{--                            data-modal-hide="viewModal"> --}}
   {{--                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" --}}
   {{--                             xmlns="http://www.w3.org/2000/svg"> --}}
   {{--                            <path fill-rule="evenodd" --}}
   {{--                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" --}}
   {{--                                  clip-rule="evenodd"></path> --}}
   {{--                        </svg> --}}
   {{--                        <span class="sr-only">ปิด</span> --}}
   {{--                    </button> --}}
   {{--                </div> --}}
   {{--                <!-- Modal body --> --}}
   {{--                <div class="p-6 space-y-6"> --}}
   {{--                    <div --}}
   {{--                        class="flex flex-col p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"> --}}


   {{--                        @forelse ($this->new_array as $key => $item) --}}
   {{--                            <div class="flex flex-row space-x-1"> --}}
   {{--                            <span --}}
   {{--                                class="block font-bold tracking-wide">{{$key+1}}. {{$item ?? ''}}</span> --}}
   {{--                            </div> --}}
   {{--                        @empty --}}
   {{--                            <div class="flex flex-row space-x-1"> --}}
   {{--                            <span --}}
   {{--                                class="block font-bold tracking-wide">-</span> --}}
   {{--                            </div> --}}
   {{--                        @endforelse --}}

   {{--                        --}}{{-- <div class="flex flex-row space-x-1"> --}}
   {{--                            <i class="bi bi-badge-ad-fill"></i> --}}
   {{--                            <span --}}
   {{--                                class="block font-bold tracking-wide">{{ $this->comments->where('id', $idProject)->first()?->masterSuggesstion->name }}</span> --}}
   {{--                        </div> --}}
   {{--                    </div> --}}

   {{--                    <div class="mt-3"> --}}
   {{--                        <label class="mb-2 text-sm font-bold tracking-wide dark:text-slate-300 dark:opacity-80"> --}}
   {{--                            ข้อเสนอแนะอื่น ๆ --}}
   {{--                        </label> --}}
   {{--                        <p class="mb-0 text-sm leading-relaxed tracking-wide dark:text-gray-300"> --}}
   {{--                            {{ $this->message ?? '-' }} --}}
   {{--                        </p> --}}
   {{--                    </div> --}}

   {{--                </div> --}}
   {{--                <!-- Modal footer --> --}}
   {{--                <div --}}
   {{--                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600"> --}}
   {{--                    <button data-modal-hide="viewModal" type="button" --}}
   {{--                            class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600"> --}}
   {{--                        ปิด --}}
   {{--                    </button> --}}
   {{--                </div> --}}
   {{--            </form> --}}
   {{--        </div> --}}
   {{--    </div> --}}

</div>
