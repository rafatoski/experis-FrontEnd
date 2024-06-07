<?php
/**
 * Template part for displaying pricing table.
 *
 * @package Experis_Front-End
 */

$prices = load_prices_from_json();
?>
 <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
        <div class="card mb-4 rounded-3 ">
            <div class="card-header py-3 bg-light">
                <h4 class="my-0 fw-normal">Free Trial</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$<?php echo $prices->free_trial; ?><small
                        class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>One-month trial</li>
                    <li>Watch up to 1 video per day</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                    <li><hr class="lh-1 mx-auto w-50"></li>
                    <li><hr class="lh-1 mx-auto w-50"></li>
                    <li><hr class="lh-1 mx-auto w-50"></li>
                </ul>
                <a href="https://buy.stripe.com/test_5kA17M0HDel46VW5kk" target="_blank" class="w-100 btn btn-lg btn-outline-primary px-4  rounded-pill">Try For Free</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Standard</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$<?php echo $prices->monthly; ?><small
                        class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Monthly Subscription</li>
                    <li>Unlimited video views per day</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                    <li><hr class="lh-1 mx-auto w-50"></li>
                    <li><hr class="lh-1 mx-auto w-50"></li>
                    <li><hr class="lh-1 mx-auto w-50"></li>
                </ul>
                <a target="_blank" class="w-100 btn btn-lg btn-primary px-4  rounded-pill"  href='https://buy.stripe.com/test_5kA2bQaidgtc5RSdQR'>Monthly</a>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
                <h4 class="my-0 fw-normal">Clever</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$<?php echo $prices->yearly; ?><small
                        class="text-body-secondary fw-light">/yr</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Annual Subscription</li>
                    <li>Unlimited video views per day</li>
                    <li>Exclusive premium videos</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                    <li>Discounted price</li>
                </ul>
                <a target="_blank" class="w-100 btn btn-lg btn-primary px-4  rounded-pill"  href='https://buy.stripe.com/test_14k03Icql6SCeoo7su'>Yearly</a>
            </div>
        </div>
    </div>
</div>