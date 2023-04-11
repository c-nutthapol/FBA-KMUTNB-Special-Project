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
                    class="btn text-base  text-white from-blue-500 to-violet-500 w-100 tracking-widest"
                    wire:loading.attr="disabled">
                    {{-- loading --}}
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin hidden"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"
                        wire:loading.remove.class="hidden">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="#E5E7EB" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentColor" />
                    </svg>
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
