<div class="mt-10">
    <ol class="">
        @foreach ($this->tasks as $task)
            <li class="flex justify-between flex-auto w-2/3">
                <input type="checkbox" name="" id="">
                <a href="{{ route('todo') }}" wire:navigate>{{ $task->task }}</a>
                <span>{{ $task->created_at }}</span>
                <span>⭐</span>
            </li>
        @endforeach
    </ol>

    <div>
        <div class="relative">
            <div class="fixed right-5 bottom-24 ">
                <div>
                    <span class="text-green-600 py-1 italic">A new sesssion</span>
                </div>
                <div>
                    <form wire:submit="addTask" class="flex flex-col w-60 h-auto">
                        <div>
                            <label for="task">What's your task?</label>
                            <input type="text" wire:model.live="task" class="text-black mt-1 px-31 py-1 bg-white border shadow-sm border-blue-950 placeholder-gray-800 focus:outline-none focus:border-blue-900 focus:ring-blue-950 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Enter a task">
                        </div>
                        <div>
                            <label for="date">What's your task?</label>
                            <input type="date" wire:model.live="date" class="text-black mt-1 px-1 py-1 bg-white border shadow-sm border-blue-950 placeholder-gray-800 focus:outline-none focus:border-blue-900 focus:ring-blue-950 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Enter a task">
                        </div>
                        <div>
                            <label for="time">What's your task?</label>
                            <input type="time" wire:model.live="time" class="text-black mt-1 px-1 py-1 bg-white border shadow-sm border-blue-950 placeholder-gray-800 focus:outline-none focus:border-blue-900 focus:ring-blue-950 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Enter a task">
                        </div>
                        <div>
                            <h3>Add to list</h3>
                            <select name="" id="" class="text-gray-900 w-full p-1">
                                <option value="" class="p-1">Default</option>
                                <option value="" class="p-1">Personal</option>
                                <option value="" class="p-1">Shopping</option>
                                <option value="" class="p-1">Wishlist</option>
                                <option value="" class="p-1">Work</option>
                            </select>
                        </div>

                        <button class="bg-gradient-to-r from-black to-blue-950 p-1 mt-2 ring-1 hover:bg-gradient-to-l active:bg-blue-800 focus:outline-none focus:ring-blue-300" type="submit">ADD TASK</button>
                    </form>
                </div>
                <b class="bg-white rounded-full p-2 fixed right-5 ">
                    +
                </b>
            </div>
        </div>
    </div>

</div>
