<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    @include("admin.navbar")

    <section align="left">
        <br>
        <h1><u>Reservation Details</u></h1>

        <table class="content-table">
            <thead>
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Phone</th>
                    <th style="padding: 30px">Date</th>
                    <th style="padding: 30px">Time</th>
                    <th style="padding: 30px">Messsage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)

                <tr class="active-row">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td width="20px">{{$data->message}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </section>
    </div>

    @include("admin.adminscript")

</body>

</html>