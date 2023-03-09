<x-app-layout>
    
<!-- This page is not done :) -->

    <x-slot name="content">
        <div>
            <form action="{{ route('admin.classes.update', $class) }}" class="border rounded p-3 bg-grey text-black" method="post">
                @method('put')
                @CSRF
                    <a href="" style="font-size: 2.0rem;">Edit {{ $class->CLASS_NAME }}</a>
                    <div class="row">
                        <!-- Class ID Edit -->
                        <div class="col">
                            <div class="font-weight-bold"><u>Class ID:</u></div>
                            <x-input 
                            type="number" 
                            name="classID" 
                            placeholder="Class ID"
                            field="classID"
                            :value="@Old('classID', $class->id)"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Class Name:</u></div>
                            <x-input 
                            type="text" 
                            name="className" 
                            placeholder="Class Name"
                            field="className"
                            :value="@Old('className', $class->CLASS_NAME)"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Class Documents:</u></div>
                            <div>Docs</div>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Class Max Seats:</u></div>
                            <x-input 
                            type="number" 
                            name="classMax" 
                            placeholder="Max Seats"
                            field="classMax"
                            :value="@Old('classMax', $class->CLASS_MAX_SEATS)"></x-input>
                        </div>
                        <div class="col">
                            <div class="font-weight-bold"><u>Class Fee:</u></div>
                            <x-input 
                            type="number" 
                            name="classFee" 
                            placeholder="Class Fee"
                            field="classFee"
                            :value="@Old('classFee', $class->CLASS_FEE)"></x-input>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save Class</button>
            </form>
        </div>
    </x-slot>
    
    </x-app-layout>