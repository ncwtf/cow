<form action="save" method="post">
    <tr>
        <td>
            @
            <input type="hidden" id="id" name="id">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
        </td>
        <td>
            <input type="text" id="name" name="name" class="form-control" maxlength="20" placeholder="姓名">
        </td>
        <td>
            <select class="form-control" id="sex" name="sex">
                <option value="公">公</option>
                <option value="母">母</option>
            </select>
        </td>
        <td>
            <input type="number" id="age" name="age" class="form-control" min="0" max="20" placeholder="年龄">
        </td>
        <td>
            <input type="text" id="color" name="color" class="form-control" maxlength="10" placeholder="颜色">
        </td>
        <td>
            <input id="hobby" name="hobby" class="form-control" maxlength="20" placeholder="爱好">
        </td>
        <td>
            <button type="submit" class="btn btn-success">保存</button>
        </td>
    </tr>
</form>
