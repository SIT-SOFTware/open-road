<x-app-layout>

    <x-slot name="name">
        Bryan
    </x-slot>
    
    <x-slot name="content">
        <div>
            <div class="border rounded p-3 bg-white text-black">
                {{-- For for creating a new user uses info.store route that save a new stuff instance --}}
                <form action="{{ route('info.store') }}" method="post">
                    @csrf
                    
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
                                {{-- If validation fails this shows what was inputed before --}}
                                :value="@old('pName')"></x-input>
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
                                :value="@old('fName')"></x-input>
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
                                :value="@old('lName')"></x-input>
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
                                :value="@old('phone')"></x-input>
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
                                :value="@old('email')"></x-input>
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
                            :value="@old('add1')"></x-textarea>
                        {{-- Address Line 2 --}}
                        <div class="font-weight-bold"><u>Address Line 2:</u></div>
                        <x-textarea 
                            name="add2" 
                            field="add2" 
                            rows="1" 
                            placeholder="Start Typing here..." 
                            class="w-full mt-6"
                            :value="@old('add2')"></x-textarea>
                        {{-- City --}}
                        <div class="col">
                            <div class="font-weight-bold"><u>City:</u></div>
                            <x-input 
                                type="text" 
                                name="city" field="city" 
                                placeholder="City" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('city')"></x-input>
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
                                :value="@old('prov')"></x-input>
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
                                :value="@old('country')"></x-input>
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
                                :value="@old('pCode')"></x-input>
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
                                :value="@old('eName')"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Emergency Contact Phone:</u></div>
                            <x-input 
                                type="text" 
                                name="ePhone" field="ePhone" 
                                placeholder="XXX-XXX-XXXX" 
                                class="w-full"
                                autocomplete="off"
                                :value="@old('ePhone')"></x-input>
                        </div>
                    </div>
                    <x-button>Save Information</x-button>
                </form>
            </div>
        </div>
    </x-slot>
    
    </x-app-layout>