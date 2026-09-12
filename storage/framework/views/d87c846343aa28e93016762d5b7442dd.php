<?php if (! $__env->hasRenderedOnce('41714419-dff0-49b0-b3e2-4af8f5ce2683')): $__env->markAsRenderedOnce('41714419-dff0-49b0-b3e2-4af8f5ce2683');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <style>
        iframe {
            width: 100% !important;
            height: 100% !important;
        }
        .google_map{
            height: 200px;
        }
    </style>
<?php $__env->stopPush(); endif; ?>
<div class="contacts_info mt-5">
    <p><?php echo pagesetting('google_map_editor'); ?></p>
    <div class="google_map w-100">
        <?php echo pagesetting('google_map_key'); ?>

    </div>
</div>
<?php /**PATH C:\inetpub\vhosts\abouhamad.net\portal.Alsadeq-Academy.com\public\resources\views/themes/edulia/pagebuilder/google-map/view.blade.php ENDPATH**/ ?>