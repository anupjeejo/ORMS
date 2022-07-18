<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <x-app-layout>
    </x-app-layout>
    @include("admin.navbar")

    <section align="left">
        <table class="content-table">
            <thead>
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr class="active-row">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    @if($data->usertype=="0")
                    <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                    @else
                    <td>Not Allowed</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    @include("admin.adminscript")

</body>

</html>