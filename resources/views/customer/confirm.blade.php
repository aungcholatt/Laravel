@extends('mylayout.app')

@section('content')

<div class="row">
    <div class="col-md-6 offset-3">
        <div class="card m-3">
            <div class="card-header fs-3 text-center">
                 Confirm Edit
            </div>
            <div class="card-body fs-4 ms-5 ps-5">
                <div class="my-3">
                    <label>Name</lable>:<lable>{{$customer['name']}}</lable>
                </div>
                <div class="my-3">
                    <label>Email</label>:<lable>{{$customer['email']}}</lable>
                </div>
                <div class="my-3">
                    <label>Address</label>:<lable>{{$customer['address']}}</lable>
                </div>
                <div class="my-3">
                    <label>Phone</label>:<lable>{{$customer['phone']}}</lable>
                </div>
                <div class="my-3">
                    <label>Gender</label>:
                    <label>
                        @if($customer['gender']==1)
                        Male
                        @elseif($customer['gender']==2)
                        Female
                        @elseif($customer['gender']==0)
                        Others
                        @endif
                    </label>
                </div>
                <div class="my-3">
                    <label>DOB</label>:<lable>{{$customer['date_of_birth']}}</lable>
                </div>
            </div>
            <div class="card-footer">
            <a href="{{route('customer#edit',$customer['id'])}}"><button class="btn btn-sm bg-danger text-white">Cancel</button></a>
            <a href="{{route('customer#realUpdate')}}"><button class="btn btn-sm bg-dark text-white">Save</button></a>
            </div>
        </div>
    </div>
</div>
@endsection