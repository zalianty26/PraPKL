<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Post
        </legend>
        <br>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Title</td>
                <td>Content</td>
            </tr>
        <?php $no=1 ?>
        @foreach ($post as $data)
        <tr>
        <td>{{$no++}}</td>
        <td>{{$data['title']}}</td>
        <td>{{$data->content}}</td>
        @endforeach
        </table>
    </fieldset>
</body>
</html>