<!DOCTYPE html>
<html>
    <body>
        <h1 class="text-center font-weight-bold">STARDRINK COMPETITION - TOP 10</h1>
        <table>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Entry</th>
            </tr>
            <?php $no = 1; ?>
            @foreach ($top10 as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->first_name}} {{$data->last_name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->entry}}</td>
                </tr>
            @endforeach
        </table> 
    </body>
</html>
