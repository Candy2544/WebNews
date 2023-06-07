<x-app-layout>
    <div class="container">
        <div class="py-12">
            
            <div class="card">
                <div class="card-header">แบบฟอร์ม</div>
                <div class="card-body">
                    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data"> <!-- ตารางนี้จะทำการ action ไปที่ route addDepartment เป็นการส่งแบบ post  -->
                        @csrf
                        <div class="from-group">
                            <label for="department_name">ข่าว</label>
                            <input type="text" class="form-control" name="subject">
                            <label for="department_name">เนื้อหา</label>
                            <input type="text" class="form-control" name="content">
                            <label for="department_name">ผู้เขียน</label>
                            <input type="text" class="form-control" name="other">
                        </div>

                        <!-- image -->
                        <input type="file" name="image">

                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <select name="dropdown" id="dropdown">
                                @foreach($type as $row)
                                <option value="{{$row -> id_type}}">{{$row -> type}}</option>
                                @endforeach
                            </select>

                        </div>
                        <input type="submit" value="บันทึก" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>