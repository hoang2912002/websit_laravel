<h1>
    Đây là danh sách sinh viên
</h1>
<a href="{{route('create')}}">
    {{-- Tức là href ở đây sẽ gọi đến route có tên là create rồi lấy địa chỉ của nó để gọi đến file create --}}
    Thêm
</a>
<table border="1" style="width: 100%;">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Birthday</td>
        <td>Gender</td>
    </tr>
    <tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->full_Name1}}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->Gender_Name }}</td>

            </tr>
        @endforeach
    </tr>
</table>
