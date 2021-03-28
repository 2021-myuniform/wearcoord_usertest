@if ($user->gender == 'male')
<input type="hidden" name="category" value="208025">
@elseif ($user->gender == 'female')
 <input type="hidden" name="category" value="565819">
@endif

