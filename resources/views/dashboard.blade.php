<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Wellcome , {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">อีเมล</th>
                            <th scope="col">เริ่มใช้งานระบบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($user as $row) 
                        <tr>
                            <td>{{$i++}}</td>
                            <?// เอาข้อมูลมาจาก row จาก คอลัม name?>
                            <td>{{$row -> name}}</td>
                            <?// เอาข้อมูลมาจาก row จาก คอลัม email?>
                            <td>{{$row -> email}}</td>
                            <td>{{Carbon\Carbon::parse($row -> created_at -> diffForHumans())}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</x-app-layout>