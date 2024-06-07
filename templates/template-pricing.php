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
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$<?php echo $prices->free_trial; ?><small
                        class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                </ul>
                <a href="https://buy.stripe.com/test_5kA17M0HDel46VW5kk" target="_blank" class="w-100 btn btn-lg btn-outline-primary">Try For Free</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Pro</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$<?php echo $prices->monthly; ?><small
                        class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                </ul>
                <a target="_blank" class="w-100 btn btn-lg btn-primary"  href='https://buy.stripe.com/test_5kA2bQaidgtc5RSdQR'>Monthly</a>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
                <h4 class="my-0 fw-normal">Enterprise</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$<?php echo $prices->yearly; ?><small
                        class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                </ul>
                <a target="_blank" class="w-100 btn btn-lg btn-primary"  href='https://buy.stripe.com/test_14k03Icql6SCeoo7su'>Yearly</a>
            </div>
        </div>
    </div>
</div>