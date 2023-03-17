<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">

        <div class="container my-4 text-white">
            
            <a href="{{ route('info.index') }}" class="btn btn-dark mb-2 px-2 me-3 mt-4 fs-5">View Users</a>

            <div class="card bg-dark p-3 shadow-lg">
                <div class="card-body">
                    
                    <form action="{{ route('info.store') }}" method="post">
                        @method('put')
                        @csrf
                        
                        <!--Page Heading -->
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <h1 class="card-heading text-white text-center">Create User:</h1>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="row justify-content-between">   

                                    <!-- Course ID Input -->
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Preferred Name</label>
                                            <input required class="form-control" placeholder="Preferred Name" type="text" name="pName">
                                        </div>
                                    </div>
                                
                                    <!-- Max Seats Input -->
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">First Name</label>
                                            <input required class="form-control" type="text" placeholder="First Name" field="fName" name="fName" >
                                        </div>
                                    </div>
                                    
                                    <!-- Course Price Input -->
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Last Name</label>
                                            <input required class="form-control" type="text" placeholder="Last Name" field="lName" name="lName" >
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="row justify-content-between">   

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Country</label>
                                            <select class="form-control" placeholder="Country" field="country" name="country"> 
                                                <option value="null">Country</option>
                                                <option value="ca">Canada</option>
                                                <option value="us">United States</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Province</label>
                                            <input type="text" name="prov" class="form-control" placeholder="Province" field="prov" maxlength="2" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">City</label>
                                            <input type="text" name="city" class="form-control" placeholder="City" field="city" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="row justify-content-between">   

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Postal Code</label>
                                            <input type="text" name="pCode" class="form-control" field="pCode" placeholder="X0X-0X0" placeholder="Province" list="provList" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Emergency Contact Name</label>
                                            <input type="text" name="eName" class="form-control" field="eName" placeholder="Emergency Contact Name" >
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Emergency Contact Number</label>
                                            <input type="text" name="ePhone" class="form-control"  onkeyup="formatPhoneNumberOnKey(event, id)" maxlength="12" id="ePhone" field="ePhone" placeholder="XXX-XXX-XXXX"  autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="row justify-content-between">   

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Address 1</label>
                                            <input type="text" name="add1" field="add1" placeholder="Start Typing here..." class="form-control"> 
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Address 2</label>
                                            <input type="text" name="add2" field="add2" placeholder="Start Typing here..." class="form-control"> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">DOB</label>
                                            <input type="Date" name="add1" field="dob" class="form-control" placeholder="xx-xx-xx">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5 col-10 mb-4 mb-md-5">
                                <div class="input-group">
                                    <label class="input-group-text">Email</label>
                                    <input type="text" name="email" field="email" placeholder="something@something.com" class="form-control" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-5 col-10 mb-4 mb-md-5">
                                <div class="input-group">
                                    <label class="input-group-text">Phone Number</label>
                                    <input type="text" name="phone" field="phone" onkeyup="formatPhoneNumberOnKey(event, id)" maxlength="12" id="phone" placeholder="XXX-XXX-XXXX" class="form-control" autocomplete="off"/>
                                </div>    
                            </div>

                        </div>

                        <!-- Submit Button -->
                        <div class="row justify-content-center">
                            <div class="col-10 text-md-end text-center ">
                                <button type="submit" class="btn fs-5 btn-success mb-2 ">Create User</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        
    </x-slot>
    
    </x-app-layout>