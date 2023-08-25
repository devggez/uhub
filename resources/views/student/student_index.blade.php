@extends('student.student_dashboard')
@section('student')
    <div class="grid grid-cols-4 gap-12 mx-32 my-8">

        <div class="overflow-x-auto col-span-2 bg-neutral-100 rounded-md px-4">
            <h2 class="p-4">Requisition History</h2>
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Requisitions ID</th>
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requisitions as $requisition)
                        <tr>
                            <td>{{ $requisition->requisitionsId }} </td>
                            <td>{{ $requisition->bookID }} </td>
                            <td>{{ $requisition->bookName }} </td>
                            <td>{{ $requisition->status }} </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="overflow-x-auto col-span-2 bg-neutral-100 rounded-md px-4">
            <h2 class="p-4">Counselling History</h2>
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Faculty</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($counsellings as $counselling)
                        <tr>
                            <td>{{ $counselling->faculty }}</td>
                            <td>{{ $counselling->day }}</td>
                            <td>{{ $counselling->time }}</td>
                            <td>{{ $counselling->status }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
