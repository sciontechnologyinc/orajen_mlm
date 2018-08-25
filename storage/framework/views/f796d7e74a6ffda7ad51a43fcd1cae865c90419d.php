<?php if(Route::has('login')): ?>
    <div class="top-right links">
        <?php if(auth()->guard()->check()): ?>
        
            <div class='title'>
                <img src='<?php echo e(url('/img/logo.png')); ?>'> 
                <span>ORAJEN MARKETING CORP</span>
            </div>
            <div class='link'>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            </div>
        <?php else: ?>
            
            <div class='title'>
                <img src='<?php echo e(url('/img/logo.png')); ?>'> 
                <span>ORAJEN MARKETING CORP</span>
            </div>

            <header-auth-button></header-auth-button>

        <?php endif; ?>
    </div>
<?php endif; ?>