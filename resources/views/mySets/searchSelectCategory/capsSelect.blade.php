@if ($user->gender == 'male')
<input type="hidden" name="category" value="506269">
@elseif ($user->gender == 'female')
 <input type="hidden" name="category" value="565818">
@endif

