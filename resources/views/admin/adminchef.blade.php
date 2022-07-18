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
    <div>
        <div>
            <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <ul>
                        <li>
                            <br>
                            <h2><em><u>Add Chef</u></em></h2>
                            <p>Enter details of new chef</p>
                        </li>
                    </ul>

                    <div>
                        <ul>
                            <li><label>
                                    Name:
                                </label>
                                <div>
                                    <span> <input style="color:blue" type="text" name="name" placeholder="Enter Name"
                                            required />
                                </div>
                            </li>
                    </div>

                    <div>
                        <ul>
                            <li><label>
                                    Speciality:
                                </label>
                                <div>
                                    <span> <input style="color:blue" type="text" name="speciality"
                                            placeholder="Enter Speciality" required />
                                </div>
                            </li>
                    </div>

                    <div>
                        <ul>
                            <li><label>
                                    Image:
                                </label>
                                <div>
                                    <span><input style="color:blue" type="file" name="image" required>
                                </div>
                            </li>
                    </div>

                    <ul>
                        <li><button
                                style="font-size:14px; padding:4px 10px; color: #fff; border:1px solid; border-color: #2F9EEC #1988D6 #1988D6; background: #2596e6;">
                                Save </button></li>
                    </ul>
                </div>
            </form>
        </div>

        <br>
        <br>

        <h3><u>Chef Data</u></h3>


        <table class="content-table">
            <thead>
                <tr>
                    <th style="padding:30px">Nmae</th>
                    <th style="padding:30px">Speciality</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action</th>
                    <th style="padding:30px">Action-2</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr class="active-row">
                    <td>{{$data->name}}</td>
                    <td>{{$data->speciality}}</td>
                    <td><img height="200" width="200" src="/chefimage/{{$data->image}}" alt=""></td>
                    <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
                    <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    
    @include("admin.adminscript")

</body>

</html>