<div>
    
    <div x-data="{ selectedRecords: <?php if ((object) ('selectedRecords') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selectedRecords'->value()); ?>')<?php echo e('selectedRecords'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selectedRecords'); ?>')<?php endif; ?> }">
        <?php echo e($this->table); ?>

    </div>

</div>
<?php /**PATH C:\xampp\htdocs\label\resources\views/livewire/addresses/address-creation.blade.php ENDPATH**/ ?>