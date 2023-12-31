@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    {{-- Counselling --}}
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Counselling Request</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Student Id</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>Faculty</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($counsellings as $counselling)
                                    <tr>
                                        <td>{{ $counselling->studentId }}</td>
                                        <td>{{ $counselling->day }}</td>
                                        <td>{{ $counselling->time }}</td>
                                        <td>{{ $counselling->faculty }}</td>
                                        <td>{{ $counselling->status }}</td>
                                        <td>
                                            <form class="forms-sample" method="POST" action=" {{ route('admin.counselling.quickUpdate') }} ">
                                                @csrf
                                                <input name="id" type="text" value="{{ $counselling->id }}" hidden>
                                                <div class="mb-2">

                                                    <select name="status" class="form-select" id="status">
                                                        <option>pending</option>
                                                        <option>accepted</option>
                                                        <option>rejected</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-inverse-warning me-2">Update Counselling</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
