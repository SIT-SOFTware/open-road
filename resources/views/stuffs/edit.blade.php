<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
   
    <x-slot name="content">

        <div class="container my-4 text-white">
            
            <a href="{{ route('info.index') }}" class="btn btn-dark mb-2 px-2 me-3 mt-4 fs-5">View Users</a>

            <div class="card bg-dark p-3 shadow-lg">
                <div class="card-body">
                    
                    <form action="{{ route('info.update', $stuff) }}" method="post">
                        @method('put')
                        @csrf
                        
                        <!--Page Heading -->
                        <div class="row justify-content-center">
                            <div class="col-10 mb-2">
                                <h1 class="card-heading text-white text-center">Editing User: &nbsp;{{ $stuff->STUFF_FNAME}}</h1>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="row justify-content-between">   

                                    <!-- Course ID Input -->
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Preferred Name</label>
                                            <input required class="form-control" type="text" value="{{ @Old('pName', $stuff->STUFF_PNAME) }}" name="pName">
                                        </div>
                                    </div>
                                
                                    <!-- Max Seats Input -->
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">First Name</label>
                                            <input required class="form-control" type="text" field="fName" value="{{ @Old('fName', $stuff->STUFF_FNAME) }}" name="fName" >
                                        </div>
                                    </div>
                                    
                                    <!-- Course Price Input -->
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Last Name</label>
                                            <input required class="form-control" type="text" field="lName" value="{{ @Old('lName', $stuff->STUFF_LNAME)}}" name="lName" >
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
                                            <input type="text" name="country" class="form-control" field="country" autocomplete="off" value="{{ @Old('country', $stuff->STUFF_COUNTRY) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Province</label>
                                            <input type="text" name="prov" class="form-control" field="prov" maxlength="2" autocomplete="off" value="{{ @Old('prov', $stuff->STUFF_PR_ST) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">City</label>
                                            <input type="text" name="city" class="form-control" field="city" autocomplete="off" value="{{ @Old('city', $stuff->STUFF_CITY) }}">
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
                                            <input type="text" name="pCode" class="form-control" field="pCode" placeholder="X0X-0X0"  autocomplete="off" value="{{ @Old('pCode', $stuff->STUFF_POST_ZIP) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Emergency Contact Name</label>
                                            <input type="text" name="eName" class="form-control" field="eName" placeholder="Emergency Contact Name" autocomplete="off"value="{{ @Old('eName', $stuff->EMERGCONT_NAME) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Emergency Contact Number</label>
                                            <input type="text" name="ePhone" class="form-control" field="ePhone" placeholder="XXX-XXX-XXXX"  autocomplete="off" value="{{ @Old('ePhone', $stuff->EMERGCONT_PHONE) }}">
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
                                            <input type="text" name="add1" field="add1" placeholder="Start Typing here..." class="form-control" value="{{ @Old('add1', $stuff->STUFF_ADDR1) }}"> 
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">Address 2</label>
                                            <input type="text" name="add2" field="add2" placeholder="Start Typing here..." class="form-control" value="{{ @Old('add2', $stuff->STUFF_ADDR2) }}"> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 col-12 mb-4 mb-md-5">
                                        <div class="input-group">
                                            <label class="input-group-text">DOB</label>
                                            <input type="Date" name="add1" field="dob" class="form-control" placeholder="xx-xx-xx" value="{{ Str::limit(@Old('country', $stuff->STUFF_DOB, 10, '')) }}">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-5 col-10 mb-4 mb-md-5">
                                <div class="input-group">
                                    <label class="input-group-text">Email</label>
                                    <input type="text" name="email" field="email" placeholder="something@something.com" class="form-control" autocomplete="off" value="{{ $stuff->STUFF_EMAIL }}"/>
                                </div>
                            </div>
                            <div class="col-md-5 col-10 mb-4 mb-md-5">
                                <div class="input-group">
                                    <label class="input-group-text">Phone Number</label>
                                    <input type="text" name="phone" field="phone" placeholder="XXX-XXX-XXXX" class="form-control" autocomplete="off" value="{{ $stuff->STUFF_PHONE }}"/>
                                </div>    
                            </div>

                        </div>

                        <!-- Save Button -->
                        <div class="d-lg-inline text-center mt-4 float-lg-end">
                            <button class="btn btn-success px-2 me-3 fs-5">Save Changes</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </x-slot>
    
</x-app-layout>