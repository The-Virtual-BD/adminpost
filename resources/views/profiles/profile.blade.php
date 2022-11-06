@extends('layouts.app')
@section('title')
    My Profile
@endsection
@section('content')
    <div id="main" class="main-content flex-1 bg-gray-100 pb-24 md:pb-5 ">

        <div class="shadow flex justify-between items-center">
            <div class="p-4">
                <h1 class="font-bold pl-2 text-2xl">My Profile</h1>

            </div>
            <a href="{{route('editprofile')}}" class="mr-4">
                <button class="px-2 py-1 rounded bg-blue-500 text-white">Edit My Profile</button>
            </a>
        </div>

        <div class="container mx-auto py-6">
            <div class="rounded-t bg-white p-4 flex justify-start items-center shadow">
                <div class="mx-6">
                    <img src="{{ asset('images/avatarbig.png') }}" alt="" class="w-24 h-auto">
                </div>
                <div class="font-inter">
                    <h3 class="font-poppins font-medium text-xl">
                        {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}
                    </h3>
                    <p>NIB: {{ Auth::user()->nib }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p class="text-blue font-bold">Suite: #{{ Auth::user()->suite }}</p>
                </div>
            </div>
        </div>

        <div class="container mx-auto bg-white rounded-md p-4 mt-6 shadow">

            <div class="grid sm:grid-cols-6">
                {{-- Contact Informations --}}
                <div class="col-span-2">
                    <div class="grid grid-cols-2 mb-4">
                        <h3 class="font-poppins font-medium text-xl">Contact Information</h3>
                        <a href="{{ route('editprofile') }}" class=" text-sm text-white inline-block">
                            <div class="bg-blue rounded-md w-6 h-6 flex justify-center items-center"><span class="iconify"
                                    data-icon="clarity:pencil-solid"></span></div>
                        </a>
                    </div>
                    <div class="my-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Type of account</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Type of account :</p>
                        <p>{{ Auth::user()->profile->account_type == 1 ? "Personal" : "Business"}}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Name :</p>
                        <p>{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Email :</p>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Phone :</p>
                        <p>{{ Auth::user()->phone }}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Country :</p>
                        <p>{{Auth::user()->profile->country}}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Island :</p>
                        <p>{{Auth::user()->profile->island}}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">STREET/ HOUSE NO :</p>
                        <p>{{Auth::user()->profile->house}}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold ">Address :</p>
                        <p>{{Auth::user()->profile->address}}</p>
                    </div>
                    <div class="mt-4 mb-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Prefered Region</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Prefered Region :</p>
                        <p>{{Auth::user()->profile->region}}</p>
                    </div>

                    <div class="mt-4 mb-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Prefered location</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Prefered location :</p>
                        <p>{{Auth::user()->profile->location}}</p>
                    </div>

                </div>
                @if (Auth::user()->profile->account_type == 2)
                {{-- Business Informations --}}
                <div class="col-span-2">
                    <div class="grid grid-cols-2 mb-4">
                        &nbsp;
                    </div>
                    <div class="my-2">
                        <p class="text-base text-blue uppercase font-bold tracking-widest">Business Information</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">Company Name :</p>
                        <p>{{Auth::user()->profile->company_name}}</p>
                    </div>
                    <div class="grid grid-cols-2 text-sm my-1">
                        <p class="font-bold">TIN No :</p>
                        <p>{{Auth::user()->profile->tin_number}}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
@endsection
