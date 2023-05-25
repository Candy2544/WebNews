<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Wellcome , {{Auth::user()->name}}
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">'
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">เรื่อง</th>
                            <th scope="col">เนื้อหา</th>
                            <th scope="col">ชื่อคนเขียน</th>
                            <th scope="col">สร้างเมื่อ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($info as $row)
                        <tr>
                            <td>{{$i++}}</td>
                            <?// เอาข้อมูลมาจาก row จาก คอลัม name?>
                            <td>{{$row -> id_info}}</td>
                            <?// เอาข้อมูลมาจาก row จาก คอลัม title?>
                            <td>{{$row -> title}}</td>
                            <?// เอาข้อมูลมาจาก row จาก คอลัม content?>
                            <td>{{$row -> content}}</td>
                            <?// เอาข้อมูลมาจาก row จาก คอลัม other_name?>
                            <td>{{$row -> other_name}}</td>
                            <td>{{Carbon\Carbon::parse($row -> created_at -> diffForHumans())}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</x-app-layout>