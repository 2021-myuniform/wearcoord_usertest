@if ($user->gender == 'male')
<select name="category" id="" required>
    <option value="">カテゴリーを選択</option>
    <option value="508782">セットアップ</option>
    <option value="565925">アウター</option>
    <option value="508759">Tシャツ</option>
    <option value="508762">ポロシャツ</option>
</select>
@elseif ($user->gender == 'female')
<select name="category" id="" required>
    <option value="">カテゴリーを選択</option>
    <option value="508831">セットアップ</option>
    <option value="565927">アウター</option>
    <option value="508803">Tシャツ</option>
    <option value="508809">ポロシャツ</option>
</select>
@endif

