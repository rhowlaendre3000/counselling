@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="form-group">
<label for="programme">Programme</label><em>*</em>
<select type="text" name="programme" class="form-control" id="title" required>
    <option> {{ $user->programme->programmename }}</option>
</select>
</div>


<div class="form-group">
<label for="name">Name</label><em>*</em>
<input type="text" name="coursename" class="form-control" id="name" required>
</div>

<div class="form-group">
<label for="type">Course Code</label><em>*</em>
<input type="text" name="coursecode" class="form-control" id="initials">
</div>

<div class="form-group">
<label for="type">Course Lecturer</label><em>*</em>
<input type="text" name="lecturer" class="form-control" id="initials">
</div>


<div class="form-group">
    <input type="submit" class="btn btn-success" value="submit">
</div>



