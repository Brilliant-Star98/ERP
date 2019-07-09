@extends('layouts.app')
@section('title')
    <title>Edit Landlord </title>
@endsection
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row justify-content-center animsition">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Landlord</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('editLord')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-details" role="tab" aria-controls="pills-details"
                                                       aria-selected="true">Landlord Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-contacts" role="tab" aria-controls="pills-contacts"
                                                       aria-selected="false">Contacts</a>
                                                </li>
                                                {{--<li class="nav-item">--}}
                                                {{--<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-signatories" role="tab" aria-controls="pills-signatories"--}}
                                                {{--aria-selected="false">Nominated Signatories</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="nav-item">--}}
                                                {{--<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-kin" role="tab" aria-controls="pills-kin"--}}
                                                {{--aria-selected="false">Next of Kin</a>--}}
                                                {{--</li>--}}
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-documents" role="tab" aria-controls="pills-documents"
                                                       aria-selected="false">Documents</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade active show" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label class=" form-control-label">Title</label>
                                                            <input name="landlordId" type="hidden" value="{{$landlord->id}}">
                                                        </div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                <label for="inline-radio1" class="form-check-label pr-2">
                                                                    <input type="radio" id="inline-radio1" name="title_group" value="Mr" class="form-check-input" checked>Mr
                                                                </label>
                                                                <label for="inline-radio2" class="form-check-label pr-2">
                                                                    <input type="radio" id="inline-radio2" name="title_group" value="Mrs" class="form-check-input">Mrs
                                                                </label>
                                                                <label for="inline-radio3" class="form-check-label pr-2">
                                                                    <input type="radio" id="inline-radio3" name="title_group" value="Ms" class="form-check-input">Ms
                                                                </label>
                                                                <label for="inline-radio4" class="form-check-label pr-2">
                                                                    <input type="radio" id="inline-radio4" name="title_group" value="Dr" class="form-check-input">Dr
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Name</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input" name="firstName" placeholder="FirstName" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" value="{{$landlord->first_name}}" required>
                                                            @if ($errors->has('firstName'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('firstName') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input1" name="middleName" placeholder="MiddleName" class="form-control">
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input2" name="surName" placeholder="SurName" class="form-control{{ $errors->has('surName') ? ' is-invalid' : '' }}" value="{{$landlord->sur_name}}" required>
                                                            @if ($errors->has('surName'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('surName') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class="form-control-label">ID/PP Number</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input3" name="idNumber" placeholder="ID Number" class="form-control{{ $errors->has('idNumber') ? ' is-invalid' : '' }}" value="{{$landlord->id_number}}" required>
                                                            @if ($errors->has('idNumber'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('idNumber') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">PIN Number</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input4" name="pinNumber" placeholder="PIN Number" class="form-control{{ $errors->has('pinNumber') ? ' is-invalid' : '' }}" value="{{$landlord->pin_number}}" required>
                                                            @if ($errors->has('pinNumber'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('pinNumber') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">VAT Number</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input5" name="vatNumber" placeholder="VAT Number" class="form-control{{ $errors->has('vatNumber') ? ' is-invalid' : '' }}" value="{{$landlord->vat_number}}" required>
                                                            @if ($errors->has('vatNumber'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('vatNumber') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Phone Number</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input name="primaryCountryCode" type="hidden" value="{{old('primaryCountryCode')}}">
                                                            <input name="primaryPhoneCode" type="hidden" value="{{old('primaryPhoneCode')}}">
                                                            <input id="primaryPhoneNumber" name="primaryPhoneNumber" type="tel" class="form-control{{ $errors->has('primaryPhoneNumber') ? ' is-invalid' : '' }}" value="{{$landlord->primary_phone_number}}" required>
                                                            @if ($errors->has('primaryPhoneNumber'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('primaryPhoneNumber') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Alternate Number</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input name="alternateCountryCode" type="hidden" value="{{old('alternateCountryCode')}}">
                                                            <input name="alternatePhoneCode" type="hidden" value="{{old('alternatePhoneCode')}}">
                                                            <input id="alternatePhoneNumber" name="alternatePhoneNumber" type="tel" class="form-control" value="{{$landlord->alternate_phone_number}}">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Postal Address</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input6" name="poBox" placeholder="P.O.BOX" class="form-control{{ $errors->has('poBox') ? ' is-invalid' : '' }}" value="{{$landlord->po_box}}" required>
                                                            @if ($errors->has('poBox'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('poBox') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <input type="text" id="text-input7" name="postalCode" placeholder="Postal/ZIP Code" class="form-control{{ $errors->has('postalCode') ? ' is-invalid' : '' }}"  value="{{$landlord->postal_code}}" required>
                                                            @if ($errors->has('postalCode'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('postalCode') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        {{--<div class="col col-md-3">--}}
                                                        {{--<input type="text" id="text-input" name="text-input" placeholder="Town, Country" class="form-control">--}}
                                                        {{--</div>--}}
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="textarea-input" class=" form-control-label">Physical Address</label>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <select id="country" name="country" placeholder="Country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{$landlord->country}}">
                                                                <option value="">- Select Country -</option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            {{--<input type="text" id="text-input" name="country" placeholder="Country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" required>--}}
                                                            @if ($errors->has('country'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('country') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <select id="state" name="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" value="{{$landlord->state}}" required>
                                                                {{--                                                            <input type="text" id="text-input" name="town" placeholder="Town" class="form-control{{ $errors->has('town') ? ' is-invalid' : '' }}" required>--}}
                                                            </select>
                                                            @if ($errors->has('state'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('state') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <select id="city" name="city" class="form-control" value="{{$landlord->city}}">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="email-input" class=" form-control-label">Email Address</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{$landlord->email}}" required>
                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                            {{--<small class="help-block form-text">Please enter your email</small>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-documents" role="tabpanel" aria-labelledby="pills-documents-tab">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="file-input" class=" form-control-label">Photos, Signatures and Scanned Identity Documents</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="file" id="file-input" name="fileUpload" class="form-control-file" value="{{old('fileUpload')}}">
                                                            @if ($errors->has('fileUpload'))
                                                                <div class="alert alert-danger col-md-6" role="alert">
                                                                    <strong>{{ $errors->first('fileUpload') }}</strong>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Save
                                                </button>
                                                <a href="{{route('show_landlords')}}" class="btn btn-info btn-sm"><i class="fa fa-ban"></i>Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="/theme/vendor/jquery-3.2.1.min.js"></script>
    <script src="/intl-tel-input-master/build/js/intlTelInput.js"></script>
    <script src="/js/editLandlord.js"></script>
    <script>
        var title = "<?php echo $landlord->title; ?>";
        var country = "<?php echo $landlord->country; ?>";
        var state = "<?php echo $landlord->state; ?>";
        var city = "<?php echo $landlord->city; ?>";
        var ppc = "<?php echo $landlord->primary_phone_code; ?>";
        var apc = "<?php echo $landlord->alternate_phone_code; ?>";
        var pcc = "<?php echo $landlord->primary_country_code; ?>";
        var acc = "<?php echo $landlord->alternate_country_code; ?>";
    </script>
@endsection


