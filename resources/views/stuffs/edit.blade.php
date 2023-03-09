<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
   
    <x-slot name="content">
        <div>
            <div class="border rounded p-3 bg-white text-black">
                {{-- Form for Editing a user, uses method Put not Post goes to route for updating information --}}
                <form action="{{ route('info.update', $stuff) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        {{-- Prefered Name --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Prefered Name:</u></div>
                            <x-input 
                                type="text" 
                                name="pName" field="pName" 
                                placeholder="Prefered Name" 
                                class="w-full"
                                autocomplete="off"
                                {{-- This shows the data already in the table row or the unverified data--}}
                                :value="@old('pName', $stuff->STUFF_PNAME)"></x-input>
                        </div>
                        {{-- First Name --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>First Name:</u></div>
                            <x-input 
                                type="text" 
                                name="fName" field="fName" 
                                placeholder="First Name" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('fName', $stuff->STUFF_FNAME)"></x-input>
                        </div>
                        {{-- Last Name --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Last Name:</u></div>
                            <x-input 
                                type="text" 
                                name="lName" field="lName" 
                                placeholder="Last Name" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('lName', $stuff->STUFF_LNAME)"></x-input>
                        </div>
                        {{-- Phone Number --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Phone Number:</u></div>
                            <x-input 
                                type="text" 
                                name="phone" field="phone" 
                                placeholder="XXX-XXX-XXXX" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('phone', $stuff->STUFF_PHONE)"></x-input>
                        </div>
                        {{-- Email --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Email:</u></div>
                            <x-input 
                                type="text" 
                                name="email" field="email" 
                                placeholder="something@something.com" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('email', $stuff->STUFF_EMAIL)"></x-input>
                        </div>
                        {{-- DOB --}}
                        {{-- <div class="col">
                            <div class="font-weight-bold"><u>Date of Birth:</u></div>
                            <input type="date" id="dob" name="dob">
                        </div> --}}
                        {{-- Address Line 1 --}}
                        <div class="font-weight-bold"><u>Address Line 1:</u></div>
                        <x-textarea 
                            name="add1" 
                            field="add1" 
                            rows="1" 
                            placeholder="Start Typing here..." 
                            class="w-full mt-6"
                            :value="@old('add1', $stuff->STUFF_ADDR1)"></x-textarea>
                        {{-- Address Line 2 --}}
                        <div class="font-weight-bold"><u>Address Line 2:</u></div>
                        <x-textarea 
                            name="add2" 
                            field="add2" 
                            rows="1" 
                            placeholder="Start Typing here..." 
                            class="w-full mt-6"
                            :value="@old('add2', $stuff->STUFF_ADDR2)"></x-textarea>
                        {{-- City --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>City:</u></div>
                            <x-input 
                                type="text" 
                                name="city" field="city" 
                                placeholder="City" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('city', $stuff->STUFF_CITY)"></x-input>
                        </div>
                        {{-- Province --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Province / State:</u></div>
                            <x-input 
                                type="text" 
                                name="prov" field="prov" 
                                placeholder="PV" 
                                class="w-full"
                                maxlength="2"
                                autocomplete="off"
                                :value="@old('prov', $stuff->STUFF_PR_ST)"></x-input>
                        </div>
                        {{-- City --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Country:</u></div>
                            <x-input 
                                type="text" 
                                name="country" field="country" 
                                placeholder="Country" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('country', $stuff->STUFF_COUNTRY)"></x-input>
                        </div>
                        {{-- Postal Code --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Postal Code:</u></div>
                            <x-input 
                                type="text" 
                                name="pCode" field="pCode" 
                                placeholder="X0X-0X0" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('pCode', $stuff->STUFF_POST_ZIP)"></x-input>
                        </div>
                        {{-- Emergency Contact Name --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>Emergency Contact Name:</u></div>
                            <x-input 
                                type="text" 
                                name="eName" field="eName" 
                                placeholder="Emergency Contact Name" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('eName', $stuff->EMERGCONT_NAME)"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Emergency Contact Phone:</u></div>
                            <x-input 
                                type="text" 
                                name="ePhone" field="ePhone" 
                                placeholder="XXX-XXX-XXXX" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('ePhone', $stuff->EMERGCONT_PHONE)"></x-input>
                        </div>
                    </div>
                    <br/>
                    {{-- Submit Button --}}
                    <x-button>Update Information</x-button>
                </form>
            </div>
        </div>
    </x-slot>
    
    </x-app-layout>