 <div class="-mx-3 mb-8 flex flex-wrap">
     <div class="w-full max-w-full flex-none px-3">
         <ol
             class="flex w-full items-center space-x-2 rounded-2xl border border-gray-200 bg-white px-6 py-4 text-sm font-medium text-gray-500 shadow-xl dark:border-slate-850 dark:bg-slate-850 dark:text-gray-400 dark:shadow-dark-xl sm:space-x-4 sm:text-base">
             @for ($i = 1; $i <= 5; $i++)
                 <li>
                     @if ($step == $i)
                         <a href="#" class="flex items-center text-teal-400 dark:text-teal-400">
                             <span
                                 class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-teal-400 bg-teal-400 text-base text-white dark:border-teal-400">
                                 {{ $i }}
                             </span>
                             <div class="tracking-wide">
                                 <span class="block">
                                     {{ $data->step_name[$i] }}
                                 </span>
                                 <span
                                     class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-gray-400 to-slate-400 py-1.4 px-2.5 text-center align-baseline text-xxs font-bold uppercase leading-none tracking-wider text-white">
                                     {{ $data->step_date[$i] }}

                                 </span>

                             </div>
                             @if ($i != 5)
                                 <svg aria-hidden="true" class="ml-2 h-4 w-4 sm:ml-4" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M13 5l7 7-7 7M5 5l7 7-7 7">
                                     </path>
                                 </svg>
                             @endif
                         </a>
                     @else
                         <a href="#" class="flex items-center text-gray-400 dark:text-gray-400">
                             <span
                                 class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-gray-400 bg-gray-400 text-base text-white dark:border-gray-400">
                                 {{ $i }}
                             </span>
                             <div class="tracking-wide">
                                 <span class="block">
                                     {{ $data->step_name[$i] }}
                                 </span>
                             </div>
                             @if ($i != 5)
                                 <svg aria-hidden="true" class="ml-2 h-4 w-4 sm:ml-4" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M13 5l7 7-7 7M5 5l7 7-7 7">
                                     </path>
                                 </svg>
                             @endif
                         </a>
                     @endif
                 </li>
             @endfor
         </ol>
     </div>
 </div>

