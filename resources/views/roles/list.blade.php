<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Roles') }}
            </h2>
            <a href="{{route('roles.create')}}" class="bg-slate-700 text-sm rounded-md text-white px-3 py-2">Create</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <x-message></x-message>
           
         <table class="w-full">
            <thead class="bg-gray-50">
                <tr class="border-b">
                    <th class="px-6 py-3 text-left" width="60">#</th>
                    <th class="px-6 py-3 text-left">Name</th>
                    <th class="px-6 py-3 text-left"width="180">Created</th>
                    <th class="px-6 py-3 text-center"width="180">Action</th>
                </tr>
            </thead>
           
         </table>
         <div class="my-3">
            {{-- {{$permissions->links()}} --}}
         </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="text/javascript">
        function deletePermission(id){
          if(confirm("Are you sure you want to delete?")){
             $.ajax({
                url: '{{route("permissions.destroy")}}',
                type: 'delete',
                data:{id:id},
                dataType: 'json',
                headers:{
                    'x-csrf-token':'{{csrf_token()}}'
                },
                success: function(response){
                window.location.href = '{{route("roles.index")}}';
                }
             });
          }
        }
        </script>

    </x-slot>
</x-app-layout>
