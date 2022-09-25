<form action="{{ route('store')}}" method="POST">
    @csrf
    First name
    <input type="text" name="first_name">
    <br>
    Last name
    <input type="text" name="last_name">
    <br>
    Birthdate
    <input type="date" name="birthdate">
    <br>
    Gender
    <input type="radio" name="gender" value="1">Male
    <input type="radio" name="gender" value="0">Female
    <br>
    <button>Create</button>
</form>