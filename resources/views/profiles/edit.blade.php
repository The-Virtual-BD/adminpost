@extends('layouts.app')
@section('title')
    Edit My Profile
@endsection
@section('content')
    <div id="main" class="main-content flex-1 bg-gray-100 pb-24 md:pb-5 ">

        <div class="shadow flex justify-between items-center">
            <div class="p-4">
                <h1 class="font-bold pl-2 text-2xl">Edit My Profile</h1>

            </div>
            <a href="{{route('myprofile')}}" class="mr-4">
                <button class="px-2 py-1 rounded bg-blue-500 text-white">My Profile</button>
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

        <div class="container mx-auto bg-white rounded-md p-4 mt-2 shadow">
            <form action="{{ route('updateprofile', Auth::user()->id) }}" method="POST">
                @csrf
                <div class="">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-6">
                            <label for="type" class="block text-sm font-bold font-poppins">TYPE OF ACCOUNT</label>
                            <select id="type" name="type"
                                class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <option value="1" {{ Auth::user()->profile->account_type == 1 ? 'selected' : '' }}>
                                    Personal</option>
                                <option value="2" {{ Auth::user()->profile->account_type == 2 ? 'selected' : '' }}>
                                    Business</option>
                            </select>
                        </div>
                        {{-- Company details --}}
                        <div class="col-span-6 sm:col-span-3 companydetails hidden">
                            <label for="companyname" class="block text-sm font-bold font-poppins">Company
                                name</label>
                            <input type="text" name="companyname" id="companyname"
                                value="{{ Auth::user()->profile->company_name ?? '' }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-3 companydetails hidden">
                            <label for="tin" class="block text-sm font-bold font-poppins">TIN number</label>
                            <input type="text" name="tin" id="tin"
                                value="{{ Auth::user()->profile->tin_number ?? '' }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm">
                        </div>
                        {{-- Company details end --}}

                        <div class="col-span-6 sm:col-span-3">
                            <label for="firstname" class="block text-sm font-bold font-poppins">First
                                name</label>
                            <input type="text" name="firstname" id="firstname" value="{{ Auth::user()->firstname }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                                required>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="lastname" class="block text-sm font-bold font-poppins">Last name</label>
                            <input type="text" name="lastname" id="lastname" value="{{ Auth::user()->lastname }}"
                                class=" block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm"
                                required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone" class="block text-sm font-bold font-poppins">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}"
                                class=" block w-full rounded-md bg-lgray focus:bg-white focus:ring-0 border-gray shadow-sm sm:text-sm"
                                required readonly>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block text-sm font-bold font-poppins">Email</label>
                            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                                class=" block w-full rounded-md bg-lgray focus:bg-white focus:ring-0 border-gray shadow-sm sm:text-sm"
                                required readonly>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-bold font-poppins">Country</label>
                            <select id="country" name="country"
                                class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <x-country></x-country>
                            </select>
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="island" class="block text-sm font-bold font-poppins">Island</label>
                            <select id="island" name="island"
                                class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                                <x-island></x-island>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="about" class="block text-sm font-bold font-poppins">Address</label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="1"
                                    class="mt-1 block w-full rounded-md bg-lblue focus:bg-white focus:ring-0 border-blue shadow-sm sm:text-sm">{{ Auth::user()->profile->address ?? '' }}</textarea>
                            </div>
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="house" class="block text-sm font-bold font-poppins">Street/House
                                No.</label>
                            <input type="text" name="house" id="house"
                                value="{{ Auth::user()->profile->house ?? '' }}"
                                class="block w-full rounded-md border-blue bg-lblue focus:bg-white focus:ring-0 sm:text-sm"
                                required>
                        </div>
                    </div>
                </div>
                <div class="py-3 text-right mt-4">

                    <a href="{{ route('myprofile') }}"
                        class="px-2 py-1 rounded bg-red-500 text-white hover:scale-105 focus:outline-none transition duration-150 ease-in-out">Cancel</a>
                    <x-primary-button>
                        {{ __('Update Information') }}
                    </x-primary-button>
                </div>
            </form>
        </div>


        <div class="container mx-auto bg-white rounded-md p-4 mt-2 shadow">
            <form action="{{ route('updateprofile', Auth::user()->id) }}" method="POST">
                @csrf
                <div class="">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-6">
                            <h3 class="font-poppins font-medium text-xl mb-2 uppercase text-blue">Password Reset</h3>
                        </div>
                        <div class="col-span-6">
                            <label for="password" class="block text-sm font-bold font-poppins">New pasword</label>
                            <input id="password" name="password" type="password"class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                        </div>
                        <div class="col-span-6">
                            <label for="password_confirmation" class="block text-sm font-bold font-poppins">New pasword</label>
                            <input id="password_confirmation" name="password_confirmation" type="password"class=" block w-full rounded-md border border-blue bg-lblue focus:bg-white focus:ring-0 py-2 px-3 shadow-sm sm:text-sm">
                        </div>
                    </div>
                </div>
                <div class="py-3 text-right mt-4">
                    <x-primary-button>
                        {{ __('Update Password') }}
                    </x-primary-button>
                </div>
            </form>
        </div>


    </div>
@endsection
