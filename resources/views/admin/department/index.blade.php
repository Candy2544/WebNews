<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            This is Department page
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">'
                <div class="col-md-3" >
                    @if(session("sucess"))
                        <div class="alert-success">{{session('sucess')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">ข้อมูลแผนก</div>
                         {{$department}}
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="card">
                        <div class="card-header" >แบบฟอร์ม</div>
                            <div class="card-body">
                                <form action="{{route('addDepartment')}}" method="post">
                                    @csrf
                                    <div class="from-group">
                                        <label for="department_name">ตำแหน่ง</label>
                                        <input type="text" class="form-control" name="department_name">
                                    </div>
                                    @error('department_name')
                                    <div class="my-2">
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
    </div>
</x-app-layout>