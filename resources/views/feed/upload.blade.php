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
                            Action
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <input type="submit" value="บันทึก" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

<form>
    <div class="mb-3">
        <label class="form-label" for="subject">ข่าว</label>
        <input type="text" class="form-control" id="exampleInputEmail1">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-app-layout>