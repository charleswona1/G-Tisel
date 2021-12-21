<x-espace-public title="Inscription sur la platforme">
    <div class=" wrapper d-flex justify-content-center align-items-center">
        <x-flash-bag></x-flash-bag>
        <div class="col-lg-6 col-md-8">
            <div class="card p-5">
                <h1 class="mb-5 fw-bold text-primary">{{__('register title')}}</h1>
                {{ html()->form('POST', URL::full())->open() }}

                    <div class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                            <div class="step" data-target="#personnel-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="personnel-part" id="personnel-part-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">{{__('register steppe1')}}</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#account-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="account-part" id="account-part-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">{{__('register steppe2')}}</span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#success-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="success-part" id="success-part-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">{{__('register steppe3')}}</span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content py-5">
                        <!-- your steps content here -->
                            <div id="personnel-part" class="content" role="tabpanel" aria-labelledby="personnel-part-trigger">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register first-name')}}" optionnal="optionnal" class="mb-3 text-primary">
                                            <input class="form-control" id="first-name" type="text" placeholder="{{__('register pfirst-name')}}" name="fisrt_name" />
                                        </x-form-group>
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register last-name')}}" class="mb-3 text-primary">
                                            <input class="form-control" id="last-name" type="text" placeholder="{{__('register plast-name')}}" name="last_name" />
                                        </x-form-group>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register country')}}" class="mb-3 text-primary">
                                            <input class="form-control" list="datalistOptions" id="country" placeholder="{{__('register pcountry')}}" name="country">
                                            <datalist id="datalistOptions">
                                                <option value="Afganistan">
                                                <option value="Belgique">
                                                <option value="Cameroun">
                                            </datalist>
                                        </x-form-group>
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register city')}}" class="mb-3 text-primary">
                                            <input class="form-control" type="text" id="city" placeholder="{{__('register pcity')}}" name="city" />
                                        </x-form-group>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register phone')}}" class="mb-3 text-primary">
                                            <input class="form-control" type="tel" id="phone" placeholder="{{__('register phone')}}" name="phone" />
                                        </x-form-group>
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register postal')}}" class="mb-3 text-primary">
                                            <input class="form-control" type="number" id="codePostale" placeholder="{{__('register ppostal')}}" name="codePostale" />
                                        </x-form-group>
                                    </div>
                                </div>
                               
                                <button type="button" id="next" class="btn btn-primary btn-sm">{{__('register next')}}</button>
                                
                               
                            </div>
                            <div id="account-part" class="content" role="tabpanel" aria-labelledby="account-part-trigger">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register user-name')}}" class="mb-3 text-primary">
                                            <input class="form-control" id="userName" type="text" placeholder="{{__('register puser-name')}}" name="user_name" />
                                        </x-form-group>
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register email')}}" class="mb-3 text-primary">
                                            <input class="form-control" id="email" type="email" placeholder="{{__('register pemail')}}" name="email" />
                                            <small class="text-danger d-none" id="msg-err-email">{{__("register email-error")}}</small>
                                        </x-form-group>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register mdp')}}" class="mb-3 text-primary">
                                            <input class="form-control" id="mdp" type="password" placeholder="{{__('register pmdp')}}" name="password" />
                                        </x-form-group>
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form-group label="{{__('register cmdp')}}" class="mb-3 text-primary">
                                            <input class="form-control" id="cmdp" type="password" placeholder="{{__('register pcmdp')}}"  />
                                            <small class="text-danger d-none" id="msg-err">{{__("register cmdp-error")}}</small>
                                        </x-form-group>
                                    </div>
                                </div>
                                
                                <button type="button" id="prev" class="btn btn-primary btn-sm">{{__('register previous')}}</button>
                                <button type="button" id="next2" class="btn btn-primary btn-sm">{{__('register next')}}</button>
                            </div>
                            <div id="success-part" class="content" role="tabpanel" aria-labelledby="success-part-trigger">
                                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                                    <img src="{{asset('/assets/img/checkmark.png')}}" class="icon-success" alt="" srcset="">
                                    <p class="px-5 fs-4 mt-3">{{__("register success")}}</p>
                                </div>
                                <button type="button" id="prev2" class="btn btn-primary btn-sm">{{__('register previous')}}</button>
                                <button type="submit" class="btn btn-primary btn-sm">{{__('register register')}}</button>
                            </div>
                        </div>
                    </div>
                
                    <x-errors />
                {{ html()->form()->close() }}

            </div>
        </div>
    </div>
    @push('javascripts')
        <script>
            $(document).ready(function () {
                var stepper = new Stepper($('.bs-stepper')[0],
                    {
                        linear: true,
                        animation: true,
                        selectors: {
                            steps: '.step',
                            trigger: '.step-trigger',
                            stepper: '.bs-stepper'
                        }
                    }
                )
                var steppe1Err = [];
                var steppe2Err = [];
                $('#next').click(function(){
                    steppe1Err = validatePersonnalInfo();
                    if (steppe1Err.length == 0) {
                        stepper.next();
                    }
                });
                
                $('#next2').click(function(){
                    steppe2Err = validateAccountInfo();
                    if (steppe2Err.length == 0) {
                        stepper.next();
                    }
                });

                $('#prev,#prev2').click(function(){
                    stepper.previous();
                });

                function validatePersonnalInfo(){
                    var lastName = $('#last-name');
                    var country = $('#country');
                    var city = $('#city');
                    var phone = $('#phone');
                    var codePostale = $('#codePostale');

                    var isValide = [];

                    if (lastName.val() == "") {
                        lastName.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        lastName.css('border','1px solid #ced4da')
                    }
                    if (country.val() == "") {
                        country.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        country.css('border','1px solid #ced4da');
                    }
                    if (city.val() == "") {
                        city.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        city.css('border','1px solid #ced4da');
                    }
                    if (phone.val() == "") {
                        phone.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        phone.css('border','1px solid #ced4da');
                    }
                    if (codePostale.val() == "" || codePostale.val() < 1) {
                        codePostale.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        codePostale.css('border','1px solid #ced4da');
                    }

                    return isValide;
                }

                function validateAccountInfo(){
                    var userName = $('#userName');
                    var email = $('#email');
                    var mdp = $('#mdp');
                    var cmdp = $('#cmdp');
                    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                   

                    var isValide = [];

                    if (userName.val() == "") {
                        userName.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        userName.css('border','1px solid #ced4da')
                    }
                    
                    if (email.val() == "" || !pattern.test(email.val())) {
                        isValide.push(true)
                        email.css('border','2px solid red');
                        $('#msg-err-email').removeClass('d-none');
                    }else{
                        email.css('border','1px solid #ced4da');
                        $('#msg-err-email').addClass('d-none');
                    }

                    if (mdp.val() == "" || mdp.val().length < 6) {
                        mdp.css('border','2px solid red');
                        isValide.push(true)
                    }else{
                        mdp.css('border','1px solid #ced4da');
                    }
                    if (cmdp.val() == "" || mdp.val() != cmdp.val()) {
                        cmdp.css('border','2px solid red');
                        $('#msg-err').removeClass('d-none');
                        isValide.push(true)
                    }else{
                        cmdp.css('border','1px solid #ced4da');
                        $('#msg-err').addClass('d-none');
                    }

                    return isValide;
                }
            })
        </script>
    @endpush
</x-espace-public>