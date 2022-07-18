<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <h5>StaffBranch</h5>
    <table border="1">
       <tr>
           <td>StaffNo</td>
           <td>sName</td>
           <td>position</td>
           <td>salary</td>
           <td>branchNo</td>
           <td>bAddress</td>
        </tr>
    @foreach($staffbranch as $data)
 

        <tr>
           <td>{{$data['staffNo']}}</td>
           <td>{{$data['sname']}}</td>
           <td>{{$data['position']}}</td>
           <td>{{$data['salary']}}</td>
           <td>{{$data['branchNo']}}</td>
           <td>{{$data['bAddress']}}</td>
           </tr>
           @endforeach
    </table>
    <br>
    <h5>Staff</h5>
    <table border="1">
       <tr>
           <td>StaffNo</td>
           <td>sName</td>
           <td>position</td>
           <td>salary</td>
           <td>branchNo</td>
        </tr>
    @foreach($staff as $data)
  

        <tr>
           <td>{{$data['staffNo']}}</td>
           <td>{{$data['sname']}}</td>
           <td>{{$data['position']}}</td>
           <td>{{$data['salary']}}</td>
           <td>{{$data['branchNo']}}</td>
           </tr>
           @endforeach
    </table>
    <br>
    <h5>Branch</h5>
    <table border="1">
       <tr>
           <td>branchNo</td>
           <td>bAddress</td>
        </tr>
    @foreach($branch as $data)
 

        <tr>
           <td>{{$data['branchNo']}}</td>
           <td>{{$data['bAddress']}}</td>
           </tr>
           @endforeach
    </table>
    
</fieldset>
</body>
</html>