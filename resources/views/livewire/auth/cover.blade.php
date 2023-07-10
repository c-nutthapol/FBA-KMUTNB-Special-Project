<div
class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">

    @if ($cover)
    <div class="relative flex flex-col justify-center h-full bg-cover bg-right-top px-24 m-4 overflow-hidden w-full rounded-xl"
        style="background-image: url('/storage/{{ $cover->img }}')">
        <span
            class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-70"></span>
        <h4 class="z-20 mt-12 font-bold text-white">"คณะบริหารธุรกิจ"
        </h4>
        <p class="z-20 text-white ">
            มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ
        </p>
    </div>
    @else
    <div class="relative flex flex-col justify-center h-full bg-cover bg-right-top px-24 m-4 overflow-hidden w-full rounded-xl"
        style="background-image: url('{{ asset('assets/img/bg/bg-login-1.jpg') }}')">
        <span
            class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-70"></span>
        <h4 class="z-20 mt-12 font-bold text-white">"คณะบริหารธุรกิจ"
        </h4>
        <p class="z-20 text-white ">
            มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ
        </p>
    </div>
    @endif

</div>
