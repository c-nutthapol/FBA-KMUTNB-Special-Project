<div
    class="relative flex flex-col flex-wrap min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
    <div class="p-6 pb-0 mb-0">
        <h4 class="font-bold text-3xl dark:text-white/80">ลงชื่อเข้าใช้</h4>
        <p class="mb-0 text-lg dark:text-white/70">ระบบโครงงานพิเศษ</p>
    </div>
    <div class="flex-auto p-6">
        {{-- If there is an error, enter the Error class. = label class='... error', input class="... error"  --}}
        <form role="form" wire:submit.prevent="submit">
            <div class="mb-4">
                <label for="username" class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-1">
                    ชื่อผู้ใช้งาน
                </label>
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                    <span
                        class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-3 text-center font-normal text-slate-500 transition-all">
                        <i class="bi bi-person-fill text-lg"></i>
                    </span>
                    <input type="text" class="pl-9 input py-3 text-base" placeholder="กรุณากรอกชื่อผู้ใช้งาน"
                        id="username" wire:model.defer="username" />
                </div>
                @error('username')
                    <span class="block text-rose-600 tracking-wide text-sm mt-1 ml-2">{{ $message }}</span>
                @enderror

            </div>
            <div>
                <label for="password" class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-1">
                    รหัสผ่าน
                </label>
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                    <span
                        class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-3 text-center font-normal text-slate-500 transition-all">
                        <i class="bi bi-lock-fill text-lg"></i>
                    </span>
                    <input type="password" class="pl-9 input py-3 text-base" placeholder="กรุณากรอกรหัสผ่าน"
                        id="password" wire:model.defer="password" />
                </div>
                @error('password')
                    <span class="block text-rose-600 tracking-wide text-sm mt-1 ml-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="text-center block mt-8">
                <button type="submit"
                    class="btn text-base  text-white from-blue-500 to-violet-500 w-100 tracking-widest">
                    เข้าสู่ระบบ
                </button>
            </div>
        </form>
    </div>
    <div class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
        <p class="mx-auto mb-2.5 leading-normal text-sm dark:text-white/80 tracking-wide">ดาวน์โหลดเอกสาร
            <a href="#"
                class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">
                คลิก
            </a>
        </p>
        <p class="mx-auto leading-normal text-sm dark:text-white/80 tracking-wide">ตารางดำเนินการ
            <a href="#"
                class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">
                คลิก
            </a>
        </p>
    </div>
</div>
