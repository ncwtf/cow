<html>
<head>
    <title>奶牛管理系统</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<table class="table table-striped">
    <caption>奶牛管理</caption>
    <thead>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>颜色</th>
            <th>爱好</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cows as $cow)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$cow->name}}</td>
                <td>{{$cow->sex}}</td>
                <td>{{$cow->age}}</td>
                <td>{{$cow->color}}</td>
                <td>{{$cow->hobby}}</td>
                <td>
                    <a href="javascript:;" class="btn btn-info" name="setCow"
                       u_id="{{$cow->id}}" u_name="{{$cow->name}}" u_sex="{{$cow->sex}}"
                       u_age="{{$cow->age}}" u_color="{{$cow->color}}" u_hobby="{{$cow->hobby}}">修改</a>
                    <a href="delete?id={{$cow->id}}" class="btn btn-warning">删除</a>
                </td>
            </tr>
        @endforeach
        @include('addCow')
    </tbody>
</table>
<script type="application/javascript">
    $("a[name='setCow']").click(function () {
        let c = $(this);
        $("#id").val(c.attr("u_id"));
        $("#name").val(c.attr("u_name"));
        $("#sex").val(c.attr("u_sex"));
        $("#age").val(c.attr("u_age"));
        $("#color").val(c.attr("u_color"));
        $("#hobby").val(c.attr("u_hobby"));
    })
</script>
</body>
</html>
