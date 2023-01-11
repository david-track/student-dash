<x-app-layout>
    
    <div class="grid grid-cols-3 gap-4">
        <div class="flex-col col-span-1 row-span-1 bg-gray-200 h-72 flex items-center justify-center">
            Item 1
            @foreach ($students as $student)
                <p>{{$student->first_name}} {{$student->last_name}} </br> 
                {{$student->email}} 
                </p>
            @endforeach
        </div>
        <div class="col-span-1 row-span-1 bg-gray-200 h-72 flex items-center justify-center">Item 2</div>
        <div class="col-span-1 row-span-1 bg-gray-200 h-72 flex items-center justify-center">Item 3</div>
        <div class="col-span-1 row-span-1 bg-gray-200 h-72 flex items-center justify-center">Item 4</div>
        <div class="col-span-1 row-span-1 bg-gray-200 h-72 flex items-center justify-center">Item 5</div>
        <div class="col-span-1 row-span-1 bg-gray-200 h-72 flex items-center justify-center">
            Item 6
            <form method="POST" action="/student/create">
                @csrf
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name"/>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name"/>
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email"/>
                <input type="submit" value="Submit"/>
            </form>

        </div>
    </div>


</x-app-layout>
