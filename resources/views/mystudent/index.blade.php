
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ADD</a><br><br>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

<p>{{ $teacher_class->teacher_class_id }}</p>

                       <table class="min-w-full divide-y divide-gray-200">
                           <thead class="bg-gray-50">
                           <tr>
                               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course Year & Section</th>
{{--                               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>--}}
{{--                               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Upload By</th>--}}
{{--                               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>--}}
                               <th scope="col" class="relative px-6 py-3">
                                   <span class="sr-only">Edit</span>
                               </th>
                               <th scope="col" class="relative px-6 py-3">
                                   <span class="sr-only">Delete</span>
                               </th>
                           </tr>
                           </thead>
                           <tbody class="bg-white divide-y divide-gray-200">
                           @forelse($student_class as $student)
                               <tr>

                                   <td class="px-6 py-4 whitespace-nowrap" >{{ $student->firstname }}{{ $student->lastname }}</td>
                                   <td class="px-6 py-4 whitespace-nowrap">{{ $student->classname }}</td>
                                   <td><input type="hidden" value="{{ $student->student_id }}"></td>
                                   <td><select name="add_student" class="span12">
                                           <option></option>
                                           <option value="Add">Add</option>
                                       </select></td>

                           @empty
                               <tr>
                                   <td>
                                       No records
                                   </td>
                               </tr>

                               </tr>
                           @endforelse


                           </tbody>
                       </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

