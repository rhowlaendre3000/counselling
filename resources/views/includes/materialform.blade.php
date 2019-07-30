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
<label for="title">title : </label><em>*</em>
<input type="text" name="title" class="form-control" id="title" required>
</div>

<div class="form-group">
<label for="course">Course : </label><em>*</em>

<select class=" form-control" name="course">
@foreach($user->programme->course as $courses)
    <option>{{ $courses->coursetitle }}</option>
    @endforeach
</select>


</div>

<div class="form-group">
<label for="type">File Upload :</label><em>*</em>
<input type="file" name="file" class="form-control-file" id="file">
</div>


<div class="form-group">
<label for="type">image Upload</label><em>*</em>
<input type="file" name="image" class="form-control-file" id="image">
</div>


<div class="form-group">
<label for="type">Description</label><em>*</em>
<textarea type="" name="description" class="form-control" id="description"></textarea>
</div>


<div class="form-group">
    <input type="submit" class="btn btn-success" value="submit">
</div>

 </form>


