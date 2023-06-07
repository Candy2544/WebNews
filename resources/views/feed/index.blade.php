<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Wellcome , {{Auth::user()->name}}
        
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container">
            <div class="row">'
                {{session("success")}}
                <table class="table">
                    <tbody>
                        @php($i=1)
                        @foreach($getinfo as $row)
                        @include('components.card-component',['title' => $row -> title,'content' => $row -> content,
                        'other_name' => $row -> other_name,'create_at' => Carbon\Carbon::parse($row -> created_at -> diffForHumans())])
                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>