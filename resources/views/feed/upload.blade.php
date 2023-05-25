<!--<div class="py-12">
        <div class="container">
            <div class="row">
                </div>
                <div class="col-md-8" >
                @if(session("sucess"))
                        <div class="alert-success">{{session('sucess')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header" >แบบฟอร์ม</div>
                            <div class="card-body">
                                <form action="{{route('addInfo')}}" method="post">--> <!-- ตารางนี้จะทำการ action ไปที่ route addDepartment เป็นการส่งแบบ post  -->
<!-- @csrf
                                    <div class="from-group">
                                        <label for="department_name">ข่าว</label> 
                                        <input type="text" class="form-control" name="info_news">
                                    </div>
                                    @error('department_name') --> <!-- department_name คือ ผมลัพท์ที่ส่งกลับมาจากหน้า departmentController function store() ตอนที่เอาข้อมูลที่พิมพ์ลงไปกรองแล้ว-->
<!-- <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
                                    <br>
                                        <input type="submit" value="บันทึก" class="btn btn-primary">
                                </form>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>-->

<div class="container">
    <div class="py-12">
        @if(session("sucess"))
        <div class="alert-success">{{session('sucess')}}</div>
        @endif
        <div class="card">
            <div class="card-header">แบบฟอร์ม</div>
            <div class="card-body">
                <form action="{{route('addInfo')}}" method="post"> <!-- ตารางนี้จะทำการ action ไปที่ route addDepartment เป็นการส่งแบบ post  -->
                    @csrf
                    <div class="from-group">
                        <label for="department_name">ข่าว</label>
                        <input type="text" class="form-control" name="subject">
                        <label for="department_name">เนื้อหา</label>
                        <input type="text" class="form-control" name="content">
                        <label for="department_name">ผู้เขียน</label>
                        <input type="text" class="form-control" name="other">
                    </div>
                    <input type="submit" value="บันทึก" class="btn btn-primary">
                </form>
                {{$info}}
            </div>
        </div>
    </div>
</div>