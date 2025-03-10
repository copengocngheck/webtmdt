<html>
<head>

</head>
<style>
    table{
        border-collapse: collapse;

    }
    table th td {
        border: 1px solid black;
    }
</style>
<body>

    <table border ="1";>
        <tr>
            <th>Mã thể loại</th>
            <th>Tên thể loại</th>
        </tr>
            @foreach($sach as $row)
        <tr>
            <td>{{$row->tieu_de}}</td>
            <td>{{$row->tac_gia}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>