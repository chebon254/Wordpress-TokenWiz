<?php  get_header(); ?>
    
<div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 main-content">
                    <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Activity</h4>
                            </div>
                            <div class="card-text">
                                <p>Here is your recent activities. You can clear your log  or disable tracking option from security settings. </p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <table class="data-table dt-init activity-table" data-items="10">
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col activity-time"><span>Date</span></th>
                                        <th class="data-col activity-device"><span>Device</span></th>
                                        <th class="data-col activity-browser"><span>Browser</span></th>
                                        <th class="data-col activity-ip"><span>IP</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">08-16-2018 09:04PM</td>
                                        <td class="data-col activity-device">Mac</td>
                                        <td class="data-col activity-browser">Chrome</td>
                                        <td class="data-col activity-ip">198.51.100.0</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">08-02-2018 11:09PM</td>
                                        <td class="data-col activity-device">Windows</td>
                                        <td class="data-col activity-browser">Firefox</td>
                                        <td class="data-col activity-ip">198.51.93.0</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">07-21-2018 04:53AM</td>
                                        <td class="data-col activity-device">Android</td>
                                        <td class="data-col activity-browser">Chrome</td>
                                        <td class="data-col activity-ip">198.51.51.21</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">07-11-2018 02:06PM</td>
                                        <td class="data-col activity-device">Linux</td>
                                        <td class="data-col activity-browser">Opera</td>
                                        <td class="data-col activity-ip">198.31.170.21</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">06-28-2018 11:09PM</td>
                                        <td class="data-col activity-device">Windows</td>
                                        <td class="data-col activity-browser">Firefox</td>
                                        <td class="data-col activity-ip">198.51.93.0</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">06-13-2018 04:53AM</td>
                                        <td class="data-col activity-device">Android</td>
                                        <td class="data-col activity-browser">Chrome</td>
                                        <td class="data-col activity-ip">198.51.51.21</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">05-24-2018 11:09PM</td>
                                        <td class="data-col activity-device">Windows</td>
                                        <td class="data-col activity-browser">Firefox</td>
                                        <td class="data-col activity-ip">198.51.93.0</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">05-09-2018 04:53AM</td>
                                        <td class="data-col activity-device">Android</td>
                                        <td class="data-col activity-browser">Chrome</td>
                                        <td class="data-col activity-ip">198.51.51.21</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">04-22-2018 02:06PM</td>
                                        <td class="data-col activity-device">Linux</td>
                                        <td class="data-col activity-browser">Opera</td>
                                        <td class="data-col activity-ip">198.31.170.21</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
                <div class="col-lg-4 aside sidebar-right">
                    <div class="account-info card">
                        <div class="card-innr">
                            <h6 class="card-title card-title-sm">Your Account Status</h6>
                            <ul class="btn-grp">
                                <li><a href="#" class="btn btn-auto btn-xs btn-success">Email Verified</a></li>
                                <li><a href="#" class="btn btn-auto btn-xs btn-warning">KYC Pending</a></li>
                            </ul>
                            <div class="gaps-2-5x"></div>
                            <h6 class="card-title card-title-sm">Receiving Wallet</h6>
                            <div class="d-flex justify-content-between">
                                <span><span>0x39deb3.....e2ac64rd</span> <em class="fas fa-info-circle text-exlight" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 TWZ"></em></span>
                                <a href="#" data-toggle="modal" data-target="#edit-wallet" class="link link-ucap">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="referral-info card">
                        <div class="card-innr">
                            <h6 class="card-title card-title-sm">Earn with Referral</h6>
                            <p class=" pdb-0-5x">Invite your friends &amp; family and receive a <strong><span class="text-primary">bonus - 15%</span> of the value of contribution.</strong></p>
                            <div class="copy-wrap mgb-0-5x">
                                <span class="copy-feedback"></span>
                                <em class="fas fa-link"></em>
                                <input type="text" class="copy-address" value="https://demo.themenio.com/ico?ref=7d264f90653733592" disabled>
                                <button class="copy-trigger copy-clipboard" data-clipboard-text="https://demo.themenio.com/ico?ref=7d264f90653733592"><em class="ti ti-files"></em></button>
                            </div><!-- .copy-wrap -->
                        </div>
                    </div>
                    <div class="kyc-info card">
                        <div class="card-innr">
                            <h6 class="card-title card-title-sm">Identity Verification - KYC</h6>
                            <p>To comply with regulation, participant will have to go through indentity verification.</p>
                            <p class="lead text-light pdb-0-5x">You have not submitted your KYC application to verify your indentity.</p>
                            <a href="#" class="btn btn-primary btn-block">Click to Proceed</a>
                            <h6 class="kyc-alert text-danger">* KYC verification required for purchase token</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .page-content -->

    <?php get_footer(); ?>