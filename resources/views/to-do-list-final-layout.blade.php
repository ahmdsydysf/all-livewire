<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #7e40f6;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right,
                    rgba(126, 64, 246, 1),
                    rgba(80, 139, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right,
                    rgba(126, 64, 246, 1),
                    rgba(80, 139, 252, 1));
        }

        .mask-custom {
            background: rgba(24, 24, 16, 0.2);
            border-radius: 2em;
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 255, 255, 0.05);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }
    </style>
</head>

<body class="antialiased">
    <section class=" gradient-custom-2">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-md-12 col-xl-10">

                    <div class="card mask-custom">
                        <div class="card-body p-4 text-white">
                            <div class="text-center pt-3 pb-2">

                                <h2 class="my-4">Add Task</h2>
                                <form action="">


                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Add</span>
                                        <input type="text" class="form-control" placeholder="Add Task Here ......."
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="input-group mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelectDisabled">
                                                <option selected>select One</option>
                                                <option value="Low">Low</option>
                                                <option value="Middle">Middle</option>
                                                <option value="High">High</option>
                                            </select>
                                            <label for="floatingSelectDisabled">Select Priority</label>
                                        </div>
                                    </div>
                                    @error('priority')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <button class="btn btn-info">Create</button>
                                </form>
                            </div>

                            <div class="text-center pt-3 pb-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                                    alt="Check" width="60">
                                <h2 class="my-4">Task List</h2>
                            </div>
                            <div class="text-center pt-3 pb-2">

                                <h2 class="my-4">Search</h2>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Search</span>
                                    <input type="text" class="form-control" placeholder="Task Name"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <table class="table text-white mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Status</th>
                                        {{-- <th scope="col">Team Member</th> --}}
                                        <th scope="col">Task</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="fw-normal">
                                        <th class="bg-info">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </th>

                                        {{-- <th>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: auto;">
                                            <span class="ms-2">Alice Mayer</span>
                                        </th> --}}
                                        <td class="align-middle">
                                            <span>Call Sam For payments</span>
                                        </td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-danger">Delete</button>
                                            <button class="btn btn-success">Edit</button>
                                        </td>
                                    </tr>
                                    <tr class="fw-normal">
                                        <th class="bg-info">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </th>
                                        {{-- <th>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: auto;">
                                            <span class="ms-2">Kate Moss</span>
                                        </th> --}}
                                        <td class="align-middle">Make payment to Bluedart</td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-danger">Delete</button>
                                            <button class="btn btn-success">Edit</button>
                                        </td>
                                    </tr>
                                    <tr class="fw-normal">
                                        <th class="bg-info">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </th>
                                        {{-- <th>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: auto;">
                                            <span class="ms-2">Danny McChain</span>
                                        </th> --}}
                                        <td class="align-middle">Office rent</td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span class="badge bg-warning">Middle priority</span></h6>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-danger">Delete</button>
                                            <button class="btn btn-success">Edit</button>
                                        </td>
                                    </tr>
                                    <tr class="fw-normal">
                                        <th class="bg-info">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </th>
                                        {{-- <th>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: auto;">
                                            <span class="ms-2">Alexa Chung</span>
                                        </th> --}}
                                        <td class="align-middle">Office grocery shopping</td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-danger">Delete</button>
                                            <button class="btn btn-success">Edit</button>
                                        </td>
                                    </tr>
                                    <tr class="fw-normal">
                                        <th class="bg-info">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </th>
                                        {{-- <th class="border-0">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: auto;">
                                            <span class="ms-2">Ben Smith</span>
                                        </th> --}}
                                        <td class="border-0 align-middle">Ask for Lunch to Clients</td>
                                        <td class="border-0 align-middle">
                                            <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                                        </td>
                                        <td class="border-0 align-middle">
                                            <button class="btn btn-danger">Delete</button>
                                            <button class="btn btn-success">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

</body>

</html>
