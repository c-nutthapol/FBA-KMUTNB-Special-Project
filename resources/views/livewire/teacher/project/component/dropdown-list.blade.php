
<div id="dropdown"
    class="z-10 hidden w-auto divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-slate-850"
    wire:ignore.self>
    <ul class="py-2 text-gray-700 dark:text-gray-200"
        aria-labelledby="dropdownDefaultButton">
        @if($project != null)
            @forelse ($project->files as $item_file)
                <li>
                    @if ($item_file->is_link == 0)
                        <a href="/storage/{{ $item_file->path ?? '' }}" download
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-800 dark:hover:text-white">{{ $item_file->title }}</a>
                    @else
                        <a href="{{ $item_file->path ?? '' }}" target="_blank"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-800 dark:hover:text-white">{{ $item_file->title }}</a>
                    @endif
                </li>
            @empty
                <li>
                    ไม่พบไฟล์
                </li>
            @endforelse
        @else
        <li>
            ไม่ข้อมูล
        </li>
        @endif
    </ul>
</div>