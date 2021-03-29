@if ($user->gender == 'male')
<select name="category" id="" required>
    <option value="">カテゴリーを選択</option>
    <option value="565926">ロング</option>
    <option value="508772">ハーフ・ショート</option>
</select>
@elseif ($user->gender == 'female')
<select name="category" id="" required>
    <option value="">カテゴリーを選択</option>
    <option value="565928">ロング</option>
    <option value="508820">ハーフ・ショート</option>
    <option value="565816">スカート・スコート</option>
</select>
@endif

