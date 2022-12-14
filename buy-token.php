<?php  get_header(); ?>

<div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    
                    <div class="d-lg-none">
                        <a href="#" data-toggle="modal" data-target="#add-wallet" class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x">Add your wallet address before buy <em class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div>
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <span class="card-sub-title text-primary font-mid">Step 1</span>
                                <h4 class="card-title">Choose currency and calculate TWZ tokens price</h4>
                            </div>
                            <div class="card-text">
                                <p>You can buy our TWZ tokens using ETH, BTC, LTC or USD to become part of Our project.</p>
                            </div>
                            
                            <div class="token-currency-choose">
                                <div class="row guttar-15px">
                                    <div class="col-6">
                                        <div class="pay-option">
                                            <input class="pay-option-check" type="radio" id="payeth" name="payOption" checked>
                                            <label class="pay-option-label" for="payeth">
                                                <span class="pay-title"><em class="pay-icon cf cf-eth"></em><span class="pay-cur">ETH</span></span>
                                                <span class="pay-amount">0.000800</span>
                                            </label>
                                        </div>       
                                    </div>
                                    <div class="col-6">
                                        <div class="pay-option">
                                            <input class="pay-option-check" type="radio" id="paylte" name="payOption">
                                            <label class="pay-option-label" for="paylte">
                                                <span class="pay-title"><em class="pay-icon cf cf-ltc"></em><span class="pay-cur">LTC</span></span>
                                                <span class="pay-amount">0.001201</span>
                                            </label>
                                        </div>       
                                    </div>
                                    <div class="col-6">
                                        <div class="pay-option">
                                            <input class="pay-option-check" type="radio" id="paybtc" name="payOption">
                                            <label class="pay-option-label" for="paybtc">
                                                <span class="pay-title"><em class="pay-icon cf cf-btc"></em><span class="pay-cur">BTC</span></span>
                                                <span class="pay-amount">0.000015</span>
                                            </label>
                                        </div>       
                                    </div>
                                    <div class="col-6">
                                        <div class="pay-option">
                                            <input class="pay-option-check" type="radio" id="payusd" name="payOption">
                                            <label class="pay-option-label" for="payusd">
                                                <span class="pay-title"><em class="pay-icon fas fa-dollar-sign"></em><span class="pay-cur">USD</span></span>
                                                <span class="pay-amount">0.25</span>
                                            </label>
                                        </div>       
                                    </div>
                                </div><!-- .row -->
                            </div>
                            <div class="card-head">
                                <span class="card-sub-title text-primary font-mid">Step 2</span>
                                <h4 class="card-title">Amount of contribute</h4>
                            </div>
                            <div class="card-text">
                                <p>Enter your amount, you would like to contribute and calculate the amount of token you will received. The calculator helps to convert required currency to tokens.</p>
                            </div>
                            <div class="token-contribute">
                                <div class="token-calc">
                                    <div class="token-pay-amount">
                                        <input id="token-base-amount" class="input-bordered input-with-hint" type="text" value="1">

                                        <div class="token-pay-currency">
                                           <span class="input-hint input-hint-sap">ETH</span>
                                        </div>
                                    </div>
                                    <div class="token-received">
                                        <div class="token-eq-sign">=</div>
                                        <div class="token-received-amount">
                                            <h5 class="token-amount">123,500.84</h5>
                                            <div class="token-symbol">TWZ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="token-calc-note note note-plane">
                                    <em class="fas fa-times-circle text-danger"></em>
                                    <span class="note-text text-light">0.35 ETH minimum contribution require.</span>
                                </div>
                            </div>
                            
                            <div class="token-bonus-ui">
                                <div class="bonus-bar">
                                    <div class="bonus-base">
                                    <span class="bonus-base-title">Bonus</span>
                                    <span class="bonus-base-amount">On Sale</span>
                                    <span class="bonus-base-percent">20%</span>
                                </div>
                                    <div class="bonus-extra">
                                    <div class="bonus-extra-item active" data-percent="10">
                                        <span class="bonus-extra-amount">0.5 ETH</span>
                                        <span class="bonus-extra-percent">10%</span>
                                    </div>
                                    <div class="bonus-extra-item active" data-percent="20">
                                        <span class="bonus-extra-amount">1 ETH</span>
                                        <span class="bonus-extra-percent">30%</span>
                                    </div>
                                    <div class="bonus-extra-item active" data-percent="20">
                                        <span class="bonus-extra-amount">5 ETH</span>
                                        <span class="bonus-extra-percent">50%</span>
                                    </div>
                                    <div class="bonus-extra-item" data-percent="20">
                                        <span class="bonus-extra-amount">10 ETH</span>
                                        <span class="bonus-extra-percent">70%</span>
                                    </div>
                                    <div class="bonus-extra-item" data-percent="30">
                                        <span class="bonus-extra-amount">20 ETH</span>
                                        <span class="bonus-extra-percent">100%</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="token-overview-wrap">
                                <div class="token-overview">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="token-bonus token-bonus-sale">
                                                <span class="token-overview-title">+ 20% Sale Bonus</span>
                                                <span class="token-overview-value bonus-on-sale">15,000.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="token-bonus token-bonus-amount">
                                                <span class="token-overview-title">+ 30% Amount Bonus</span>
                                                <span class="token-overview-value bonus-on-amount">5,000.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="token-total">
                                                <span class="token-overview-title font-bold">Total TWZ</span>
                                                <span class="token-overview-value token-total-amount text-primary">1,823,500.84</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note note-plane note-danger note-sm pdt-1x pl-0">
                                    <p>Your Contribution will be calculated based on exchange rate at the moment your transaction is confirm.</p>
                                </div>
                            </div>
                            <div class="card-head">
                                <span class="card-sub-title text-primary font-mid">Step 3</span>
                                <h4 class="card-title">Make a payment</h4>
                            </div>
                            <div class="card-text">
                                <p>To get tokens please make a payment. You can send payment directly to our address or you may pay online. Once you paid, you will receive an email about the successfull deposit. </p>
                            </div>
                            <div class="pay-buttons">
                                <div class="pay-button"><a href="#" data-toggle="modal" data-target="#get-pay-address" class="btn btn-light-alt btn-between w-100">Get Address for Payment <em class="ti ti-wallet"></em></a></div>
                                <div class="pay-button-sap">or</div>
                                <div class="pay-button"><a href="#" data-toggle="modal" data-target="#pay-online" class="btn btn-primary btn-between w-100">Make Online Payment <em class="ti ti-arrow-right"></em></a></div>
                            </div>
                            <div class="pay-notes">
                                <div class="note note-plane note-light note-md font-italic">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Tokens will appear in your account after payment successfully made and approved by our team. <br class="d-none d-lg-block"> Please note that, TWZ tokens will distributed end of ICO Token Sales. </p>
                                </div>
                            </div>
                        </div> <!-- .card-innr -->
                    </div> <!-- .content-area -->
                    
                </div><!-- .col -->
                <div class="aside sidebar-right col-lg-4">
                    <div class="d-none d-lg-block">
                        <a href="#" data-toggle="modal" data-target="#add-wallet" class="btn btn-danger btn-xl btn-between w-100">Add your wallet address before buy <em class="ti ti-arrow-right"></em></a>
                        <div class="gaps-3x"></div>
                    </div>
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance">
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">Tokens Balance</h6>
                                    <span class="lead">120,000,000 <span>TWZ</span></span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">Your Contribution</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub">
                                        <span class="lead">2.646</span>
                                        <span class="sub">ETH</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead">1.265</span>
                                        <span class="sub">BTC</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead">6.506</span>
                                        <span class="sub">LTC</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="token-sales card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h5 class="card-title card-title-sm">Pre-Sale Token Sales</h5>
                            </div>
                            <div class="token-rate-wrap row">
                                <div class="token-rate col-md-6 col-lg-12">
                                    <span class="card-sub-title">TWZ Token Price</span>
                                    <h4 class="font-mid text-dark">1 ETH = <span>12500 TWZ</span></h4>
                                </div>
                                <div class="token-rate col-md-6 col-lg-12">
                                    <span class="card-sub-title">Exchange Rate</span>
                                    <span>1 ETH = 196.98 USD = 0.032 BTC</span>
                                </div>
                            </div>
                            <div class="token-bonus-current">
                                <div class="fake-class">
                                    <span class="card-sub-title">Current Bonus</span>
                                    <div class="h3 mb-0">20 %</div>
                                </div>
                                <div class="token-bonus-date">End at <br> 10 Jan, 2019</div>
                            </div>
                        </div>
                        <div class="sap"></div>
                        <div class="card-innr">
                            <div class="card-head">
                                <h5 class="card-title card-title-sm">Token Sales Progress</h5>
                            </div>
                            <ul class="progress-info">
                                <li><span>Raised</span> 2,758 TWZ</li>
                                <li class="text-right"><span>TOTAL</span> 1,500,000 TWZ</li>
                            </ul>
                            <div class="progress-bar">
                                <div class="progress-hcap" data-percent="83">
                                    <div>Hard cap <span>1,400,000</span></div>
                                </div>
                                <div class="progress-scap" data-percent="24">
                                    <div>Soft cap <span>40,000</span></div>
                                </div>
                                <div class="progress-percent" data-percent="28"></div>
                            </div>
                            
                            <span class="card-sub-title mgb-0-5x">Sales END IN</span>
                            <div class="countdown-clock" data-date="2019/02/05"></div>
                        </div>
                        
                    </div>
                </div><!-- .col -->
            </div><!-- .container -->
        </div><!-- .container -->
    </div><!-- .page-content -->

    <?php get_footer(); ?>