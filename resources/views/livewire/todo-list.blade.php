<div>
    <section class=" gradient-custom-2">
        <div class="container py-5 ">
          <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-12 col-xl-10">

              <div class="card mask-custom">
                <div class="card-body p-4 text-white">
                    <div class="text-center pt-3 pb-2">

                        <h2 class="my-4">Add Task</h2>
                        <form>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Add</span>
                                <input wire:model='name' type="text" class="form-control" placeholder="Add Task Here ......." aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <select wire:model='priority' class="form-select" id="floatingSelectDisabled" >
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
                            <button wire:click.prevent='addNewTask' class="btn btn-info">Create</button>
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
                        <input type="text" class="form-control" placeholder="Task Name" aria-label="Username" aria-describedby="basic-addon1">
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
</div>
