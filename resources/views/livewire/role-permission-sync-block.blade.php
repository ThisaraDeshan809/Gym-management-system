<div class="flex-auto p-4">
    <ul class="flex flex-wrap w-full pl-0 mb-0 rounded-lg">
        @foreach ($permissions as $permission)
            <li class="relative block lg:w-4/12  px-1 py-2 border-0 rounded-t-lg text-inherit">
                <div class="min-h-6 mb-0.5 block pl-0">
                    <input
                        wire:click="togglePermission({{ $permission->id }})"
                        type="checkbox"
                        id="{{ 'permission_' . $permission->id }}"
                        class="mt-0.5 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                        {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                    >
                    <label
                        class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer text-sm text-ellipsis whitespace-nowrap text-slate-500 dark:text-white/80"
                        for="{{ 'permission_' . $permission->id }}"
                    >
                        {{ $permission->name }}
                    </label>
                </div>
            </li>
        @endforeach
    </ul>
</div>
