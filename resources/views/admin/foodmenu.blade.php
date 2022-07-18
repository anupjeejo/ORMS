<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <br>
    @include("admin.navbar")
    <br>
    <section align="left">
        <div>
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <ul>
                        <li>
                            <h2><em><u>Add Menu Item</u></em></h2>
                            <p>Enter details of new menu item</p>
                        </li>
                    </ul>

                    <div>
                        <ul>
                            <li><label>
                                    Title:
                                </label>
                                <div>
                                    <span> <input style="color:blue" type="text" name="title"
                                            placeholder="Write a Title" required />
                                </div>
                            </li>
                    </div>

                    <div>
                        <ul>
                            <li><label>
                                    Price:
                                </label>
                                <div>
                                    <span> <input style="color:blue" type="num" name="price" placeholder="Enter Price"
                                            required />
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

                    <div>
                        <ul>
                            <li><label>
                                    Description:
                                </label>
                                <div>
                                    <span> <input style="color:blue" type="text" name="description"
                                            placeholder="Write some description" required />
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
        <h3><u>Menu Items</u></h3>

        <table class="content-table">
            <thead>
                <tr>
                    <th style="padding: 5px">Food Name</th>
                    <th style="padding: 5px">Price</th>
                    <th style="padding: 5px">Description</th>
                    <th style="padding: 5px">Image</th>
                    <th style="padding: 5px">Action-1</th>
                    <th style="padding: 5px">Action-2</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr class="active-row">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td width="10px">{{$data->description}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </section>
    </div>

    @include("admin.adminscript")

</body>

</html>