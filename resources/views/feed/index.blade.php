<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Wellcome , {{Auth::user()->name}}
        
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container">
            <div class="row">
                {{session("success")}}
                <table class="table">
                    <tbody>
                            @foreach($getinfo as $row)
                                @include('components.card-component',[
                                'title' => 'เรื่อง' . " " . $row -> title,
                                'content' =>'เนื้อหา' . " " . $row -> content,
                                'other_name' => 'ผู้แต่ง' . " " . $row -> other_name,   
                                'image' => $row -> image,
                                'create_at' =>'โพสเมื่อ' . " " . Carbon\Carbon::parse($row -> created_at -> diffForHumans())])
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>