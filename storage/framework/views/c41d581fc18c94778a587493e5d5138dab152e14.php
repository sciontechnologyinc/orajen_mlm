<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="per-product">
                        <div class="perproduct-img">
                            <img src="/images/default-product.png" alt="">
                        </div>
                        <div class="perproduct-title">ORAJEN Soap</div>
                        <div class="perproduct-desc">This is ORAJEN's SOAP skin whitening.</div>
                        <div class="perproduct-price">Php 200.00</div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="per-product">
                        <div class="perproduct-img">
                            <img src="/images/default-product.png" alt="">
                        </div>
                        <div class="perproduct-title">ORAJEN Soap</div>
                        <div class="perproduct-desc">This is ORAJEN's SOAP skin whitening.</div>
                        <div class="perproduct-price">Php 200.00</div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>