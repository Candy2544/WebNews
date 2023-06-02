<x-app-layout>
    <div class="container">
    <div class="py-12">
        @if(session("sucess"))
        <div class="alert-success">{{session('sucess')}}</div>
        @endif
        <div class="card">
            <div class="card-header">แบบฟอร์ม</div>
            <div class="card-body">
                <form action="{{route('upload')}}" method="post"> <!-- ตารางนี้จะทำการ action ไปที่ route addDepartment เป็นการส่งแบบ post  -->
                    @csrf
                    <div class="from-group">
                        <label for="department_name">ข่าว</label>
                        <input type="text" class="form-control" name="subject">
                        <label for="department_name">เนื้อหา</label>
                        <input type="text" class="form-control" name="content">
                        <label for="department_name">ผู้เขียน</label>
                        <input type="text" class="form-control" name="other">
                    </div>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            ประเภท
                        </button>

                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item"></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item">Separated link</a></li>
                        
                        </ul>
                    </div>
                    <input type="submit" value="บันทึก" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>


</x-app-layout>