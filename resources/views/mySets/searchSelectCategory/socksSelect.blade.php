@if ($user->gender == 'male')
<input type="hidden" name="category" value="508802">
@elseif ($user->gender == 'female')
 <input type="hidden" name="category" value="508853">
@endif

