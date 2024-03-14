<section class="upper-section p-5">
    <div class="container">
        <h1 class="mb-4">Lorem Ipsum</h1>
        <p class="text-center">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et <br/>
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et
        </p>
        <div class="section-content m-5">
            <div class="d-flex justify-content-center">
                <div class="donation-form p-5">
                    <div class="donation-form-header">
                        <p class="header m-0">Lorem ipsum</p>
                        <p class="current m-0">$413,078</p>
                        <p class="total m-0">of $4 million raised</p>
                    </div>
                    <div class="m-5"></div>
                    <div class="donation-form-progress">
                        <div class="row justify-content-md-center">
                            <div class="col-8">
                                <div class="progress">
                                    <div class="progress-bar bg-info w-25"
                                        role="progressbar"
                                        aria-valuenow="25"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-5"></div>
                    <div class="donation-form-amount py-0 px-5">
                        <div class="row justify-content-md-center">
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="10,000.00">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="donation-form-amount py-3 px-5">
                        <p class="description text-center">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor <br/>
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et <br/>
                            justo duo dolores et ea rebum. Stet clita
                        </p>
                    </div>
                    <div class="donation-form-payment-method text-left mt-5">
                        <h2>Select payment method</h2>
                        <hr/>
                    </div>
                    <div class="donation-form-payment-form text-left">
                        <div class="form-check form-check-inline mt-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioPaypal" value="paypal">
                                <label class="ml-2 form-check-label" for="inlineRadioPaypal">Paypal</label>
                            </div>
                            <div class="form-check form-check-inline ml-5">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioOfflineDonations" value="offline_donations">
                                <label class="ml-2 form-check-label" for="inlineRadioOfflineDonations">Offline donation</label>
                            </div>
                        </div>
                    </div>
                    <div class="donation-form-personal-info text-left mt-5">
                        <h2>Personal info</h2>
                        <hr/>
                    </div>
                    <div class="donation-form-personal-info-form text-left mt-5">
                        <?= do_shortcode('[contact-form-7 id="0b1c9ca" title="Personal Information"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>